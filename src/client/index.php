<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->getOpenApiEndpointOpenapiJsonGet();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getOpenApiEndpointOpenapiJsonGet: ', $e->getMessage(), PHP_EOL;
}

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->routeLogoutAndRemoveCookieLogoutGet();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->routeLogoutAndRemoveCookieLogoutGet: ', $e->getMessage(), PHP_EOL;
}
?>