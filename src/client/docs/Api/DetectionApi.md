# Swagger\Client\DetectionApi

All URIs are relative to *https://api.mmmint.ai/fahrzeugschein/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getBoundingboxesDetectionBoundingboxesSessionIdGet**](DetectionApi.md#getboundingboxesdetectionboundingboxessessionidget) | **GET** /detection/boundingboxes/{sessionId} | Get Boundingboxes
[**getBoundingboxesDetectionBoundingboxesSessionIdGet_0**](DetectionApi.md#getboundingboxesdetectionboundingboxessessionidget_0) | **GET** /detection/boundingboxes/{sessionId} | Get Boundingboxes
[**getFahrzeugscheinCroppedImageDetectionCroppedimageSessionIdGet**](DetectionApi.md#getfahrzeugscheincroppedimagedetectioncroppedimagesessionidget) | **GET** /detection/croppedimage/{sessionId} | Get Fahrzeugschein Cropped Image
[**getFahrzeugscheinCroppedImageDetectionCroppedimageSessionIdGet_0**](DetectionApi.md#getfahrzeugscheincroppedimagedetectioncroppedimagesessionidget_0) | **GET** /detection/croppedimage/{sessionId} | Get Fahrzeugschein Cropped Image
[**getFahrzeugscheinImageDetectionImageSessionIdGet**](DetectionApi.md#getfahrzeugscheinimagedetectionimagesessionidget) | **GET** /detection/image/{sessionId} | Get Fahrzeugschein Image
[**getFahrzeugscheinImageDetectionImageSessionIdGet_0**](DetectionApi.md#getfahrzeugscheinimagedetectionimagesessionidget_0) | **GET** /detection/image/{sessionId} | Get Fahrzeugschein Image

# **getBoundingboxesDetectionBoundingboxesSessionIdGet**
> \Swagger\Client\Model\DetectionResult getBoundingboxesDetectionBoundingboxesSessionIdGet($session_id)

Get Boundingboxes

Using this endpoint you can retrieve the bounding boxes for a registration certificate recognition session. To use the endpoint use the `APIKey` provided by MMMint, reach out to [support@mmmint.ai](mailto:support@mmmint.ai).  ``` /detection/boundingboxes/{sesionId}&access_token={access_token} ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: APIKeyQuery
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DetectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = "session_id_example"; // string | 

try {
    $result = $apiInstance->getBoundingboxesDetectionBoundingboxesSessionIdGet($session_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DetectionApi->getBoundingboxesDetectionBoundingboxesSessionIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **session_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\DetectionResult**](../Model/DetectionResult.md)

### Authorization

[APIKeyQuery](../../README.md#APIKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBoundingboxesDetectionBoundingboxesSessionIdGet_0**
> \Swagger\Client\Model\DetectionResult getBoundingboxesDetectionBoundingboxesSessionIdGet_0($session_id)

Get Boundingboxes

Using this endpoint you can retrieve the bounding boxes for a registration certificate recognition session. To use the endpoint use the `APIKey` provided by MMMint, reach out to [support@mmmint.ai](mailto:support@mmmint.ai).  ``` /detection/boundingboxes/{sesionId}&access_token={access_token} ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: APIKeyQuery
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DetectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = "session_id_example"; // string | 

try {
    $result = $apiInstance->getBoundingboxesDetectionBoundingboxesSessionIdGet_0($session_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DetectionApi->getBoundingboxesDetectionBoundingboxesSessionIdGet_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **session_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\DetectionResult**](../Model/DetectionResult.md)

### Authorization

[APIKeyQuery](../../README.md#APIKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFahrzeugscheinCroppedImageDetectionCroppedimageSessionIdGet**
> \Swagger\Client\Model\DetectionCroppedImageResult getFahrzeugscheinCroppedImageDetectionCroppedimageSessionIdGet($session_id)

Get Fahrzeugschein Cropped Image

Using this endpoint you can retrieve the cropped images for a registration certificate recognition session based on the bounding boxes from `/detection/boundingboxes/{sessionId}`. To use the endpoint use the `APIKey` provided by MMMint, reach out to [support@mmmint.ai](mailto:support@mmmint.ai).  ``` /detection/croppedimage/{sesionId}&access_token={access_token} ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: APIKeyQuery
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DetectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = "session_id_example"; // string | 

try {
    $result = $apiInstance->getFahrzeugscheinCroppedImageDetectionCroppedimageSessionIdGet($session_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DetectionApi->getFahrzeugscheinCroppedImageDetectionCroppedimageSessionIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **session_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\DetectionCroppedImageResult**](../Model/DetectionCroppedImageResult.md)

### Authorization

[APIKeyQuery](../../README.md#APIKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFahrzeugscheinCroppedImageDetectionCroppedimageSessionIdGet_0**
> \Swagger\Client\Model\DetectionCroppedImageResult getFahrzeugscheinCroppedImageDetectionCroppedimageSessionIdGet_0($session_id)

Get Fahrzeugschein Cropped Image

Using this endpoint you can retrieve the cropped images for a registration certificate recognition session based on the bounding boxes from `/detection/boundingboxes/{sessionId}`. To use the endpoint use the `APIKey` provided by MMMint, reach out to [support@mmmint.ai](mailto:support@mmmint.ai).  ``` /detection/croppedimage/{sesionId}&access_token={access_token} ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: APIKeyQuery
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DetectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = "session_id_example"; // string | 

try {
    $result = $apiInstance->getFahrzeugscheinCroppedImageDetectionCroppedimageSessionIdGet_0($session_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DetectionApi->getFahrzeugscheinCroppedImageDetectionCroppedimageSessionIdGet_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **session_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\DetectionCroppedImageResult**](../Model/DetectionCroppedImageResult.md)

### Authorization

[APIKeyQuery](../../README.md#APIKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFahrzeugscheinImageDetectionImageSessionIdGet**
> \Swagger\Client\Model\DetectionImageResult getFahrzeugscheinImageDetectionImageSessionIdGet($session_id)

Get Fahrzeugschein Image

Using this endpoint you can retrieve the submitted image for a registration certificate recognition session. To use the endpoint use the `APIKey` provided by MMMint, reach out to [support@mmmint.ai](mailto:support@mmmint.ai).  ``` /detection/image/{sesionId}&access_token={access_token} ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: APIKeyQuery
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DetectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = "session_id_example"; // string | 

try {
    $result = $apiInstance->getFahrzeugscheinImageDetectionImageSessionIdGet($session_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DetectionApi->getFahrzeugscheinImageDetectionImageSessionIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **session_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\DetectionImageResult**](../Model/DetectionImageResult.md)

### Authorization

[APIKeyQuery](../../README.md#APIKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFahrzeugscheinImageDetectionImageSessionIdGet_0**
> \Swagger\Client\Model\DetectionImageResult getFahrzeugscheinImageDetectionImageSessionIdGet_0($session_id)

Get Fahrzeugschein Image

Using this endpoint you can retrieve the submitted image for a registration certificate recognition session. To use the endpoint use the `APIKey` provided by MMMint, reach out to [support@mmmint.ai](mailto:support@mmmint.ai).  ``` /detection/image/{sesionId}&access_token={access_token} ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: APIKeyQuery
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DetectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = "session_id_example"; // string | 

try {
    $result = $apiInstance->getFahrzeugscheinImageDetectionImageSessionIdGet_0($session_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DetectionApi->getFahrzeugscheinImageDetectionImageSessionIdGet_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **session_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\DetectionImageResult**](../Model/DetectionImageResult.md)

### Authorization

[APIKeyQuery](../../README.md#APIKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

