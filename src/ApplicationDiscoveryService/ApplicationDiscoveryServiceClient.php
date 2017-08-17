<?php
namespace RamseyAws\ApplicationDiscoveryService;

use RamseyAws\AwsClient;

/**
 * This client is used to interact with the **AWS Application Discovery Service** service.
 * @method \RamseyAws\Result associateConfigurationItemsToApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateConfigurationItemsToApplicationAsync(array $args = [])
 * @method \RamseyAws\Result createApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createApplicationAsync(array $args = [])
 * @method \RamseyAws\Result createTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTagsAsync(array $args = [])
 * @method \RamseyAws\Result deleteApplications(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteApplicationsAsync(array $args = [])
 * @method \RamseyAws\Result deleteTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTagsAsync(array $args = [])
 * @method \RamseyAws\Result describeAgents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAgentsAsync(array $args = [])
 * @method \RamseyAws\Result describeConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeConfigurationsAsync(array $args = [])
 * @method \RamseyAws\Result describeExportConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeExportConfigurationsAsync(array $args = [])
 * @method \RamseyAws\Result describeExportTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeExportTasksAsync(array $args = [])
 * @method \RamseyAws\Result describeTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTagsAsync(array $args = [])
 * @method \RamseyAws\Result disassociateConfigurationItemsFromApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateConfigurationItemsFromApplicationAsync(array $args = [])
 * @method \RamseyAws\Result exportConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise exportConfigurationsAsync(array $args = [])
 * @method \RamseyAws\Result getDiscoverySummary(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDiscoverySummaryAsync(array $args = [])
 * @method \RamseyAws\Result listConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listConfigurationsAsync(array $args = [])
 * @method \RamseyAws\Result listServerNeighbors(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listServerNeighborsAsync(array $args = [])
 * @method \RamseyAws\Result startDataCollectionByAgentIds(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startDataCollectionByAgentIdsAsync(array $args = [])
 * @method \RamseyAws\Result startExportTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startExportTaskAsync(array $args = [])
 * @method \RamseyAws\Result stopDataCollectionByAgentIds(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopDataCollectionByAgentIdsAsync(array $args = [])
 * @method \RamseyAws\Result updateApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateApplicationAsync(array $args = [])
 */
class ApplicationDiscoveryServiceClient extends AwsClient {}
