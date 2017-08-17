<?php
namespace RamseyAws\Rds;

use RamseyAws\AwsClient;
use RamseyAws\Api\Service;
use RamseyAws\Api\DocModel;
use RamseyAws\Api\ApiProvider;
use RamseyAws\PresignUrlMiddleware;

/**
 * This client is used to interact with the **Amazon Relational Database Service (Amazon RDS)**.
 *
 * @method \RamseyAws\Result addSourceIdentifierToSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addSourceIdentifierToSubscriptionAsync(array $args = [])
 * @method \RamseyAws\Result addTagsToResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addTagsToResourceAsync(array $args = [])
 * @method \RamseyAws\Result authorizeDBSecurityGroupIngress(array $args = [])
 * @method \GuzzleHttp\Promise\Promise authorizeDBSecurityGroupIngressAsync(array $args = [])
 * @method \RamseyAws\Result copyDBParameterGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise copyDBParameterGroupAsync(array $args = [])
 * @method \RamseyAws\Result copyDBSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise copyDBSnapshotAsync(array $args = [])
 * @method \RamseyAws\Result copyOptionGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise copyOptionGroupAsync(array $args = [])
 * @method \RamseyAws\Result createDBInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDBInstanceAsync(array $args = [])
 * @method \RamseyAws\Result createDBInstanceReadReplica(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDBInstanceReadReplicaAsync(array $args = [])
 * @method \RamseyAws\Result createDBParameterGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDBParameterGroupAsync(array $args = [])
 * @method \RamseyAws\Result createDBSecurityGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDBSecurityGroupAsync(array $args = [])
 * @method \RamseyAws\Result createDBSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDBSnapshotAsync(array $args = [])
 * @method \RamseyAws\Result createDBSubnetGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDBSubnetGroupAsync(array $args = [])
 * @method \RamseyAws\Result createEventSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createEventSubscriptionAsync(array $args = [])
 * @method \RamseyAws\Result createOptionGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createOptionGroupAsync(array $args = [])
 * @method \RamseyAws\Result deleteDBInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDBInstanceAsync(array $args = [])
 * @method \RamseyAws\Result deleteDBParameterGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDBParameterGroupAsync(array $args = [])
 * @method \RamseyAws\Result deleteDBSecurityGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDBSecurityGroupAsync(array $args = [])
 * @method \RamseyAws\Result deleteDBSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDBSnapshotAsync(array $args = [])
 * @method \RamseyAws\Result deleteDBSubnetGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDBSubnetGroupAsync(array $args = [])
 * @method \RamseyAws\Result deleteEventSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteEventSubscriptionAsync(array $args = [])
 * @method \RamseyAws\Result deleteOptionGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteOptionGroupAsync(array $args = [])
 * @method \RamseyAws\Result describeDBEngineVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDBEngineVersionsAsync(array $args = [])
 * @method \RamseyAws\Result describeDBInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDBInstancesAsync(array $args = [])
 * @method \RamseyAws\Result describeDBLogFiles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDBLogFilesAsync(array $args = [])
 * @method \RamseyAws\Result describeDBParameterGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDBParameterGroupsAsync(array $args = [])
 * @method \RamseyAws\Result describeDBParameters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDBParametersAsync(array $args = [])
 * @method \RamseyAws\Result describeDBSecurityGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDBSecurityGroupsAsync(array $args = [])
 * @method \RamseyAws\Result describeDBSnapshots(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDBSnapshotsAsync(array $args = [])
 * @method \RamseyAws\Result describeDBSubnetGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDBSubnetGroupsAsync(array $args = [])
 * @method \RamseyAws\Result describeEngineDefaultParameters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEngineDefaultParametersAsync(array $args = [])
 * @method \RamseyAws\Result describeEventCategories(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEventCategoriesAsync(array $args = [])
 * @method \RamseyAws\Result describeEventSubscriptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEventSubscriptionsAsync(array $args = [])
 * @method \RamseyAws\Result describeEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEventsAsync(array $args = [])
 * @method \RamseyAws\Result describeOptionGroupOptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeOptionGroupOptionsAsync(array $args = [])
 * @method \RamseyAws\Result describeOptionGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeOptionGroupsAsync(array $args = [])
 * @method \RamseyAws\Result describeOrderableDBInstanceOptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeOrderableDBInstanceOptionsAsync(array $args = [])
 * @method \RamseyAws\Result describeReservedDBInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeReservedDBInstancesAsync(array $args = [])
 * @method \RamseyAws\Result describeReservedDBInstancesOfferings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeReservedDBInstancesOfferingsAsync(array $args = [])
 * @method \RamseyAws\Result downloadDBLogFilePortion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise downloadDBLogFilePortionAsync(array $args = [])
 * @method \RamseyAws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \RamseyAws\Result modifyDBInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyDBInstanceAsync(array $args = [])
 * @method \RamseyAws\Result modifyDBParameterGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyDBParameterGroupAsync(array $args = [])
 * @method \RamseyAws\Result modifyDBSubnetGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyDBSubnetGroupAsync(array $args = [])
 * @method \RamseyAws\Result modifyEventSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyEventSubscriptionAsync(array $args = [])
 * @method \RamseyAws\Result modifyOptionGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyOptionGroupAsync(array $args = [])
 * @method \RamseyAws\Result promoteReadReplica(array $args = [])
 * @method \GuzzleHttp\Promise\Promise promoteReadReplicaAsync(array $args = [])
 * @method \RamseyAws\Result purchaseReservedDBInstancesOffering(array $args = [])
 * @method \GuzzleHttp\Promise\Promise purchaseReservedDBInstancesOfferingAsync(array $args = [])
 * @method \RamseyAws\Result rebootDBInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rebootDBInstanceAsync(array $args = [])
 * @method \RamseyAws\Result removeSourceIdentifierFromSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeSourceIdentifierFromSubscriptionAsync(array $args = [])
 * @method \RamseyAws\Result removeTagsFromResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeTagsFromResourceAsync(array $args = [])
 * @method \RamseyAws\Result resetDBParameterGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resetDBParameterGroupAsync(array $args = [])
 * @method \RamseyAws\Result restoreDBInstanceFromDBSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise restoreDBInstanceFromDBSnapshotAsync(array $args = [])
 * @method \RamseyAws\Result restoreDBInstanceToPointInTime(array $args = [])
 * @method \GuzzleHttp\Promise\Promise restoreDBInstanceToPointInTimeAsync(array $args = [])
 * @method \RamseyAws\Result revokeDBSecurityGroupIngress(array $args = [])
 * @method \GuzzleHttp\Promise\Promise revokeDBSecurityGroupIngressAsync(array $args = [])
 * @method \RamseyAws\Result addRoleToDBCluster(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise addRoleToDBClusterAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \RamseyAws\Result applyPendingMaintenanceAction(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise applyPendingMaintenanceActionAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \RamseyAws\Result copyDBClusterParameterGroup(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise copyDBClusterParameterGroupAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \RamseyAws\Result copyDBClusterSnapshot(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise copyDBClusterSnapshotAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \RamseyAws\Result createDBCluster(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise createDBClusterAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \RamseyAws\Result createDBClusterParameterGroup(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise createDBClusterParameterGroupAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \RamseyAws\Result createDBClusterSnapshot(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise createDBClusterSnapshotAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \RamseyAws\Result deleteDBCluster(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise deleteDBClusterAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \RamseyAws\Result deleteDBClusterParameterGroup(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise deleteDBClusterParameterGroupAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \RamseyAws\Result deleteDBClusterSnapshot(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise deleteDBClusterSnapshotAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \RamseyAws\Result describeAccountAttributes(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise describeAccountAttributesAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \RamseyAws\Result describeCertificates(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise describeCertificatesAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \RamseyAws\Result describeDBClusterParameterGroups(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise describeDBClusterParameterGroupsAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \RamseyAws\Result describeDBClusterParameters(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise describeDBClusterParametersAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \RamseyAws\Result describeDBClusterSnapshotAttributes(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise describeDBClusterSnapshotAttributesAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \RamseyAws\Result describeDBClusterSnapshots(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise describeDBClusterSnapshotsAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \RamseyAws\Result describeDBClusters(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise describeDBClustersAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \RamseyAws\Result describeDBSnapshotAttributes(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise describeDBSnapshotAttributesAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \RamseyAws\Result describeEngineDefaultClusterParameters(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise describeEngineDefaultClusterParametersAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \RamseyAws\Result describePendingMaintenanceActions(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise describePendingMaintenanceActionsAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \RamseyAws\Result describeSourceRegions(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise describeSourceRegionsAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \RamseyAws\Result failoverDBCluster(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise failoverDBClusterAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \RamseyAws\Result modifyDBCluster(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise modifyDBClusterAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \RamseyAws\Result modifyDBClusterParameterGroup(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise modifyDBClusterParameterGroupAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \RamseyAws\Result modifyDBClusterSnapshotAttribute(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise modifyDBClusterSnapshotAttributeAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \RamseyAws\Result modifyDBSnapshot(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise modifyDBSnapshotAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \RamseyAws\Result modifyDBSnapshotAttribute(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise modifyDBSnapshotAttributeAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \RamseyAws\Result promoteReadReplicaDBCluster(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise promoteReadReplicaDBClusterAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \RamseyAws\Result removeRoleFromDBCluster(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise removeRoleFromDBClusterAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \RamseyAws\Result resetDBClusterParameterGroup(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise resetDBClusterParameterGroupAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \RamseyAws\Result restoreDBClusterFromS3(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise restoreDBClusterFromS3Async(array $args = []) (supported in versions 2014-10-31)
 * @method \RamseyAws\Result restoreDBClusterFromSnapshot(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise restoreDBClusterFromSnapshotAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \RamseyAws\Result restoreDBClusterToPointInTime(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise restoreDBClusterToPointInTimeAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \RamseyAws\Result startDBInstance(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise startDBInstanceAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \RamseyAws\Result stopDBInstance(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise stopDBInstanceAsync(array $args = []) (supported in versions 2014-10-31)
 */
class RdsClient extends AwsClient
{
    public function __construct(array $args)
    {
        $args['with_resolved'] = function (array $args) {
            $this->getHandlerList()->appendInit(
                PresignUrlMiddleware::wrap(
                    $this,
                    $args['endpoint_provider'],
                    [
                        'operations' => [
                            'CopyDBSnapshot',
                            'CreateDBInstanceReadReplica',
                            'CopyDBClusterSnapshot',
                            'CreateDBCluster'
                        ],
                        'service' => 'rds',
                        'presign_param' => 'PreSignedUrl',
                    ]
                ),
                'rds.presigner'
            );
        };

        parent::__construct($args);
    }

    /**
     * @internal
     * @codeCoverageIgnore
     */
    public static function applyDocFilters(array $api, array $docs)
    {
        // Add the SourceRegion parameter
        $docs['shapes']['SourceRegion']['base'] = 'A required parameter that indicates '
            . 'the region that the DB snapshot will be copied from.';
        $api['shapes']['SourceRegion'] = ['type' => 'string'];
        $api['shapes']['CopyDBSnapshotMessage']['members']['SourceRegion'] = ['shape' => 'SourceRegion'];
        $api['shapes']['CreateDBInstanceReadReplicaMessage']['members']['SourceRegion'] = ['shape' => 'SourceRegion'];

        // Several parameters in presign APIs are optional.
        $docs['shapes']['String']['refs']['CopyDBSnapshotMessage$PreSignedUrl']
            = '<div class="alert alert-info">The SDK will compute this value '
            . 'for you on your behalf.</div>';
        $docs['shapes']['String']['refs']['CopyDBSnapshotMessage$DestinationRegion']
            = '<div class="alert alert-info">The SDK will populate this '
            . 'parameter on your behalf using the configured region value of '
            . 'the client.</div>';

        // Several parameters in presign APIs are optional.
        $docs['shapes']['String']['refs']['CreateDBInstanceReadReplicaMessage$PreSignedUrl']
            = '<div class="alert alert-info">The SDK will compute this value '
            . 'for you on your behalf.</div>';
        $docs['shapes']['String']['refs']['CreateDBInstanceReadReplicaMessage$DestinationRegion']
            = '<div class="alert alert-info">The SDK will populate this '
            . 'parameter on your behalf using the configured region value of '
            . 'the client.</div>';

        if ($api['metadata']['apiVersion'] != '2014-09-01') {
            $api['shapes']['CopyDBClusterSnapshotMessage']['members']['SourceRegion'] = ['shape' => 'SourceRegion'];
            $api['shapes']['CreateDBClusterMessage']['members']['SourceRegion'] = ['shape' => 'SourceRegion'];

            // Several parameters in presign APIs are optional.
            $docs['shapes']['String']['refs']['CopyDBClusterSnapshotMessage$PreSignedUrl']
                = '<div class="alert alert-info">The SDK will compute this value '
                . 'for you on your behalf.</div>';
            $docs['shapes']['String']['refs']['CopyDBClusterSnapshotMessage$DestinationRegion']
                = '<div class="alert alert-info">The SDK will populate this '
                . 'parameter on your behalf using the configured region value of '
                . 'the client.</div>';

            // Several parameters in presign APIs are optional.
            $docs['shapes']['String']['refs']['CreateDBClusterMessage$PreSignedUrl']
                = '<div class="alert alert-info">The SDK will compute this value '
                . 'for you on your behalf.</div>';
            $docs['shapes']['String']['refs']['CreateDBClusterMessage$DestinationRegion']
                = '<div class="alert alert-info">The SDK will populate this '
                . 'parameter on your behalf using the configured region value of '
                . 'the client.</div>';
        }

        return [
            new Service($api, ApiProvider::defaultProvider()),
            new DocModel($docs)
        ];
    }
}
