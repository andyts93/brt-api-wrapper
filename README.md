[![Build](https://github.com/andyts93/brt-api-wrapper/actions/workflows/php.yml/badge.svg?branch=main)](https://github.com/andyts93/brt-api-wrapper/actions/workflows/php.yml) [![codecov](https://codecov.io/gh/andyts93/brt-api-wrapper/branch/main/graph/badge.svg?token=46SX6EHSV4)](https://codecov.io/gh/andyts93/brt-api-wrapper) [![Codacy Badge](https://app.codacy.com/project/badge/Grade/97a4020db28e40538b9c26eb038b2d10)](https://www.codacy.com/gh/andyts93/brt-api-wrapper/dashboard?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=andyts93/brt-api-wrapper&amp;utm_campaign=Badge_Grade) ![GitHub code size in bytes](https://img.shields.io/github/languages/code-size/andyts93/brt-api-wrapper)

# BRT API Wrapper
> BRT API made easy

This package is a simple PHP wrapper for Bartolini Restful API

## Installing
Install with composer
```shell
composer require andyts93/brt-api-wrapper
```

## Features
* Create shippings
* Confirm shippings
* Delete shippings

## Usage
### Create shipping
```php
$request = new Andyts93\BrtApiWrapper\CreateRequest();
$request->setDepartureDepot(123)
    ->setSenderCustomerCode(1234567)
    ->setDeliveryFreightTypeCode('DAP')
    ->setConsigneeCompanyName('Fake Company Inc.')
    ->setConsigneeAddress('Fake street')
    ->setConsigneeZIPCode('00000')
    ->setConsigneeCity('Fake city')
    ->setConsigneeCountryAbbreviationISOAlpha2('IT')
    ->setNumberOfParcels(1)
    ->setWeightKG(1)
    ->setNumericSenderReference(123456)
    ->setIsCODMandatory(0)
    ->setIsLabelRequired(1)
    ->setLabelParameters(new Andyts93\BrtApiWrapper\LabelParameter());

$response = $request->call();

if ($response->hasErrorrs()) {
    echo $response->getExecutionMessage()->getMessage();
}
```

### Confirm shipping
```php
$request = new Andyts93\BrtApiWrapper\ConfirmRequest();
$request->setSenderCustomerCode(1234567)
    ->setNumericSenderReference(123456);

$response = $request->call();

if ($response->hasErrorrs()) {
    echo $response->getExecutionMessage()->getMessage();
}
```

### Delete shipping
```php
$request = new Andyts93\BrtApiWrapper\DeleteRequest();
$request->setSenderCustomerCode(1234567)
    ->setNumericSenderReference(123456);

$response = $request->call();

if ($response->hasErrorrs()) {
    echo $response->getExecutionMessage()->getMessage();
}
```
