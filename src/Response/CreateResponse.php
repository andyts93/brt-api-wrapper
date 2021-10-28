<?php

namespace Andyts93\BrtApiWrapper\Response;

use Andyts93\BrtApiWrapper\Api\Label;

class CreateResponse extends BaseResponse
{
    protected $rootElement = 'createResponse';

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
    protected $parcelNumberFrom;

    /**
     * @var string
     */
    protected $parcelNumberTo;

    /**
     * @var number
     */
    protected $departureDepot;

    /**
     * @var number
     */
    protected $seriesNumber;

    /**
     * @var string
     */
    protected $serviceType;

    /**
     * @var string
     */
    protected $consigneeCompanyName;

    /**
     * @var string
     */
    protected $consigneeAddress;

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
     * @var string
     */
    protected $consigneeCountryAbbreviationBRT;

    /**
     * @var int
     */
    protected $numberOfParcels;

    /**
     * @var float
     */
    protected $weightKG;

    /**
     * @var float
     */
    protected $volumeM3;

    /**
     * @var string
     */
    protected $alphanumericSenderReference;

    /**
     * @var string
     */
    protected $senderCompanyName;

    /**
     * @var string
     */
    protected $senderProvinceAbbreviation;

    /**
     * @var Label[]
     */
    protected $labels;

    /**
     * @var string
     */
    protected $disclaimer;

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
    public function getParcelNumberFrom()
    {
        return $this->parcelNumberFrom;
    }

    /**
     * @return string
     */
    public function getParcelNumberTo()
    {
        return $this->parcelNumberTo;
    }

    /**
     * @return number
     */
    public function getDepartureDepot()
    {
        return $this->departureDepot;
    }

    /**
     * @return number
     */
    public function getSeriesNumber()
    {
        return $this->seriesNumber;
    }

    /**
     * @return string
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }

    /**
     * @return string
     */
    public function getConsigneeCompanyName()
    {
        return $this->consigneeCompanyName;
    }

    /**
     * @return string
     */
    public function getConsigneeAddress()
    {
        return $this->consigneeAddress;
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

    /**
     * @return string
     */
    public function getConsigneeCountryAbbreviationBRT()
    {
        return $this->consigneeCountryAbbreviationBRT;
    }

    /**
     * @return int
     */
    public function getNumberOfParcels()
    {
        return $this->numberOfParcels;
    }

    /**
     * @return float
     */
    public function getWeightKG()
    {
        return $this->weightKG;
    }

    /**
     * @return float
     */
    public function getVolumeM3()
    {
        return $this->volumeM3;
    }

    /**
     * @return string
     */
    public function getAlphanumericSenderReference()
    {
        return $this->alphanumericSenderReference;
    }

    /**
     * @return string
     */
    public function getSenderCompanyName()
    {
        return $this->senderCompanyName;
    }

    /**
     * @return string
     */
    public function getSenderProvinceAbbreviation()
    {
        return $this->senderProvinceAbbreviation;
    }

    /**
     * @return Label[]
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * @return string
     */
    public function getDisclaimer()
    {
        return $this->disclaimer;
    }
}
