<?php
namespace RamseyAws\Sms;

use RamseyAws\AwsClient;

/**
 * This client is used to interact with the **AWS Server Migration Service** service.
 * @method \RamseyAws\Result createReplicationJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createReplicationJobAsync(array $args = [])
 * @method \RamseyAws\Result deleteReplicationJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteReplicationJobAsync(array $args = [])
 * @method \RamseyAws\Result deleteServerCatalog(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteServerCatalogAsync(array $args = [])
 * @method \RamseyAws\Result disassociateConnector(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateConnectorAsync(array $args = [])
 * @method \RamseyAws\Result getConnectors(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getConnectorsAsync(array $args = [])
 * @method \RamseyAws\Result getReplicationJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getReplicationJobsAsync(array $args = [])
 * @method \RamseyAws\Result getReplicationRuns(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getReplicationRunsAsync(array $args = [])
 * @method \RamseyAws\Result getServers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getServersAsync(array $args = [])
 * @method \RamseyAws\Result importServerCatalog(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importServerCatalogAsync(array $args = [])
 * @method \RamseyAws\Result startOnDemandReplicationRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startOnDemandReplicationRunAsync(array $args = [])
 * @method \RamseyAws\Result updateReplicationJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateReplicationJobAsync(array $args = [])
 */
class SmsClient extends AwsClient {}
