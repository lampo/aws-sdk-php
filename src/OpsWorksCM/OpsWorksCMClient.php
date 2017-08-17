<?php
namespace RamseyAws\OpsWorksCM;

use RamseyAws\AwsClient;

/**
 * This client is used to interact with the **AWS OpsWorks for Chef Automate** service.
 * @method \RamseyAws\Result associateNode(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateNodeAsync(array $args = [])
 * @method \RamseyAws\Result createBackup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBackupAsync(array $args = [])
 * @method \RamseyAws\Result createServer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createServerAsync(array $args = [])
 * @method \RamseyAws\Result deleteBackup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBackupAsync(array $args = [])
 * @method \RamseyAws\Result deleteServer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteServerAsync(array $args = [])
 * @method \RamseyAws\Result describeAccountAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAccountAttributesAsync(array $args = [])
 * @method \RamseyAws\Result describeBackups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBackupsAsync(array $args = [])
 * @method \RamseyAws\Result describeEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEventsAsync(array $args = [])
 * @method \RamseyAws\Result describeNodeAssociationStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeNodeAssociationStatusAsync(array $args = [])
 * @method \RamseyAws\Result describeServers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeServersAsync(array $args = [])
 * @method \RamseyAws\Result disassociateNode(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateNodeAsync(array $args = [])
 * @method \RamseyAws\Result restoreServer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise restoreServerAsync(array $args = [])
 * @method \RamseyAws\Result startMaintenance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startMaintenanceAsync(array $args = [])
 * @method \RamseyAws\Result updateServer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateServerAsync(array $args = [])
 * @method \RamseyAws\Result updateServerEngineAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateServerEngineAttributesAsync(array $args = [])
 */
class OpsWorksCMClient extends AwsClient {}
