<?php

namespace Andyts93\BrtApiWrapper\Response;

use DateTime;

class BaseResponse
{
    /**
     * @var string
     */
    protected $rootElement;

    /**
     * @var DateTime
     */
    protected $currentTimeUTC;

    /**
     * @var ExecutionMessage
     */
    protected $executionMessage;

    /**
     * @var array
     */
    protected $extraProperties;

    public function __construct($response)
    {
        foreach ($response->{$this->rootElement} as $key => $value) {
            if (property_exists($this, $key)) {
                switch ($key) {
                    case 'executionMessage':
                        $value = new ExecutionMessage($value->code, $value->severity, $value->codeDesc, $value->message);
                        break;
                    case 'currentTimeUTC':
                        $value = DateTime::createFromFormat('Y-m-d-H.i.s.uP', $value);
                        break;
                    case 'labels':
                        $labels = [];
                        foreach ($value->label as $label) {
                            $labels[] = new Label($label->dataLength, $label->parcelID, $label->stream);
                        }
                        $value = $labels;
                        break;
                }
                $this->{$key} = $value;
            } else {
                $this->extraProperties[$key] = $value;
            }
        }
    }

    public function hasError()
    {
        return $this->executionMessage->getCode() !== 0;
    }

    /**
     * @return DateTime
     */
    public function getCurrentTimeUTC()
    {
        return $this->currentTimeUTC;
    }

    /**
     * @return ExecutionMessage
     */
    public function getExecutionMessage()
    {
        return $this->executionMessage;
    }

    /**
     * @return array
     */
    public function getExtraProperties()
    {
        return $this->extraProperties;
    }

}