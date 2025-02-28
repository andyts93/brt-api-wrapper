<?php

namespace Andyts93\BrtApiWrapper\Request;

use Andyts93\BrtApiWrapper\Api\Consignee;
use Andyts93\BrtApiWrapper\Response\RoutingResponse;

class RoutingRequest extends BaseRequest
{
    protected $endpoint = 'shipments/routing';
    protected $method = 'PUT';
    protected $dataWrapper = 'routingData';
    protected $mandatoryFields = [
        'departureDepot',
        'senderCustomerCode',
        'deliveryFreightTypeCode',
        'consigneeCompanyName',
        'consigneeAddress',
        'consigneeZIPCode',
        'consigneeCity',
        'consigneeCountryAbbreviationISOAlpha2',
        'numberOfParcels',
        'weightKG'
    ];

    /**
     * @var string
     */
    private $network;

    /**
     * @var int
     */
    private $departureDepot;

    /**
     * @var string
     */
    private $deliveryFreightTypeCode;

    /**
     * @var Consignee
     */
    private $consignee;

    /**
     * @var string
     */
    private $serviceType;

    /**
     * @var int
     */
    private $numberOfParcels;

    /**
     * @var float
     */
    private $weightKG;

    /**
     * @var float
     */
    private $volumeM3;

    /**
     * @var string
     */
    private $variousParticularitiesManagementCode;

    /**
     * @var string
     */
    private $particularDelivery1;

    /**
     * @var string
     */
    private $particularDelivery2;


    public function call()
    {
        return new RoutingResponse(parent::call());
    }

    public function toArray()
    {
        return array_filter([
            $this->dataWrapper => array_filter([
                'network' => $this->network,
                'departureDepot' => $this->departureDepot,
                'senderCustomerCode' => $this->senderCustomerCode,
                'deliveryFreightTypeCode' => $this->deliveryFreightTypeCode,
                'consigneeCompanyName' => $this->consignee->getCompanyName(),
                'consigneeAddress' => $this->consignee->getAddress(),
                'consigneeZIPCode' => $this->consignee->getZipCode(),
                'consigneeCity' => $this->consignee->getCity(),
                'consigneeProvinceAbbreviation' => $this->consignee->getProvince(),
                'consigneeCountryAbbreviationISOAlpha2' => $this->consignee->getCountry(),
                'serviceType' => $this->serviceType,
                'numberOfParcels' => $this->numberOfParcels,
                'weightKG' => $this->weightKG,
                'volumeM3' => $this->volumeM3,
                'variousParticularitiesManagementCode' => $this->variousParticularitiesManagementCode,
                'particularDelivery1' => $this->particularDelivery1,
                'particularDelivery2' => $this->particularDelivery2], function ($v) { return !is_null($v); })
        ], function ($v) {
            return !is_null($v);
        });
    }

    /**
     * @param string $network
     * @return CreateRequest
     */
    public function setNetwork($network)
    {
        $this->network = $network;
        return $this;
    }

    /**
     * @param int $departureDepot
     * @return CreateRequest
     */
    public function setDepartureDepot($departureDepot)
    {
        $this->departureDepot = $departureDepot;
        return $this;
    }

    /**
     * @param string $deliveryFreightTypeCode
     * @return CreateRequest
     */
    public function setDeliveryFreightTypeCode($deliveryFreightTypeCode)
    {
        $this->deliveryFreightTypeCode = $deliveryFreightTypeCode;
        return $this;
    }

    /**
     * @param string $serviceType
     * @return CreateRequest
     */
    public function setServiceType($serviceType)
    {
        $this->serviceType = $serviceType;
        return $this;
    }

    /**
     * @param int $numberOfParcels
     * @return CreateRequest
     */
    public function setNumberOfParcels($numberOfParcels)
    {
        $this->numberOfParcels = $numberOfParcels;
        return $this;
    }

    /**
     * @param float $weightKG
     * @return CreateRequest
     */
    public function setWeightKG($weightKG)
    {
        $this->weightKG = $weightKG;
        return $this;
    }

    /**
     * @param float $volumeM3
     * @return CreateRequest
     */
    public function setVolumeM3($volumeM3)
    {
        $this->volumeM3 = $volumeM3;
        return $this;
    }

    /**
     * @param string $variousParticularitiesManagementCode
     * @return CreateRequest
     */
    public function setVariousParticularitiesManagementCode($variousParticularitiesManagementCode)
    {
        $this->variousParticularitiesManagementCode = $variousParticularitiesManagementCode;
        return $this;
    }

    /**
     * @param string $particularDelivery1
     * @return CreateRequest
     */
    public function setParticularDelivery1($particularDelivery1)
    {
        $this->particularDelivery1 = $particularDelivery1;
        return $this;
    }

    /**
     * @param string $particularDelivery2
     * @return CreateRequest
     */
    public function setParticularDelivery2($particularDelivery2)
    {
        $this->particularDelivery2 = $particularDelivery2;
        return $this;
    }

    /**
     * @param Consignee $consignee
     */
    public function setConsignee($consignee)
    {
        $this->consignee = $consignee;
        return $this;
    }

    /**
     * @return Consignee
     */
    public function getConsignee()
    {
        return $this->consignee;
    }
}
