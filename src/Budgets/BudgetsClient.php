<?php
namespace RamseyAws\Budgets;

use RamseyAws\AwsClient;

/**
 * This client is used to interact with the **AWS Budgets** service.
 * @method \RamseyAws\Result createBudget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBudgetAsync(array $args = [])
 * @method \RamseyAws\Result createNotification(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createNotificationAsync(array $args = [])
 * @method \RamseyAws\Result createSubscriber(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSubscriberAsync(array $args = [])
 * @method \RamseyAws\Result deleteBudget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBudgetAsync(array $args = [])
 * @method \RamseyAws\Result deleteNotification(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteNotificationAsync(array $args = [])
 * @method \RamseyAws\Result deleteSubscriber(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSubscriberAsync(array $args = [])
 * @method \RamseyAws\Result describeBudget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBudgetAsync(array $args = [])
 * @method \RamseyAws\Result describeBudgets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBudgetsAsync(array $args = [])
 * @method \RamseyAws\Result describeNotificationsForBudget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeNotificationsForBudgetAsync(array $args = [])
 * @method \RamseyAws\Result describeSubscribersForNotification(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSubscribersForNotificationAsync(array $args = [])
 * @method \RamseyAws\Result updateBudget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateBudgetAsync(array $args = [])
 * @method \RamseyAws\Result updateNotification(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateNotificationAsync(array $args = [])
 * @method \RamseyAws\Result updateSubscriber(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSubscriberAsync(array $args = [])
 */
class BudgetsClient extends AwsClient {}
