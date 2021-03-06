<?php
namespace RamseyAws\Polly;

use RamseyAws\Api\Serializer\JsonBody;
use RamseyAws\AwsClient;
use RamseyAws\Signature\SignatureV4;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Uri;
use GuzzleHttp\Psr7;

/**
 * This client is used to interact with the **Amazon Polly** service.
 * @method \RamseyAws\Result deleteLexicon(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLexiconAsync(array $args = [])
 * @method \RamseyAws\Result describeVoices(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeVoicesAsync(array $args = [])
 * @method \RamseyAws\Result getLexicon(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLexiconAsync(array $args = [])
 * @method \RamseyAws\Result listLexicons(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listLexiconsAsync(array $args = [])
 * @method \RamseyAws\Result putLexicon(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putLexiconAsync(array $args = [])
 * @method \RamseyAws\Result synthesizeSpeech(array $args = [])
 * @method \GuzzleHttp\Promise\Promise synthesizeSpeechAsync(array $args = [])
 */
class PollyClient extends AwsClient
{
    /** @var JsonBody */
    private $formatter;

    /**
     * Create a pre-signed URL for Polly operation `SynthesizeSpeech`
     *
     * @param array $args parameters array for `SynthesizeSpeech`
     *                    More information @see RamseyAws\Polly\PollyClient::SynthesizeSpeech
     *
     * @return string
     */
    public function createSynthesizeSpeechPreSignedUrl(array $args)
    {
        $uri = new Uri($this->getEndpoint());
        $uri = $uri->withPath('/v1/speech');

        // Formatting parameters follows rest-json protocol
        $this->formatter = $this->formatter ?: new JsonBody($this->getApi());
        $queryArray = json_decode(
            $this->formatter->build(
                $this->getApi()->getOperation('SynthesizeSpeech')->getInput(),
                $args
            ),
            true
        );

        // Mocking a 'GET' request in pre-signing the Url
        $query = Psr7\build_query($queryArray);
        $uri = $uri->withQuery($query);

        $request = new Request('GET', $uri);
        $request = $request->withBody(Psr7\stream_for(''));
        $signer = new SignatureV4('polly', $this->getRegion());
        return (string) $signer->presign(
            $request,
            $this->getCredentials()->wait(),
            '+15 minutes'
        )->getUri();
    }
}
