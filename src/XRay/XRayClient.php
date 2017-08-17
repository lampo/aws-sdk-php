<?php
namespace RamseyAws\XRay;

use RamseyAws\AwsClient;

/**
 * This client is used to interact with the **AWS X-Ray** service.
 * @method \RamseyAws\Result batchGetTraces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetTracesAsync(array $args = [])
 * @method \RamseyAws\Result getServiceGraph(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getServiceGraphAsync(array $args = [])
 * @method \RamseyAws\Result getTraceGraph(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTraceGraphAsync(array $args = [])
 * @method \RamseyAws\Result getTraceSummaries(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTraceSummariesAsync(array $args = [])
 * @method \RamseyAws\Result putTelemetryRecords(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putTelemetryRecordsAsync(array $args = [])
 * @method \RamseyAws\Result putTraceSegments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putTraceSegmentsAsync(array $args = [])
 */
class XRayClient extends AwsClient {}
