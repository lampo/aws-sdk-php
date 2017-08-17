<?php
namespace RamseyAws\DynamoDbStreams;

use RamseyAws\AwsClient;
use RamseyAws\DynamoDb\DynamoDbClient;

/**
 * This client is used to interact with the **Amazon DynamoDb Streams** service.
 *
 * @method \RamseyAws\Result describeStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStreamAsync(array $args = [])
 * @method \RamseyAws\Result getRecords(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRecordsAsync(array $args = [])
 * @method \RamseyAws\Result getShardIterator(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getShardIteratorAsync(array $args = [])
 * @method \RamseyAws\Result listStreams(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listStreamsAsync(array $args = [])
 */
class DynamoDbStreamsClient extends AwsClient
{
    public static function getArguments()
    {
        $args = parent::getArguments();
        $args['retries']['default'] = 11;
        $args['retries']['fn'] = [DynamoDbClient::class, '_applyRetryConfig'];

        return $args;
    }
}
