<?php
namespace RamseyAws\Health;

use RamseyAws\AwsClient;

/**
 * This client is used to interact with the **AWS Health APIs and Notifications** service.
 * @method \RamseyAws\Result describeAffectedEntities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAffectedEntitiesAsync(array $args = [])
 * @method \RamseyAws\Result describeEntityAggregates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEntityAggregatesAsync(array $args = [])
 * @method \RamseyAws\Result describeEventAggregates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEventAggregatesAsync(array $args = [])
 * @method \RamseyAws\Result describeEventDetails(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEventDetailsAsync(array $args = [])
 * @method \RamseyAws\Result describeEventTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEventTypesAsync(array $args = [])
 * @method \RamseyAws\Result describeEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEventsAsync(array $args = [])
 */
class HealthClient extends AwsClient {}
