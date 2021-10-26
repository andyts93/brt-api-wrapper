<?php

namespace Andyts93\BrtApiWrapper\Request;

use Andyts93\BrtApiWrapper\Api\LabelParameter;
use Andyts93\BrtApiWrapper\Exception\InvalidJsonException;
use Andyts93\BrtApiWrapper\Exception\RequestException;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use ReflectionObject;

class BaseRequest
{
    protected $account;
    protected $endpoint;
    protected $method = 'POST';
    protected $apiProperties = [];
    protected $dataWrapper = 'data';
    protected $mandatoryFields = [];
    protected $isLabelRequired;
    protected $senderCustomerCode;
    /**
     * @var int
     */
    protected $numericSenderReference;

    /**
     * @var string
     */
    protected $alphanumericSenderReference;

    /**
     * @var LabelParameter
     */
    protected $labelParameters;

    public function __construct($userId, $password)
    {
        $this->account = [
            'userID' => $userId,
            'password' => $password
        ];
    }

    /**
     * Performs http call to BRT API
     *
     * @throws GuzzleException
     * @throws InvalidJsonException|RequestException
     */
    public function call()
    {
        $client = new Client([
            'base_url' => 'https://api.brt.it/rest/v1/',
            'timeout' => 2.0
        ]);

        $request = $client->createRequest($this->method, $this->endpoint, [
            'json' => $this->createRequestBody()
        ]);

        $response = $client->send($request);

        $response = json_decode($response->getBody());

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new InvalidJsonException(json_last_error_msg(), json_last_error());
        }

        return $response;
    }

    public function createRequestBody()
    {
//        PHP 5.6+ only
//        $emptyMandatory = array_filter($this->toArray(), function ($v, $k) {
//            return in_array($k, $this->mandatoryFields) && (is_null($v) || $v === "");
//        }, 1);
        $emptyMandatory = [];
        foreach ($this->toArray() as $k => $v) {
            if (in_array($k, $this->mandatoryFields) && (is_null($v) || $v === "")) {
                $emptyMandatory[$k] = $v;
            }
        }
        if (count($emptyMandatory) > 0) {
            throw new RequestException(sprintf('Fields %s are mandatory', implode(', ', array_keys($emptyMandatory))));
        }
        return array_merge(['account' => $this->account], [$this->dataWrapper => $this->toArray()]);
    }

    public function toArray()
    {
        $reflection = new ReflectionObject($this);
        $properties = [];
        foreach ($reflection->getProperties() as $property) {
//            if (in_array($property->getName(), $this->apiProperties)) {
            if ($property->isPrivate()) {
                $property->setAccessible(true);
                if (!is_null($property->getValue($this))) {
                    $properties[$property->getName()] = $property->getValue($this);
                }
            }
        }
        return $properties;
    }

    /**
     * @param mixed $isLabelRequired
     * @return BaseRequest
     */
    public function setIsLabelRequired($isLabelRequired)
    {
        $this->isLabelRequired = $isLabelRequired;
        return $this;
    }

    /**
     * @param LabelParameter $labelParameters
     * @return BaseRequest
     */
    public function setLabelParameters($labelParameters)
    {
        $this->labelParameters = $labelParameters;
        return $this;
    }

    /**
     * @param mixed $senderCustomerCode
     * @return BaseRequest
     */
    public function setSenderCustomerCode($senderCustomerCode)
    {
        $this->senderCustomerCode = $senderCustomerCode;
        return $this;
    }

    /**
     * @param int $numericSenderReference
     * @return BaseRequest
     */
    public function setNumericSenderReference($numericSenderReference)
    {
        $this->numericSenderReference = $numericSenderReference;
        return $this;
    }

    /**
     * @param string $alphanumericSenderReference
     * @return BaseRequest
     */
    public function setAlphanumericSenderReference($alphanumericSenderReference)
    {
        $this->alphanumericSenderReference = $alphanumericSenderReference;
        return $this;
    }
}
