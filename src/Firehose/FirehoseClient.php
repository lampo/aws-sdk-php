<?php
namespace RamseyAws\Firehose;

use RamseyAws\AwsClient;

/**
 * This client is used to interact with the **Amazon Kinesis Firehose** service.
 *
 * @method \RamseyAws\Result createDeliveryStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDeliveryStreamAsync(array $args = [])
 * @method \RamseyAws\Result deleteDeliveryStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDeliveryStreamAsync(array $args = [])
 * @method \RamseyAws\Result describeDeliveryStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDeliveryStreamAsync(array $args = [])
 * @method \RamseyAws\Result listDeliveryStreams(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDeliveryStreamsAsync(array $args = [])
 * @method \RamseyAws\Result putRecord(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putRecordAsync(array $args = [])
 * @method \RamseyAws\Result putRecordBatch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putRecordBatchAsync(array $args = [])
 * @method \RamseyAws\Result updateDestination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDestinationAsync(array $args = [])
 */
class FirehoseClient extends AwsClient {}
