<?php
namespace RamseyAws\SnowBall;

use RamseyAws\AwsClient;

/**
 * This client is used to interact with the **Amazon Import/Export Snowball** service.
 * @method \RamseyAws\Result cancelCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelClusterAsync(array $args = [])
 * @method \RamseyAws\Result cancelJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelJobAsync(array $args = [])
 * @method \RamseyAws\Result createAddress(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAddressAsync(array $args = [])
 * @method \RamseyAws\Result createCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createClusterAsync(array $args = [])
 * @method \RamseyAws\Result createJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createJobAsync(array $args = [])
 * @method \RamseyAws\Result describeAddress(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAddressAsync(array $args = [])
 * @method \RamseyAws\Result describeAddresses(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAddressesAsync(array $args = [])
 * @method \RamseyAws\Result describeCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeClusterAsync(array $args = [])
 * @method \RamseyAws\Result describeJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeJobAsync(array $args = [])
 * @method \RamseyAws\Result getJobManifest(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getJobManifestAsync(array $args = [])
 * @method \RamseyAws\Result getJobUnlockCode(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getJobUnlockCodeAsync(array $args = [])
 * @method \RamseyAws\Result getSnowballUsage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSnowballUsageAsync(array $args = [])
 * @method \RamseyAws\Result listClusterJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listClusterJobsAsync(array $args = [])
 * @method \RamseyAws\Result listClusters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listClustersAsync(array $args = [])
 * @method \RamseyAws\Result listJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listJobsAsync(array $args = [])
 * @method \RamseyAws\Result updateCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateClusterAsync(array $args = [])
 * @method \RamseyAws\Result updateJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateJobAsync(array $args = [])
 */
class SnowBallClient extends AwsClient {}
