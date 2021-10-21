<?php

use Andyts93\BrtApiWrapper\Request\CreateRequest;
use Andyts93\BrtApiWrapper\Request\LabelParameter;
use Faker\Factory;
use PHPUnit\Framework\TestCase;

class CreateRequestTest extends TestCase
{
    public function testCreateResponseSuccessful()
    {
        $faker = Factory::create('it_IT');

        $request = new CreateRequest('1020109', 'brt8045st');

        $request->setDepartureDepot(277)
            ->setSenderCustomerCode(1)
            ->setDeliveryFreightTypeCode('DAP')
            ->setConsigneeCompanyName($faker->company)
            ->setConsigneeAddress(substr($faker->streetAddress, 0, 35))
            ->setConsigneeZIPCode($faker->postcode)
            ->setConsigneeCity($faker->city)
            ->setConsigneeCountryAbbreviationISOAlpha2($faker->countryCode)
            ->setNumberOfParcels($faker->numberBetween(1, 5))
            ->setWeightKG($faker->randomFloat(1, 1, 100))
            ->setNumericSenderReference($faker->numberBetween(1, 10000))
            ->setIsCODMandatory(0)
            ->setIsLabelRequired(1)
            ->setLabelParameters(new LabelParameter());

        $response = $request->call();

        $this->assertInstanceOf('Andyts93\BrtApiWrapper\Response\CreateResponse', $response);
        $this->assertFalse($response->hasError());
    }
}