<?php
namespace RamseyAws\KinesisAnalytics;

use RamseyAws\AwsClient;

/**
 * This client is used to interact with the **Amazon Kinesis Analytics** service.
 * @method \RamseyAws\Result addApplicationCloudWatchLoggingOption(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addApplicationCloudWatchLoggingOptionAsync(array $args = [])
 * @method \RamseyAws\Result addApplicationInput(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addApplicationInputAsync(array $args = [])
 * @method \RamseyAws\Result addApplicationOutput(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addApplicationOutputAsync(array $args = [])
 * @method \RamseyAws\Result addApplicationReferenceDataSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addApplicationReferenceDataSourceAsync(array $args = [])
 * @method \RamseyAws\Result createApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createApplicationAsync(array $args = [])
 * @method \RamseyAws\Result deleteApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteApplicationAsync(array $args = [])
 * @method \RamseyAws\Result deleteApplicationCloudWatchLoggingOption(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteApplicationCloudWatchLoggingOptionAsync(array $args = [])
 * @method \RamseyAws\Result deleteApplicationOutput(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteApplicationOutputAsync(array $args = [])
 * @method \RamseyAws\Result deleteApplicationReferenceDataSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteApplicationReferenceDataSourceAsync(array $args = [])
 * @method \RamseyAws\Result describeApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeApplicationAsync(array $args = [])
 * @method \RamseyAws\Result discoverInputSchema(array $args = [])
 * @method \GuzzleHttp\Promise\Promise discoverInputSchemaAsync(array $args = [])
 * @method \RamseyAws\Result listApplications(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listApplicationsAsync(array $args = [])
 * @method \RamseyAws\Result startApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startApplicationAsync(array $args = [])
 * @method \RamseyAws\Result stopApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopApplicationAsync(array $args = [])
 * @method \RamseyAws\Result updateApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateApplicationAsync(array $args = [])
 */
class KinesisAnalyticsClient extends AwsClient {}
