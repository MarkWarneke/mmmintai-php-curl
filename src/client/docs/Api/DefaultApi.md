# Swagger\Client\DefaultApi

All URIs are relative to *https://api.mmmint.ai/fahrzeugschein/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOpenApiEndpointOpenapiJsonGet**](DefaultApi.md#getopenapiendpointopenapijsonget) | **GET** /openapi.json | Get Open Api Endpoint
[**routeLogoutAndRemoveCookieLogoutGet**](DefaultApi.md#routelogoutandremovecookielogoutget) | **GET** /logout | Route Logout And Remove Cookie

# **getOpenApiEndpointOpenapiJsonGet**
> getOpenApiEndpointOpenapiJsonGet()

Get Open Api Endpoint

### Example
```php
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
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **routeLogoutAndRemoveCookieLogoutGet**
> routeLogoutAndRemoveCookieLogoutGet()

Route Logout And Remove Cookie

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

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
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

