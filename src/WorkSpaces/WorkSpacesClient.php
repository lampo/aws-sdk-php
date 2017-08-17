<?php
namespace RamseyAws\WorkSpaces;

use RamseyAws\AwsClient;

/**
 * Amazon WorkSpaces client.
 *
 * @method \RamseyAws\Result createTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTagsAsync(array $args = [])
 * @method \RamseyAws\Result createWorkspaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createWorkspacesAsync(array $args = [])
 * @method \RamseyAws\Result deleteTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTagsAsync(array $args = [])
 * @method \RamseyAws\Result describeTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTagsAsync(array $args = [])
 * @method \RamseyAws\Result describeWorkspaceBundles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeWorkspaceBundlesAsync(array $args = [])
 * @method \RamseyAws\Result describeWorkspaceDirectories(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeWorkspaceDirectoriesAsync(array $args = [])
 * @method \RamseyAws\Result describeWorkspaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeWorkspacesAsync(array $args = [])
 * @method \RamseyAws\Result describeWorkspacesConnectionStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeWorkspacesConnectionStatusAsync(array $args = [])
 * @method \RamseyAws\Result modifyWorkspaceProperties(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyWorkspacePropertiesAsync(array $args = [])
 * @method \RamseyAws\Result rebootWorkspaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rebootWorkspacesAsync(array $args = [])
 * @method \RamseyAws\Result rebuildWorkspaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rebuildWorkspacesAsync(array $args = [])
 * @method \RamseyAws\Result startWorkspaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startWorkspacesAsync(array $args = [])
 * @method \RamseyAws\Result stopWorkspaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopWorkspacesAsync(array $args = [])
 * @method \RamseyAws\Result terminateWorkspaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise terminateWorkspacesAsync(array $args = [])
 */
class WorkSpacesClient extends AwsClient {}
