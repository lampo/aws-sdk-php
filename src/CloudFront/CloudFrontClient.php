<?php
namespace RamseyAws\CloudFront;

use RamseyAws\AwsClient;

/**
 * This client is used to interact with the **Amazon CloudFront** service.
 *
 * @method \RamseyAws\Result createCloudFrontOriginAccessIdentity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCloudFrontOriginAccessIdentityAsync(array $args = [])
 * @method \RamseyAws\Result createDistribution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDistributionAsync(array $args = [])
 * @method \RamseyAws\Result createInvalidation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createInvalidationAsync(array $args = [])
 * @method \RamseyAws\Result createStreamingDistribution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createStreamingDistributionAsync(array $args = [])
 * @method \RamseyAws\Result deleteCloudFrontOriginAccessIdentity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCloudFrontOriginAccessIdentityAsync(array $args = [])
 * @method \RamseyAws\Result deleteDistribution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDistributionAsync(array $args = [])
 * @method \RamseyAws\Result deleteStreamingDistribution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteStreamingDistributionAsync(array $args = [])
 * @method \RamseyAws\Result getCloudFrontOriginAccessIdentity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCloudFrontOriginAccessIdentityAsync(array $args = [])
 * @method \RamseyAws\Result getCloudFrontOriginAccessIdentityConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCloudFrontOriginAccessIdentityConfigAsync(array $args = [])
 * @method \RamseyAws\Result getDistribution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDistributionAsync(array $args = [])
 * @method \RamseyAws\Result getDistributionConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDistributionConfigAsync(array $args = [])
 * @method \RamseyAws\Result getInvalidation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getInvalidationAsync(array $args = [])
 * @method \RamseyAws\Result getStreamingDistribution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getStreamingDistributionAsync(array $args = [])
 * @method \RamseyAws\Result getStreamingDistributionConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getStreamingDistributionConfigAsync(array $args = [])
 * @method \RamseyAws\Result listCloudFrontOriginAccessIdentities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCloudFrontOriginAccessIdentitiesAsync(array $args = [])
 * @method \RamseyAws\Result listDistributions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDistributionsAsync(array $args = [])
 * @method \RamseyAws\Result listDistributionsByWebACLId(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDistributionsByWebACLIdAsync(array $args = [])
 * @method \RamseyAws\Result listInvalidations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listInvalidationsAsync(array $args = [])
 * @method \RamseyAws\Result listStreamingDistributions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listStreamingDistributionsAsync(array $args = [])
 * @method \RamseyAws\Result updateCloudFrontOriginAccessIdentity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateCloudFrontOriginAccessIdentityAsync(array $args = [])
 * @method \RamseyAws\Result updateDistribution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDistributionAsync(array $args = [])
 * @method \RamseyAws\Result updateStreamingDistribution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateStreamingDistributionAsync(array $args = [])
 * @method \RamseyAws\Result createDistributionWithTags(array $args = []) (supported in versions 2016-08-01, 2016-08-20, 2016-09-07, 2016-09-29, 2016-11-25, 2017-03-25)
 * @method \GuzzleHttp\Promise\Promise createDistributionWithTagsAsync(array $args = []) (supported in versions 2016-08-01, 2016-08-20, 2016-09-07, 2016-09-29, 2016-11-25, 2017-03-25)
 * @method \RamseyAws\Result createStreamingDistributionWithTags(array $args = []) (supported in versions 2016-08-01, 2016-08-20, 2016-09-07, 2016-09-29, 2016-11-25, 2017-03-25)
 * @method \GuzzleHttp\Promise\Promise createStreamingDistributionWithTagsAsync(array $args = []) (supported in versions 2016-08-01, 2016-08-20, 2016-09-07, 2016-09-29, 2016-11-25, 2017-03-25)
 * @method \RamseyAws\Result listTagsForResource(array $args = []) (supported in versions 2016-08-01, 2016-08-20, 2016-09-07, 2016-09-29, 2016-11-25, 2017-03-25)
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = []) (supported in versions 2016-08-01, 2016-08-20, 2016-09-07, 2016-09-29, 2016-11-25, 2017-03-25)
 * @method \RamseyAws\Result tagResource(array $args = []) (supported in versions 2016-08-01, 2016-08-20, 2016-09-07, 2016-09-29, 2016-11-25, 2017-03-25)
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = []) (supported in versions 2016-08-01, 2016-08-20, 2016-09-07, 2016-09-29, 2016-11-25, 2017-03-25)
 * @method \RamseyAws\Result untagResource(array $args = []) (supported in versions 2016-08-01, 2016-08-20, 2016-09-07, 2016-09-29, 2016-11-25, 2017-03-25)
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = []) (supported in versions 2016-08-01, 2016-08-20, 2016-09-07, 2016-09-29, 2016-11-25, 2017-03-25)
 */
class CloudFrontClient extends AwsClient
{
    /**
     * Create a signed Amazon CloudFront URL.
     *
     * This method accepts an array of configuration options:
     *
     * - url: (string)  URL of the resource being signed (can include query
     *   string and wildcards). For example: rtmp://s5c39gqb8ow64r.cloudfront.net/videos/mp3_name.mp3
     *   http://d111111abcdef8.cloudfront.net/images/horizon.jpg?size=large&license=yes
     * - policy: (string) JSON policy. Use this option when creating a signed
     *   URL for a custom policy.
     * - expires: (int) UTC Unix timestamp used when signing with a canned
     *   policy. Not required when passing a custom 'policy' option.
     * - key_pair_id: (string) The ID of the key pair used to sign CloudFront
     *   URLs for private distributions.
     * - private_key: (string) The filepath ot the private key used to sign
     *   CloudFront URLs for private distributions.
     *
     * @param array $options Array of configuration options used when signing
     *
     * @return string Signed URL with authentication parameters
     * @throws \InvalidArgumentException if url, key_pair_id, or private_key
     *     were not specified.
     * @link http://docs.aws.amazon.com/AmazonCloudFront/latest/DeveloperGuide/WorkingWithStreamingDistributions.html
     */
    public function getSignedUrl(array $options)
    {
        foreach (['url', 'key_pair_id', 'private_key'] as $required) {
            if (!isset($options[$required])) {
                throw new \InvalidArgumentException("$required is required");
            }
        }

        $urlSigner = new UrlSigner(
            $options['key_pair_id'],
            $options['private_key']
        );

        return $urlSigner->getSignedUrl(
            $options['url'],
            isset($options['expires']) ? $options['expires'] : null,
            isset($options['policy']) ? $options['policy'] : null
        );
    }

    /**
     * Create a signed Amazon CloudFront cookie.
     *
     * This method accepts an array of configuration options:
     *
     * - url: (string)  URL of the resource being signed (can include query
     *   string and wildcards). For example: http://d111111abcdef8.cloudfront.net/images/horizon.jpg?size=large&license=yes
     * - policy: (string) JSON policy. Use this option when creating a signed
     *   URL for a custom policy.
     * - expires: (int) UTC Unix timestamp used when signing with a canned
     *   policy. Not required when passing a custom 'policy' option.
     * - key_pair_id: (string) The ID of the key pair used to sign CloudFront
     *   URLs for private distributions.
     * - private_key: (string) The filepath ot the private key used to sign
     *   CloudFront URLs for private distributions.
     *
     * @param array $options Array of configuration options used when signing
     *
     * @return array Key => value pairs of signed cookies to set
     * @throws \InvalidArgumentException if url, key_pair_id, or private_key
     *     were not specified.
     * @link http://docs.aws.amazon.com/AmazonCloudFront/latest/DeveloperGuide/WorkingWithStreamingDistributions.html
     */
    public function getSignedCookie(array $options)
    {
        foreach (['key_pair_id', 'private_key'] as $required) {
            if (!isset($options[$required])) {
                throw new \InvalidArgumentException("$required is required");
            }
        }

        $cookieSigner = new CookieSigner(
            $options['key_pair_id'],
            $options['private_key']
        );

        return $cookieSigner->getSignedCookie(
            isset($options['url']) ? $options['url'] : null,
            isset($options['expires']) ? $options['expires'] : null,
            isset($options['policy']) ? $options['policy'] : null
        );
    }
}
