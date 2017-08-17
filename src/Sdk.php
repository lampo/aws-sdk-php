<?php
namespace RamseyAws;

/**
 * Builds AWS clients based on configuration settings.
 *
 * @method \RamseyAws\Acm\AcmClient createAcm(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionAcm(array $args = [])
 * @method \RamseyAws\ApiGateway\ApiGatewayClient createApiGateway(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionApiGateway(array $args = [])
 * @method \RamseyAws\ApplicationAutoScaling\ApplicationAutoScalingClient createApplicationAutoScaling(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionApplicationAutoScaling(array $args = [])
 * @method \RamseyAws\ApplicationDiscoveryService\ApplicationDiscoveryServiceClient createApplicationDiscoveryService(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionApplicationDiscoveryService(array $args = [])
 * @method \RamseyAws\Appstream\AppstreamClient createAppstream(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionAppstream(array $args = [])
 * @method \RamseyAws\Athena\AthenaClient createAthena(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionAthena(array $args = [])
 * @method \RamseyAws\AutoScaling\AutoScalingClient createAutoScaling(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionAutoScaling(array $args = [])
 * @method \RamseyAws\Batch\BatchClient createBatch(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionBatch(array $args = [])
 * @method \RamseyAws\Budgets\BudgetsClient createBudgets(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionBudgets(array $args = [])
 * @method \RamseyAws\CloudDirectory\CloudDirectoryClient createCloudDirectory(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionCloudDirectory(array $args = [])
 * @method \RamseyAws\CloudFormation\CloudFormationClient createCloudFormation(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionCloudFormation(array $args = [])
 * @method \RamseyAws\CloudFront\CloudFrontClient createCloudFront(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionCloudFront(array $args = [])
 * @method \RamseyAws\CloudHSMV2\CloudHSMV2Client createCloudHSMV2(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionCloudHSMV2(array $args = [])
 * @method \RamseyAws\CloudHsm\CloudHsmClient createCloudHsm(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionCloudHsm(array $args = [])
 * @method \RamseyAws\CloudSearch\CloudSearchClient createCloudSearch(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionCloudSearch(array $args = [])
 * @method \RamseyAws\CloudSearchDomain\CloudSearchDomainClient createCloudSearchDomain(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionCloudSearchDomain(array $args = [])
 * @method \RamseyAws\CloudTrail\CloudTrailClient createCloudTrail(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionCloudTrail(array $args = [])
 * @method \RamseyAws\CloudWatch\CloudWatchClient createCloudWatch(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionCloudWatch(array $args = [])
 * @method \RamseyAws\CloudWatchEvents\CloudWatchEventsClient createCloudWatchEvents(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionCloudWatchEvents(array $args = [])
 * @method \RamseyAws\CloudWatchLogs\CloudWatchLogsClient createCloudWatchLogs(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionCloudWatchLogs(array $args = [])
 * @method \RamseyAws\CodeBuild\CodeBuildClient createCodeBuild(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionCodeBuild(array $args = [])
 * @method \RamseyAws\CodeCommit\CodeCommitClient createCodeCommit(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionCodeCommit(array $args = [])
 * @method \RamseyAws\CodeDeploy\CodeDeployClient createCodeDeploy(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionCodeDeploy(array $args = [])
 * @method \RamseyAws\CodePipeline\CodePipelineClient createCodePipeline(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionCodePipeline(array $args = [])
 * @method \RamseyAws\CodeStar\CodeStarClient createCodeStar(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionCodeStar(array $args = [])
 * @method \RamseyAws\CognitoIdentity\CognitoIdentityClient createCognitoIdentity(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionCognitoIdentity(array $args = [])
 * @method \RamseyAws\CognitoIdentityProvider\CognitoIdentityProviderClient createCognitoIdentityProvider(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionCognitoIdentityProvider(array $args = [])
 * @method \RamseyAws\CognitoSync\CognitoSyncClient createCognitoSync(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionCognitoSync(array $args = [])
 * @method \RamseyAws\ConfigService\ConfigServiceClient createConfigService(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionConfigService(array $args = [])
 * @method \RamseyAws\CostandUsageReportService\CostandUsageReportServiceClient createCostandUsageReportService(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionCostandUsageReportService(array $args = [])
 * @method \RamseyAws\DAX\DAXClient createDAX(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionDAX(array $args = [])
 * @method \RamseyAws\DataPipeline\DataPipelineClient createDataPipeline(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionDataPipeline(array $args = [])
 * @method \RamseyAws\DatabaseMigrationService\DatabaseMigrationServiceClient createDatabaseMigrationService(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionDatabaseMigrationService(array $args = [])
 * @method \RamseyAws\DeviceFarm\DeviceFarmClient createDeviceFarm(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionDeviceFarm(array $args = [])
 * @method \RamseyAws\DirectConnect\DirectConnectClient createDirectConnect(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionDirectConnect(array $args = [])
 * @method \RamseyAws\DirectoryService\DirectoryServiceClient createDirectoryService(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionDirectoryService(array $args = [])
 * @method \RamseyAws\DynamoDb\DynamoDbClient createDynamoDb(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionDynamoDb(array $args = [])
 * @method \RamseyAws\DynamoDbStreams\DynamoDbStreamsClient createDynamoDbStreams(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionDynamoDbStreams(array $args = [])
 * @method \RamseyAws\Ec2\Ec2Client createEc2(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionEc2(array $args = [])
 * @method \RamseyAws\Ecr\EcrClient createEcr(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionEcr(array $args = [])
 * @method \RamseyAws\Ecs\EcsClient createEcs(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionEcs(array $args = [])
 * @method \RamseyAws\Efs\EfsClient createEfs(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionEfs(array $args = [])
 * @method \RamseyAws\ElastiCache\ElastiCacheClient createElastiCache(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionElastiCache(array $args = [])
 * @method \RamseyAws\ElasticBeanstalk\ElasticBeanstalkClient createElasticBeanstalk(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionElasticBeanstalk(array $args = [])
 * @method \RamseyAws\ElasticLoadBalancing\ElasticLoadBalancingClient createElasticLoadBalancing(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionElasticLoadBalancing(array $args = [])
 * @method \RamseyAws\ElasticLoadBalancingV2\ElasticLoadBalancingV2Client createElasticLoadBalancingV2(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionElasticLoadBalancingV2(array $args = [])
 * @method \RamseyAws\ElasticTranscoder\ElasticTranscoderClient createElasticTranscoder(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionElasticTranscoder(array $args = [])
 * @method \RamseyAws\ElasticsearchService\ElasticsearchServiceClient createElasticsearchService(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionElasticsearchService(array $args = [])
 * @method \RamseyAws\Emr\EmrClient createEmr(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionEmr(array $args = [])
 * @method \RamseyAws\Firehose\FirehoseClient createFirehose(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionFirehose(array $args = [])
 * @method \RamseyAws\GameLift\GameLiftClient createGameLift(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionGameLift(array $args = [])
 * @method \RamseyAws\Glacier\GlacierClient createGlacier(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionGlacier(array $args = [])
 * @method \RamseyAws\Glue\GlueClient createGlue(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionGlue(array $args = [])
 * @method \RamseyAws\Greengrass\GreengrassClient createGreengrass(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionGreengrass(array $args = [])
 * @method \RamseyAws\Health\HealthClient createHealth(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionHealth(array $args = [])
 * @method \RamseyAws\Iam\IamClient createIam(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionIam(array $args = [])
 * @method \RamseyAws\ImportExport\ImportExportClient createImportExport(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionImportExport(array $args = [])
 * @method \RamseyAws\Inspector\InspectorClient createInspector(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionInspector(array $args = [])
 * @method \RamseyAws\Iot\IotClient createIot(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionIot(array $args = [])
 * @method \RamseyAws\IotDataPlane\IotDataPlaneClient createIotDataPlane(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionIotDataPlane(array $args = [])
 * @method \RamseyAws\Kinesis\KinesisClient createKinesis(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionKinesis(array $args = [])
 * @method \RamseyAws\KinesisAnalytics\KinesisAnalyticsClient createKinesisAnalytics(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionKinesisAnalytics(array $args = [])
 * @method \RamseyAws\Kms\KmsClient createKms(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionKms(array $args = [])
 * @method \RamseyAws\Lambda\LambdaClient createLambda(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionLambda(array $args = [])
 * @method \RamseyAws\LexModelBuildingService\LexModelBuildingServiceClient createLexModelBuildingService(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionLexModelBuildingService(array $args = [])
 * @method \RamseyAws\LexRuntimeService\LexRuntimeServiceClient createLexRuntimeService(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionLexRuntimeService(array $args = [])
 * @method \RamseyAws\Lightsail\LightsailClient createLightsail(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionLightsail(array $args = [])
 * @method \RamseyAws\MTurk\MTurkClient createMTurk(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionMTurk(array $args = [])
 * @method \RamseyAws\MachineLearning\MachineLearningClient createMachineLearning(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionMachineLearning(array $args = [])
 * @method \RamseyAws\MarketplaceCommerceAnalytics\MarketplaceCommerceAnalyticsClient createMarketplaceCommerceAnalytics(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionMarketplaceCommerceAnalytics(array $args = [])
 * @method \RamseyAws\MarketplaceEntitlementService\MarketplaceEntitlementServiceClient createMarketplaceEntitlementService(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionMarketplaceEntitlementService(array $args = [])
 * @method \RamseyAws\MarketplaceMetering\MarketplaceMeteringClient createMarketplaceMetering(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionMarketplaceMetering(array $args = [])
 * @method \RamseyAws\MigrationHub\MigrationHubClient createMigrationHub(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionMigrationHub(array $args = [])
 * @method \RamseyAws\OpsWorks\OpsWorksClient createOpsWorks(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionOpsWorks(array $args = [])
 * @method \RamseyAws\OpsWorksCM\OpsWorksCMClient createOpsWorksCM(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionOpsWorksCM(array $args = [])
 * @method \RamseyAws\Organizations\OrganizationsClient createOrganizations(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionOrganizations(array $args = [])
 * @method \RamseyAws\Pinpoint\PinpointClient createPinpoint(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionPinpoint(array $args = [])
 * @method \RamseyAws\Polly\PollyClient createPolly(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionPolly(array $args = [])
 * @method \RamseyAws\Rds\RdsClient createRds(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionRds(array $args = [])
 * @method \RamseyAws\Redshift\RedshiftClient createRedshift(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionRedshift(array $args = [])
 * @method \RamseyAws\Rekognition\RekognitionClient createRekognition(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionRekognition(array $args = [])
 * @method \RamseyAws\ResourceGroupsTaggingAPI\ResourceGroupsTaggingAPIClient createResourceGroupsTaggingAPI(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionResourceGroupsTaggingAPI(array $args = [])
 * @method \RamseyAws\Route53\Route53Client createRoute53(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionRoute53(array $args = [])
 * @method \RamseyAws\Route53Domains\Route53DomainsClient createRoute53Domains(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionRoute53Domains(array $args = [])
 * @method \RamseyAws\S3\S3Client createS3(array $args = [])
 * @method \RamseyAws\S3\S3MultiRegionClient createMultiRegionS3(array $args = [])
 * @method \RamseyAws\ServiceCatalog\ServiceCatalogClient createServiceCatalog(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionServiceCatalog(array $args = [])
 * @method \RamseyAws\Ses\SesClient createSes(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionSes(array $args = [])
 * @method \RamseyAws\Sfn\SfnClient createSfn(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionSfn(array $args = [])
 * @method \RamseyAws\Shield\ShieldClient createShield(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionShield(array $args = [])
 * @method \RamseyAws\Sms\SmsClient createSms(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionSms(array $args = [])
 * @method \RamseyAws\SnowBall\SnowBallClient createSnowBall(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionSnowBall(array $args = [])
 * @method \RamseyAws\Sns\SnsClient createSns(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionSns(array $args = [])
 * @method \RamseyAws\Sqs\SqsClient createSqs(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionSqs(array $args = [])
 * @method \RamseyAws\Ssm\SsmClient createSsm(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionSsm(array $args = [])
 * @method \RamseyAws\StorageGateway\StorageGatewayClient createStorageGateway(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionStorageGateway(array $args = [])
 * @method \RamseyAws\Sts\StsClient createSts(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionSts(array $args = [])
 * @method \RamseyAws\Support\SupportClient createSupport(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionSupport(array $args = [])
 * @method \RamseyAws\Swf\SwfClient createSwf(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionSwf(array $args = [])
 * @method \RamseyAws\Waf\WafClient createWaf(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionWaf(array $args = [])
 * @method \RamseyAws\WafRegional\WafRegionalClient createWafRegional(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionWafRegional(array $args = [])
 * @method \RamseyAws\WorkDocs\WorkDocsClient createWorkDocs(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionWorkDocs(array $args = [])
 * @method \RamseyAws\WorkSpaces\WorkSpacesClient createWorkSpaces(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionWorkSpaces(array $args = [])
 * @method \RamseyAws\XRay\XRayClient createXRay(array $args = [])
 * @method \RamseyAws\MultiRegionClient createMultiRegionXRay(array $args = [])
 */
class Sdk
{
    const VERSION = '3.33.1';

    /** @var array Arguments for creating clients */
    private $args;

    /**
     * Constructs a new SDK object with an associative array of default
     * client settings.
     *
     * @param array $args
     *
     * @throws \InvalidArgumentException
     * @see RamseyAws\AwsClient::__construct for a list of available options.
     */
    public function __construct(array $args = [])
    {
        $this->args = $args;

        if (!isset($args['handler']) && !isset($args['http_handler'])) {
            $this->args['http_handler'] = default_http_handler();
        }
    }

    public function __call($name, array $args)
    {
        $args = isset($args[0]) ? $args[0] : [];
        if (strpos($name, 'createMultiRegion') === 0) {
            return $this->createMultiRegionClient(substr($name, 17), $args);
        } elseif (strpos($name, 'create') === 0) {
            return $this->createClient(substr($name, 6), $args);
        }

        throw new \BadMethodCallException("Unknown method: {$name}.");
    }

    /**
     * Get a client by name using an array of constructor options.
     *
     * @param string $name Service name or namespace (e.g., DynamoDb, s3).
     * @param array  $args Arguments to configure the client.
     *
     * @return AwsClientInterface
     * @throws \InvalidArgumentException if any required options are missing or
     *                                   the service is not supported.
     * @see RamseyAws\AwsClient::__construct for a list of available options for args.
     */
    public function createClient($name, array $args = [])
    {
        // Get information about the service from the manifest file.
        $service = manifest($name);
        $namespace = $service['namespace'];

        // Instantiate the client class.
        $client = "RamseyAws\\{$namespace}\\{$namespace}Client";
        return new $client($this->mergeArgs($namespace, $service, $args));
    }

    public function createMultiRegionClient($name, array $args = [])
    {
        // Get information about the service from the manifest file.
        $service = manifest($name);
        $namespace = $service['namespace'];

        $klass = "RamseyAws\\{$namespace}\\{$namespace}MultiRegionClient";
        $klass = class_exists($klass) ? $klass : 'RamseyAws\\MultiRegionClient';

        return new $klass($this->mergeArgs($namespace, $service, $args));
    }

    private function mergeArgs($namespace, array $manifest, array $args = [])
    {
        // Merge provided args with stored, service-specific args.
        if (isset($this->args[$namespace])) {
            $args += $this->args[$namespace];
        }

        // Provide the endpoint prefix in the args.
        if (!isset($args['service'])) {
            $args['service'] = $manifest['endpoint'];
        }

        return $args + $this->args;
    }

    /**
     * Determine the endpoint prefix from a client namespace.
     *
     * @param string $name Namespace name
     *
     * @return string
     * @internal
     * @deprecated Use the `\RamseyAws\manifest()` function instead.
     */
    public static function getEndpointPrefix($name)
    {
        return manifest($name)['endpoint'];
    }
}
