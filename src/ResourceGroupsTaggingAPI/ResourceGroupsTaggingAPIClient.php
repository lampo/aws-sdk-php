<?php
namespace RamseyAws\ResourceGroupsTaggingAPI;

use RamseyAws\AwsClient;

/**
 * This client is used to interact with the **AWS Resource Groups Tagging API** service.
 * @method \RamseyAws\Result getResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResourcesAsync(array $args = [])
 * @method \RamseyAws\Result getTagKeys(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTagKeysAsync(array $args = [])
 * @method \RamseyAws\Result getTagValues(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTagValuesAsync(array $args = [])
 * @method \RamseyAws\Result tagResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourcesAsync(array $args = [])
 * @method \RamseyAws\Result untagResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourcesAsync(array $args = [])
 */
class ResourceGroupsTaggingAPIClient extends AwsClient {}
