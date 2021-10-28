<?php

namespace Andyts93\BrtApiWrapper\Api;

class Label
{
    /**
     * @var int
     */
    public $dataLength;

    /**
     * @var string
     */
    public $parcelID;

    /**
     * @var string
     */
    public $stream;

    public function __construct($dataLength, $parcelID, $stream)
    {

        $this->dataLength = $dataLength;
        $this->parcelID = $parcelID;
        $this->stream = base64_decode($stream);
    }
}
