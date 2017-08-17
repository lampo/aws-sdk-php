<?php
namespace RamseyAws\DynamoDb;

use RamseyAws\Api\Parser\Crc32ValidatingParser;
use RamseyAws\AwsClient;
use RamseyAws\ClientResolver;
use RamseyAws\HandlerList;
use RamseyAws\Middleware;
use RamseyAws\RetryMiddleware;

/**
 * This client is used to interact with the **Amazon DynamoDB** service.
 *
 * @method \RamseyAws\Result batchGetItem(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetItemAsync(array $args = [])
 * @method \RamseyAws\Result batchWriteItem(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchWriteItemAsync(array $args = [])
 * @method \RamseyAws\Result createTable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTableAsync(array $args = [])
 * @method \RamseyAws\Result deleteItem(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteItemAsync(array $args = [])
 * @method \RamseyAws\Result deleteTable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTableAsync(array $args = [])
 * @method \RamseyAws\Result describeTable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTableAsync(array $args = [])
 * @method \RamseyAws\Result getItem(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getItemAsync(array $args = [])
 * @method \RamseyAws\Result listTables(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTablesAsync(array $args = [])
 * @method \RamseyAws\Result putItem(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putItemAsync(array $args = [])
 * @method \RamseyAws\Result query(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryAsync(array $args = [])
 * @method \RamseyAws\Result scan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise scanAsync(array $args = [])
 * @method \RamseyAws\Result updateItem(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateItemAsync(array $args = [])
 * @method \RamseyAws\Result updateTable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateTableAsync(array $args = [])
 * @method \RamseyAws\Result describeLimits(array $args = []) (supported in versions 2012-08-10)
 * @method \GuzzleHttp\Promise\Promise describeLimitsAsync(array $args = []) (supported in versions 2012-08-10)
 * @method \RamseyAws\Result describeTimeToLive(array $args = []) (supported in versions 2012-08-10)
 * @method \GuzzleHttp\Promise\Promise describeTimeToLiveAsync(array $args = []) (supported in versions 2012-08-10)
 * @method \RamseyAws\Result listTagsOfResource(array $args = []) (supported in versions 2012-08-10)
 * @method \GuzzleHttp\Promise\Promise listTagsOfResourceAsync(array $args = []) (supported in versions 2012-08-10)
 * @method \RamseyAws\Result tagResource(array $args = []) (supported in versions 2012-08-10)
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = []) (supported in versions 2012-08-10)
 * @method \RamseyAws\Result untagResource(array $args = []) (supported in versions 2012-08-10)
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = []) (supported in versions 2012-08-10)
 * @method \RamseyAws\Result updateTimeToLive(array $args = []) (supported in versions 2012-08-10)
 * @method \GuzzleHttp\Promise\Promise updateTimeToLiveAsync(array $args = []) (supported in versions 2012-08-10)
 */
class DynamoDbClient extends AwsClient
{
    public static function getArguments()
    {
        $args = parent::getArguments();
        $args['retries']['default'] = 10;
        $args['retries']['fn'] = [__CLASS__, '_applyRetryConfig'];
        $args['api_provider']['fn'] = [__CLASS__, '_applyApiProvider'];

        return $args;
    }

    /**
     * Convenience method for instantiating and registering the DynamoDB
     * Session handler with this DynamoDB client object.
     *
     * @param array $config Array of options for the session handler factory
     *
     * @return SessionHandler
     */
    public function registerSessionHandler(array $config = [])
    {
        $handler = SessionHandler::fromClient($this, $config);
        $handler->register();

        return $handler;
    }

    /** @internal */
    public static function _applyRetryConfig($value, array &$args, HandlerList $list)
    {
        if (!$value) {
            return;
        }

        $list->appendSign(
            Middleware::retry(
                RetryMiddleware::createDefaultDecider($value),
                function ($retries) {
                    return $retries
                        ? RetryMiddleware::exponentialDelay($retries) / 2
                        : 0;
                },
                isset($args['stats']['retries'])
                    ? (bool) $args['stats']['retries']
                    : false
            ),
            'retry'
        );
    }

    /** @internal */
    public static function _applyApiProvider($value, array &$args, HandlerList $list)
    {
        ClientResolver::_apply_api_provider($value, $args, $list);
        $args['parser'] = new Crc32ValidatingParser($args['parser']);
    }
}
