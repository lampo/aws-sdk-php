<?php
namespace RamseyAws\DeviceFarm;

use RamseyAws\AwsClient;

/**
 * This client is used to interact with the **Amazon DeviceFarm** service.
 *
 * @method \RamseyAws\Result createDevicePool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDevicePoolAsync(array $args = [])
 * @method \RamseyAws\Result createNetworkProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createNetworkProfileAsync(array $args = [])
 * @method \RamseyAws\Result createProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createProjectAsync(array $args = [])
 * @method \RamseyAws\Result createRemoteAccessSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRemoteAccessSessionAsync(array $args = [])
 * @method \RamseyAws\Result createUpload(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createUploadAsync(array $args = [])
 * @method \RamseyAws\Result deleteDevicePool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDevicePoolAsync(array $args = [])
 * @method \RamseyAws\Result deleteNetworkProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteNetworkProfileAsync(array $args = [])
 * @method \RamseyAws\Result deleteProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteProjectAsync(array $args = [])
 * @method \RamseyAws\Result deleteRemoteAccessSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRemoteAccessSessionAsync(array $args = [])
 * @method \RamseyAws\Result deleteRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRunAsync(array $args = [])
 * @method \RamseyAws\Result deleteUpload(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteUploadAsync(array $args = [])
 * @method \RamseyAws\Result getAccountSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAccountSettingsAsync(array $args = [])
 * @method \RamseyAws\Result getDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDeviceAsync(array $args = [])
 * @method \RamseyAws\Result getDevicePool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDevicePoolAsync(array $args = [])
 * @method \RamseyAws\Result getDevicePoolCompatibility(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDevicePoolCompatibilityAsync(array $args = [])
 * @method \RamseyAws\Result getJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getJobAsync(array $args = [])
 * @method \RamseyAws\Result getNetworkProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getNetworkProfileAsync(array $args = [])
 * @method \RamseyAws\Result getOfferingStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getOfferingStatusAsync(array $args = [])
 * @method \RamseyAws\Result getProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getProjectAsync(array $args = [])
 * @method \RamseyAws\Result getRemoteAccessSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRemoteAccessSessionAsync(array $args = [])
 * @method \RamseyAws\Result getRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRunAsync(array $args = [])
 * @method \RamseyAws\Result getSuite(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSuiteAsync(array $args = [])
 * @method \RamseyAws\Result getTest(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTestAsync(array $args = [])
 * @method \RamseyAws\Result getUpload(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getUploadAsync(array $args = [])
 * @method \RamseyAws\Result installToRemoteAccessSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise installToRemoteAccessSessionAsync(array $args = [])
 * @method \RamseyAws\Result listArtifacts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listArtifactsAsync(array $args = [])
 * @method \RamseyAws\Result listDevicePools(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDevicePoolsAsync(array $args = [])
 * @method \RamseyAws\Result listDevices(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDevicesAsync(array $args = [])
 * @method \RamseyAws\Result listJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listJobsAsync(array $args = [])
 * @method \RamseyAws\Result listNetworkProfiles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listNetworkProfilesAsync(array $args = [])
 * @method \RamseyAws\Result listOfferingPromotions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listOfferingPromotionsAsync(array $args = [])
 * @method \RamseyAws\Result listOfferingTransactions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listOfferingTransactionsAsync(array $args = [])
 * @method \RamseyAws\Result listOfferings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listOfferingsAsync(array $args = [])
 * @method \RamseyAws\Result listProjects(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProjectsAsync(array $args = [])
 * @method \RamseyAws\Result listRemoteAccessSessions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRemoteAccessSessionsAsync(array $args = [])
 * @method \RamseyAws\Result listRuns(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRunsAsync(array $args = [])
 * @method \RamseyAws\Result listSamples(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSamplesAsync(array $args = [])
 * @method \RamseyAws\Result listSuites(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSuitesAsync(array $args = [])
 * @method \RamseyAws\Result listTests(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTestsAsync(array $args = [])
 * @method \RamseyAws\Result listUniqueProblems(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listUniqueProblemsAsync(array $args = [])
 * @method \RamseyAws\Result listUploads(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listUploadsAsync(array $args = [])
 * @method \RamseyAws\Result purchaseOffering(array $args = [])
 * @method \GuzzleHttp\Promise\Promise purchaseOfferingAsync(array $args = [])
 * @method \RamseyAws\Result renewOffering(array $args = [])
 * @method \GuzzleHttp\Promise\Promise renewOfferingAsync(array $args = [])
 * @method \RamseyAws\Result scheduleRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise scheduleRunAsync(array $args = [])
 * @method \RamseyAws\Result stopRemoteAccessSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopRemoteAccessSessionAsync(array $args = [])
 * @method \RamseyAws\Result stopRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopRunAsync(array $args = [])
 * @method \RamseyAws\Result updateDevicePool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDevicePoolAsync(array $args = [])
 * @method \RamseyAws\Result updateNetworkProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateNetworkProfileAsync(array $args = [])
 * @method \RamseyAws\Result updateProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateProjectAsync(array $args = [])
 */
class DeviceFarmClient extends AwsClient {}
