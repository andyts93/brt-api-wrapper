<?php

namespace Tests;

use Andyts93\BrtApiWrapper\Api\Consignee;
use Andyts93\BrtApiWrapper\Request\CreateRequest;
use Andyts93\BrtApiWrapper\Api\LabelParameter;
use Faker\Factory;
use PHPUnit\Framework\TestCase;

class CreateRequestTest extends TestCase
{
    private function buildRequest()
    {
        $faker = Factory::create('it_IT');

        $request = new CreateRequest('1020109', 'brt8045st');

        $request->setDepartureDepot(277)
            ->setSenderCustomerCode(1020109)
            ->setDeliveryFreightTypeCode('DAP')
            ->setConsignee(
                (new Consignee())
                ->setCity('Castiglione delle Stiviere')
                ->setAddress('Via Donatori di Sangue 11')
                ->setCompanyName($faker->company)
                ->setCountry('IT')
                ->setProvince('MN')
                ->setZipCode('46043')
            )
            ->setNumberOfParcels($faker->numberBetween(1, 5))
            ->setWeightKG($faker->randomFloat(1, 1, 100))
            ->setNumericSenderReference($faker->numberBetween(1, 10000))
            ->setIsCODMandatory(0)
            ->setIsLabelRequired(1)
            ->setLabelParameters(new LabelParameter());
        return $request;
    }

//    public function testHasCorrectStructure()
//    {
//        $request = $this->buildRequest();
//
//        $body = $request->createRequestBody();
//
//        $this->assertArrayHasKey('createData', $body);
//        $this->assertArrayHasKey('createData', $body);
//    }
//
//    public function testHasNotMandatoryFields()
//    {
//        $request = $this->buildRequest();
//
//        $request->setDepartureDepot('');
//
//        $this->setExpectedException('Andyts93\BrtApiWrapper\Exception\RequestException');
//        $request->call();
//    }

    public function testCreateResponseSuccessful()
    {
        $request = $this->buildRequest();

        // $response = $request->call();

        print_r($request->createRequestBody());
        // print_r($response);

        $this->assertInstanceOf('Andyts93\BrtApiWrapper\Response\CreateResponse', $response);
        // $this->assertFalse($response->hasError());
    }
}
