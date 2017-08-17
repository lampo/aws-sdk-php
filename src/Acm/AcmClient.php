<?php
namespace RamseyAws\Acm;

use RamseyAws\AwsClient;

/**
 * This client is used to interact with the **AWS Certificate Manager** service.
 *
 * @method \RamseyAws\Result addTagsToCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addTagsToCertificateAsync(array $args = [])
 * @method \RamseyAws\Result deleteCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCertificateAsync(array $args = [])
 * @method \RamseyAws\Result describeCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCertificateAsync(array $args = [])
 * @method \RamseyAws\Result getCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCertificateAsync(array $args = [])
 * @method \RamseyAws\Result importCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importCertificateAsync(array $args = [])
 * @method \RamseyAws\Result listCertificates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCertificatesAsync(array $args = [])
 * @method \RamseyAws\Result listTagsForCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForCertificateAsync(array $args = [])
 * @method \RamseyAws\Result removeTagsFromCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeTagsFromCertificateAsync(array $args = [])
 * @method \RamseyAws\Result requestCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise requestCertificateAsync(array $args = [])
 * @method \RamseyAws\Result resendValidationEmail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resendValidationEmailAsync(array $args = [])
 */
class AcmClient extends AwsClient {}
