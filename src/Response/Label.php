<?php

namespace Andyts93\BrtApiWrapper\Response;

class Label
{
    /**
     * @var int
     */
    private $dataLength;

    /**
     * @var string
     */
    private $parcelID;

    /**
     * @var string
     */
    private $stream;

    public function __construct($dataLength, $parcelID, $stream)
    {

        $this->dataLength = $dataLength;
        $this->parcelID = $parcelID;
        $this->stream = base64_decode($stream);
    }

    /**
     * @return int
     */
    public function getDataLength()
    {
        return $this->dataLength;
    }

    /**
     * @return string
     */
    public function getParcelID()
    {
        return $this->parcelID;
    }

    /**
     * @return string
     */
    public function getStream()
    {
        return $this->stream;
    }
}