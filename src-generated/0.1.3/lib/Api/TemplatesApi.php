<?php
/**
 * TemplatesApi
 * PHP version 5
 *
 * @category Class
 * @package  Gamingsolved\Paperspace\Api\Client\Version0_1_3
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Paperspace REST API
 *
 * Inofficial Swagger representation of the [Paperspace REST API](https://paperspace.github.io/paperspace-node/), provided by the [GamingSolved Paperspace API PHP Client project](https://github.com/gamingsolved/paperspace-api-php-client).
 *
 * OpenAPI spec version: 0.1.3
 * Contact: info@gamingsolved.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Gamingsolved\Paperspace\Api\Client\Version0_1_3\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use Gamingsolved\Paperspace\Api\Client\Version0_1_3\ApiException;
use Gamingsolved\Paperspace\Api\Client\Version0_1_3\Configuration;
use Gamingsolved\Paperspace\Api\Client\Version0_1_3\HeaderSelector;
use Gamingsolved\Paperspace\Api\Client\Version0_1_3\ObjectSerializer;

/**
 * TemplatesApi Class Doc Comment
 *
 * @category Class
 * @package  Gamingsolved\Paperspace\Api\Client\Version0_1_3
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TemplatesApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @param ClientInterface $client
     * @param Configuration $config
     * @param HeaderSelector $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation listTemplates
     *
     * List information about all templates available
     *
     * @param string $id Optional template id to match on (optional)
     * @param string $name Optional name to match on (optional)
     * @param string $label Optional label to match on (optional)
     * @param string $os Optional os to match on (optional)
     * @param string $dtCreated Optional datatime created value to match on (example: 2017-02-16T20:26:54.880Z) (optional)
     * @param string $teamId Optional teamId to match on (optional)
     * @param string $userId Optional userId to match on (optional)
     * @param string $region Optional region to match on (optional)
     * @throws \Gamingsolved\Paperspace\Api\Client\Version0_1_3\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Gamingsolved\Paperspace\Api\Client\Version0_1_3\Model\Template[]
     */
    public function listTemplates($id = null, $name = null, $label = null, $os = null, $dtCreated = null, $teamId = null, $userId = null, $region = null)
    {
        list($response) = $this->listTemplatesWithHttpInfo($id, $name, $label, $os, $dtCreated, $teamId, $userId, $region);
        return $response;
    }

    /**
     * Operation listTemplatesWithHttpInfo
     *
     * List information about all templates available
     *
     * @param string $id Optional template id to match on (optional)
     * @param string $name Optional name to match on (optional)
     * @param string $label Optional label to match on (optional)
     * @param string $os Optional os to match on (optional)
     * @param string $dtCreated Optional datatime created value to match on (example: 2017-02-16T20:26:54.880Z) (optional)
     * @param string $teamId Optional teamId to match on (optional)
     * @param string $userId Optional userId to match on (optional)
     * @param string $region Optional region to match on (optional)
     * @throws \Gamingsolved\Paperspace\Api\Client\Version0_1_3\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Gamingsolved\Paperspace\Api\Client\Version0_1_3\Model\Template[], HTTP status code, HTTP response headers (array of strings)
     */
    public function listTemplatesWithHttpInfo($id = null, $name = null, $label = null, $os = null, $dtCreated = null, $teamId = null, $userId = null, $region = null)
    {
        $returnType = '\Gamingsolved\Paperspace\Api\Client\Version0_1_3\Model\Template[]';
        $request = $this->listTemplatesRequest($id, $name, $label, $os, $dtCreated, $teamId, $userId, $region);

        try {

            try {
                $response = $this->client->send($request);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    "[$statusCode] Error connecting to the API ({$request->getUri()})",
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Gamingsolved\Paperspace\Api\Client\Version0_1_3\Model\Template[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listTemplatesAsync
     *
     * List information about all templates available
     *
     * @param string $id Optional template id to match on (optional)
     * @param string $name Optional name to match on (optional)
     * @param string $label Optional label to match on (optional)
     * @param string $os Optional os to match on (optional)
     * @param string $dtCreated Optional datatime created value to match on (example: 2017-02-16T20:26:54.880Z) (optional)
     * @param string $teamId Optional teamId to match on (optional)
     * @param string $userId Optional userId to match on (optional)
     * @param string $region Optional region to match on (optional)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listTemplatesAsync($id = null, $name = null, $label = null, $os = null, $dtCreated = null, $teamId = null, $userId = null, $region = null)
    {
        return $this->listTemplatesAsyncWithHttpInfo($id, $name, $label, $os, $dtCreated, $teamId, $userId, $region)->then(function ($response) {
            return $response[0];
        });
    }

    /**
     * Operation listTemplatesAsyncWithHttpInfo
     *
     * List information about all templates available
     *
     * @param string $id Optional template id to match on (optional)
     * @param string $name Optional name to match on (optional)
     * @param string $label Optional label to match on (optional)
     * @param string $os Optional os to match on (optional)
     * @param string $dtCreated Optional datatime created value to match on (example: 2017-02-16T20:26:54.880Z) (optional)
     * @param string $teamId Optional teamId to match on (optional)
     * @param string $userId Optional userId to match on (optional)
     * @param string $region Optional region to match on (optional)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listTemplatesAsyncWithHttpInfo($id = null, $name = null, $label = null, $os = null, $dtCreated = null, $teamId = null, $userId = null, $region = null)
    {
        $returnType = '\Gamingsolved\Paperspace\Api\Client\Version0_1_3\Model\Template[]';
        $request = $this->listTemplatesRequest($id, $name, $label, $os, $dtCreated, $teamId, $userId, $region);

        return $this->client->sendAsync($request)->then(function ($response) use ($returnType) {
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        }, function ($exception) {
            $response = $exception->getResponse();
            $statusCode = $response->getStatusCode();
            throw new ApiException(
                "[$statusCode] Error connecting to the API ({$exception->getRequest()->getUri()})",
                $statusCode,
                $response->getHeaders(),
                $response->getBody()
            );
        });
    }

    /**
     * Create request for operation 'listTemplates'
     *
     * @param string $id Optional template id to match on (optional)
     * @param string $name Optional name to match on (optional)
     * @param string $label Optional label to match on (optional)
     * @param string $os Optional os to match on (optional)
     * @param string $dtCreated Optional datatime created value to match on (example: 2017-02-16T20:26:54.880Z) (optional)
     * @param string $teamId Optional teamId to match on (optional)
     * @param string $userId Optional userId to match on (optional)
     * @param string $region Optional region to match on (optional)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function listTemplatesRequest($id = null, $name = null, $label = null, $os = null, $dtCreated = null, $teamId = null, $userId = null, $region = null)
    {

        $resourcePath = '/templates/getTemplates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($id !== null) {
            $queryParams['id'] = ObjectSerializer::toQueryValue($id);
        }
        // query params
        if ($name !== null) {
            $queryParams['name'] = ObjectSerializer::toQueryValue($name);
        }
        // query params
        if ($label !== null) {
            $queryParams['label'] = ObjectSerializer::toQueryValue($label);
        }
        // query params
        if ($os !== null) {
            $queryParams['os'] = ObjectSerializer::toQueryValue($os);
        }
        // query params
        if ($dtCreated !== null) {
            $queryParams['dtCreated'] = ObjectSerializer::toQueryValue($dtCreated);
        }
        // query params
        if ($teamId !== null) {
            $queryParams['teamId'] = ObjectSerializer::toQueryValue($teamId);
        }
        // query params
        if ($userId !== null) {
            $queryParams['userId'] = ObjectSerializer::toQueryValue($userId);
        }
        // query params
        if ($region !== null) {
            $queryParams['region'] = ObjectSerializer::toQueryValue($region);
        }



        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present

        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                $httpBody = new MultipartStream($multipartContents); // for HTTP post (form)

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams); // for HTTP post (form)
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-Key');
        if ($apiKey !== null) {
            $headers['X-API-Key'] = $apiKey;
        }

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        $url = $this->config->getHost() . $resourcePath . ($query ? '?' . $query : '');

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        return new Request(
            'GET',
            $url,
            $headers,
            $httpBody
        );
    }

}
