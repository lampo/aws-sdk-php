<?php
namespace RamseyAws\MarketplaceMetering;

use RamseyAws\AwsClient;

/**
 * This client is used to interact with the **AWSMarketplace Metering** service.
 * @method \RamseyAws\Result batchMeterUsage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchMeterUsageAsync(array $args = [])
 * @method \RamseyAws\Result meterUsage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise meterUsageAsync(array $args = [])
 * @method \RamseyAws\Result resolveCustomer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resolveCustomerAsync(array $args = [])
 */
class MarketplaceMeteringClient extends AwsClient {}
