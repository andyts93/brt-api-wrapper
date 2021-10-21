<?php

namespace Andyts93\BrtApiWrapper\Response;

class ExecutionMessage
{
    /**
     * Codice esito richiesta
     * >0 esito positivo con warning
     * 0 esito positivo
     * <0 esito negativo
     *
     * @var int
     */
    private $code;

    /**
     * WARNING | ERROR | INFO
     *
     * @var string
     */
    private $severity;

    /**
     * Descrizione del messaggio
     *
     * @var string
     */
    private $codeDesc;

    /**
     * Dettaglio del messaggio
     *
     * @var string
     */
    private $message;

    public function __construct($code, $severity, $codeDesc, $message)
    {
        $this->code = intval($code);
        $this->severity = $severity;
        $this->codeDesc = $codeDesc;
        $this->message = $message;
    }

    /**
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return string
     */
    public function getSeverity()
    {
        return $this->severity;
    }

    /**
     * @return string
     */
    public function getCodeDesc()
    {
        return $this->codeDesc;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }
}