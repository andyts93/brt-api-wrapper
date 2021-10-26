<?php

namespace Tests;

use Andyts93\BrtApiWrapper\Api\Consignee;
use Andyts93\BrtApiWrapper\Api\LabelParameter;
use Andyts93\BrtApiWrapper\Request\ConfirmRequest;
use Andyts93\BrtApiWrapper\Request\CreateRequest;
use Andyts93\BrtApiWrapper\Request\DeleteRequest;
use Andyts93\BrtApiWrapper\Response\CreateResponse;
use Faker\Factory;
use PHPUnit\Framework\TestCase;

class RequestsTest extends TestCase
{
    public function testHasCorrectStructure()
    {
        $request = $this->buildRequest();

        $body = $request->createRequestBody();

        $this->assertArrayHasKey('createData', $body);
        $this->assertArrayHasKey('createData', $body);
    }

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

    public function testHasNotMandatoryFields()
    {
        $request = $this->buildRequest();

        $request->setDepartureDepot('');

        $this->setExpectedException('Andyts93\BrtApiWrapper\Exception\RequestException');
        $request->call();
    }

    public function testCreateResponseSuccessful()
    {
        $request = $this->buildRequest();

        $response = $request->call();

        $this->assertInstanceOf('Andyts93\BrtApiWrapper\Response\CreateResponse', $response);
        $this->assertFalse($response->hasError());

        $response->addExtraProperties('numericSenderReference', $request->getNumericSenderReference());
        return $response;
    }

    public function testCreateResponseSuccessfulWithWarning()
    {
        $request = $this->buildRequest();
        $request->getConsignee()->setProvince(null);

        $response = $request->call();

        $this->assertInstanceOf('Andyts93\BrtApiWrapper\Response\CreateResponse', $response);
        $this->assertTrue($response->hasWarning());
    }

    /**
     * @depends testCreateResponseSuccessful
     */
    public function testConfirmRequestSuccessful(CreateResponse $createResult)
    {
        $request = new ConfirmRequest('1020109', 'brt8045st');

        $request->setNumericSenderReference($createResult->getExtraProperties()['numericSenderReference'])
            ->setAlphanumericSenderReference($createResult->getAlphanumericSenderReference())
            ->setSenderCustomerCode('1020109');
        sleep(60*5);

        $response = $request->call();

        $this->assertFalse($response->hasError());
    }

    /**
     * @depends testCreateResponseSuccessful
     */
    public function testDeleteRequestSuccessful(CreateResponse $createResult)
    {
        $request = new DeleteRequest('1020109', 'brt8045st');

        $request->setNumericSenderReference($createResult->getExtraProperties()['numericSenderReference'])
            ->setAlphanumericSenderReference($createResult->getAlphanumericSenderReference())
            ->setSenderCustomerCode('1020109');
        sleep(60*5);

        $response = $request->call();
        print_r($response);

        $this->assertFalse($response->hasError());
    }
}
