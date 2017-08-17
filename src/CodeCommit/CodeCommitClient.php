<?php
namespace RamseyAws\CodeCommit;

use RamseyAws\AwsClient;

/**
 * This client is used to interact with the **AWS CodeCommit** service.
 *
 * @method \RamseyAws\Result batchGetRepositories(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetRepositoriesAsync(array $args = [])
 * @method \RamseyAws\Result createBranch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBranchAsync(array $args = [])
 * @method \RamseyAws\Result createRepository(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRepositoryAsync(array $args = [])
 * @method \RamseyAws\Result deleteRepository(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRepositoryAsync(array $args = [])
 * @method \RamseyAws\Result getBlob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBlobAsync(array $args = [])
 * @method \RamseyAws\Result getBranch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBranchAsync(array $args = [])
 * @method \RamseyAws\Result getCommit(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCommitAsync(array $args = [])
 * @method \RamseyAws\Result getDifferences(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDifferencesAsync(array $args = [])
 * @method \RamseyAws\Result getRepository(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRepositoryAsync(array $args = [])
 * @method \RamseyAws\Result getRepositoryTriggers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRepositoryTriggersAsync(array $args = [])
 * @method \RamseyAws\Result listBranches(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBranchesAsync(array $args = [])
 * @method \RamseyAws\Result listRepositories(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRepositoriesAsync(array $args = [])
 * @method \RamseyAws\Result putRepositoryTriggers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putRepositoryTriggersAsync(array $args = [])
 * @method \RamseyAws\Result testRepositoryTriggers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise testRepositoryTriggersAsync(array $args = [])
 * @method \RamseyAws\Result updateDefaultBranch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDefaultBranchAsync(array $args = [])
 * @method \RamseyAws\Result updateRepositoryDescription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRepositoryDescriptionAsync(array $args = [])
 * @method \RamseyAws\Result updateRepositoryName(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRepositoryNameAsync(array $args = [])
 */
class CodeCommitClient extends AwsClient {}
