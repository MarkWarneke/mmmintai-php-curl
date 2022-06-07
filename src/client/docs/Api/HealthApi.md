# Swagger\Client\HealthApi

All URIs are relative to *https://api.mmmint.ai/fahrzeugschein/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getHealthHealthGet**](HealthApi.md#gethealthhealthget) | **GET** /health | Get Health
[**getHealthHealthGet_0**](HealthApi.md#gethealthhealthget_0) | **GET** /health | Get Health

# **getHealthHealthGet**
> \Swagger\Client\Model\HealthResult getHealthHealthGet()

Get Health

Returns the health status of the API A status `true` is good. If not, please  reach out to [support@mmmint.ai](mailto:support@mmmint.ai) - Thanks!  ```json {     \"Status\": true } ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HealthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getHealthHealthGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HealthApi->getHealthHealthGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\HealthResult**](../Model/HealthResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHealthHealthGet_0**
> \Swagger\Client\Model\HealthResult getHealthHealthGet_0()

Get Health

Returns the health status of the API A status `true` is good. If not, please  reach out to [support@mmmint.ai](mailto:support@mmmint.ai) - Thanks!  ```json {     \"Status\": true } ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HealthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getHealthHealthGet_0();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HealthApi->getHealthHealthGet_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\HealthResult**](../Model/HealthResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

