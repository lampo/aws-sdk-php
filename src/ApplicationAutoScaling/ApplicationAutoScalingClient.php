<?php
namespace RamseyAws\ApplicationAutoScaling;

use RamseyAws\AwsClient;

/**
 * This client is used to interact with the **Application Auto Scaling** service.
 * @method \RamseyAws\Result deleteScalingPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteScalingPolicyAsync(array $args = [])
 * @method \RamseyAws\Result deregisterScalableTarget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deregisterScalableTargetAsync(array $args = [])
 * @method \RamseyAws\Result describeScalableTargets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeScalableTargetsAsync(array $args = [])
 * @method \RamseyAws\Result describeScalingActivities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeScalingActivitiesAsync(array $args = [])
 * @method \RamseyAws\Result describeScalingPolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeScalingPoliciesAsync(array $args = [])
 * @method \RamseyAws\Result putScalingPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putScalingPolicyAsync(array $args = [])
 * @method \RamseyAws\Result registerScalableTarget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerScalableTargetAsync(array $args = [])
 */
class ApplicationAutoScalingClient extends AwsClient {}
