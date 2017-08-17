<?php
namespace RamseyAws\Ecr;

use RamseyAws\AwsClient;

/**
 * This client is used to interact with the **Amazon EC2 Container Registry** service.
 *
 * @method \RamseyAws\Result batchCheckLayerAvailability(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchCheckLayerAvailabilityAsync(array $args = [])
 * @method \RamseyAws\Result batchDeleteImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchDeleteImageAsync(array $args = [])
 * @method \RamseyAws\Result batchGetImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetImageAsync(array $args = [])
 * @method \RamseyAws\Result completeLayerUpload(array $args = [])
 * @method \GuzzleHttp\Promise\Promise completeLayerUploadAsync(array $args = [])
 * @method \RamseyAws\Result createRepository(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRepositoryAsync(array $args = [])
 * @method \RamseyAws\Result deleteRepository(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRepositoryAsync(array $args = [])
 * @method \RamseyAws\Result deleteRepositoryPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRepositoryPolicyAsync(array $args = [])
 * @method \RamseyAws\Result describeImages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeImagesAsync(array $args = [])
 * @method \RamseyAws\Result describeRepositories(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRepositoriesAsync(array $args = [])
 * @method \RamseyAws\Result getAuthorizationToken(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAuthorizationTokenAsync(array $args = [])
 * @method \RamseyAws\Result getDownloadUrlForLayer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDownloadUrlForLayerAsync(array $args = [])
 * @method \RamseyAws\Result getRepositoryPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRepositoryPolicyAsync(array $args = [])
 * @method \RamseyAws\Result initiateLayerUpload(array $args = [])
 * @method \GuzzleHttp\Promise\Promise initiateLayerUploadAsync(array $args = [])
 * @method \RamseyAws\Result listImages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listImagesAsync(array $args = [])
 * @method \RamseyAws\Result putImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putImageAsync(array $args = [])
 * @method \RamseyAws\Result setRepositoryPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setRepositoryPolicyAsync(array $args = [])
 * @method \RamseyAws\Result uploadLayerPart(array $args = [])
 * @method \GuzzleHttp\Promise\Promise uploadLayerPartAsync(array $args = [])
 */
class EcrClient extends AwsClient {}
