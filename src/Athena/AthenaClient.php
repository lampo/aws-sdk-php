<?php
namespace RamseyAws\Athena;

use RamseyAws\AwsClient;

/**
 * This client is used to interact with the **Amazon Athena** service.
 * @method \RamseyAws\Result batchGetNamedQuery(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetNamedQueryAsync(array $args = [])
 * @method \RamseyAws\Result batchGetQueryExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetQueryExecutionAsync(array $args = [])
 * @method \RamseyAws\Result createNamedQuery(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createNamedQueryAsync(array $args = [])
 * @method \RamseyAws\Result deleteNamedQuery(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteNamedQueryAsync(array $args = [])
 * @method \RamseyAws\Result getNamedQuery(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getNamedQueryAsync(array $args = [])
 * @method \RamseyAws\Result getQueryExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getQueryExecutionAsync(array $args = [])
 * @method \RamseyAws\Result getQueryResults(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getQueryResultsAsync(array $args = [])
 * @method \RamseyAws\Result listNamedQueries(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listNamedQueriesAsync(array $args = [])
 * @method \RamseyAws\Result listQueryExecutions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listQueryExecutionsAsync(array $args = [])
 * @method \RamseyAws\Result startQueryExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startQueryExecutionAsync(array $args = [])
 * @method \RamseyAws\Result stopQueryExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopQueryExecutionAsync(array $args = [])
 */
class AthenaClient extends AwsClient {}
