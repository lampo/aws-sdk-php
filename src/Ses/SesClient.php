<?php
namespace RamseyAws\Ses;

use RamseyAws\Credentials\CredentialsInterface;

/**
 * This client is used to interact with the **Amazon Simple Email Service (Amazon SES)**.
 *
 * @method \RamseyAws\Result cloneReceiptRuleSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cloneReceiptRuleSetAsync(array $args = [])
 * @method \RamseyAws\Result createConfigurationSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createConfigurationSetAsync(array $args = [])
 * @method \RamseyAws\Result createConfigurationSetEventDestination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createConfigurationSetEventDestinationAsync(array $args = [])
 * @method \RamseyAws\Result createReceiptFilter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createReceiptFilterAsync(array $args = [])
 * @method \RamseyAws\Result createReceiptRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createReceiptRuleAsync(array $args = [])
 * @method \RamseyAws\Result createReceiptRuleSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createReceiptRuleSetAsync(array $args = [])
 * @method \RamseyAws\Result deleteConfigurationSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteConfigurationSetAsync(array $args = [])
 * @method \RamseyAws\Result deleteConfigurationSetEventDestination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteConfigurationSetEventDestinationAsync(array $args = [])
 * @method \RamseyAws\Result deleteIdentity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteIdentityAsync(array $args = [])
 * @method \RamseyAws\Result deleteIdentityPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteIdentityPolicyAsync(array $args = [])
 * @method \RamseyAws\Result deleteReceiptFilter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteReceiptFilterAsync(array $args = [])
 * @method \RamseyAws\Result deleteReceiptRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteReceiptRuleAsync(array $args = [])
 * @method \RamseyAws\Result deleteReceiptRuleSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteReceiptRuleSetAsync(array $args = [])
 * @method \RamseyAws\Result deleteVerifiedEmailAddress(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVerifiedEmailAddressAsync(array $args = [])
 * @method \RamseyAws\Result describeActiveReceiptRuleSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeActiveReceiptRuleSetAsync(array $args = [])
 * @method \RamseyAws\Result describeConfigurationSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeConfigurationSetAsync(array $args = [])
 * @method \RamseyAws\Result describeReceiptRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeReceiptRuleAsync(array $args = [])
 * @method \RamseyAws\Result describeReceiptRuleSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeReceiptRuleSetAsync(array $args = [])
 * @method \RamseyAws\Result getIdentityDkimAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getIdentityDkimAttributesAsync(array $args = [])
 * @method \RamseyAws\Result getIdentityMailFromDomainAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getIdentityMailFromDomainAttributesAsync(array $args = [])
 * @method \RamseyAws\Result getIdentityNotificationAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getIdentityNotificationAttributesAsync(array $args = [])
 * @method \RamseyAws\Result getIdentityPolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getIdentityPoliciesAsync(array $args = [])
 * @method \RamseyAws\Result getIdentityVerificationAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getIdentityVerificationAttributesAsync(array $args = [])
 * @method \RamseyAws\Result getSendQuota(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSendQuotaAsync(array $args = [])
 * @method \RamseyAws\Result getSendStatistics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSendStatisticsAsync(array $args = [])
 * @method \RamseyAws\Result listConfigurationSets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listConfigurationSetsAsync(array $args = [])
 * @method \RamseyAws\Result listIdentities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listIdentitiesAsync(array $args = [])
 * @method \RamseyAws\Result listIdentityPolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listIdentityPoliciesAsync(array $args = [])
 * @method \RamseyAws\Result listReceiptFilters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listReceiptFiltersAsync(array $args = [])
 * @method \RamseyAws\Result listReceiptRuleSets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listReceiptRuleSetsAsync(array $args = [])
 * @method \RamseyAws\Result listVerifiedEmailAddresses(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listVerifiedEmailAddressesAsync(array $args = [])
 * @method \RamseyAws\Result putIdentityPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putIdentityPolicyAsync(array $args = [])
 * @method \RamseyAws\Result reorderReceiptRuleSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise reorderReceiptRuleSetAsync(array $args = [])
 * @method \RamseyAws\Result sendBounce(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendBounceAsync(array $args = [])
 * @method \RamseyAws\Result sendEmail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendEmailAsync(array $args = [])
 * @method \RamseyAws\Result sendRawEmail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendRawEmailAsync(array $args = [])
 * @method \RamseyAws\Result setActiveReceiptRuleSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setActiveReceiptRuleSetAsync(array $args = [])
 * @method \RamseyAws\Result setIdentityDkimEnabled(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setIdentityDkimEnabledAsync(array $args = [])
 * @method \RamseyAws\Result setIdentityFeedbackForwardingEnabled(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setIdentityFeedbackForwardingEnabledAsync(array $args = [])
 * @method \RamseyAws\Result setIdentityHeadersInNotificationsEnabled(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setIdentityHeadersInNotificationsEnabledAsync(array $args = [])
 * @method \RamseyAws\Result setIdentityMailFromDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setIdentityMailFromDomainAsync(array $args = [])
 * @method \RamseyAws\Result setIdentityNotificationTopic(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setIdentityNotificationTopicAsync(array $args = [])
 * @method \RamseyAws\Result setReceiptRulePosition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setReceiptRulePositionAsync(array $args = [])
 * @method \RamseyAws\Result updateConfigurationSetEventDestination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateConfigurationSetEventDestinationAsync(array $args = [])
 * @method \RamseyAws\Result updateReceiptRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateReceiptRuleAsync(array $args = [])
 * @method \RamseyAws\Result verifyDomainDkim(array $args = [])
 * @method \GuzzleHttp\Promise\Promise verifyDomainDkimAsync(array $args = [])
 * @method \RamseyAws\Result verifyDomainIdentity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise verifyDomainIdentityAsync(array $args = [])
 * @method \RamseyAws\Result verifyEmailAddress(array $args = [])
 * @method \GuzzleHttp\Promise\Promise verifyEmailAddressAsync(array $args = [])
 * @method \RamseyAws\Result verifyEmailIdentity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise verifyEmailIdentityAsync(array $args = [])
 */
class SesClient extends \RamseyAws\AwsClient
{
    /**
     * Create an SMTP password for a given IAM user's credentials.
     *
     * The SMTP username is the Access Key ID for the provided credentials.
     *
     * @link http://docs.aws.amazon.com/ses/latest/DeveloperGuide/smtp-credentials.html#smtp-credentials-convert
     *
     * @param CredentialsInterface $creds
     *
     * @return string
     */
    public static function generateSmtpPassword(CredentialsInterface $creds)
    {
        static $version = "\x02";
        static $algo = 'sha256';
        static $message = 'SendRawEmail';
        $signature = hash_hmac($algo, $message, $creds->getSecretKey(), true);

        return base64_encode($version . $signature);
    }
}
