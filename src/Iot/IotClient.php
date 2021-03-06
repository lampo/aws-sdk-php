<?php
namespace RamseyAws\Iot;

use RamseyAws\AwsClient;

/**
 * This client is used to interact with the **AWS IoT** service.
 *
 * @method \RamseyAws\Result acceptCertificateTransfer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise acceptCertificateTransferAsync(array $args = [])
 * @method \RamseyAws\Result attachPrincipalPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise attachPrincipalPolicyAsync(array $args = [])
 * @method \RamseyAws\Result attachThingPrincipal(array $args = [])
 * @method \GuzzleHttp\Promise\Promise attachThingPrincipalAsync(array $args = [])
 * @method \RamseyAws\Result cancelCertificateTransfer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelCertificateTransferAsync(array $args = [])
 * @method \RamseyAws\Result createCertificateFromCsr(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCertificateFromCsrAsync(array $args = [])
 * @method \RamseyAws\Result createKeysAndCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createKeysAndCertificateAsync(array $args = [])
 * @method \RamseyAws\Result createPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPolicyAsync(array $args = [])
 * @method \RamseyAws\Result createPolicyVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPolicyVersionAsync(array $args = [])
 * @method \RamseyAws\Result createThing(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createThingAsync(array $args = [])
 * @method \RamseyAws\Result createThingType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createThingTypeAsync(array $args = [])
 * @method \RamseyAws\Result createTopicRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTopicRuleAsync(array $args = [])
 * @method \RamseyAws\Result deleteCACertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCACertificateAsync(array $args = [])
 * @method \RamseyAws\Result deleteCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCertificateAsync(array $args = [])
 * @method \RamseyAws\Result deletePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePolicyAsync(array $args = [])
 * @method \RamseyAws\Result deletePolicyVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePolicyVersionAsync(array $args = [])
 * @method \RamseyAws\Result deleteRegistrationCode(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRegistrationCodeAsync(array $args = [])
 * @method \RamseyAws\Result deleteThing(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteThingAsync(array $args = [])
 * @method \RamseyAws\Result deleteThingType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteThingTypeAsync(array $args = [])
 * @method \RamseyAws\Result deleteTopicRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTopicRuleAsync(array $args = [])
 * @method \RamseyAws\Result deprecateThingType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deprecateThingTypeAsync(array $args = [])
 * @method \RamseyAws\Result describeCACertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCACertificateAsync(array $args = [])
 * @method \RamseyAws\Result describeCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCertificateAsync(array $args = [])
 * @method \RamseyAws\Result describeEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEndpointAsync(array $args = [])
 * @method \RamseyAws\Result describeThing(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeThingAsync(array $args = [])
 * @method \RamseyAws\Result describeThingType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeThingTypeAsync(array $args = [])
 * @method \RamseyAws\Result detachPrincipalPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detachPrincipalPolicyAsync(array $args = [])
 * @method \RamseyAws\Result detachThingPrincipal(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detachThingPrincipalAsync(array $args = [])
 * @method \RamseyAws\Result disableTopicRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableTopicRuleAsync(array $args = [])
 * @method \RamseyAws\Result enableTopicRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableTopicRuleAsync(array $args = [])
 * @method \RamseyAws\Result getLoggingOptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLoggingOptionsAsync(array $args = [])
 * @method \RamseyAws\Result getPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPolicyAsync(array $args = [])
 * @method \RamseyAws\Result getPolicyVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPolicyVersionAsync(array $args = [])
 * @method \RamseyAws\Result getRegistrationCode(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRegistrationCodeAsync(array $args = [])
 * @method \RamseyAws\Result getTopicRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTopicRuleAsync(array $args = [])
 * @method \RamseyAws\Result listCACertificates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCACertificatesAsync(array $args = [])
 * @method \RamseyAws\Result listCertificates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCertificatesAsync(array $args = [])
 * @method \RamseyAws\Result listCertificatesByCA(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCertificatesByCAAsync(array $args = [])
 * @method \RamseyAws\Result listOutgoingCertificates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listOutgoingCertificatesAsync(array $args = [])
 * @method \RamseyAws\Result listPolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPoliciesAsync(array $args = [])
 * @method \RamseyAws\Result listPolicyPrincipals(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPolicyPrincipalsAsync(array $args = [])
 * @method \RamseyAws\Result listPolicyVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPolicyVersionsAsync(array $args = [])
 * @method \RamseyAws\Result listPrincipalPolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPrincipalPoliciesAsync(array $args = [])
 * @method \RamseyAws\Result listPrincipalThings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPrincipalThingsAsync(array $args = [])
 * @method \RamseyAws\Result listThingPrincipals(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listThingPrincipalsAsync(array $args = [])
 * @method \RamseyAws\Result listThingTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listThingTypesAsync(array $args = [])
 * @method \RamseyAws\Result listThings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listThingsAsync(array $args = [])
 * @method \RamseyAws\Result listTopicRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTopicRulesAsync(array $args = [])
 * @method \RamseyAws\Result registerCACertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerCACertificateAsync(array $args = [])
 * @method \RamseyAws\Result registerCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerCertificateAsync(array $args = [])
 * @method \RamseyAws\Result rejectCertificateTransfer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rejectCertificateTransferAsync(array $args = [])
 * @method \RamseyAws\Result replaceTopicRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise replaceTopicRuleAsync(array $args = [])
 * @method \RamseyAws\Result setDefaultPolicyVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setDefaultPolicyVersionAsync(array $args = [])
 * @method \RamseyAws\Result setLoggingOptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setLoggingOptionsAsync(array $args = [])
 * @method \RamseyAws\Result transferCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise transferCertificateAsync(array $args = [])
 * @method \RamseyAws\Result updateCACertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateCACertificateAsync(array $args = [])
 * @method \RamseyAws\Result updateCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateCertificateAsync(array $args = [])
 * @method \RamseyAws\Result updateThing(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateThingAsync(array $args = [])
 */
class IotClient extends AwsClient {}
