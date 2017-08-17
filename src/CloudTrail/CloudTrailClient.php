<?php
namespace RamseyAws\CloudTrail;

use RamseyAws\AwsClient;

/**
 * This client is used to interact with the **AWS CloudTrail** service.
 *
 * @method \RamseyAws\Result addTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addTagsAsync(array $args = [])
 * @method \RamseyAws\Result createTrail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTrailAsync(array $args = [])
 * @method \RamseyAws\Result deleteTrail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTrailAsync(array $args = [])
 * @method \RamseyAws\Result describeTrails(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTrailsAsync(array $args = [])
 * @method \RamseyAws\Result getEventSelectors(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getEventSelectorsAsync(array $args = [])
 * @method \RamseyAws\Result getTrailStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTrailStatusAsync(array $args = [])
 * @method \RamseyAws\Result listPublicKeys(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPublicKeysAsync(array $args = [])
 * @method \RamseyAws\Result listTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsAsync(array $args = [])
 * @method \RamseyAws\Result lookupEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise lookupEventsAsync(array $args = [])
 * @method \RamseyAws\Result putEventSelectors(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putEventSelectorsAsync(array $args = [])
 * @method \RamseyAws\Result removeTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeTagsAsync(array $args = [])
 * @method \RamseyAws\Result startLogging(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startLoggingAsync(array $args = [])
 * @method \RamseyAws\Result stopLogging(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopLoggingAsync(array $args = [])
 * @method \RamseyAws\Result updateTrail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateTrailAsync(array $args = [])
 */
class CloudTrailClient extends AwsClient {}
