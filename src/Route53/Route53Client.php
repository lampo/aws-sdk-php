<?php
namespace RamseyAws\Route53;

use RamseyAws\AwsClient;
use RamseyAws\CommandInterface;
use Psr\Http\Message\RequestInterface;

/**
 * This client is used to interact with the **Amazon Route 53** service.
 *
 * @method \RamseyAws\Result associateVPCWithHostedZone(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateVPCWithHostedZoneAsync(array $args = [])
 * @method \RamseyAws\Result changeResourceRecordSets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise changeResourceRecordSetsAsync(array $args = [])
 * @method \RamseyAws\Result changeTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise changeTagsForResourceAsync(array $args = [])
 * @method \RamseyAws\Result createHealthCheck(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createHealthCheckAsync(array $args = [])
 * @method \RamseyAws\Result createHostedZone(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createHostedZoneAsync(array $args = [])
 * @method \RamseyAws\Result createReusableDelegationSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createReusableDelegationSetAsync(array $args = [])
 * @method \RamseyAws\Result createTrafficPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTrafficPolicyAsync(array $args = [])
 * @method \RamseyAws\Result createTrafficPolicyInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTrafficPolicyInstanceAsync(array $args = [])
 * @method \RamseyAws\Result createTrafficPolicyVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTrafficPolicyVersionAsync(array $args = [])
 * @method \RamseyAws\Result createVPCAssociationAuthorization(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createVPCAssociationAuthorizationAsync(array $args = [])
 * @method \RamseyAws\Result deleteHealthCheck(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteHealthCheckAsync(array $args = [])
 * @method \RamseyAws\Result deleteHostedZone(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteHostedZoneAsync(array $args = [])
 * @method \RamseyAws\Result deleteReusableDelegationSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteReusableDelegationSetAsync(array $args = [])
 * @method \RamseyAws\Result deleteTrafficPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTrafficPolicyAsync(array $args = [])
 * @method \RamseyAws\Result deleteTrafficPolicyInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTrafficPolicyInstanceAsync(array $args = [])
 * @method \RamseyAws\Result deleteVPCAssociationAuthorization(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVPCAssociationAuthorizationAsync(array $args = [])
 * @method \RamseyAws\Result disassociateVPCFromHostedZone(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateVPCFromHostedZoneAsync(array $args = [])
 * @method \RamseyAws\Result getChange(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getChangeAsync(array $args = [])
 * @method \RamseyAws\Result getCheckerIpRanges(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCheckerIpRangesAsync(array $args = [])
 * @method \RamseyAws\Result getGeoLocation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getGeoLocationAsync(array $args = [])
 * @method \RamseyAws\Result getHealthCheck(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getHealthCheckAsync(array $args = [])
 * @method \RamseyAws\Result getHealthCheckCount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getHealthCheckCountAsync(array $args = [])
 * @method \RamseyAws\Result getHealthCheckLastFailureReason(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getHealthCheckLastFailureReasonAsync(array $args = [])
 * @method \RamseyAws\Result getHealthCheckStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getHealthCheckStatusAsync(array $args = [])
 * @method \RamseyAws\Result getHostedZone(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getHostedZoneAsync(array $args = [])
 * @method \RamseyAws\Result getHostedZoneCount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getHostedZoneCountAsync(array $args = [])
 * @method \RamseyAws\Result getReusableDelegationSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getReusableDelegationSetAsync(array $args = [])
 * @method \RamseyAws\Result getTrafficPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTrafficPolicyAsync(array $args = [])
 * @method \RamseyAws\Result getTrafficPolicyInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTrafficPolicyInstanceAsync(array $args = [])
 * @method \RamseyAws\Result getTrafficPolicyInstanceCount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTrafficPolicyInstanceCountAsync(array $args = [])
 * @method \RamseyAws\Result listGeoLocations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listGeoLocationsAsync(array $args = [])
 * @method \RamseyAws\Result listHealthChecks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listHealthChecksAsync(array $args = [])
 * @method \RamseyAws\Result listHostedZones(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listHostedZonesAsync(array $args = [])
 * @method \RamseyAws\Result listHostedZonesByName(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listHostedZonesByNameAsync(array $args = [])
 * @method \RamseyAws\Result listResourceRecordSets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResourceRecordSetsAsync(array $args = [])
 * @method \RamseyAws\Result listReusableDelegationSets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listReusableDelegationSetsAsync(array $args = [])
 * @method \RamseyAws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \RamseyAws\Result listTagsForResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourcesAsync(array $args = [])
 * @method \RamseyAws\Result listTrafficPolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTrafficPoliciesAsync(array $args = [])
 * @method \RamseyAws\Result listTrafficPolicyInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTrafficPolicyInstancesAsync(array $args = [])
 * @method \RamseyAws\Result listTrafficPolicyInstancesByHostedZone(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTrafficPolicyInstancesByHostedZoneAsync(array $args = [])
 * @method \RamseyAws\Result listTrafficPolicyInstancesByPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTrafficPolicyInstancesByPolicyAsync(array $args = [])
 * @method \RamseyAws\Result listTrafficPolicyVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTrafficPolicyVersionsAsync(array $args = [])
 * @method \RamseyAws\Result listVPCAssociationAuthorizations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listVPCAssociationAuthorizationsAsync(array $args = [])
 * @method \RamseyAws\Result testDNSAnswer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise testDNSAnswerAsync(array $args = [])
 * @method \RamseyAws\Result updateHealthCheck(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateHealthCheckAsync(array $args = [])
 * @method \RamseyAws\Result updateHostedZoneComment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateHostedZoneCommentAsync(array $args = [])
 * @method \RamseyAws\Result updateTrafficPolicyComment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateTrafficPolicyCommentAsync(array $args = [])
 * @method \RamseyAws\Result updateTrafficPolicyInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateTrafficPolicyInstanceAsync(array $args = [])
 */
class Route53Client extends AwsClient
{
    public function __construct(array $args)
    {
        parent::__construct($args);
        $this->getHandlerList()->appendInit($this->cleanIdFn(), 'route53.clean_id');
    }

    private function cleanIdFn()
    {
        return function (callable $handler) {
            return function (CommandInterface $c, RequestInterface $r = null) use ($handler) {
                foreach (['Id', 'HostedZoneId', 'DelegationSetId'] as $clean) {
                    if ($c->hasParam($clean)) {
                        $c[$clean] = $this->cleanId($c[$clean]);
                    }
                }
                return $handler($c, $r);
            };
        };
    }

    private function cleanId($id)
    {
        static $toClean = ['/hostedzone/', '/change/', '/delegationset/'];

        return str_replace($toClean, '', $id);
    }
}
