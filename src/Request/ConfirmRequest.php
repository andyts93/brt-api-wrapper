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
     * @return ConfirmRequest
     */
    public function setSenderCustomerCode($senderCustomerCode)
    {
        $this->senderCustomerCode = $senderCustomerCode;
        return $this;
    }

    /**
     * @param number $numericSenderReference
     * @return ConfirmRequest
     */
    public function setNumericSenderReference($numericSenderReference)
    {
        $this->numericSenderReference = $numericSenderReference;
        return $this;
    }

    /**
     * @param string $alphanumericSenderReference
     * @return ConfirmRequest
     */
    public function setAlphanumericSenderReference($alphanumericSenderReference)
    {
        $this->alphanumericSenderReference = $alphanumericSenderReference;
        return $this;
    }

    public function call()
    {
        return new ConfirmResponse(parent::call());
    }
}