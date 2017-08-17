<?php
namespace RamseyAws\Batch;

use RamseyAws\AwsClient;

/**
 * This client is used to interact with the **AWS Batch** service.
 * @method \RamseyAws\Result cancelJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelJobAsync(array $args = [])
 * @method \RamseyAws\Result createComputeEnvironment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createComputeEnvironmentAsync(array $args = [])
 * @method \RamseyAws\Result createJobQueue(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createJobQueueAsync(array $args = [])
 * @method \RamseyAws\Result deleteComputeEnvironment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteComputeEnvironmentAsync(array $args = [])
 * @method \RamseyAws\Result deleteJobQueue(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteJobQueueAsync(array $args = [])
 * @method \RamseyAws\Result deregisterJobDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deregisterJobDefinitionAsync(array $args = [])
 * @method \RamseyAws\Result describeComputeEnvironments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeComputeEnvironmentsAsync(array $args = [])
 * @method \RamseyAws\Result describeJobDefinitions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeJobDefinitionsAsync(array $args = [])
 * @method \RamseyAws\Result describeJobQueues(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeJobQueuesAsync(array $args = [])
 * @method \RamseyAws\Result describeJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeJobsAsync(array $args = [])
 * @method \RamseyAws\Result listJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listJobsAsync(array $args = [])
 * @method \RamseyAws\Result registerJobDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerJobDefinitionAsync(array $args = [])
 * @method \RamseyAws\Result submitJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise submitJobAsync(array $args = [])
 * @method \RamseyAws\Result terminateJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise terminateJobAsync(array $args = [])
 * @method \RamseyAws\Result updateComputeEnvironment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateComputeEnvironmentAsync(array $args = [])
 * @method \RamseyAws\Result updateJobQueue(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateJobQueueAsync(array $args = [])
 */
class BatchClient extends AwsClient {}
