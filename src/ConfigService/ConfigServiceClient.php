<?php
namespace RamseyAws\ConfigService;

use RamseyAws\AwsClient;

/**
 * This client is used to interact with AWS Config.
 *
 * @method \RamseyAws\Result deleteConfigRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteConfigRuleAsync(array $args = [])
 * @method \RamseyAws\Result deleteConfigurationRecorder(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteConfigurationRecorderAsync(array $args = [])
 * @method \RamseyAws\Result deleteDeliveryChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDeliveryChannelAsync(array $args = [])
 * @method \RamseyAws\Result deleteEvaluationResults(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteEvaluationResultsAsync(array $args = [])
 * @method \RamseyAws\Result deliverConfigSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deliverConfigSnapshotAsync(array $args = [])
 * @method \RamseyAws\Result describeComplianceByConfigRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeComplianceByConfigRuleAsync(array $args = [])
 * @method \RamseyAws\Result describeComplianceByResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeComplianceByResourceAsync(array $args = [])
 * @method \RamseyAws\Result describeConfigRuleEvaluationStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeConfigRuleEvaluationStatusAsync(array $args = [])
 * @method \RamseyAws\Result describeConfigRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeConfigRulesAsync(array $args = [])
 * @method \RamseyAws\Result describeConfigurationRecorderStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeConfigurationRecorderStatusAsync(array $args = [])
 * @method \RamseyAws\Result describeConfigurationRecorders(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeConfigurationRecordersAsync(array $args = [])
 * @method \RamseyAws\Result describeDeliveryChannelStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDeliveryChannelStatusAsync(array $args = [])
 * @method \RamseyAws\Result describeDeliveryChannels(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDeliveryChannelsAsync(array $args = [])
 * @method \RamseyAws\Result getComplianceDetailsByConfigRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getComplianceDetailsByConfigRuleAsync(array $args = [])
 * @method \RamseyAws\Result getComplianceDetailsByResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getComplianceDetailsByResourceAsync(array $args = [])
 * @method \RamseyAws\Result getComplianceSummaryByConfigRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getComplianceSummaryByConfigRuleAsync(array $args = [])
 * @method \RamseyAws\Result getComplianceSummaryByResourceType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getComplianceSummaryByResourceTypeAsync(array $args = [])
 * @method \RamseyAws\Result getDiscoveredResourceCounts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDiscoveredResourceCountsAsync(array $args = [])
 * @method \RamseyAws\Result getResourceConfigHistory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResourceConfigHistoryAsync(array $args = [])
 * @method \RamseyAws\Result listDiscoveredResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDiscoveredResourcesAsync(array $args = [])
 * @method \RamseyAws\Result putConfigRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putConfigRuleAsync(array $args = [])
 * @method \RamseyAws\Result putConfigurationRecorder(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putConfigurationRecorderAsync(array $args = [])
 * @method \RamseyAws\Result putDeliveryChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putDeliveryChannelAsync(array $args = [])
 * @method \RamseyAws\Result putEvaluations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putEvaluationsAsync(array $args = [])
 * @method \RamseyAws\Result startConfigRulesEvaluation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startConfigRulesEvaluationAsync(array $args = [])
 * @method \RamseyAws\Result startConfigurationRecorder(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startConfigurationRecorderAsync(array $args = [])
 * @method \RamseyAws\Result stopConfigurationRecorder(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopConfigurationRecorderAsync(array $args = [])
 */
class ConfigServiceClient extends AwsClient {}
