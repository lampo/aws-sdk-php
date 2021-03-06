<?php
namespace RamseyAws\ElasticLoadBalancingV2;

use RamseyAws\AwsClient;
use RamseyAws\Command;
use RamseyAws\CommandInterface;
use Psr\Http\Message\RequestInterface;

/**
 * This client is used to interact with the **Elastic Load Balancing** service.
 * @method \RamseyAws\Result addTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addTagsAsync(array $args = [])
 * @method \RamseyAws\Result createListener(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createListenerAsync(array $args = [])
 * @method \RamseyAws\Result createLoadBalancer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLoadBalancerAsync(array $args = [])
 * @method \RamseyAws\Result createRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRuleAsync(array $args = [])
 * @method \RamseyAws\Result createTargetGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTargetGroupAsync(array $args = [])
 * @method \RamseyAws\Result deleteListener(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteListenerAsync(array $args = [])
 * @method \RamseyAws\Result deleteLoadBalancer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLoadBalancerAsync(array $args = [])
 * @method \RamseyAws\Result deleteRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRuleAsync(array $args = [])
 * @method \RamseyAws\Result deleteTargetGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTargetGroupAsync(array $args = [])
 * @method \RamseyAws\Result deregisterTargets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deregisterTargetsAsync(array $args = [])
 * @method \RamseyAws\Result describeAccountLimits(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAccountLimitsAsync(array $args = [])
 * @method \RamseyAws\Result describeListeners(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeListenersAsync(array $args = [])
 * @method \RamseyAws\Result describeLoadBalancerAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLoadBalancerAttributesAsync(array $args = [])
 * @method \RamseyAws\Result describeLoadBalancers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLoadBalancersAsync(array $args = [])
 * @method \RamseyAws\Result describeRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRulesAsync(array $args = [])
 * @method \RamseyAws\Result describeSSLPolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSSLPoliciesAsync(array $args = [])
 * @method \RamseyAws\Result describeTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTagsAsync(array $args = [])
 * @method \RamseyAws\Result describeTargetGroupAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTargetGroupAttributesAsync(array $args = [])
 * @method \RamseyAws\Result describeTargetGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTargetGroupsAsync(array $args = [])
 * @method \RamseyAws\Result describeTargetHealth(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTargetHealthAsync(array $args = [])
 * @method \RamseyAws\Result modifyListener(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyListenerAsync(array $args = [])
 * @method \RamseyAws\Result modifyLoadBalancerAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyLoadBalancerAttributesAsync(array $args = [])
 * @method \RamseyAws\Result modifyRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyRuleAsync(array $args = [])
 * @method \RamseyAws\Result modifyTargetGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyTargetGroupAsync(array $args = [])
 * @method \RamseyAws\Result modifyTargetGroupAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyTargetGroupAttributesAsync(array $args = [])
 * @method \RamseyAws\Result registerTargets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerTargetsAsync(array $args = [])
 * @method \RamseyAws\Result removeTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeTagsAsync(array $args = [])
 * @method \RamseyAws\Result setIpAddressType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setIpAddressTypeAsync(array $args = [])
 * @method \RamseyAws\Result setRulePriorities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setRulePrioritiesAsync(array $args = [])
 * @method \RamseyAws\Result setSecurityGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setSecurityGroupsAsync(array $args = [])
 * @method \RamseyAws\Result setSubnets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setSubnetsAsync(array $args = [])
 */
class ElasticLoadBalancingV2Client extends AwsClient {}
