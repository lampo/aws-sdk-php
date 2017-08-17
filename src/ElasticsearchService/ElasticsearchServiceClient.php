<?php
namespace RamseyAws\ElasticsearchService;

use RamseyAws\AwsClient;

/**
 * This client is used to interact with the **Amazon Elasticsearch Service** service.
 *
 * @method \RamseyAws\Result addTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addTagsAsync(array $args = [])
 * @method \RamseyAws\Result createElasticsearchDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createElasticsearchDomainAsync(array $args = [])
 * @method \RamseyAws\Result deleteElasticsearchDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteElasticsearchDomainAsync(array $args = [])
 * @method \RamseyAws\Result describeElasticsearchDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeElasticsearchDomainAsync(array $args = [])
 * @method \RamseyAws\Result describeElasticsearchDomainConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeElasticsearchDomainConfigAsync(array $args = [])
 * @method \RamseyAws\Result describeElasticsearchDomains(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeElasticsearchDomainsAsync(array $args = [])
 * @method \RamseyAws\Result describeElasticsearchInstanceTypeLimits(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeElasticsearchInstanceTypeLimitsAsync(array $args = [])
 * @method \RamseyAws\Result listDomainNames(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDomainNamesAsync(array $args = [])
 * @method \RamseyAws\Result listElasticsearchInstanceTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listElasticsearchInstanceTypesAsync(array $args = [])
 * @method \RamseyAws\Result listElasticsearchVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listElasticsearchVersionsAsync(array $args = [])
 * @method \RamseyAws\Result listTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsAsync(array $args = [])
 * @method \RamseyAws\Result removeTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeTagsAsync(array $args = [])
 * @method \RamseyAws\Result updateElasticsearchDomainConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateElasticsearchDomainConfigAsync(array $args = [])
 */
class ElasticsearchServiceClient extends AwsClient {}
