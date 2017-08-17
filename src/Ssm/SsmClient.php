<?php
namespace RamseyAws\Ssm;

use RamseyAws\AwsClient;

/**
 * Amazon EC2 Simple Systems Manager client.
 *
 * @method \RamseyAws\Result addTagsToResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addTagsToResourceAsync(array $args = [])
 * @method \RamseyAws\Result cancelCommand(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelCommandAsync(array $args = [])
 * @method \RamseyAws\Result createActivation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createActivationAsync(array $args = [])
 * @method \RamseyAws\Result createAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAssociationAsync(array $args = [])
 * @method \RamseyAws\Result createAssociationBatch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAssociationBatchAsync(array $args = [])
 * @method \RamseyAws\Result createDocument(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDocumentAsync(array $args = [])
 * @method \RamseyAws\Result createMaintenanceWindow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMaintenanceWindowAsync(array $args = [])
 * @method \RamseyAws\Result createPatchBaseline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPatchBaselineAsync(array $args = [])
 * @method \RamseyAws\Result createResourceDataSync(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createResourceDataSyncAsync(array $args = [])
 * @method \RamseyAws\Result deleteActivation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteActivationAsync(array $args = [])
 * @method \RamseyAws\Result deleteAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAssociationAsync(array $args = [])
 * @method \RamseyAws\Result deleteDocument(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDocumentAsync(array $args = [])
 * @method \RamseyAws\Result deleteMaintenanceWindow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMaintenanceWindowAsync(array $args = [])
 * @method \RamseyAws\Result deleteParameter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteParameterAsync(array $args = [])
 * @method \RamseyAws\Result deleteParameters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteParametersAsync(array $args = [])
 * @method \RamseyAws\Result deletePatchBaseline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePatchBaselineAsync(array $args = [])
 * @method \RamseyAws\Result deleteResourceDataSync(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteResourceDataSyncAsync(array $args = [])
 * @method \RamseyAws\Result deregisterManagedInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deregisterManagedInstanceAsync(array $args = [])
 * @method \RamseyAws\Result deregisterPatchBaselineForPatchGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deregisterPatchBaselineForPatchGroupAsync(array $args = [])
 * @method \RamseyAws\Result deregisterTargetFromMaintenanceWindow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deregisterTargetFromMaintenanceWindowAsync(array $args = [])
 * @method \RamseyAws\Result deregisterTaskFromMaintenanceWindow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deregisterTaskFromMaintenanceWindowAsync(array $args = [])
 * @method \RamseyAws\Result describeActivations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeActivationsAsync(array $args = [])
 * @method \RamseyAws\Result describeAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAssociationAsync(array $args = [])
 * @method \RamseyAws\Result describeAutomationExecutions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAutomationExecutionsAsync(array $args = [])
 * @method \RamseyAws\Result describeAvailablePatches(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAvailablePatchesAsync(array $args = [])
 * @method \RamseyAws\Result describeDocument(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDocumentAsync(array $args = [])
 * @method \RamseyAws\Result describeDocumentPermission(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDocumentPermissionAsync(array $args = [])
 * @method \RamseyAws\Result describeEffectiveInstanceAssociations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEffectiveInstanceAssociationsAsync(array $args = [])
 * @method \RamseyAws\Result describeEffectivePatchesForPatchBaseline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEffectivePatchesForPatchBaselineAsync(array $args = [])
 * @method \RamseyAws\Result describeInstanceAssociationsStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceAssociationsStatusAsync(array $args = [])
 * @method \RamseyAws\Result describeInstanceInformation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceInformationAsync(array $args = [])
 * @method \RamseyAws\Result describeInstancePatchStates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstancePatchStatesAsync(array $args = [])
 * @method \RamseyAws\Result describeInstancePatchStatesForPatchGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstancePatchStatesForPatchGroupAsync(array $args = [])
 * @method \RamseyAws\Result describeInstancePatches(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstancePatchesAsync(array $args = [])
 * @method \RamseyAws\Result describeMaintenanceWindowExecutionTaskInvocations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMaintenanceWindowExecutionTaskInvocationsAsync(array $args = [])
 * @method \RamseyAws\Result describeMaintenanceWindowExecutionTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMaintenanceWindowExecutionTasksAsync(array $args = [])
 * @method \RamseyAws\Result describeMaintenanceWindowExecutions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMaintenanceWindowExecutionsAsync(array $args = [])
 * @method \RamseyAws\Result describeMaintenanceWindowTargets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMaintenanceWindowTargetsAsync(array $args = [])
 * @method \RamseyAws\Result describeMaintenanceWindowTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMaintenanceWindowTasksAsync(array $args = [])
 * @method \RamseyAws\Result describeMaintenanceWindows(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMaintenanceWindowsAsync(array $args = [])
 * @method \RamseyAws\Result describeParameters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeParametersAsync(array $args = [])
 * @method \RamseyAws\Result describePatchBaselines(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePatchBaselinesAsync(array $args = [])
 * @method \RamseyAws\Result describePatchGroupState(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePatchGroupStateAsync(array $args = [])
 * @method \RamseyAws\Result describePatchGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePatchGroupsAsync(array $args = [])
 * @method \RamseyAws\Result getAutomationExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAutomationExecutionAsync(array $args = [])
 * @method \RamseyAws\Result getCommandInvocation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCommandInvocationAsync(array $args = [])
 * @method \RamseyAws\Result getDefaultPatchBaseline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDefaultPatchBaselineAsync(array $args = [])
 * @method \RamseyAws\Result getDeployablePatchSnapshotForInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDeployablePatchSnapshotForInstanceAsync(array $args = [])
 * @method \RamseyAws\Result getDocument(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDocumentAsync(array $args = [])
 * @method \RamseyAws\Result getInventory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getInventoryAsync(array $args = [])
 * @method \RamseyAws\Result getInventorySchema(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getInventorySchemaAsync(array $args = [])
 * @method \RamseyAws\Result getMaintenanceWindow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMaintenanceWindowAsync(array $args = [])
 * @method \RamseyAws\Result getMaintenanceWindowExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMaintenanceWindowExecutionAsync(array $args = [])
 * @method \RamseyAws\Result getMaintenanceWindowExecutionTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMaintenanceWindowExecutionTaskAsync(array $args = [])
 * @method \RamseyAws\Result getMaintenanceWindowExecutionTaskInvocation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMaintenanceWindowExecutionTaskInvocationAsync(array $args = [])
 * @method \RamseyAws\Result getMaintenanceWindowTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMaintenanceWindowTaskAsync(array $args = [])
 * @method \RamseyAws\Result getParameter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getParameterAsync(array $args = [])
 * @method \RamseyAws\Result getParameterHistory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getParameterHistoryAsync(array $args = [])
 * @method \RamseyAws\Result getParameters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getParametersAsync(array $args = [])
 * @method \RamseyAws\Result getParametersByPath(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getParametersByPathAsync(array $args = [])
 * @method \RamseyAws\Result getPatchBaseline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPatchBaselineAsync(array $args = [])
 * @method \RamseyAws\Result getPatchBaselineForPatchGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPatchBaselineForPatchGroupAsync(array $args = [])
 * @method \RamseyAws\Result listAssociations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAssociationsAsync(array $args = [])
 * @method \RamseyAws\Result listCommandInvocations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCommandInvocationsAsync(array $args = [])
 * @method \RamseyAws\Result listCommands(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCommandsAsync(array $args = [])
 * @method \RamseyAws\Result listComplianceItems(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listComplianceItemsAsync(array $args = [])
 * @method \RamseyAws\Result listComplianceSummaries(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listComplianceSummariesAsync(array $args = [])
 * @method \RamseyAws\Result listDocumentVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDocumentVersionsAsync(array $args = [])
 * @method \RamseyAws\Result listDocuments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDocumentsAsync(array $args = [])
 * @method \RamseyAws\Result listInventoryEntries(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listInventoryEntriesAsync(array $args = [])
 * @method \RamseyAws\Result listResourceComplianceSummaries(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResourceComplianceSummariesAsync(array $args = [])
 * @method \RamseyAws\Result listResourceDataSync(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResourceDataSyncAsync(array $args = [])
 * @method \RamseyAws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \RamseyAws\Result modifyDocumentPermission(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyDocumentPermissionAsync(array $args = [])
 * @method \RamseyAws\Result putComplianceItems(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putComplianceItemsAsync(array $args = [])
 * @method \RamseyAws\Result putInventory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putInventoryAsync(array $args = [])
 * @method \RamseyAws\Result putParameter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putParameterAsync(array $args = [])
 * @method \RamseyAws\Result registerDefaultPatchBaseline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerDefaultPatchBaselineAsync(array $args = [])
 * @method \RamseyAws\Result registerPatchBaselineForPatchGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerPatchBaselineForPatchGroupAsync(array $args = [])
 * @method \RamseyAws\Result registerTargetWithMaintenanceWindow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerTargetWithMaintenanceWindowAsync(array $args = [])
 * @method \RamseyAws\Result registerTaskWithMaintenanceWindow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerTaskWithMaintenanceWindowAsync(array $args = [])
 * @method \RamseyAws\Result removeTagsFromResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeTagsFromResourceAsync(array $args = [])
 * @method \RamseyAws\Result sendAutomationSignal(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendAutomationSignalAsync(array $args = [])
 * @method \RamseyAws\Result sendCommand(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendCommandAsync(array $args = [])
 * @method \RamseyAws\Result startAutomationExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startAutomationExecutionAsync(array $args = [])
 * @method \RamseyAws\Result stopAutomationExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopAutomationExecutionAsync(array $args = [])
 * @method \RamseyAws\Result updateAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAssociationAsync(array $args = [])
 * @method \RamseyAws\Result updateAssociationStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAssociationStatusAsync(array $args = [])
 * @method \RamseyAws\Result updateDocument(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDocumentAsync(array $args = [])
 * @method \RamseyAws\Result updateDocumentDefaultVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDocumentDefaultVersionAsync(array $args = [])
 * @method \RamseyAws\Result updateMaintenanceWindow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateMaintenanceWindowAsync(array $args = [])
 * @method \RamseyAws\Result updateMaintenanceWindowTarget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateMaintenanceWindowTargetAsync(array $args = [])
 * @method \RamseyAws\Result updateMaintenanceWindowTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateMaintenanceWindowTaskAsync(array $args = [])
 * @method \RamseyAws\Result updateManagedInstanceRole(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateManagedInstanceRoleAsync(array $args = [])
 * @method \RamseyAws\Result updatePatchBaseline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePatchBaselineAsync(array $args = [])
 */
class SsmClient extends AwsClient {}
