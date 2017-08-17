<?php
namespace RamseyAws\Rekognition;

use RamseyAws\AwsClient;

/**
 * This client is used to interact with the **Amazon Rekognition** service.
 * @method \RamseyAws\Result compareFaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise compareFacesAsync(array $args = [])
 * @method \RamseyAws\Result createCollection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCollectionAsync(array $args = [])
 * @method \RamseyAws\Result deleteCollection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCollectionAsync(array $args = [])
 * @method \RamseyAws\Result deleteFaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFacesAsync(array $args = [])
 * @method \RamseyAws\Result detectFaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detectFacesAsync(array $args = [])
 * @method \RamseyAws\Result detectLabels(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detectLabelsAsync(array $args = [])
 * @method \RamseyAws\Result detectModerationLabels(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detectModerationLabelsAsync(array $args = [])
 * @method \RamseyAws\Result getCelebrityInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCelebrityInfoAsync(array $args = [])
 * @method \RamseyAws\Result indexFaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise indexFacesAsync(array $args = [])
 * @method \RamseyAws\Result listCollections(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCollectionsAsync(array $args = [])
 * @method \RamseyAws\Result listFaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFacesAsync(array $args = [])
 * @method \RamseyAws\Result recognizeCelebrities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise recognizeCelebritiesAsync(array $args = [])
 * @method \RamseyAws\Result searchFaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchFacesAsync(array $args = [])
 * @method \RamseyAws\Result searchFacesByImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchFacesByImageAsync(array $args = [])
 */
class RekognitionClient extends AwsClient {}
