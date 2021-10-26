<?php

namespace Andyts93\BrtApiWrapper\Api;

class Consignee
{
    /** @var string */
    private $companyName;

    /** @var string */
    private $address;

    /** @var string */
    private $zipCode;

    /** @var string */
    private $city;

    /** @var string */
    private $province;

    /** @var string */
    private $country;

    /** @var string */
    private $closingShift1_DayOfTheWeek;

    /** @var string */
    private $closingShift1_PeriodOfTheDay;

    /** @var string */
    private $closingShift2_DayOfTheWeek;

    /** @var string */
    private $closingShift2_PeriodOfTheDay;

    /** @var string */
    private $contactName;

    /** @var string */
    private $telephone;

    /** @var string */
    private $email;

    /** @var string */
    private $mobilePhone;

    /** @var string */
    private $vatNumber;

    /** @var string */
    private $vatCountry;

    /** @var string */
    private $italianFiscalCode;

    /**
     * @param string $companyName
     * @return Consignee
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * @param string $address
     * @return Consignee
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @param string $zipCode
     * @return Consignee
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
        return $this;
    }

    /**
     * @param string $city
     * @return Consignee
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @param string $province
     * @return Consignee
     */
    public function setProvince($province)
    {
        $this->province = $province;
        return $this;
    }

    /**
     * @param string $country
     * @return Consignee
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @param string $closingShift1_DayOfTheWeek
     * @return Consignee
     */
    public function setClosingShift1DayOfTheWeek($closingShift1_DayOfTheWeek)
    {
        $this->closingShift1_DayOfTheWeek = $closingShift1_DayOfTheWeek;
        return $this;
    }

    /**
     * @param string $closingShift1_PeriodOfTheDay
     * @return Consignee
     */
    public function setClosingShift1PeriodOfTheDay($closingShift1_PeriodOfTheDay)
    {
        $this->closingShift1_PeriodOfTheDay = $closingShift1_PeriodOfTheDay;
        return $this;
    }

    /**
     * @param string $closingShift2_DayOfTheWeek
     * @return Consignee
     */
    public function setClosingShift2DayOfTheWeek($closingShift2_DayOfTheWeek)
    {
        $this->closingShift2_DayOfTheWeek = $closingShift2_DayOfTheWeek;
        return $this;
    }

    /**
     * @param string $closingShift2_PeriodOfTheDay
     * @return Consignee
     */
    public function setClosingShift2PeriodOfTheDay($closingShift2_PeriodOfTheDay)
    {
        $this->closingShift2_PeriodOfTheDay = $closingShift2_PeriodOfTheDay;
        return $this;
    }

    /**
     * @param string $contactName
     * @return Consignee
     */
    public function setContactName($contactName)
    {
        $this->contactName = $contactName;
        return $this;
    }

    /**
     * @param string $telephone
     * @return Consignee
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
        return $this;
    }

    /**
     * @param string $email
     * @return Consignee
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @param string $mobilePhone
     * @return Consignee
     */
    public function setMobilePhone($mobilePhone)
    {
        $this->mobilePhone = $mobilePhone;
        return $this;
    }

    /**
     * @param string $vatNumber
     * @return Consignee
     */
    public function setVatNumber($vatNumber)
    {
        $this->vatNumber = $vatNumber;
        return $this;
    }

    /**
     * @param string $vatCountry
     * @return Consignee
     */
    public function setVatCountry($vatCountry)
    {
        $this->vatCountry = $vatCountry;
        return $this;
    }

    /**
     * @param string $italianFiscalCode
     * @return Consignee
     */
    public function setItalianFiscalCode($italianFiscalCode)
    {
        $this->italianFiscalCode = $italianFiscalCode;
        return $this;
    }
}
