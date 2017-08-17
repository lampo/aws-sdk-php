<?php
namespace RamseyAws\Efs;

use RamseyAws\AwsClient;

/**
 * This client is used to interact with **Amazon EFS**.
 *
 * @method \RamseyAws\Result createFileSystem(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFileSystemAsync(array $args = [])
 * @method \RamseyAws\Result createMountTarget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMountTargetAsync(array $args = [])
 * @method \RamseyAws\Result createTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTagsAsync(array $args = [])
 * @method \RamseyAws\Result deleteFileSystem(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFileSystemAsync(array $args = [])
 * @method \RamseyAws\Result deleteMountTarget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMountTargetAsync(array $args = [])
 * @method \RamseyAws\Result deleteTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTagsAsync(array $args = [])
 * @method \RamseyAws\Result describeFileSystems(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFileSystemsAsync(array $args = [])
 * @method \RamseyAws\Result describeMountTargetSecurityGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMountTargetSecurityGroupsAsync(array $args = [])
 * @method \RamseyAws\Result describeMountTargets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMountTargetsAsync(array $args = [])
 * @method \RamseyAws\Result describeTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTagsAsync(array $args = [])
 * @method \RamseyAws\Result modifyMountTargetSecurityGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyMountTargetSecurityGroupsAsync(array $args = [])
 */
class EfsClient extends AwsClient {}
