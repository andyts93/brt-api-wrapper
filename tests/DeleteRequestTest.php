<?php

use Andyts93\BrtApiWrapper\Request\DeleteRequest;
use Faker\Factory;
use PHPUnit\Framework\TestCase;

class DeleteRequestTest extends TestCase
{
    public function testConfirmResponseSuccessful()
    {
        $faker = Factory::create('it_IT');

        $request = new DeleteRequest('1020109', 'brt8045st');

        $request->setSenderCustomerCode(1)
            ->setNumericSenderReference($faker->numberBetween(1, 10000));

        $response = $request->call();

        $this->assertInstanceOf('Andyts93\BrtApiWrapper\Response\DeleteResponse', $response);
        // $this->assertFalse($response->hasError());
    }
}