<?php
/**
 * Copyright 2010-2013 Amazon.com, Inc. or its affiliates. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License").
 * You may not use this file except in compliance with the License.
 * A copy of the License is located at
 *
 * http://aws.amazon.com/apache2.0
 *
 * or in the "license" file accompanying this file. This file is distributed
 * on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either
 * express or implied. See the License for the specific language governing
 * permissions and limitations under the License.
 */

namespace Aws\Tests\S3;

use Aws\S3\ResumableDownload;
use Guzzle\Http\Message\Response;
use Guzzle\Http\EntityBody;
use Guzzle\Plugin\Mock\MockPlugin;

/**
 * @covers Aws\S3\ResumableDownload
 */
class ResumableDownloadTest extends \Guzzle\Tests\GuzzleTestCase
{
    public function testHasEvents()
    {
        $this->assertNotEmpty(ResumableDownload::getAllEvents());
    }

    /**
     * @expectedException PHPUnit_Framework_Error_Warning
     */
    public function testEnsuresFilesCanBeOpened()
    {
        $client = $this->getServiceBuilder()->get('s3');
        new ResumableDownload($client, 'test', 'key', '/does/not/exist/foo');
    }

    public function testHasMoreDeterminesBasedOnTargetLengthVsTotalLength()
    {
        $client = $this->getServiceBuilder()->get('s3');
        $this->setMockResponse($client, array(
            // HEAD response
            new Response(200, array('Content-Length' => 10))
        ));
        $target = EntityBody::factory();
        $resumable = new ResumableDownload($client, 'test', 'key', $target);
        $this->assertTrue($resumable->hasMore());
        $target->write('testtestte');
        $this->assertFalse($resumable->hasMore());
    }

    public function testDownloadsUsingRangeRequests()
    {
        $client = $this->getServiceBuilder()->get('s3', true);
        $mock = new MockPlugin();
        $client->addSubscriber($mock);
        $mock->addResponse(new Response(200, array('Content-Length' => 15)));
        $eventCount = count($client->getEventDispatcher()->getListeners());

        $target = EntityBody::factory();
        $resumable = new ResumableDownload($client, 'test', 'key', $target, array('chunk_size' => 5));

        $events = array();
        $resumable->getEventDispatcher()->addListener(ResumableDownload::BEFORE_SEND, function ($e) use (&$events) {
            $events[] = $e;
        });

        $resumable->getEventDispatcher()->addListener(ResumableDownload::AFTER_SEND, function ($e) use (&$events) {
            $events[] = $e;
        });

        $mocked = $mock->getReceivedRequests();
        $this->assertCount(1, $mocked);
        $this->assertEquals('HEAD', $mocked[0]->getMethod());

        $mock->addResponse(new Response(200, array('Content-Length' => 5), '12345'));
        $mock->addResponse(new Response(200, array('Content-Length' => 5), '67891'));
        $mock->addResponse(new Response(200, array('Content-Length' => 5), '01112'));
        $resumable->download();
        $this->assertEquals('123456789101112', (string) $target);
        $mocked = $mock->getReceivedRequests();
        $this->assertEquals(4, count($mocked));
        $this->assertEquals('bytes=0-4', (string) $mocked[1]->getHeader('Range'));
        $this->assertEquals('bytes=5-9', (string) $mocked[2]->getHeader('Range'));
        $this->assertEquals('bytes=10-14', (string) $mocked[3]->getHeader('Range'));

        // Events are emitted 6 times (3 downloads with 2 events per download)
        $this->assertEquals(6, count($events));
        // Ensure that the event listeners were removed from the client
        $this->assertCount(0, $client->getEventDispatcher()->getListeners('command.after_send'));
    }

    /**
     * @expectedException \Aws\Common\Exception\UnexpectedValueException
     * @expectedExceptionMessage Message integrity check failed. Expected 5032561e973f16047f3109e6a3f7f173 but got 4ba36d23a78c7393b4900ef38019d8ff
     */
    public function testEnsuresMd5Match()
    {
        $client = $this->getServiceBuilder()->get('s3');
        $mock = new MockPlugin();
        $client->addSubscriber($mock);
        $mock->addResponse(new Response(200, array(
            'Content-Length' => 15,
            'Content-MD5' => '5032561e973f16047f3109e6a3f7f173'
        )));
        $target = EntityBody::factory('111111111111111');
        $target->seek(0, SEEK_END);
        $resumable = new ResumableDownload($client, 'test', 'key', $target);
        $resumable->download();
    }

    public function testDoesNotSendRangeHeaderWhenFullRequest()
    {
        $client = $this->getServiceBuilder()->get('s3');
        $mock = new MockPlugin();
        $client->addSubscriber($mock);
        $mock->addResponse(new Response(200, array('Content-Length' => 15)));
        $target = EntityBody::factory();
        $resumable = new ResumableDownload($client, 'test', 'key', $target);
        $mocked = $mock->getReceivedRequests();
        $this->assertCount(1, $mocked);
        $this->assertEquals('HEAD', $mocked[0]->getMethod());
        $mock->addResponse(new Response(200, array('Content-Length' => 15), '123456789101112'));
        $resumable->download();
        $this->assertEquals('123456789101112', (string) $target);
        $mocked = $mock->getReceivedRequests();
        $this->assertEquals(2, count($mocked));
        $this->assertNull($mocked[1]->getHeader('Range'));
    }
}