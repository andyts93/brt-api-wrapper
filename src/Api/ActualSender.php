<?php

namespace Andyts93\BrtApiWrapper\Api;

class ActualSender
{
    /** @var string */
    private $actualSenderName;

    /** @var string */
    private $actualSenderEmail;

    /** @var string */
    private $actualSenderMobilePhoneNumber;

    /**
     * Get the value of actualSenderMobilePhoneNumber
     */ 
    public function getActualSenderMobilePhoneNumber()
    {
        return $this->actualSenderMobilePhoneNumber;
    }

    /**
     * Set the value of actualSenderMobilePhoneNumber
     *
     * @return  self
     */ 
    public function setActualSenderMobilePhoneNumber($actualSenderMobilePhoneNumber)
    {
        $this->actualSenderMobilePhoneNumber = $actualSenderMobilePhoneNumber;

        return $this;
    }

    /**
     * Get the value of actualSenderEmail
     */ 
    public function getActualSenderEmail()
    {
        return $this->actualSenderEmail;
    }

    /**
     * Set the value of actualSenderEmail
     *
     * @return  self
     */ 
    public function setActualSenderEmail($actualSenderEmail)
    {
        $this->actualSenderEmail = $actualSenderEmail;

        return $this;
    }

    /**
     * Get the value of actualSenderName
     */ 
    public function getActualSenderName()
    {
        return $this->actualSenderName;
    }

    /**
     * Set the value of actualSenderName
     *
     * @return  self
     */ 
    public function setActualSenderName($actualSenderName)
    {
        $this->actualSenderName = $actualSenderName;

        return $this;
    }

    public function toArray()
    {
        return [
            'actualSenderName' => $this->actualSenderName,
            'actualSenderEmail' => $this->actualSenderEmail,
            'actualSenderMobilePhoneNumber' => $this->actualSenderMobilePhoneNumber
        ];
    }
}
