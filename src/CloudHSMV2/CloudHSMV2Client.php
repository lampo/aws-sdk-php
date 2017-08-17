<?php
namespace RamseyAws\CloudHSMV2;

use RamseyAws\AwsClient;

/**
 * This client is used to interact with the **AWS CloudHSM V2** service.
 * @method \RamseyAws\Result createCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createClusterAsync(array $args = [])
 * @method \RamseyAws\Result createHsm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createHsmAsync(array $args = [])
 * @method \RamseyAws\Result deleteCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteClusterAsync(array $args = [])
 * @method \RamseyAws\Result deleteHsm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteHsmAsync(array $args = [])
 * @method \RamseyAws\Result describeBackups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBackupsAsync(array $args = [])
 * @method \RamseyAws\Result describeClusters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeClustersAsync(array $args = [])
 * @method \RamseyAws\Result initializeCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise initializeClusterAsync(array $args = [])
 * @method \RamseyAws\Result listTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsAsync(array $args = [])
 * @method \RamseyAws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \RamseyAws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 */
class CloudHSMV2Client extends AwsClient {}
