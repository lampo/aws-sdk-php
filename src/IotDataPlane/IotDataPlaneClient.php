<?php
namespace RamseyAws\IotDataPlane;

use RamseyAws\AwsClient;

/**
 * This client is used to interact with the **AWS IoT Data Plane** service.
 *
 * @method \RamseyAws\Result deleteThingShadow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteThingShadowAsync(array $args = [])
 * @method \RamseyAws\Result getThingShadow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getThingShadowAsync(array $args = [])
 * @method \RamseyAws\Result publish(array $args = [])
 * @method \GuzzleHttp\Promise\Promise publishAsync(array $args = [])
 * @method \RamseyAws\Result updateThingShadow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateThingShadowAsync(array $args = [])
 */
class IotDataPlaneClient extends AwsClient {}
