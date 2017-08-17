<?php
namespace RamseyAws\CognitoIdentity;

use RamseyAws\AwsClient;

/**
 * This client is used to interact with the **Amazon Cognito Identity** service.
 *
 * @method \RamseyAws\Result createIdentityPool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createIdentityPoolAsync(array $args = [])
 * @method \RamseyAws\Result deleteIdentities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteIdentitiesAsync(array $args = [])
 * @method \RamseyAws\Result deleteIdentityPool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteIdentityPoolAsync(array $args = [])
 * @method \RamseyAws\Result describeIdentity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeIdentityAsync(array $args = [])
 * @method \RamseyAws\Result describeIdentityPool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeIdentityPoolAsync(array $args = [])
 * @method \RamseyAws\Result getCredentialsForIdentity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCredentialsForIdentityAsync(array $args = [])
 * @method \RamseyAws\Result getId(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getIdAsync(array $args = [])
 * @method \RamseyAws\Result getIdentityPoolRoles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getIdentityPoolRolesAsync(array $args = [])
 * @method \RamseyAws\Result getOpenIdToken(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getOpenIdTokenAsync(array $args = [])
 * @method \RamseyAws\Result getOpenIdTokenForDeveloperIdentity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getOpenIdTokenForDeveloperIdentityAsync(array $args = [])
 * @method \RamseyAws\Result listIdentities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listIdentitiesAsync(array $args = [])
 * @method \RamseyAws\Result listIdentityPools(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listIdentityPoolsAsync(array $args = [])
 * @method \RamseyAws\Result lookupDeveloperIdentity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise lookupDeveloperIdentityAsync(array $args = [])
 * @method \RamseyAws\Result mergeDeveloperIdentities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise mergeDeveloperIdentitiesAsync(array $args = [])
 * @method \RamseyAws\Result setIdentityPoolRoles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setIdentityPoolRolesAsync(array $args = [])
 * @method \RamseyAws\Result unlinkDeveloperIdentity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise unlinkDeveloperIdentityAsync(array $args = [])
 * @method \RamseyAws\Result unlinkIdentity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise unlinkIdentityAsync(array $args = [])
 * @method \RamseyAws\Result updateIdentityPool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateIdentityPoolAsync(array $args = [])
 */
class CognitoIdentityClient extends AwsClient {}
