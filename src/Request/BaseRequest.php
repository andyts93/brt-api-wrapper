<?php

namespace Andyts93\BrtApiWrapper\Request;

use Andyts93\BrtApiWrapper\Exception\InvalidJsonException;
use Andyts93\BrtApiWrapper\Exception\RequestException;
use Andyts93\BrtApiWrapper\Response\CreateResponse;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;

class BaseRequest
{
    protected $account;
    protected $endpoint;
    protected $method = 'POST';
    protected $apiProperties = [];
    protected $dataWrapper = 'data';
    protected $mandatoryFields = [];
    protected $isLabelRequired;

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

    public function toArray()
    {
        $reflection = new \ReflectionObject($this);
        $properties = [];
        foreach ($reflection->getProperties() as $property) {
//            if (in_array($property->getName(), $this->apiProperties)) {
            if ($property->isPrivate()) {
                $property->setAccessible(true);
                $properties[$property->getName()] = $property->getValue($this);
            }
        }
        return $properties;
    }

    public function createRequestBody()
    {
        $emptyMandatory = array_filter($this->toArray(), function ($v, $k) {
            return in_array($k, $this->mandatoryFields) && (is_null($v) || $v === "");
        }, 1);
        if (count($emptyMandatory) > 0) {
            throw new RequestException(sprintf('Fields %s are mandatory', implode(', ', array_keys($emptyMandatory))));
        }
        return array_merge(['account' => $this->account], [$this->dataWrapper => $this->toArray()]);
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


}