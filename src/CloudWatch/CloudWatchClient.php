<?php
namespace RamseyAws\CloudWatch;

use RamseyAws\AwsClient;

/**
 * This client is used to interact with the **Amazon CloudWatch** service.
 *
 * @method \RamseyAws\Result deleteAlarms(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAlarmsAsync(array $args = [])
 * @method \RamseyAws\Result deleteDashboards(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDashboardsAsync(array $args = [])
 * @method \RamseyAws\Result describeAlarmHistory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAlarmHistoryAsync(array $args = [])
 * @method \RamseyAws\Result describeAlarms(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAlarmsAsync(array $args = [])
 * @method \RamseyAws\Result describeAlarmsForMetric(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAlarmsForMetricAsync(array $args = [])
 * @method \RamseyAws\Result disableAlarmActions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableAlarmActionsAsync(array $args = [])
 * @method \RamseyAws\Result enableAlarmActions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableAlarmActionsAsync(array $args = [])
 * @method \RamseyAws\Result getDashboard(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDashboardAsync(array $args = [])
 * @method \RamseyAws\Result getMetricStatistics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMetricStatisticsAsync(array $args = [])
 * @method \RamseyAws\Result listDashboards(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDashboardsAsync(array $args = [])
 * @method \RamseyAws\Result listMetrics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listMetricsAsync(array $args = [])
 * @method \RamseyAws\Result putDashboard(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putDashboardAsync(array $args = [])
 * @method \RamseyAws\Result putMetricAlarm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putMetricAlarmAsync(array $args = [])
 * @method \RamseyAws\Result putMetricData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putMetricDataAsync(array $args = [])
 * @method \RamseyAws\Result setAlarmState(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setAlarmStateAsync(array $args = [])
 */
class CloudWatchClient extends AwsClient {}
