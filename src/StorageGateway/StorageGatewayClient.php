<?php
namespace RamseyAws\StorageGateway;

use RamseyAws\AwsClient;

/**
 * AWS Storage Gateway client.
 *
 * @method \RamseyAws\Result activateGateway(array $args = [])
 * @method \GuzzleHttp\Promise\Promise activateGatewayAsync(array $args = [])
 * @method \RamseyAws\Result addCache(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addCacheAsync(array $args = [])
 * @method \RamseyAws\Result addTagsToResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addTagsToResourceAsync(array $args = [])
 * @method \RamseyAws\Result addUploadBuffer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addUploadBufferAsync(array $args = [])
 * @method \RamseyAws\Result addWorkingStorage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addWorkingStorageAsync(array $args = [])
 * @method \RamseyAws\Result cancelArchival(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelArchivalAsync(array $args = [])
 * @method \RamseyAws\Result cancelRetrieval(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelRetrievalAsync(array $args = [])
 * @method \RamseyAws\Result createCachediSCSIVolume(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCachediSCSIVolumeAsync(array $args = [])
 * @method \RamseyAws\Result createNFSFileShare(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createNFSFileShareAsync(array $args = [])
 * @method \RamseyAws\Result createSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSnapshotAsync(array $args = [])
 * @method \RamseyAws\Result createSnapshotFromVolumeRecoveryPoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSnapshotFromVolumeRecoveryPointAsync(array $args = [])
 * @method \RamseyAws\Result createStorediSCSIVolume(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createStorediSCSIVolumeAsync(array $args = [])
 * @method \RamseyAws\Result createTapeWithBarcode(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTapeWithBarcodeAsync(array $args = [])
 * @method \RamseyAws\Result createTapes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTapesAsync(array $args = [])
 * @method \RamseyAws\Result deleteBandwidthRateLimit(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBandwidthRateLimitAsync(array $args = [])
 * @method \RamseyAws\Result deleteChapCredentials(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteChapCredentialsAsync(array $args = [])
 * @method \RamseyAws\Result deleteFileShare(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFileShareAsync(array $args = [])
 * @method \RamseyAws\Result deleteGateway(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteGatewayAsync(array $args = [])
 * @method \RamseyAws\Result deleteSnapshotSchedule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSnapshotScheduleAsync(array $args = [])
 * @method \RamseyAws\Result deleteTape(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTapeAsync(array $args = [])
 * @method \RamseyAws\Result deleteTapeArchive(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTapeArchiveAsync(array $args = [])
 * @method \RamseyAws\Result deleteVolume(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVolumeAsync(array $args = [])
 * @method \RamseyAws\Result describeBandwidthRateLimit(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBandwidthRateLimitAsync(array $args = [])
 * @method \RamseyAws\Result describeCache(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCacheAsync(array $args = [])
 * @method \RamseyAws\Result describeCachediSCSIVolumes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCachediSCSIVolumesAsync(array $args = [])
 * @method \RamseyAws\Result describeChapCredentials(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeChapCredentialsAsync(array $args = [])
 * @method \RamseyAws\Result describeGatewayInformation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeGatewayInformationAsync(array $args = [])
 * @method \RamseyAws\Result describeMaintenanceStartTime(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMaintenanceStartTimeAsync(array $args = [])
 * @method \RamseyAws\Result describeNFSFileShares(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeNFSFileSharesAsync(array $args = [])
 * @method \RamseyAws\Result describeSnapshotSchedule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSnapshotScheduleAsync(array $args = [])
 * @method \RamseyAws\Result describeStorediSCSIVolumes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStorediSCSIVolumesAsync(array $args = [])
 * @method \RamseyAws\Result describeTapeArchives(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTapeArchivesAsync(array $args = [])
 * @method \RamseyAws\Result describeTapeRecoveryPoints(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTapeRecoveryPointsAsync(array $args = [])
 * @method \RamseyAws\Result describeTapes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTapesAsync(array $args = [])
 * @method \RamseyAws\Result describeUploadBuffer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeUploadBufferAsync(array $args = [])
 * @method \RamseyAws\Result describeVTLDevices(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeVTLDevicesAsync(array $args = [])
 * @method \RamseyAws\Result describeWorkingStorage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeWorkingStorageAsync(array $args = [])
 * @method \RamseyAws\Result disableGateway(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableGatewayAsync(array $args = [])
 * @method \RamseyAws\Result listFileShares(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFileSharesAsync(array $args = [])
 * @method \RamseyAws\Result listGateways(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listGatewaysAsync(array $args = [])
 * @method \RamseyAws\Result listLocalDisks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listLocalDisksAsync(array $args = [])
 * @method \RamseyAws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \RamseyAws\Result listTapes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTapesAsync(array $args = [])
 * @method \RamseyAws\Result listVolumeInitiators(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listVolumeInitiatorsAsync(array $args = [])
 * @method \RamseyAws\Result listVolumeRecoveryPoints(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listVolumeRecoveryPointsAsync(array $args = [])
 * @method \RamseyAws\Result listVolumes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listVolumesAsync(array $args = [])
 * @method \RamseyAws\Result refreshCache(array $args = [])
 * @method \GuzzleHttp\Promise\Promise refreshCacheAsync(array $args = [])
 * @method \RamseyAws\Result removeTagsFromResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeTagsFromResourceAsync(array $args = [])
 * @method \RamseyAws\Result resetCache(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resetCacheAsync(array $args = [])
 * @method \RamseyAws\Result retrieveTapeArchive(array $args = [])
 * @method \GuzzleHttp\Promise\Promise retrieveTapeArchiveAsync(array $args = [])
 * @method \RamseyAws\Result retrieveTapeRecoveryPoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise retrieveTapeRecoveryPointAsync(array $args = [])
 * @method \RamseyAws\Result setLocalConsolePassword(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setLocalConsolePasswordAsync(array $args = [])
 * @method \RamseyAws\Result shutdownGateway(array $args = [])
 * @method \GuzzleHttp\Promise\Promise shutdownGatewayAsync(array $args = [])
 * @method \RamseyAws\Result startGateway(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startGatewayAsync(array $args = [])
 * @method \RamseyAws\Result updateBandwidthRateLimit(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateBandwidthRateLimitAsync(array $args = [])
 * @method \RamseyAws\Result updateChapCredentials(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateChapCredentialsAsync(array $args = [])
 * @method \RamseyAws\Result updateGatewayInformation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateGatewayInformationAsync(array $args = [])
 * @method \RamseyAws\Result updateGatewaySoftwareNow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateGatewaySoftwareNowAsync(array $args = [])
 * @method \RamseyAws\Result updateMaintenanceStartTime(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateMaintenanceStartTimeAsync(array $args = [])
 * @method \RamseyAws\Result updateNFSFileShare(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateNFSFileShareAsync(array $args = [])
 * @method \RamseyAws\Result updateSnapshotSchedule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSnapshotScheduleAsync(array $args = [])
 * @method \RamseyAws\Result updateVTLDeviceType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateVTLDeviceTypeAsync(array $args = [])
 */
class StorageGatewayClient extends AwsClient {}
