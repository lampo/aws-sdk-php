<?php
namespace RamseyAws\DAX;

use RamseyAws\AwsClient;

/**
 * This client is used to interact with the **Amazon DynamoDB Accelerator (DAX)** service.
 * @method \RamseyAws\Result createCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createClusterAsync(array $args = [])
 * @method \RamseyAws\Result createParameterGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createParameterGroupAsync(array $args = [])
 * @method \RamseyAws\Result createSubnetGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSubnetGroupAsync(array $args = [])
 * @method \RamseyAws\Result decreaseReplicationFactor(array $args = [])
 * @method \GuzzleHttp\Promise\Promise decreaseReplicationFactorAsync(array $args = [])
 * @method \RamseyAws\Result deleteCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteClusterAsync(array $args = [])
 * @method \RamseyAws\Result deleteParameterGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteParameterGroupAsync(array $args = [])
 * @method \RamseyAws\Result deleteSubnetGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSubnetGroupAsync(array $args = [])
 * @method \RamseyAws\Result describeClusters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeClustersAsync(array $args = [])
 * @method \RamseyAws\Result describeDefaultParameters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDefaultParametersAsync(array $args = [])
 * @method \RamseyAws\Result describeEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEventsAsync(array $args = [])
 * @method \RamseyAws\Result describeParameterGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeParameterGroupsAsync(array $args = [])
 * @method \RamseyAws\Result describeParameters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeParametersAsync(array $args = [])
 * @method \RamseyAws\Result describeSubnetGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSubnetGroupsAsync(array $args = [])
 * @method \RamseyAws\Result increaseReplicationFactor(array $args = [])
 * @method \GuzzleHttp\Promise\Promise increaseReplicationFactorAsync(array $args = [])
 * @method \RamseyAws\Result listTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsAsync(array $args = [])
 * @method \RamseyAws\Result rebootNode(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rebootNodeAsync(array $args = [])
 * @method \RamseyAws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \RamseyAws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \RamseyAws\Result updateCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateClusterAsync(array $args = [])
 * @method \RamseyAws\Result updateParameterGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateParameterGroupAsync(array $args = [])
 * @method \RamseyAws\Result updateSubnetGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSubnetGroupAsync(array $args = [])
 */
class DAXClient extends AwsClient {}