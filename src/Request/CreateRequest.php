<?php

namespace Andyts93\BrtApiWrapper\Request;

use Andyts93\BrtApiWrapper\Api\Consignee;
use Andyts93\BrtApiWrapper\Response\CreateResponse;

class CreateRequest extends BaseRequest
{
    protected $endpoint = 'shipments/shipment';
    protected $method = 'POST';
    protected $dataWrapper = 'createData';
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
        'weightKG',
        'numericSenderReference',
        'isCODMandatory'
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
    private $isAlertRequired;

    /**
     * @var string
     */
    private $pricingConditionCode;

    /**
     * @var string
     */
    private $serviceType;

    /**
     * @var float
     */
    private $insuranceAmount;

    /**
     * @var string
     */
    private $insuranceAmountCurrency;

    /**
     * @var string
     */
    private $senderParcelType;

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
     * @var float
     */
    private $quantityToBeInvoiced;

    /**
     * @var float
     */
    private $cashOnDelivery;

    /**
     * @var string
     */
    private $isCODMandatory;

    /**
     * @var string
     */
    private $codPaymentType;

    /**
     * @var string
     */
    private $codCurrency;

    /**
     * @var string
     */
    private $notes;

    /**
     * @var string
     */
    private $parcelsHandlingCode;

    /**
     * @var string
     */
    private $deliveryDateRequired;

    /**
     * @var string
     */
    private $deliveryType;

    /**
     * @var float
     */
    private $declaredParcelValue;

    /**
     * @var string
     */
    private $declaredParcelValueCurrency;

    /**
     * @var string
     */
    private $particularitiesDeliveryManagementCode;

    /**
     * @var string
     */
    private $particularitiesHoldOnStockManagementCode;

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

    /**
     * @var string
     */
    private $palletType1;

    /**
     * @var int
     */
    private $palletType1Number;

    /**
     * @var string
     */
    private $palletType2;

    /**
     * @var int
     */
    private $palletType2Number;

    /**
     * @var string
     */
    private $originalSenderCompanyName;

    /**
     * @var string
     */
    private $originalSenderZIPCode;

    /**
     * @var string
     */
    private $originalSenderCountryAbbreviationISOAlpha2;

    /**
     * @var string
     */
    private $cmrCode;

    /**
     * @var string
     */
    private $neighborNameMandatoryAuthorization;

    /**
     * @var string
     */
    private $pinCodeMandatoryAuthorization;

    /**
     * @var string
     */
    private $packingListPDFName;

    /**
     * @var string
     */
    private $packingListPDFFlagPrint;

    /**
     * @var string
     */
    private $packingListPDFFlagEmail;

    /**
     * @var string
     */
    private $pudoId;

    public function call()
    {
        return new CreateResponse(parent::call());
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
                'consigneeClosingShift1_DayOfTheWeek' => $this->consignee->getClosingShift1DayOfTheWeek(),
                'consigneeClosingShift1_PeriodOfTheDay' => $this->consignee->getClosingShift1PeriodOfTheDay(),
                'consigneeClosingShift2_DayOfTheWeek' => $this->consignee->getClosingShift2DayOfTheWeek(),
                'consigneeClosingShift2_PeriodOfTheDay' => $this->consignee->getClosingShift2PeriodOfTheDay(),
                'consigneeContactName' => $this->consignee->getContactName(),
                'consigneeTelephone' => $this->consignee->getTelephone(),
                'consigneeEMail' => $this->consignee->getEmail(),
                'consigneeMobilePhoneNumber' => $this->consignee->getMobilePhone(),
                'isAlertRequired' => $this->isAlertRequired,
                'consigneeVATNumber' => $this->consignee->getVatNumber(),
                'consigneeVATNumberCountryISOAlpha2' => $this->consignee->getVatCountry(),
                'consigneeItalianFiscalCode' => $this->consignee->getItalianFiscalCode(),
                'pricingConditionCode' => $this->pricingConditionCode,
                'serviceType' => $this->serviceType,
                'insuranceAmount' => $this->insuranceAmount,
                'insuranceAmountCurrency' => $this->insuranceAmountCurrency,
                'senderParcelType' => $this->senderParcelType,
                'numberOfParcels' => $this->numberOfParcels,
                'weightKG' => $this->weightKG,
                'volumeM3' => $this->volumeM3,
                'quantityToBeInvoiced' => $this->quantityToBeInvoiced,
                'cashOnDelivery' => $this->cashOnDelivery,
                'isCODMandatory' => $this->isCODMandatory,
                'codPaymentType' => $this->codPaymentType,
                'codCurrency' => $this->codCurrency,
                'numericSenderReference' => $this->numericSenderReference,
                'alphanumericSenderReference' => $this->alphanumericSenderReference,
                'notes' => $this->notes,
                'parcelsHandlingCode' => $this->parcelsHandlingCode,
                'deliveryDateRequired' => $this->deliveryDateRequired,
                'deliveryType' => $this->deliveryType,
                'declaredParcelValue' => $this->declaredParcelValue,
                'declaredParcelValueCurrency' => $this->declaredParcelValueCurrency,
                'particularitiesDeliveryManagementCode' => $this->particularitiesDeliveryManagementCode,
                'particularitiesHoldOnStockManagementCode' => $this->particularitiesHoldOnStockManagementCode,
                'variousParticularitiesManagementCode' => $this->variousParticularitiesManagementCode,
                'particularDelivery1' => $this->particularDelivery1,
                'particularDelivery2' => $this->particularDelivery2,
                'palletType1' => $this->palletType1,
                'palletType1Number' => $this->palletType1Number,
                'palletType2' => $this->palletType2,
                'palletType2Number' => $this->palletType2Number,
                'originalSenderCompanyName' => $this->originalSenderCompanyName,
                'originalSenderZIPCode' => $this->originalSenderZIPCode,
                'originalSenderCountryAbbreviationISOAlpha2' => $this->originalSenderCountryAbbreviationISOAlpha2,
                'cmrCode' => $this->cmrCode,
                'neighborNameMandatoryAuthorization' => $this->neighborNameMandatoryAuthorization,
                'pinCodeMandatoryAuthorization' => $this->pinCodeMandatoryAuthorization,
                'packingListPDFName' => $this->packingListPDFName,
                'packingListPDFFlagPrint' => $this->packingListPDFFlagPrint,
                'packingListPDFFlagEmail' => $this->packingListPDFFlagEmail,
                'pudoId' => $this->pudoId], function ($v) { return !is_null($v); })
            ,
            'isLabelRequired' => $this->isLabelRequired,
            'labelParameters' => $this->labelParameters->toArray()
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
     * @param string $isAlertRequired
     * @return CreateRequest
     */
    public function setIsAlertRequired($isAlertRequired)
    {
        $this->isAlertRequired = $isAlertRequired;
        return $this;
    }

    /**
     * @param string $pricingConditionCode
     * @return CreateRequest
     */
    public function setPricingConditionCode($pricingConditionCode)
    {
        $this->pricingConditionCode = $pricingConditionCode;
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
     * @param float $insuranceAmount
     * @return CreateRequest
     */
    public function setInsuranceAmount($insuranceAmount)
    {
        $this->insuranceAmount = $insuranceAmount;
        return $this;
    }

    /**
     * @param string $insuranceAmountCurrency
     * @return CreateRequest
     */
    public function setInsuranceAmountCurrency($insuranceAmountCurrency)
    {
        $this->insuranceAmountCurrency = $insuranceAmountCurrency;
        return $this;
    }

    /**
     * @param string $senderParcelType
     * @return CreateRequest
     */
    public function setSenderParcelType($senderParcelType)
    {
        $this->senderParcelType = $senderParcelType;
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
     * @param float $quantityToBeInvoiced
     * @return CreateRequest
     */
    public function setQuantityToBeInvoiced($quantityToBeInvoiced)
    {
        $this->quantityToBeInvoiced = $quantityToBeInvoiced;
        return $this;
    }

    /**
     * @param float $cashOnDelivery
     * @return CreateRequest
     */
    public function setCashOnDelivery($cashOnDelivery)
    {
        $this->cashOnDelivery = $cashOnDelivery;
        return $this;
    }

    /**
     * @param string $isCODMandatory
     * @return CreateRequest
     */
    public function setIsCODMandatory($isCODMandatory)
    {
        $this->isCODMandatory = $isCODMandatory;
        return $this;
    }

    /**
     * @param string $codPaymentType
     * @return CreateRequest
     */
    public function setCodPaymentType($codPaymentType)
    {
        $this->codPaymentType = $codPaymentType;
        return $this;
    }

    /**
     * @param string $codCurrency
     * @return CreateRequest
     */
    public function setCodCurrency($codCurrency)
    {
        $this->codCurrency = $codCurrency;
        return $this;
    }

    /**
     * @param string $notes
     * @return CreateRequest
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
        return $this;
    }

    /**
     * @param string $parcelsHandlingCode
     * @return CreateRequest
     */
    public function setParcelsHandlingCode($parcelsHandlingCode)
    {
        $this->parcelsHandlingCode = $parcelsHandlingCode;
        return $this;
    }

    /**
     * @param string $deliveryDateRequired
     * @return CreateRequest
     */
    public function setDeliveryDateRequired($deliveryDateRequired)
    {
        $this->deliveryDateRequired = $deliveryDateRequired;
        return $this;
    }

    /**
     * @param string $deliveryType
     * @return CreateRequest
     */
    public function setDeliveryType($deliveryType)
    {
        $this->deliveryType = $deliveryType;
        return $this;
    }

    /**
     * @param float $declaredParcelValue
     * @return CreateRequest
     */
    public function setDeclaredParcelValue($declaredParcelValue)
    {
        $this->declaredParcelValue = $declaredParcelValue;
        return $this;
    }

    /**
     * @param string $declaredParcelValueCurrency
     * @return CreateRequest
     */
    public function setDeclaredParcelValueCurrency($declaredParcelValueCurrency)
    {
        $this->declaredParcelValueCurrency = $declaredParcelValueCurrency;
        return $this;
    }

    /**
     * @param string $particularitiesDeliveryManagementCode
     * @return CreateRequest
     */
    public function setParticularitiesDeliveryManagementCode($particularitiesDeliveryManagementCode)
    {
        $this->particularitiesDeliveryManagementCode = $particularitiesDeliveryManagementCode;
        return $this;
    }

    /**
     * @param string $particularitiesHoldOnStockManagementCode
     * @return CreateRequest
     */
    public function setParticularitiesHoldOnStockManagementCode($particularitiesHoldOnStockManagementCode)
    {
        $this->particularitiesHoldOnStockManagementCode = $particularitiesHoldOnStockManagementCode;
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
     * @param string $palletType1
     * @return CreateRequest
     */
    public function setPalletType1($palletType1)
    {
        $this->palletType1 = $palletType1;
        return $this;
    }

    /**
     * @param int $palletType1Number
     * @return CreateRequest
     */
    public function setPalletType1Number($palletType1Number)
    {
        $this->palletType1Number = $palletType1Number;
        return $this;
    }

    /**
     * @param string $palletType2
     * @return CreateRequest
     */
    public function setPalletType2($palletType2)
    {
        $this->palletType2 = $palletType2;
        return $this;
    }

    /**
     * @param int $palletType2Number
     * @return CreateRequest
     */
    public function setPalletType2Number($palletType2Number)
    {
        $this->palletType2Number = $palletType2Number;
        return $this;
    }

    /**
     * @param string $originalSenderCompanyName
     * @return CreateRequest
     */
    public function setOriginalSenderCompanyName($originalSenderCompanyName)
    {
        $this->originalSenderCompanyName = $originalSenderCompanyName;
        return $this;
    }

    /**
     * @param string $originalSenderZIPCode
     * @return CreateRequest
     */
    public function setOriginalSenderZIPCode($originalSenderZIPCode)
    {
        $this->originalSenderZIPCode = $originalSenderZIPCode;
        return $this;
    }

    /**
     * @param string $originalSenderCountryAbbreviationISOAlpha2
     * @return CreateRequest
     */
    public function setOriginalSenderCountryAbbreviationISOAlpha2($originalSenderCountryAbbreviationISOAlpha2)
    {
        $this->originalSenderCountryAbbreviationISOAlpha2 = $originalSenderCountryAbbreviationISOAlpha2;
        return $this;
    }

    /**
     * @param string $cmrCode
     * @return CreateRequest
     */
    public function setCmrCode($cmrCode)
    {
        $this->cmrCode = $cmrCode;
        return $this;
    }

    /**
     * @param string $neighborNameMandatoryAuthorization
     * @return CreateRequest
     */
    public function setNeighborNameMandatoryAuthorization($neighborNameMandatoryAuthorization)
    {
        $this->neighborNameMandatoryAuthorization = $neighborNameMandatoryAuthorization;
        return $this;
    }

    /**
     * @param string $pinCodeMandatoryAuthorization
     * @return CreateRequest
     */
    public function setPinCodeMandatoryAuthorization($pinCodeMandatoryAuthorization)
    {
        $this->pinCodeMandatoryAuthorization = $pinCodeMandatoryAuthorization;
        return $this;
    }

    /**
     * @param string $packingListPDFName
     * @return CreateRequest
     */
    public function setPackingListPDFName($packingListPDFName)
    {
        $this->packingListPDFName = $packingListPDFName;
        return $this;
    }

    /**
     * @param string $packingListPDFFlagPrint
     * @return CreateRequest
     */
    public function setPackingListPDFFlagPrint($packingListPDFFlagPrint)
    {
        $this->packingListPDFFlagPrint = $packingListPDFFlagPrint;
        return $this;
    }

    /**
     * @param string $packingListPDFFlagEmail
     * @return CreateRequest
     */
    public function setPackingListPDFFlagEmail($packingListPDFFlagEmail)
    {
        $this->packingListPDFFlagEmail = $packingListPDFFlagEmail;
        return $this;
    }

    /**
     * @param string $pudoId
     * @return CreateRequest
     */
    public function setPudoId($pudoId)
    {
        $this->pudoId = $pudoId;
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
