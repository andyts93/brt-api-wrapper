<?php

namespace Andyts93\BrtApiWrapper\Api;

class LabelParameter
{
    /**
     * @var string
     */
    private $outputType;

    /**
     * @var string
     */
    private $offsetX;

    /**
     * @var string
     */
    private $offsetY;

    /**
     * @var string
     */
    private $isBorderRequired;

    /**
     * @var string
     */
    private $isLogoRequired;

    /**
     * @var string
     */
    private $isBarcodeControlRowRequired;

    public function __construct(
        $outputType = 'ZPL',
        $offsetX = 0,
        $offsetY = 0,
        $isBorderRequired = 0,
        $isLogoRequired = 0,
        $isBarcodeControlRowRequired = 0
    ) {

        $this->outputType = $outputType;
        $this->offsetX = $offsetX;
        $this->offsetY = $offsetY;
        $this->isBorderRequired = $isBorderRequired;
        $this->isLogoRequired = $isLogoRequired;
        $this->isBarcodeControlRowRequired = $isBarcodeControlRowRequired;
    }

    /**
     * @param string $outputType
     * @return LabelParameter
     */
    public function setOutputType($outputType)
    {
        $this->outputType = $outputType;
        return $this;
    }

    /**
     * @param string $offsetX
     * @return LabelParameter
     */
    public function setOffsetX($offsetX)
    {
        $this->offsetX = $offsetX;
        return $this;
    }

    /**
     * @param string $offsetY
     * @return LabelParameter
     */
    public function setOffsetY($offsetY)
    {
        $this->offsetY = $offsetY;
        return $this;
    }

    /**
     * @param string $isBorderRequired
     * @return LabelParameter
     */
    public function setIsBorderRequired($isBorderRequired)
    {
        $this->isBorderRequired = $isBorderRequired;
        return $this;
    }

    /**
     * @param string $isLogoRequired
     * @return LabelParameter
     */
    public function setIsLogoRequired($isLogoRequired)
    {
        $this->isLogoRequired = $isLogoRequired;
        return $this;
    }

    /**
     * @param string $isBarcodeControlRowRequired
     * @return LabelParameter
     */
    public function setIsBarcodeControlRowRequired($isBarcodeControlRowRequired)
    {
        $this->isBarcodeControlRowRequired = $isBarcodeControlRowRequired;
        return $this;
    }

    public function toArray()
    {
        return [
            'outputType' => $this->outputType,
            'offsetX' => $this->offsetX,
            'offsetY' => $this->offsetY,
            'isBorderRequired' => $this->isBorderRequired ? "S" : "N",
            'isLogoRequired' => $this->isLogoRequired ? "S" : "N",
            'isBarcodeControlRowRequired' => $this->isBarcodeControlRowRequired ? "S" : "N"
        ];
    }
}
