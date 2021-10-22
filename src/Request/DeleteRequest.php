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

    /**
     * @var number
     */
    private $senderCustomerCode;

    /**
     * @var number
     */
    private $numericSenderReference;

    /**
     * @var string
     */
    private $alphanumericSenderReference;

    /**
     * @param number $senderCustomerCode
     * @return DeleteRequest
     */
    public function setSenderCustomerCode($senderCustomerCode)
    {
        $this->senderCustomerCode = $senderCustomerCode;
        return $this;
    }

    /**
     * @param number $numericSenderReference
     * @return DeleteRequest
     */
    public function setNumericSenderReference($numericSenderReference)
    {
        $this->numericSenderReference = $numericSenderReference;
        return $this;
    }

    /**
     * @param string $alphanumericSenderReference
     * @return DeleteRequest
     */
    public function setAlphanumericSenderReference($alphanumericSenderReference)
    {
        $this->alphanumericSenderReference = $alphanumericSenderReference;
        return $this;
    }

    public function call()
    {
        return new DeleteResponse(parent::call());
    }
}