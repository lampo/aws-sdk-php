<?php
namespace RamseyAws\S3;

use RamseyAws\Api\Parser\PayloadParserTrait;
use RamseyAws\CacheInterface;
use RamseyAws\CommandInterface;
use RamseyAws\LruArrayCache;
use RamseyAws\MultiRegionClient as BaseClient;
use RamseyAws\Exception\AwsException;
use RamseyAws\S3\Exception\PermanentRedirectException;
use GuzzleHttp\Promise;

/**
 * **Amazon Simple Storage Service** multi-region client.
 *
 * @method \RamseyAws\Result abortMultipartUpload(array $args = [])
 * @method \GuzzleHttp\Promise\Promise abortMultipartUploadAsync(array $args = [])
 * @method \RamseyAws\Result completeMultipartUpload(array $args = [])
 * @method \GuzzleHttp\Promise\Promise completeMultipartUploadAsync(array $args = [])
 * @method \RamseyAws\Result copyObject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise copyObjectAsync(array $args = [])
 * @method \RamseyAws\Result createBucket(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBucketAsync(array $args = [])
 * @method \RamseyAws\Result createMultipartUpload(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMultipartUploadAsync(array $args = [])
 * @method \RamseyAws\Result deleteBucket(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBucketAsync(array $args = [])
 * @method \RamseyAws\Result deleteBucketAnalyticsConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBucketAnalyticsConfigurationAsync(array $args = [])
 * @method \RamseyAws\Result deleteBucketCors(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBucketCorsAsync(array $args = [])
 * @method \RamseyAws\Result deleteBucketInventoryConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBucketInventoryConfigurationAsync(array $args = [])
 * @method \RamseyAws\Result deleteBucketLifecycle(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBucketLifecycleAsync(array $args = [])
 * @method \RamseyAws\Result deleteBucketMetricsConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBucketMetricsConfigurationAsync(array $args = [])
 * @method \RamseyAws\Result deleteBucketPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBucketPolicyAsync(array $args = [])
 * @method \RamseyAws\Result deleteBucketReplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBucketReplicationAsync(array $args = [])
 * @method \RamseyAws\Result deleteBucketTagging(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBucketTaggingAsync(array $args = [])
 * @method \RamseyAws\Result deleteBucketWebsite(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBucketWebsiteAsync(array $args = [])
 * @method \RamseyAws\Result deleteObject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteObjectAsync(array $args = [])
 * @method \RamseyAws\Result deleteObjectTagging(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteObjectTaggingAsync(array $args = [])
 * @method \RamseyAws\Result deleteObjects(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteObjectsAsync(array $args = [])
 * @method \RamseyAws\Result getBucketAccelerateConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBucketAccelerateConfigurationAsync(array $args = [])
 * @method \RamseyAws\Result getBucketAcl(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBucketAclAsync(array $args = [])
 * @method \RamseyAws\Result getBucketAnalyticsConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBucketAnalyticsConfigurationAsync(array $args = [])
 * @method \RamseyAws\Result getBucketCors(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBucketCorsAsync(array $args = [])
 * @method \RamseyAws\Result getBucketInventoryConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBucketInventoryConfigurationAsync(array $args = [])
 * @method \RamseyAws\Result getBucketLifecycle(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBucketLifecycleAsync(array $args = [])
 * @method \RamseyAws\Result getBucketLifecycleConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBucketLifecycleConfigurationAsync(array $args = [])
 * @method \RamseyAws\Result getBucketLocation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBucketLocationAsync(array $args = [])
 * @method \RamseyAws\Result getBucketLogging(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBucketLoggingAsync(array $args = [])
 * @method \RamseyAws\Result getBucketMetricsConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBucketMetricsConfigurationAsync(array $args = [])
 * @method \RamseyAws\Result getBucketNotification(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBucketNotificationAsync(array $args = [])
 * @method \RamseyAws\Result getBucketNotificationConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBucketNotificationConfigurationAsync(array $args = [])
 * @method \RamseyAws\Result getBucketPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBucketPolicyAsync(array $args = [])
 * @method \RamseyAws\Result getBucketReplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBucketReplicationAsync(array $args = [])
 * @method \RamseyAws\Result getBucketRequestPayment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBucketRequestPaymentAsync(array $args = [])
 * @method \RamseyAws\Result getBucketTagging(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBucketTaggingAsync(array $args = [])
 * @method \RamseyAws\Result getBucketVersioning(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBucketVersioningAsync(array $args = [])
 * @method \RamseyAws\Result getBucketWebsite(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBucketWebsiteAsync(array $args = [])
 * @method \RamseyAws\Result getObject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getObjectAsync(array $args = [])
 * @method \RamseyAws\Result getObjectAcl(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getObjectAclAsync(array $args = [])
 * @method \RamseyAws\Result getObjectTagging(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getObjectTaggingAsync(array $args = [])
 * @method \RamseyAws\Result getObjectTorrent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getObjectTorrentAsync(array $args = [])
 * @method \RamseyAws\Result headBucket(array $args = [])
 * @method \GuzzleHttp\Promise\Promise headBucketAsync(array $args = [])
 * @method \RamseyAws\Result headObject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise headObjectAsync(array $args = [])
 * @method \RamseyAws\Result listBucketAnalyticsConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBucketAnalyticsConfigurationsAsync(array $args = [])
 * @method \RamseyAws\Result listBucketInventoryConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBucketInventoryConfigurationsAsync(array $args = [])
 * @method \RamseyAws\Result listBucketMetricsConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBucketMetricsConfigurationsAsync(array $args = [])
 * @method \RamseyAws\Result listBuckets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBucketsAsync(array $args = [])
 * @method \RamseyAws\Result listMultipartUploads(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listMultipartUploadsAsync(array $args = [])
 * @method \RamseyAws\Result listObjectVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listObjectVersionsAsync(array $args = [])
 * @method \RamseyAws\Result listObjects(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listObjectsAsync(array $args = [])
 * @method \RamseyAws\Result listObjectsV2(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listObjectsV2Async(array $args = [])
 * @method \RamseyAws\Result listParts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPartsAsync(array $args = [])
 * @method \RamseyAws\Result putBucketAccelerateConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBucketAccelerateConfigurationAsync(array $args = [])
 * @method \RamseyAws\Result putBucketAcl(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBucketAclAsync(array $args = [])
 * @method \RamseyAws\Result putBucketAnalyticsConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBucketAnalyticsConfigurationAsync(array $args = [])
 * @method \RamseyAws\Result putBucketCors(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBucketCorsAsync(array $args = [])
 * @method \RamseyAws\Result putBucketInventoryConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBucketInventoryConfigurationAsync(array $args = [])
 * @method \RamseyAws\Result putBucketLifecycle(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBucketLifecycleAsync(array $args = [])
 * @method \RamseyAws\Result putBucketLifecycleConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBucketLifecycleConfigurationAsync(array $args = [])
 * @method \RamseyAws\Result putBucketLogging(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBucketLoggingAsync(array $args = [])
 * @method \RamseyAws\Result putBucketMetricsConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBucketMetricsConfigurationAsync(array $args = [])
 * @method \RamseyAws\Result putBucketNotification(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBucketNotificationAsync(array $args = [])
 * @method \RamseyAws\Result putBucketNotificationConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBucketNotificationConfigurationAsync(array $args = [])
 * @method \RamseyAws\Result putBucketPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBucketPolicyAsync(array $args = [])
 * @method \RamseyAws\Result putBucketReplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBucketReplicationAsync(array $args = [])
 * @method \RamseyAws\Result putBucketRequestPayment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBucketRequestPaymentAsync(array $args = [])
 * @method \RamseyAws\Result putBucketTagging(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBucketTaggingAsync(array $args = [])
 * @method \RamseyAws\Result putBucketVersioning(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBucketVersioningAsync(array $args = [])
 * @method \RamseyAws\Result putBucketWebsite(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBucketWebsiteAsync(array $args = [])
 * @method \RamseyAws\Result putObject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putObjectAsync(array $args = [])
 * @method \RamseyAws\Result putObjectAcl(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putObjectAclAsync(array $args = [])
 * @method \RamseyAws\Result putObjectTagging(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putObjectTaggingAsync(array $args = [])
 * @method \RamseyAws\Result restoreObject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise restoreObjectAsync(array $args = [])
 * @method \RamseyAws\Result uploadPart(array $args = [])
 * @method \GuzzleHttp\Promise\Promise uploadPartAsync(array $args = [])
 * @method \RamseyAws\Result uploadPartCopy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise uploadPartCopyAsync(array $args = [])
 */
class S3MultiRegionClient extends BaseClient implements S3ClientInterface
{
    use S3ClientTrait;

    /** @var CacheInterface */
    private $cache;

    public static function getArguments()
    {
        $args = parent::getArguments();
        $regionDef = $args['region'] + ['default' => function (array &$args) {
            $availableRegions = array_keys($args['partition']['regions']);
            return end($availableRegions);
        }];
        unset($args['region']);

        return $args + [
            'bucket_region_cache' => [
                'type' => 'config',
                'valid' => [CacheInterface::class],
                'doc' => 'Cache of regions in which given buckets are located.',
                'default' => function () { return new LruArrayCache; },
            ],
            'region' => $regionDef,
        ];
    }

    public function __construct(array $args)
    {
        parent::__construct($args);
        $this->cache = $this->getConfig('bucket_region_cache');

        $this->getHandlerList()->prependInit(
            $this->determineRegionMiddleware(),
            'determine_region'
        );
    }

    private function determineRegionMiddleware()
    {
        return function (callable $handler) {
            return function (CommandInterface $command) use ($handler) {
                $cacheKey = $this->getCacheKey($command['Bucket']);
                if (
                    empty($command['@region']) &&
                    $region = $this->cache->get($cacheKey)
                ) {
                    $command['@region'] = $region;
                }

                return Promise\coroutine(function () use (
                    $handler,
                    $command,
                    $cacheKey
                ) {
                    try {
                        yield $handler($command);
                    } catch (PermanentRedirectException $e) {
                        if (empty($command['Bucket'])) {
                            throw $e;
                        }
                        $result = $e->getResult();
                        $region = null;
                        if (isset($result['@metadata']['headers']['x-amz-bucket-region'])) {
                            $region = $result['@metadata']['headers']['x-amz-bucket-region'];
                            $this->cache->set($cacheKey, $region);
                        } else {
                            $region = (yield $this->determineBucketRegionAsync(
                                $command['Bucket']
                            ));
                        }

                        $command['@region'] = $region;
                        yield $handler($command);
                    } catch (AwsException $e) {
                        if ($e->getAwsErrorCode() === 'AuthorizationHeaderMalformed') {
                            $region = $this->determineBucketRegionFromExceptionBody(
                                $e->getResponse()->getBody()
                            );
                            if (!empty($region)) {
                                $this->cache->set($cacheKey, $region);

                                $command['@region'] = $region;
                                yield $handler($command);
                            } else {
                                throw $e;
                            }
                        } else {
                            throw $e;
                        }
                    }
                });
            };
        };
    }

    public function createPresignedRequest(CommandInterface $command, $expires)
    {
        if (empty($command['Bucket'])) {
            throw new \InvalidArgumentException('The S3\\MultiRegionClient'
                . ' cannot create presigned requests for commands without a'
                . ' specified bucket.');
        }

        /** @var S3ClientInterface $client */
        $client = $this->getClientFromPool(
            $this->determineBucketRegion($command['Bucket'])
        );
        return $client->createPresignedRequest(
            $client->getCommand($command->getName(), $command->toArray()),
            $expires
        );
    }

    public function getObjectUrl($bucket, $key)
    {
        /** @var S3Client $regionalClient */
        $regionalClient = $this->getClientFromPool(
            $this->determineBucketRegion($bucket)
        );

        return $regionalClient->getObjectUrl($bucket, $key);
    }

    public function determineBucketRegionAsync($bucketName)
    {
        $cacheKey = $this->getCacheKey($bucketName);
        if ($cached = $this->cache->get($cacheKey)) {
            return Promise\promise_for($cached);
        }

        /** @var S3ClientInterface $regionalClient */
        $regionalClient = $this->getClientFromPool();
        return $regionalClient->determineBucketRegionAsync($bucketName)
            ->then(
                function ($region) use ($cacheKey) {
                    $this->cache->set($cacheKey, $region);

                    return $region;
                }
            );
    }

    private function getCacheKey($bucketName)
    {
        return "aws:s3:{$bucketName}:location";
    }
}
