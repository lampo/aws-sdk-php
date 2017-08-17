<?php
namespace RamseyAws\ImportExport;

use RamseyAws\AwsClient;

/**
 * This client is used to interact with the **AWS Import/Export** service.
 * @method \RamseyAws\Result cancelJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelJobAsync(array $args = [])
 * @method \RamseyAws\Result createJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createJobAsync(array $args = [])
 * @method \RamseyAws\Result getShippingLabel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getShippingLabelAsync(array $args = [])
 * @method \RamseyAws\Result getStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getStatusAsync(array $args = [])
 * @method \RamseyAws\Result listJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listJobsAsync(array $args = [])
 * @method \RamseyAws\Result updateJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateJobAsync(array $args = [])
 */
class ImportExportClient extends AwsClient {}
