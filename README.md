# oms-api-php
A PHP library that wraps Fulfillment's OMS API for easy use

## Example

```php
use Fulfillment\OMS;
use Fulfillment\OMS\Models\Request;

$apiWrapper = new OmsClient(__DIR__); //instantiate OMS with a configuration file or array of settings

$newOrder = new Order($orderData); //create a new Request\Order

/*
 * 1. Validate the order
 * 2. Make a POST request to /orders
 * 3. Parse the returned api response into a new Response\Order object
 */
$createdOrder = $apiWrapper->orders->createOrder($newOrder);
```

## Installation

```
composer require fulfillment/oms-api
```

## Configuration

Configuration needed is simple:

* **USERNAME** - Email address for your account
* **PASSWORD** - Password for your account
* **CLIENT_ID** - Client Id for your merchant
* **CLIENT_SECRET** - Client secret for your merchant
* **ACCESS_TOKEN** - If already created, an access token for your merchant
* **API_ENDPOINT** - The end point for the fulfillment api services you are using (https://api.fulfillment.com)

Optional Configurations:

* **JSON_ONLY** - Defaults to false. If set to true all responses will be returned as pure JSON as it is from the server.

There are two ways to configure OMS API

**Use dotenv**

Use a `.env` file compatible with fantastic [phpdotenv](https://github.com/vlucas/phpdotenv) library. Simply specify the absolute path to the folder containing your `.env` file as an argument in the OMS constructor.

```php
$apiWrapper = new OmsClient('absolute/path/to/a/folder')
```

An example file called `.env.example` can be found in the root directory.

**Use an array**

Alternatively, create an array with key/values matching the above specified configuration and pass it as an argument in the OMS constructor.

```php
$apiWrapper = new OmsClient($yourConfigurationArray)
```

## Usage

### Working With Models

Models (plain PHP classes) are used by the wrapper to facilitate easy building, validation, and parsing of api data. There are two types of models:

**Request Models**

Found at `Fulfillment\OMS\Models\Request` these are the models that are used when making any request that requires data (such as a POST or PUT request). Currenty you will need to use the implemented models to make these type of requests. They differ slightly from the other type (`Response` model) because they do not require as much data as is returned from the api.

Example
```php
$newOrder = new Order($myOrderData);
$order = $apiWrapper->orders->createOrder($newOrder);
```

**Response Models**

Found at `Fulfillment\OMS\Models\Response` these are the models that response json is parsed in to. They inherit from `Request` models and so can be reused to make requests.

Example
```php
$returnedOrder = $apiWrapper->orders->getOrder($orderId);
```

### Model Validation

By default all models are validated before a request is sent (in the case of a POST or PUT request). A descriptive error will be thrown if a model has any validation failures. Eventually this will be a configurable option.

## Roadmap

There's still lots to do, check the issues section to see what is being worked on or make a request.