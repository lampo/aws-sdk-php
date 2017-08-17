<?php
namespace RamseyAws\Support;

use RamseyAws\AwsClient;

/**
 * AWS Support client.
 *
 * @method \RamseyAws\Result addAttachmentsToSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addAttachmentsToSetAsync(array $args = [])
 * @method \RamseyAws\Result addCommunicationToCase(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addCommunicationToCaseAsync(array $args = [])
 * @method \RamseyAws\Result createCase(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCaseAsync(array $args = [])
 * @method \RamseyAws\Result describeAttachment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAttachmentAsync(array $args = [])
 * @method \RamseyAws\Result describeCases(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCasesAsync(array $args = [])
 * @method \RamseyAws\Result describeCommunications(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCommunicationsAsync(array $args = [])
 * @method \RamseyAws\Result describeServices(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeServicesAsync(array $args = [])
 * @method \RamseyAws\Result describeSeverityLevels(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSeverityLevelsAsync(array $args = [])
 * @method \RamseyAws\Result describeTrustedAdvisorCheckRefreshStatuses(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTrustedAdvisorCheckRefreshStatusesAsync(array $args = [])
 * @method \RamseyAws\Result describeTrustedAdvisorCheckResult(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTrustedAdvisorCheckResultAsync(array $args = [])
 * @method \RamseyAws\Result describeTrustedAdvisorCheckSummaries(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTrustedAdvisorCheckSummariesAsync(array $args = [])
 * @method \RamseyAws\Result describeTrustedAdvisorChecks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTrustedAdvisorChecksAsync(array $args = [])
 * @method \RamseyAws\Result refreshTrustedAdvisorCheck(array $args = [])
 * @method \GuzzleHttp\Promise\Promise refreshTrustedAdvisorCheckAsync(array $args = [])
 * @method \RamseyAws\Result resolveCase(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resolveCaseAsync(array $args = [])
 */
class SupportClient extends AwsClient {}
