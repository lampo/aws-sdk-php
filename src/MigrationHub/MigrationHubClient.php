<?php
namespace RamseyAws\MigrationHub;

use RamseyAws\AwsClient;

/**
 * This client is used to interact with the **AWS Migration Hub** service.
 * @method \RamseyAws\Result associateCreatedArtifact(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateCreatedArtifactAsync(array $args = [])
 * @method \RamseyAws\Result associateDiscoveredResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateDiscoveredResourceAsync(array $args = [])
 * @method \RamseyAws\Result createProgressUpdateStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createProgressUpdateStreamAsync(array $args = [])
 * @method \RamseyAws\Result deleteProgressUpdateStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteProgressUpdateStreamAsync(array $args = [])
 * @method \RamseyAws\Result describeApplicationState(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeApplicationStateAsync(array $args = [])
 * @method \RamseyAws\Result describeMigrationTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMigrationTaskAsync(array $args = [])
 * @method \RamseyAws\Result disassociateCreatedArtifact(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateCreatedArtifactAsync(array $args = [])
 * @method \RamseyAws\Result disassociateDiscoveredResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateDiscoveredResourceAsync(array $args = [])
 * @method \RamseyAws\Result importMigrationTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importMigrationTaskAsync(array $args = [])
 * @method \RamseyAws\Result listCreatedArtifacts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCreatedArtifactsAsync(array $args = [])
 * @method \RamseyAws\Result listDiscoveredResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDiscoveredResourcesAsync(array $args = [])
 * @method \RamseyAws\Result listMigrationTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listMigrationTasksAsync(array $args = [])
 * @method \RamseyAws\Result listProgressUpdateStreams(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProgressUpdateStreamsAsync(array $args = [])
 * @method \RamseyAws\Result notifyApplicationState(array $args = [])
 * @method \GuzzleHttp\Promise\Promise notifyApplicationStateAsync(array $args = [])
 * @method \RamseyAws\Result notifyMigrationTaskState(array $args = [])
 * @method \GuzzleHttp\Promise\Promise notifyMigrationTaskStateAsync(array $args = [])
 * @method \RamseyAws\Result putResourceAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putResourceAttributesAsync(array $args = [])
 */
class MigrationHubClient extends AwsClient {}
