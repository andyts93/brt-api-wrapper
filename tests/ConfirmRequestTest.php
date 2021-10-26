<?php

namespace Tests;

use Andyts93\BrtApiWrapper\Request\ConfirmRequest;
use Faker\Factory;
use PHPUnit\Framework\TestCase;

class ConfirmRequestTest extends TestCase
{
    private function buildRequest()
    {
        $faker = Factory::create('it_IT');

        $request = new ConfirmRequest('1020109', 'brt8045st');

        $request->setSenderCustomerCode(1)
            ->setNumericSenderReference($faker->numberBetween(1, 10000));

        return $request;
    }

    public function testHasCorrectStructure()
    {
        $request = $this->buildRequest();

        $body = $request->createRequestBody();

        $this->assertArrayHasKey('confirmData', $body);
        $this->assertArrayHasKey('confirmData', $body);
    }

    public function testHasNotMandatoryFields()
    {
        $request = $this->buildRequest();

        $request->setSenderCustomerCode('');

        $this->setExpectedException('Andyts93\BrtApiWrapper\Exception\RequestException');
        $request->call();
    }

    public function testConfirmResponseSuccessful()
    {
        $request = $this->buildRequest();

        $response = $request->call();

        $this->assertInstanceOf('Andyts93\BrtApiWrapper\Response\ConfirmResponse', $response);
        // $this->assertFalse($response->hasError());
    }
}
