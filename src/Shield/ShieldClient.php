<?php
namespace RamseyAws\Shield;

use RamseyAws\AwsClient;

/**
 * This client is used to interact with the **AWS Shield** service.
 * @method \RamseyAws\Result createProtection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createProtectionAsync(array $args = [])
 * @method \RamseyAws\Result createSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSubscriptionAsync(array $args = [])
 * @method \RamseyAws\Result deleteProtection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteProtectionAsync(array $args = [])
 * @method \RamseyAws\Result deleteSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSubscriptionAsync(array $args = [])
 * @method \RamseyAws\Result describeAttack(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAttackAsync(array $args = [])
 * @method \RamseyAws\Result describeProtection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProtectionAsync(array $args = [])
 * @method \RamseyAws\Result describeSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSubscriptionAsync(array $args = [])
 * @method \RamseyAws\Result listAttacks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAttacksAsync(array $args = [])
 * @method \RamseyAws\Result listProtections(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProtectionsAsync(array $args = [])
 */
class ShieldClient extends AwsClient {}
