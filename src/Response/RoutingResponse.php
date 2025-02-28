<?php

namespace Andyts93\BrtApiWrapper\Response;

use Andyts93\BrtApiWrapper\Api\Label;

class RoutingResponse extends BaseResponse
{
    protected $rootElement = 'routingResponse';

    /**
     * @var string
     */
    protected $arrivalTerminal;

    /**
     * @var string
     */
    protected $arrivalDepot;

    /**
     * @var string
     */
    protected $deliveryZone;

    /**
     * @var string
     */
    protected $consigneeZIPCode;

    /**
     * @var string
     */
    protected $consigneeCity;

    /**
     * @var string
     */
    protected $consigneeProvinceAbbreviation;

    /**
     * @return string
     */
    public function getArrivalTerminal()
    {
        return $this->arrivalTerminal;
    }

    /**
     * @return string
     */
    public function getArrivalDepot()
    {
        return $this->arrivalDepot;
    }

    /**
     * @return string
     */
    public function getDeliveryZone()
    {
        return $this->deliveryZone;
    }

    /**
     * @return string
     */
    public function getConsigneeZIPCode()
    {
        return $this->consigneeZIPCode;
    }

    /**
     * @return string
     */
    public function getConsigneeCity()
    {
        return $this->consigneeCity;
    }

    /**
     * @return string
     */
    public function getConsigneeProvinceAbbreviation()
    {
        return $this->consigneeProvinceAbbreviation;
    }
}
