<?php
namespace RamseyAws\CodeBuild;

use RamseyAws\AwsClient;

/**
 * This client is used to interact with the **AWS CodeBuild** service.
 * @method \RamseyAws\Result batchGetBuilds(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetBuildsAsync(array $args = [])
 * @method \RamseyAws\Result batchGetProjects(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetProjectsAsync(array $args = [])
 * @method \RamseyAws\Result createProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createProjectAsync(array $args = [])
 * @method \RamseyAws\Result deleteProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteProjectAsync(array $args = [])
 * @method \RamseyAws\Result listBuilds(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBuildsAsync(array $args = [])
 * @method \RamseyAws\Result listBuildsForProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBuildsForProjectAsync(array $args = [])
 * @method \RamseyAws\Result listCuratedEnvironmentImages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCuratedEnvironmentImagesAsync(array $args = [])
 * @method \RamseyAws\Result listProjects(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProjectsAsync(array $args = [])
 * @method \RamseyAws\Result startBuild(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startBuildAsync(array $args = [])
 * @method \RamseyAws\Result stopBuild(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopBuildAsync(array $args = [])
 * @method \RamseyAws\Result updateProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateProjectAsync(array $args = [])
 */
class CodeBuildClient extends AwsClient {}
