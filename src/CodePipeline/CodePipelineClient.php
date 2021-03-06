<?php
namespace RamseyAws\CodePipeline;

use RamseyAws\AwsClient;

/**
 * This client is used to interact with the **Amazon CodePipeline** service.
 *
 * @method \RamseyAws\Result acknowledgeJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise acknowledgeJobAsync(array $args = [])
 * @method \RamseyAws\Result acknowledgeThirdPartyJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise acknowledgeThirdPartyJobAsync(array $args = [])
 * @method \RamseyAws\Result createCustomActionType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCustomActionTypeAsync(array $args = [])
 * @method \RamseyAws\Result createPipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPipelineAsync(array $args = [])
 * @method \RamseyAws\Result deleteCustomActionType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCustomActionTypeAsync(array $args = [])
 * @method \RamseyAws\Result deletePipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePipelineAsync(array $args = [])
 * @method \RamseyAws\Result disableStageTransition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableStageTransitionAsync(array $args = [])
 * @method \RamseyAws\Result enableStageTransition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableStageTransitionAsync(array $args = [])
 * @method \RamseyAws\Result getJobDetails(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getJobDetailsAsync(array $args = [])
 * @method \RamseyAws\Result getPipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPipelineAsync(array $args = [])
 * @method \RamseyAws\Result getPipelineExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPipelineExecutionAsync(array $args = [])
 * @method \RamseyAws\Result getPipelineState(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPipelineStateAsync(array $args = [])
 * @method \RamseyAws\Result getThirdPartyJobDetails(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getThirdPartyJobDetailsAsync(array $args = [])
 * @method \RamseyAws\Result listActionTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listActionTypesAsync(array $args = [])
 * @method \RamseyAws\Result listPipelineExecutions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPipelineExecutionsAsync(array $args = [])
 * @method \RamseyAws\Result listPipelines(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPipelinesAsync(array $args = [])
 * @method \RamseyAws\Result pollForJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise pollForJobsAsync(array $args = [])
 * @method \RamseyAws\Result pollForThirdPartyJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise pollForThirdPartyJobsAsync(array $args = [])
 * @method \RamseyAws\Result putActionRevision(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putActionRevisionAsync(array $args = [])
 * @method \RamseyAws\Result putApprovalResult(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putApprovalResultAsync(array $args = [])
 * @method \RamseyAws\Result putJobFailureResult(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putJobFailureResultAsync(array $args = [])
 * @method \RamseyAws\Result putJobSuccessResult(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putJobSuccessResultAsync(array $args = [])
 * @method \RamseyAws\Result putThirdPartyJobFailureResult(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putThirdPartyJobFailureResultAsync(array $args = [])
 * @method \RamseyAws\Result putThirdPartyJobSuccessResult(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putThirdPartyJobSuccessResultAsync(array $args = [])
 * @method \RamseyAws\Result retryStageExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise retryStageExecutionAsync(array $args = [])
 * @method \RamseyAws\Result startPipelineExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startPipelineExecutionAsync(array $args = [])
 * @method \RamseyAws\Result updatePipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePipelineAsync(array $args = [])
 */
class CodePipelineClient extends AwsClient {}
