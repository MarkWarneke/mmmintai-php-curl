# Swagger\Client\ValidateApi

All URIs are relative to *https://api.mmmint.ai/fahrzeugschein/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getChecksumValidateFinGet**](ValidateApi.md#getchecksumvalidatefinget) | **GET** /validate/{fin} | Get Checksum
[**getChecksumValidateFinGet_0**](ValidateApi.md#getchecksumvalidatefinget_0) | **GET** /validate/{fin} | Get Checksum

# **getChecksumValidateFinGet**
> \Swagger\Client\Model\CheckFinResult getChecksumValidateFinGet($fin)

Get Checksum

Returns the checksum of a fin

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ValidateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fin = "fin_example"; // string | 

try {
    $result = $apiInstance->getChecksumValidateFinGet($fin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ValidateApi->getChecksumValidateFinGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fin** | **string**|  |

### Return type

[**\Swagger\Client\Model\CheckFinResult**](../Model/CheckFinResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChecksumValidateFinGet_0**
> \Swagger\Client\Model\CheckFinResult getChecksumValidateFinGet_0($fin)

Get Checksum

Returns the checksum of a fin

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ValidateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fin = "fin_example"; // string | 

try {
    $result = $apiInstance->getChecksumValidateFinGet_0($fin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ValidateApi->getChecksumValidateFinGet_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fin** | **string**|  |

### Return type

[**\Swagger\Client\Model\CheckFinResult**](../Model/CheckFinResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

