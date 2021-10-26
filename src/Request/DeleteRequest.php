<?php

namespace Andyts93\BrtApiWrapper\Request;

use Andyts93\BrtApiWrapper\Response\DeleteResponse;

class DeleteRequest extends BaseRequest
{
    protected $endpoint = 'shipments/delete';
    protected $method = 'PUT';
    protected $dataWrapper = 'deleteData';
    protected $mandatoryFields = [
        'senderCustomerCode',
        'numericSenderReference'
    ];

    public function call()
    {
        return new DeleteResponse(parent::call());
    }

    public function toArray()
    {
        // TODO: Implement toArray() method.
    }
}
