<?php
namespace RamseyAws\ElasticTranscoder;

use RamseyAws\AwsClient;

/**
 * This client is used to interact with the **Amazon Elastic Transcoder** service.
 *
 * @method \RamseyAws\Result cancelJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelJobAsync(array $args = [])
 * @method \RamseyAws\Result createJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createJobAsync(array $args = [])
 * @method \RamseyAws\Result createPipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPipelineAsync(array $args = [])
 * @method \RamseyAws\Result createPreset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPresetAsync(array $args = [])
 * @method \RamseyAws\Result deletePipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePipelineAsync(array $args = [])
 * @method \RamseyAws\Result deletePreset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePresetAsync(array $args = [])
 * @method \RamseyAws\Result listJobsByPipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listJobsByPipelineAsync(array $args = [])
 * @method \RamseyAws\Result listJobsByStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listJobsByStatusAsync(array $args = [])
 * @method \RamseyAws\Result listPipelines(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPipelinesAsync(array $args = [])
 * @method \RamseyAws\Result listPresets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPresetsAsync(array $args = [])
 * @method \RamseyAws\Result readJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise readJobAsync(array $args = [])
 * @method \RamseyAws\Result readPipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise readPipelineAsync(array $args = [])
 * @method \RamseyAws\Result readPreset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise readPresetAsync(array $args = [])
 * @method \RamseyAws\Result testRole(array $args = [])
 * @method \GuzzleHttp\Promise\Promise testRoleAsync(array $args = [])
 * @method \RamseyAws\Result updatePipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePipelineAsync(array $args = [])
 * @method \RamseyAws\Result updatePipelineNotifications(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePipelineNotificationsAsync(array $args = [])
 * @method \RamseyAws\Result updatePipelineStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePipelineStatusAsync(array $args = [])
 */
class ElasticTranscoderClient extends AwsClient {}
