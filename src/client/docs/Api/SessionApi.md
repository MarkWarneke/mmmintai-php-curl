# Swagger\Client\SessionApi

All URIs are relative to *https://api.mmmint.ai/fahrzeugschein/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAllSessionsSessionGet**](SessionApi.md#getallsessionssessionget) | **GET** /session | Get All Sessions
[**getAllSessionsSessionGet_0**](SessionApi.md#getallsessionssessionget_0) | **GET** /session | Get All Sessions

# **getAllSessionsSessionGet**
> getAllSessionsSessionGet()

Get All Sessions

Using this endpoint you can retrieve the status of all submitted registration recognition. To use the endpoint use the `APIKey` provided by MMMint, reach out to [support@mmmint.ai](mailto:support@mmmint.ai).   ``` /session?access_token={access_token} ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: APIKeyQuery
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\SessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->getAllSessionsSessionGet();
} catch (Exception $e) {
    echo 'Exception when calling SessionApi->getAllSessionsSessionGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[APIKeyQuery](../../README.md#APIKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllSessionsSessionGet_0**
> getAllSessionsSessionGet_0()

Get All Sessions

Using this endpoint you can retrieve the status of all submitted registration recognition. To use the endpoint use the `APIKey` provided by MMMint, reach out to [support@mmmint.ai](mailto:support@mmmint.ai).   ``` /session?access_token={access_token} ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: APIKeyQuery
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\SessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->getAllSessionsSessionGet_0();
} catch (Exception $e) {
    echo 'Exception when calling SessionApi->getAllSessionsSessionGet_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[APIKeyQuery](../../README.md#APIKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

