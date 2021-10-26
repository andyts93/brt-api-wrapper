<?php

namespace Andyts93\BrtApiWrapper\Request;

use Andyts93\BrtApiWrapper\Response\ConfirmResponse;

class ConfirmRequest extends BaseRequest
{
    protected $endpoint = 'shipments/shipment';
    protected $method = 'PUT';
    protected $dataWrapper = 'confirmData';
    protected $mandatoryFields = [
        'senderCustomerCode',
        'numericSenderReference'
    ];

    public function call()
    {
        return new ConfirmResponse(parent::call());
    }
}
