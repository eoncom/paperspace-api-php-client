# 
Inofficial Swagger representation of the [Paperspace REST API](https://paperspace.github.io/paperspace-node/), provided by the [GamingSolved Paperspace API PHP Client project](https://github.com/gamingsolved/paperspace-api-php-client).

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 0.1.3
- Package version: 0.1.3
- Build package: io.swagger.codegen.languages.PhpClientCodegen
For more information, please visit [https://github.com/gamingsolved/paperspace-api-php-client](https://github.com/gamingsolved/paperspace-api-php-client)

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/gamingsolved/paperspace-api-php-client-generated.git"
    }
  ],
  "require": {
    "gamingsolved/paperspace-api-php-client-generated": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to//vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
Gamingsolved\Paperspace\Api\Client\Version0_1_3\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Gamingsolved\Paperspace\Api\Client\Version0_1_3\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$api_instance = new Gamingsolved\Paperspace\Api\Client\Version0_1_3\Api\MachinesApi();
$createMachineParams = new \Gamingsolved\Paperspace\Api\Client\Version0_1_3\Model\CreateMachineParams(); // \Gamingsolved\Paperspace\Api\Client\Version0_1_3\Model\CreateMachineParams | Machine creation parameters

try {
    $result = $api_instance->createMachine($createMachineParams);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MachinesApi->createMachine: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.paperspace.io*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*MachinesApi* | [**createMachine**](docs/Api/MachinesApi.md#createmachine) | **POST** /machines/createSingleMachinePublic | Create and launch a new Paperspace virtual machine
*MachinesApi* | [**destroyMachine**](docs/Api/MachinesApi.md#destroymachine) | **POST** /machines/{machineId}/destroyMachine | Destroy a machine
*MachinesApi* | [**listMachines**](docs/Api/MachinesApi.md#listmachines) | **GET** /machines/getMachines | List information about all machines available
*MachinesApi* | [**restartMachine**](docs/Api/MachinesApi.md#restartmachine) | **POST** /machines/{machineId}/restart | Restart an individual machine
*MachinesApi* | [**showMachine**](docs/Api/MachinesApi.md#showmachine) | **GET** /machines/getMachinePublic | Show machine information
*MachinesApi* | [**startMachine**](docs/Api/MachinesApi.md#startmachine) | **POST** /machines/{machineId}/start | Start up an individual machine
*MachinesApi* | [**stopMachine**](docs/Api/MachinesApi.md#stopmachine) | **POST** /machines/{machineId}/stop | Stop an individual machine
*TemplatesApi* | [**listTemplates**](docs/Api/TemplatesApi.md#listtemplates) | **GET** /templates/getTemplates | List information about all templates available


## Documentation For Models

 - [CreateMachineParams](docs/Model/CreateMachineParams.md)
 - [Machine](docs/Model/Machine.md)
 - [Region](docs/Model/Region.md)
 - [Template](docs/Model/Template.md)


## Documentation For Authorization


## APIKeyHeader

- **Type**: API key
- **API key parameter name**: X-API-Key
- **Location**: HTTP header


## Author

info@gamingsolved.com


