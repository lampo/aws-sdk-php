<?php
namespace RamseyAws\Kms;

use RamseyAws\AwsClient;

/**
 * This client is used to interact with the **AWS Key Management Service**.
 *
 * @method \RamseyAws\Result cancelKeyDeletion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelKeyDeletionAsync(array $args = [])
 * @method \RamseyAws\Result createAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAliasAsync(array $args = [])
 * @method \RamseyAws\Result createGrant(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createGrantAsync(array $args = [])
 * @method \RamseyAws\Result createKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createKeyAsync(array $args = [])
 * @method \RamseyAws\Result decrypt(array $args = [])
 * @method \GuzzleHttp\Promise\Promise decryptAsync(array $args = [])
 * @method \RamseyAws\Result deleteAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAliasAsync(array $args = [])
 * @method \RamseyAws\Result deleteImportedKeyMaterial(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteImportedKeyMaterialAsync(array $args = [])
 * @method \RamseyAws\Result describeKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeKeyAsync(array $args = [])
 * @method \RamseyAws\Result disableKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableKeyAsync(array $args = [])
 * @method \RamseyAws\Result disableKeyRotation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableKeyRotationAsync(array $args = [])
 * @method \RamseyAws\Result enableKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableKeyAsync(array $args = [])
 * @method \RamseyAws\Result enableKeyRotation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableKeyRotationAsync(array $args = [])
 * @method \RamseyAws\Result encrypt(array $args = [])
 * @method \GuzzleHttp\Promise\Promise encryptAsync(array $args = [])
 * @method \RamseyAws\Result generateDataKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise generateDataKeyAsync(array $args = [])
 * @method \RamseyAws\Result generateDataKeyWithoutPlaintext(array $args = [])
 * @method \GuzzleHttp\Promise\Promise generateDataKeyWithoutPlaintextAsync(array $args = [])
 * @method \RamseyAws\Result generateRandom(array $args = [])
 * @method \GuzzleHttp\Promise\Promise generateRandomAsync(array $args = [])
 * @method \RamseyAws\Result getKeyPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getKeyPolicyAsync(array $args = [])
 * @method \RamseyAws\Result getKeyRotationStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getKeyRotationStatusAsync(array $args = [])
 * @method \RamseyAws\Result getParametersForImport(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getParametersForImportAsync(array $args = [])
 * @method \RamseyAws\Result importKeyMaterial(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importKeyMaterialAsync(array $args = [])
 * @method \RamseyAws\Result listAliases(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAliasesAsync(array $args = [])
 * @method \RamseyAws\Result listGrants(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listGrantsAsync(array $args = [])
 * @method \RamseyAws\Result listKeyPolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listKeyPoliciesAsync(array $args = [])
 * @method \RamseyAws\Result listKeys(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listKeysAsync(array $args = [])
 * @method \RamseyAws\Result listResourceTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResourceTagsAsync(array $args = [])
 * @method \RamseyAws\Result listRetirableGrants(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRetirableGrantsAsync(array $args = [])
 * @method \RamseyAws\Result putKeyPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putKeyPolicyAsync(array $args = [])
 * @method \RamseyAws\Result reEncrypt(array $args = [])
 * @method \GuzzleHttp\Promise\Promise reEncryptAsync(array $args = [])
 * @method \RamseyAws\Result retireGrant(array $args = [])
 * @method \GuzzleHttp\Promise\Promise retireGrantAsync(array $args = [])
 * @method \RamseyAws\Result revokeGrant(array $args = [])
 * @method \GuzzleHttp\Promise\Promise revokeGrantAsync(array $args = [])
 * @method \RamseyAws\Result scheduleKeyDeletion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise scheduleKeyDeletionAsync(array $args = [])
 * @method \RamseyAws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \RamseyAws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \RamseyAws\Result updateAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAliasAsync(array $args = [])
 * @method \RamseyAws\Result updateKeyDescription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateKeyDescriptionAsync(array $args = [])
 */
class KmsClient extends AwsClient {}
