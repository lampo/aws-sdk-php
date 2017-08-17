<?php
namespace RamseyAws\CloudWatchEvents;

use RamseyAws\AwsClient;

/**
 * This client is used to interact with the **Amazon CloudWatch Events** service.
 *
 * @method \RamseyAws\Result deleteRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRuleAsync(array $args = [])
 * @method \RamseyAws\Result describeEventBus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEventBusAsync(array $args = [])
 * @method \RamseyAws\Result describeRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRuleAsync(array $args = [])
 * @method \RamseyAws\Result disableRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableRuleAsync(array $args = [])
 * @method \RamseyAws\Result enableRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableRuleAsync(array $args = [])
 * @method \RamseyAws\Result listRuleNamesByTarget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRuleNamesByTargetAsync(array $args = [])
 * @method \RamseyAws\Result listRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRulesAsync(array $args = [])
 * @method \RamseyAws\Result listTargetsByRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTargetsByRuleAsync(array $args = [])
 * @method \RamseyAws\Result putEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putEventsAsync(array $args = [])
 * @method \RamseyAws\Result putPermission(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putPermissionAsync(array $args = [])
 * @method \RamseyAws\Result putRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putRuleAsync(array $args = [])
 * @method \RamseyAws\Result putTargets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putTargetsAsync(array $args = [])
 * @method \RamseyAws\Result removePermission(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removePermissionAsync(array $args = [])
 * @method \RamseyAws\Result removeTargets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeTargetsAsync(array $args = [])
 * @method \RamseyAws\Result testEventPattern(array $args = [])
 * @method \GuzzleHttp\Promise\Promise testEventPatternAsync(array $args = [])
 */
class CloudWatchEventsClient extends AwsClient {}
