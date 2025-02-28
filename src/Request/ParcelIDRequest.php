<?php

namespace Andyts93\BrtApiWrapper\Request;

use Andyts93\BrtApiWrapper\Exception\InvalidJsonException;
use Andyts93\BrtApiWrapper\Response\ParcelIDResponse;
use GuzzleHttp\Client;

class ParcelIDRequest extends BaseRequest
{
    protected $endpoint = 'tracking/parcelID/';
    protected $method = 'GET';
    protected $mandatoryFields = [];

    public function callWithPath($parcelID)
    {
        $client = new Client();

        $request = $client->createRequest($this->method, 'https://api.brt.it/rest/v1/'.$this->endpoint.'/'.$parcelID);
        $request->addHeader('userID', $this->account['userID']);
        $request->addHeader('password', $this->account['password']);

        $response = $client->send($request);

        $response = json_decode($response->getBody());

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new InvalidJsonException(json_last_error_msg(), json_last_error());
        }

        return new ParcelIDResponse($response);
    }
}
