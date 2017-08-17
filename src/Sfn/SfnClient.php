<?php
namespace RamseyAws\Sfn;

use RamseyAws\AwsClient;

/**
 * This client is used to interact with the **AWS Step Functions** service.
 * @method \RamseyAws\Result createActivity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createActivityAsync(array $args = [])
 * @method \RamseyAws\Result createStateMachine(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createStateMachineAsync(array $args = [])
 * @method \RamseyAws\Result deleteActivity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteActivityAsync(array $args = [])
 * @method \RamseyAws\Result deleteStateMachine(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteStateMachineAsync(array $args = [])
 * @method \RamseyAws\Result describeActivity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeActivityAsync(array $args = [])
 * @method \RamseyAws\Result describeExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeExecutionAsync(array $args = [])
 * @method \RamseyAws\Result describeStateMachine(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStateMachineAsync(array $args = [])
 * @method \RamseyAws\Result getActivityTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getActivityTaskAsync(array $args = [])
 * @method \RamseyAws\Result getExecutionHistory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getExecutionHistoryAsync(array $args = [])
 * @method \RamseyAws\Result listActivities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listActivitiesAsync(array $args = [])
 * @method \RamseyAws\Result listExecutions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listExecutionsAsync(array $args = [])
 * @method \RamseyAws\Result listStateMachines(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listStateMachinesAsync(array $args = [])
 * @method \RamseyAws\Result sendTaskFailure(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendTaskFailureAsync(array $args = [])
 * @method \RamseyAws\Result sendTaskHeartbeat(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendTaskHeartbeatAsync(array $args = [])
 * @method \RamseyAws\Result sendTaskSuccess(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendTaskSuccessAsync(array $args = [])
 * @method \RamseyAws\Result startExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startExecutionAsync(array $args = [])
 * @method \RamseyAws\Result stopExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopExecutionAsync(array $args = [])
 */
class SfnClient extends AwsClient {}
