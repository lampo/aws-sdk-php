<?php
namespace RamseyAws\Kinesis;

use RamseyAws\AwsClient;

/**
 * This client is used to interact with the **Amazon Kinesis** service.
 *
 * @method \RamseyAws\Result addTagsToStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addTagsToStreamAsync(array $args = [])
 * @method \RamseyAws\Result createStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createStreamAsync(array $args = [])
 * @method \RamseyAws\Result decreaseStreamRetentionPeriod(array $args = [])
 * @method \GuzzleHttp\Promise\Promise decreaseStreamRetentionPeriodAsync(array $args = [])
 * @method \RamseyAws\Result deleteStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteStreamAsync(array $args = [])
 * @method \RamseyAws\Result describeLimits(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLimitsAsync(array $args = [])
 * @method \RamseyAws\Result describeStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStreamAsync(array $args = [])
 * @method \RamseyAws\Result disableEnhancedMonitoring(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableEnhancedMonitoringAsync(array $args = [])
 * @method \RamseyAws\Result enableEnhancedMonitoring(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableEnhancedMonitoringAsync(array $args = [])
 * @method \RamseyAws\Result getRecords(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRecordsAsync(array $args = [])
 * @method \RamseyAws\Result getShardIterator(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getShardIteratorAsync(array $args = [])
 * @method \RamseyAws\Result increaseStreamRetentionPeriod(array $args = [])
 * @method \GuzzleHttp\Promise\Promise increaseStreamRetentionPeriodAsync(array $args = [])
 * @method \RamseyAws\Result listStreams(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listStreamsAsync(array $args = [])
 * @method \RamseyAws\Result listTagsForStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForStreamAsync(array $args = [])
 * @method \RamseyAws\Result mergeShards(array $args = [])
 * @method \GuzzleHttp\Promise\Promise mergeShardsAsync(array $args = [])
 * @method \RamseyAws\Result putRecord(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putRecordAsync(array $args = [])
 * @method \RamseyAws\Result putRecords(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putRecordsAsync(array $args = [])
 * @method \RamseyAws\Result removeTagsFromStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeTagsFromStreamAsync(array $args = [])
 * @method \RamseyAws\Result splitShard(array $args = [])
 * @method \GuzzleHttp\Promise\Promise splitShardAsync(array $args = [])
 * @method \RamseyAws\Result startStreamEncryption(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startStreamEncryptionAsync(array $args = [])
 * @method \RamseyAws\Result stopStreamEncryption(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopStreamEncryptionAsync(array $args = [])
 * @method \RamseyAws\Result updateShardCount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateShardCountAsync(array $args = [])
 */
class KinesisClient extends AwsClient {}
