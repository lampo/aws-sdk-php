<?php
namespace RamseyAws\CognitoSync;

use RamseyAws\AwsClient;

/**
 * This client is used to interact with the **Amazon Cognito Sync** service.
 *
 * @method \RamseyAws\Result bulkPublish(array $args = [])
 * @method \GuzzleHttp\Promise\Promise bulkPublishAsync(array $args = [])
 * @method \RamseyAws\Result deleteDataset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDatasetAsync(array $args = [])
 * @method \RamseyAws\Result describeDataset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDatasetAsync(array $args = [])
 * @method \RamseyAws\Result describeIdentityPoolUsage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeIdentityPoolUsageAsync(array $args = [])
 * @method \RamseyAws\Result describeIdentityUsage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeIdentityUsageAsync(array $args = [])
 * @method \RamseyAws\Result getBulkPublishDetails(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBulkPublishDetailsAsync(array $args = [])
 * @method \RamseyAws\Result getCognitoEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCognitoEventsAsync(array $args = [])
 * @method \RamseyAws\Result getIdentityPoolConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getIdentityPoolConfigurationAsync(array $args = [])
 * @method \RamseyAws\Result listDatasets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDatasetsAsync(array $args = [])
 * @method \RamseyAws\Result listIdentityPoolUsage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listIdentityPoolUsageAsync(array $args = [])
 * @method \RamseyAws\Result listRecords(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRecordsAsync(array $args = [])
 * @method \RamseyAws\Result registerDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerDeviceAsync(array $args = [])
 * @method \RamseyAws\Result setCognitoEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setCognitoEventsAsync(array $args = [])
 * @method \RamseyAws\Result setIdentityPoolConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setIdentityPoolConfigurationAsync(array $args = [])
 * @method \RamseyAws\Result subscribeToDataset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise subscribeToDatasetAsync(array $args = [])
 * @method \RamseyAws\Result unsubscribeFromDataset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise unsubscribeFromDatasetAsync(array $args = [])
 * @method \RamseyAws\Result updateRecords(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRecordsAsync(array $args = [])
 */
class CognitoSyncClient extends AwsClient {}
