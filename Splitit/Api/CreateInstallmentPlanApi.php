<?php
/**
 * CreateInstallmentPlanApi
 * PHP version 5
 *
 * @category Class
 * @package  SplititSdkClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * splitit-web-api-public-sdk
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.12
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SplititSdkClient\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use SplititSdkClient\ApiException;
use SplititSdkClient\Model\RequestHeader;
use SplititSdkClient\Configuration;
use SplititSdkClient\HeaderSelector;
use SplititSdkClient\ObjectSerializer;

/**
 * CreateInstallmentPlanApi Class Doc Comment
 *
 * @category Class
 * @package  SplititSdkClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateInstallmentPlanApi
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
     * @var string
     */
    protected $sessionId;

    protected $culture;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param Configuration   $config
     * @param string   $sessionId
     * @param HeaderSelector  $selector
     */
    public function __construct(
        Configuration $config = null,
        string $sessionId = null,
        HeaderSelector $selector = null
    ) {
        $this->client = new Client();
        $this->config = $config ?: Configuration::production();
        $this->sessionId = $sessionId;
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    public function setCulture($culture)
    {
        $this->culture = $culture;
    }

    protected function injectSessionRequestHeaders($request)
    {
        if (!is_null($this->sessionId)){
            $requestHeader = new RequestHeader();

            if (!is_null($this->sessionId)){
                $requestHeader->setSessionId($this->sessionId);
            }

            if (!is_null($this->config->getApiKey())){
                $requestHeader->setApiKey($this->config->getApiKey());
            }

            if (!is_null($this->culture)){
                $requestHeader->setCultureName($this->culture);
            }

            $request->offsetSet('request_header', $requestHeader);
        }
    }

    /**
     * Operation createInstallmentPlanGet
     *
     * @param  float $amount_before_fees amount_before_fees (optional)
     * @param  string $api_key api_key (optional)
     * @param  string $avs_address avs_address (optional)
     * @param  string $avs_zip avs_zip (optional)
     * @param  string $card_cvv card_cvv (optional)
     * @param  string $card_exp_month card_exp_month (optional)
     * @param  string $card_exp_year card_exp_year (optional)
     * @param  string $card_holder card_holder (optional)
     * @param  string $card_number card_number (optional)
     * @param  int $card_type_id card_type_id (optional)
     * @param  string $consumer_full_name consumer_full_name (optional)
     * @param  int $country_id country_id (optional)
     * @param  string $email email (optional)
     * @param  int $installment_number installment_number (optional)
     * @param  string $param_x param_x (optional)
     * @param  string $session_id session_id (optional)
     *
     * @throws \SplititSdkClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SplititSdkClient\Model\CreateInstallmentPlanLegacyResponse
     */
    public function createInstallmentPlanGet($amount_before_fees = null, $api_key = null, $avs_address = null, $avs_zip = null, $card_cvv = null, $card_exp_month = null, $card_exp_year = null, $card_holder = null, $card_number = null, $card_type_id = null, $consumer_full_name = null, $country_id = null, $email = null, $installment_number = null, $param_x = null, $session_id = null)
    {
        list($response) = $this->createInstallmentPlanGetWithHttpInfo($amount_before_fees, $api_key, $avs_address, $avs_zip, $card_cvv, $card_exp_month, $card_exp_year, $card_holder, $card_number, $card_type_id, $consumer_full_name, $country_id, $email, $installment_number, $param_x, $session_id);
        return $response;
    }

    /**
     * Operation createInstallmentPlanGetWithHttpInfo
     *
     * @param  float $amount_before_fees (optional)
     * @param  string $api_key (optional)
     * @param  string $avs_address (optional)
     * @param  string $avs_zip (optional)
     * @param  string $card_cvv (optional)
     * @param  string $card_exp_month (optional)
     * @param  string $card_exp_year (optional)
     * @param  string $card_holder (optional)
     * @param  string $card_number (optional)
     * @param  int $card_type_id (optional)
     * @param  string $consumer_full_name (optional)
     * @param  int $country_id (optional)
     * @param  string $email (optional)
     * @param  int $installment_number (optional)
     * @param  string $param_x (optional)
     * @param  string $session_id (optional)
     *
     * @throws \SplititSdkClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SplititSdkClient\Model\CreateInstallmentPlanLegacyResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createInstallmentPlanGetWithHttpInfo($amount_before_fees = null, $api_key = null, $avs_address = null, $avs_zip = null, $card_cvv = null, $card_exp_month = null, $card_exp_year = null, $card_holder = null, $card_number = null, $card_type_id = null, $consumer_full_name = null, $country_id = null, $email = null, $installment_number = null, $param_x = null, $session_id = null)
    {
        $returnType = '\SplititSdkClient\Model\CreateInstallmentPlanLegacyResponse';
        $request = $this->createInstallmentPlanGetRequest($amount_before_fees, $api_key, $avs_address, $avs_zip, $card_cvv, $card_exp_month, $card_exp_year, $card_holder, $card_number, $card_type_id, $consumer_full_name, $country_id, $email, $installment_number, $param_x, $session_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
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

            $result = ObjectSerializer::deserialize($content, $returnType, []);

            if (!$result->getResponseHeader()->getSucceeded()){
                throw ApiException::splitit($result->getResponseHeader());
            }

            return [
                $result,
                $response->getStatusCode(),
                $response->getHeaders()
            ];


        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SplititSdkClient\Model\CreateInstallmentPlanLegacyResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createInstallmentPlanGetAsync
     *
     * 
     *
     * @param  float $amount_before_fees (optional)
     * @param  string $api_key (optional)
     * @param  string $avs_address (optional)
     * @param  string $avs_zip (optional)
     * @param  string $card_cvv (optional)
     * @param  string $card_exp_month (optional)
     * @param  string $card_exp_year (optional)
     * @param  string $card_holder (optional)
     * @param  string $card_number (optional)
     * @param  int $card_type_id (optional)
     * @param  string $consumer_full_name (optional)
     * @param  int $country_id (optional)
     * @param  string $email (optional)
     * @param  int $installment_number (optional)
     * @param  string $param_x (optional)
     * @param  string $session_id (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createInstallmentPlanGetAsync($amount_before_fees = null, $api_key = null, $avs_address = null, $avs_zip = null, $card_cvv = null, $card_exp_month = null, $card_exp_year = null, $card_holder = null, $card_number = null, $card_type_id = null, $consumer_full_name = null, $country_id = null, $email = null, $installment_number = null, $param_x = null, $session_id = null)
    {
        return $this->createInstallmentPlanGetAsyncWithHttpInfo($amount_before_fees, $api_key, $avs_address, $avs_zip, $card_cvv, $card_exp_month, $card_exp_year, $card_holder, $card_number, $card_type_id, $consumer_full_name, $country_id, $email, $installment_number, $param_x, $session_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createInstallmentPlanGetAsyncWithHttpInfo
     *
     * 
     *
     * @param  float $amount_before_fees (optional)
     * @param  string $api_key (optional)
     * @param  string $avs_address (optional)
     * @param  string $avs_zip (optional)
     * @param  string $card_cvv (optional)
     * @param  string $card_exp_month (optional)
     * @param  string $card_exp_year (optional)
     * @param  string $card_holder (optional)
     * @param  string $card_number (optional)
     * @param  int $card_type_id (optional)
     * @param  string $consumer_full_name (optional)
     * @param  int $country_id (optional)
     * @param  string $email (optional)
     * @param  int $installment_number (optional)
     * @param  string $param_x (optional)
     * @param  string $session_id (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createInstallmentPlanGetAsyncWithHttpInfo($amount_before_fees = null, $api_key = null, $avs_address = null, $avs_zip = null, $card_cvv = null, $card_exp_month = null, $card_exp_year = null, $card_holder = null, $card_number = null, $card_type_id = null, $consumer_full_name = null, $country_id = null, $email = null, $installment_number = null, $param_x = null, $session_id = null)
    {
        $returnType = '\SplititSdkClient\Model\CreateInstallmentPlanLegacyResponse';
        $request = $this->createInstallmentPlanGetRequest($amount_before_fees, $api_key, $avs_address, $avs_zip, $card_cvv, $card_exp_month, $card_exp_year, $card_holder, $card_number, $card_type_id, $consumer_full_name, $country_id, $email, $installment_number, $param_x, $session_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    $result = ObjectSerializer::deserialize($content, $returnType, []);

                    if (!$result->getResponseHeader()->getSucceeded()){
                        throw ApiException::splitit($result->getResponseHeader());
                    }

                    return [
                        $result,
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];

                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'createInstallmentPlanGet'
     *
     * @param  float $amount_before_fees (optional)
     * @param  string $api_key (optional)
     * @param  string $avs_address (optional)
     * @param  string $avs_zip (optional)
     * @param  string $card_cvv (optional)
     * @param  string $card_exp_month (optional)
     * @param  string $card_exp_year (optional)
     * @param  string $card_holder (optional)
     * @param  string $card_number (optional)
     * @param  int $card_type_id (optional)
     * @param  string $consumer_full_name (optional)
     * @param  int $country_id (optional)
     * @param  string $email (optional)
     * @param  int $installment_number (optional)
     * @param  string $param_x (optional)
     * @param  string $session_id (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createInstallmentPlanGetRequest($amount_before_fees = null, $api_key = null, $avs_address = null, $avs_zip = null, $card_cvv = null, $card_exp_month = null, $card_exp_year = null, $card_holder = null, $card_number = null, $card_type_id = null, $consumer_full_name = null, $country_id = null, $email = null, $installment_number = null, $param_x = null, $session_id = null)
    {

        $resourcePath = '/api/CreateInstallmentPlan';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($amount_before_fees !== null) {
            $queryParams['AmountBeforeFees'] = ObjectSerializer::toQueryValue($amount_before_fees);
        }
        // query params
        if ($api_key !== null) {
            $queryParams['ApiKey'] = ObjectSerializer::toQueryValue($api_key);
        }
        // query params
        if ($avs_address !== null) {
            $queryParams['AvsAddress'] = ObjectSerializer::toQueryValue($avs_address);
        }
        // query params
        if ($avs_zip !== null) {
            $queryParams['AvsZip'] = ObjectSerializer::toQueryValue($avs_zip);
        }
        // query params
        if ($card_cvv !== null) {
            $queryParams['CardCvv'] = ObjectSerializer::toQueryValue($card_cvv);
        }
        // query params
        if ($card_exp_month !== null) {
            $queryParams['CardExpMonth'] = ObjectSerializer::toQueryValue($card_exp_month);
        }
        // query params
        if ($card_exp_year !== null) {
            $queryParams['CardExpYear'] = ObjectSerializer::toQueryValue($card_exp_year);
        }
        // query params
        if ($card_holder !== null) {
            $queryParams['CardHolder'] = ObjectSerializer::toQueryValue($card_holder);
        }
        // query params
        if ($card_number !== null) {
            $queryParams['CardNumber'] = ObjectSerializer::toQueryValue($card_number);
        }
        // query params
        if ($card_type_id !== null) {
            $queryParams['CardTypeId'] = ObjectSerializer::toQueryValue($card_type_id);
        }
        // query params
        if ($consumer_full_name !== null) {
            $queryParams['ConsumerFullName'] = ObjectSerializer::toQueryValue($consumer_full_name);
        }
        // query params
        if ($country_id !== null) {
            $queryParams['CountryId'] = ObjectSerializer::toQueryValue($country_id);
        }
        // query params
        if ($email !== null) {
            $queryParams['Email'] = ObjectSerializer::toQueryValue($email);
        }
        // query params
        if ($installment_number !== null) {
            $queryParams['InstallmentNumber'] = ObjectSerializer::toQueryValue($installment_number);
        }
        // query params
        if ($param_x !== null) {
            $queryParams['ParamX'] = ObjectSerializer::toQueryValue($param_x);
        }
        // query params
        if ($session_id !== null) {
            $queryParams['SessionId'] = ObjectSerializer::toQueryValue($session_id);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['text/plain', 'application/json', 'text/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['text/plain', 'application/json', 'text/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
