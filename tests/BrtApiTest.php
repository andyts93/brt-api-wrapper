<?php

use Andyts93\BrtApiWrapper\Request\CreateRequest;
use PHPUnit\Framework\TestCase;

class BrtApiTest extends TestCase
{
    public function testCreateResponseSuccessful()
    {
        $faker = \Faker\Factory::create('it_IT');

        $request = new CreateRequest('1020109', 'brt8045st');

        $request->setDepartureDepot(277)
            ->setSenderCustomerCode(1)
            ->setDeliveryFreightTypeCode('DAP')
            ->setConsigneeCompanyName($faker->company)
            ->setConsigneeAddress(substr($faker->streetAddress, 0, 35))
            ->setConsigneeZIPCode($faker->postcode)
            ->setConsigneeCity($faker->city)
            ->setConsigneeCountryAbbreviationISOAlpha2($faker->countryCode)
            ->setNumberOfParcels($faker->numberBetween(1,5))
            ->setWeightKG($faker->randomFloat(1, 1, 100))
            ->setNumericSenderReference($faker->numberBetween(1, 10000))
            ->setIsCODMandatory(0);

        $response = $request->call();

//        $this->assertInstanceOf('Andyts93\BrtApiWrapper\Response\CreateResponse', $response);
//        $this->assertFalse($response->hasError());

        print_r($response->getExecutionMessage());
    }
}