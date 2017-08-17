<?php
namespace RamseyAws\DataPipeline;

use RamseyAws\AwsClient;

/**
 * This client is used to interact with the **AWS Data Pipeline** service.
 *
 * @method \RamseyAws\Result activatePipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise activatePipelineAsync(array $args = [])
 * @method \RamseyAws\Result addTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addTagsAsync(array $args = [])
 * @method \RamseyAws\Result createPipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPipelineAsync(array $args = [])
 * @method \RamseyAws\Result deactivatePipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deactivatePipelineAsync(array $args = [])
 * @method \RamseyAws\Result deletePipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePipelineAsync(array $args = [])
 * @method \RamseyAws\Result describeObjects(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeObjectsAsync(array $args = [])
 * @method \RamseyAws\Result describePipelines(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePipelinesAsync(array $args = [])
 * @method \RamseyAws\Result evaluateExpression(array $args = [])
 * @method \GuzzleHttp\Promise\Promise evaluateExpressionAsync(array $args = [])
 * @method \RamseyAws\Result getPipelineDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPipelineDefinitionAsync(array $args = [])
 * @method \RamseyAws\Result listPipelines(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPipelinesAsync(array $args = [])
 * @method \RamseyAws\Result pollForTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise pollForTaskAsync(array $args = [])
 * @method \RamseyAws\Result putPipelineDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putPipelineDefinitionAsync(array $args = [])
 * @method \RamseyAws\Result queryObjects(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryObjectsAsync(array $args = [])
 * @method \RamseyAws\Result removeTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeTagsAsync(array $args = [])
 * @method \RamseyAws\Result reportTaskProgress(array $args = [])
 * @method \GuzzleHttp\Promise\Promise reportTaskProgressAsync(array $args = [])
 * @method \RamseyAws\Result reportTaskRunnerHeartbeat(array $args = [])
 * @method \GuzzleHttp\Promise\Promise reportTaskRunnerHeartbeatAsync(array $args = [])
 * @method \RamseyAws\Result setStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setStatusAsync(array $args = [])
 * @method \RamseyAws\Result setTaskStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setTaskStatusAsync(array $args = [])
 * @method \RamseyAws\Result validatePipelineDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise validatePipelineDefinitionAsync(array $args = [])
 */
class DataPipelineClient extends AwsClient {}
