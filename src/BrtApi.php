<?php

namespace Andyts93\BrtApiWrapper;

use Andyts93\BrtApiWrapper\Request\CreateRequest;
use GuzzleHttp\Exception\GuzzleException;

class BrtApi
{
    private $userId;
    private $password;

    public function __construct($userId, $password)
    {
        $this->userId = $userId;
        $this->password = $password;
    }

    /**
     * @return mixed
     * @throws Exception\InvalidJsonException
     * @throws GuzzleException
     */
    public function create($params)
    {
        $request = new CreateRequest($this->userId, $this->password);

        $request->setDepartureDepot(277)
            ->setSenderCustomerCode(1321792);

        return $request->call();
    }
}
