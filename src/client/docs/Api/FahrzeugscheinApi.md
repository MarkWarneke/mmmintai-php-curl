# Swagger\Client\FahrzeugscheinApi

All URIs are relative to *https://api.mmmint.ai/fahrzeugschein/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**correctFahrzeugscheinFahrzeugscheinSessionIdPut**](FahrzeugscheinApi.md#correctfahrzeugscheinfahrzeugscheinsessionidput) | **PUT** /fahrzeugschein/{sessionId} | Correct Fahrzeugschein
[**correctFahrzeugscheinFahrzeugscheinSessionIdPut_0**](FahrzeugscheinApi.md#correctfahrzeugscheinfahrzeugscheinsessionidput_0) | **PUT** /fahrzeugschein/{sessionId} | Correct Fahrzeugschein
[**deleteFahrzeugscheinFahrzeugscheinSessionIdDelete**](FahrzeugscheinApi.md#deletefahrzeugscheinfahrzeugscheinsessioniddelete) | **DELETE** /fahrzeugschein/{sessionId} | Delete Fahrzeugschein
[**deleteFahrzeugscheinFahrzeugscheinSessionIdDelete_0**](FahrzeugscheinApi.md#deletefahrzeugscheinfahrzeugscheinsessioniddelete_0) | **DELETE** /fahrzeugschein/{sessionId} | Delete Fahrzeugschein
[**getResultFahrzeugscheinSessionIdGet**](FahrzeugscheinApi.md#getresultfahrzeugscheinsessionidget) | **GET** /fahrzeugschein/{sessionId} | Get Result
[**getResultFahrzeugscheinSessionIdGet_0**](FahrzeugscheinApi.md#getresultfahrzeugscheinsessionidget_0) | **GET** /fahrzeugschein/{sessionId} | Get Result
[**getResultXmlFahrzeugscheinSessionIdXmlGet**](FahrzeugscheinApi.md#getresultxmlfahrzeugscheinsessionidxmlget) | **GET** /fahrzeugschein/{sessionId}/xml | Get Result Xml
[**getResultXmlFahrzeugscheinSessionIdXmlGet_0**](FahrzeugscheinApi.md#getresultxmlfahrzeugscheinsessionidxmlget_0) | **GET** /fahrzeugschein/{sessionId}/xml | Get Result Xml
[**getResultXmlSasTokenFahrzeugscheinSessionIdXmlSastokenPost**](FahrzeugscheinApi.md#getresultxmlsastokenfahrzeugscheinsessionidxmlsastokenpost) | **POST** /fahrzeugschein/{sessionId}/xml/sastoken | Get Result Xml Sas Token
[**getResultXmlSasTokenFahrzeugscheinSessionIdXmlSastokenPost_0**](FahrzeugscheinApi.md#getresultxmlsastokenfahrzeugscheinsessionidxmlsastokenpost_0) | **POST** /fahrzeugschein/{sessionId}/xml/sastoken | Get Result Xml Sas Token
[**getStatusFahrzeugscheinStatusSessionIdGet**](FahrzeugscheinApi.md#getstatusfahrzeugscheinstatussessionidget) | **GET** /fahrzeugschein/status/{sessionId} | Get Status
[**getStatusFahrzeugscheinStatusSessionIdGet_0**](FahrzeugscheinApi.md#getstatusfahrzeugscheinstatussessionidget_0) | **GET** /fahrzeugschein/status/{sessionId} | Get Status
[**submitFahrzeugscheinFileFahrzeugscheinPost**](FahrzeugscheinApi.md#submitfahrzeugscheinfilefahrzeugscheinpost) | **POST** /fahrzeugschein | Submit Fahrzeugschein File
[**submitFahrzeugscheinFileFahrzeugscheinPost_0**](FahrzeugscheinApi.md#submitfahrzeugscheinfilefahrzeugscheinpost_0) | **POST** /fahrzeugschein | Submit Fahrzeugschein File
[**submitFahrzeugscheinUrlFahrzeugscheinUrlPost**](FahrzeugscheinApi.md#submitfahrzeugscheinurlfahrzeugscheinurlpost) | **POST** /fahrzeugschein/url | Submit Fahrzeugschein Url
[**submitFahrzeugscheinUrlFahrzeugscheinUrlPost_0**](FahrzeugscheinApi.md#submitfahrzeugscheinurlfahrzeugscheinurlpost_0) | **POST** /fahrzeugschein/url | Submit Fahrzeugschein Url

# **correctFahrzeugscheinFahrzeugscheinSessionIdPut**
> \Swagger\Client\Model\FahrzeugscheinResults correctFahrzeugscheinFahrzeugscheinSessionIdPut($body, $session_id)

Correct Fahrzeugschein

Using this endpoint you can correct the `FahrzeugscheinResults`, returned by `/fahrzeugschein/{sesionId}`. To use the endpoint use the `APIKey` provided by MMMint, reach out to [support@mmmint.ai](mailto:support@mmmint.ai).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: APIKeyQuery
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\FahrzeugscheinApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\FahrzeugscheinResults(); // \Swagger\Client\Model\FahrzeugscheinResults | 
$session_id = "session_id_example"; // string | 

try {
    $result = $apiInstance->correctFahrzeugscheinFahrzeugscheinSessionIdPut($body, $session_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FahrzeugscheinApi->correctFahrzeugscheinFahrzeugscheinSessionIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\FahrzeugscheinResults**](../Model/FahrzeugscheinResults.md)|  |
 **session_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\FahrzeugscheinResults**](../Model/FahrzeugscheinResults.md)

### Authorization

[APIKeyQuery](../../README.md#APIKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **correctFahrzeugscheinFahrzeugscheinSessionIdPut_0**
> \Swagger\Client\Model\FahrzeugscheinResults correctFahrzeugscheinFahrzeugscheinSessionIdPut_0($body, $session_id)

Correct Fahrzeugschein

Using this endpoint you can correct the `FahrzeugscheinResults`, returned by `/fahrzeugschein/{sesionId}`. To use the endpoint use the `APIKey` provided by MMMint, reach out to [support@mmmint.ai](mailto:support@mmmint.ai).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: APIKeyQuery
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\FahrzeugscheinApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\FahrzeugscheinResults(); // \Swagger\Client\Model\FahrzeugscheinResults | 
$session_id = "session_id_example"; // string | 

try {
    $result = $apiInstance->correctFahrzeugscheinFahrzeugscheinSessionIdPut_0($body, $session_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FahrzeugscheinApi->correctFahrzeugscheinFahrzeugscheinSessionIdPut_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\FahrzeugscheinResults**](../Model/FahrzeugscheinResults.md)|  |
 **session_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\FahrzeugscheinResults**](../Model/FahrzeugscheinResults.md)

### Authorization

[APIKeyQuery](../../README.md#APIKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFahrzeugscheinFahrzeugscheinSessionIdDelete**
> \Swagger\Client\Model\SessionResult deleteFahrzeugscheinFahrzeugscheinSessionIdDelete($session_id)

Delete Fahrzeugschein

Using this endpoint you can delete a Fahrzeugschein by a sessionId, returned by `/fahrzeugschein/{sesionId}`. To use the endpoint use the `APIKey` provided by MMMint, reach out to [support@mmmint.ai](mailto:support@mmmint.ai).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: APIKeyQuery
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\FahrzeugscheinApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = "session_id_example"; // string | 

try {
    $result = $apiInstance->deleteFahrzeugscheinFahrzeugscheinSessionIdDelete($session_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FahrzeugscheinApi->deleteFahrzeugscheinFahrzeugscheinSessionIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **session_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\SessionResult**](../Model/SessionResult.md)

### Authorization

[APIKeyQuery](../../README.md#APIKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFahrzeugscheinFahrzeugscheinSessionIdDelete_0**
> \Swagger\Client\Model\SessionResult deleteFahrzeugscheinFahrzeugscheinSessionIdDelete_0($session_id)

Delete Fahrzeugschein

Using this endpoint you can delete a Fahrzeugschein by a sessionId, returned by `/fahrzeugschein/{sesionId}`. To use the endpoint use the `APIKey` provided by MMMint, reach out to [support@mmmint.ai](mailto:support@mmmint.ai).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: APIKeyQuery
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\FahrzeugscheinApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = "session_id_example"; // string | 

try {
    $result = $apiInstance->deleteFahrzeugscheinFahrzeugscheinSessionIdDelete_0($session_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FahrzeugscheinApi->deleteFahrzeugscheinFahrzeugscheinSessionIdDelete_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **session_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\SessionResult**](../Model/SessionResult.md)

### Authorization

[APIKeyQuery](../../README.md#APIKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getResultFahrzeugscheinSessionIdGet**
> \Swagger\Client\Model\FahrzeugscheinResults getResultFahrzeugscheinSessionIdGet($session_id)

Get Result

sing this endpoint you can retrieve the result of the registration recognition. To use the endpoint use the `APIKey` provided by MMMint, reach out to [support@mmmint.ai](mailto:support@mmmint.ai).  Make sure the `status` is  `finished`. Check the status periodically by `GET` `/fahrzeugschein/status/{sesionId}`.  ``` /fahrzeugschein/{sesionId}&access_token={access_token} ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: APIKeyQuery
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\FahrzeugscheinApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = "session_id_example"; // string | 

try {
    $result = $apiInstance->getResultFahrzeugscheinSessionIdGet($session_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FahrzeugscheinApi->getResultFahrzeugscheinSessionIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **session_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\FahrzeugscheinResults**](../Model/FahrzeugscheinResults.md)

### Authorization

[APIKeyQuery](../../README.md#APIKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getResultFahrzeugscheinSessionIdGet_0**
> \Swagger\Client\Model\FahrzeugscheinResults getResultFahrzeugscheinSessionIdGet_0($session_id)

Get Result

sing this endpoint you can retrieve the result of the registration recognition. To use the endpoint use the `APIKey` provided by MMMint, reach out to [support@mmmint.ai](mailto:support@mmmint.ai).  Make sure the `status` is  `finished`. Check the status periodically by `GET` `/fahrzeugschein/status/{sesionId}`.  ``` /fahrzeugschein/{sesionId}&access_token={access_token} ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: APIKeyQuery
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\FahrzeugscheinApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = "session_id_example"; // string | 

try {
    $result = $apiInstance->getResultFahrzeugscheinSessionIdGet_0($session_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FahrzeugscheinApi->getResultFahrzeugscheinSessionIdGet_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **session_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\FahrzeugscheinResults**](../Model/FahrzeugscheinResults.md)

### Authorization

[APIKeyQuery](../../README.md#APIKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getResultXmlFahrzeugscheinSessionIdXmlGet**
> getResultXmlFahrzeugscheinSessionIdXmlGet($session_id)

Get Result Xml

using this endpoint you can retrieve the result of the registration recognition. To use the endpoint use the `APIKey` provided by MMMint, reach out to [support@mmmint.ai](mailto:support@mmmint.ai).  Make sure the `status` is  `finished`. Check the status periodically by `GET` `/fahrzeugschein/status/{sesionId}`.  ``` /fahrzeugschein/{sesionId}/xml&access_token={access_token} ```  Returns an xml file wich can be imported in KSR System.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: APIKeyQuery
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\FahrzeugscheinApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = "session_id_example"; // string | 

try {
    $apiInstance->getResultXmlFahrzeugscheinSessionIdXmlGet($session_id);
} catch (Exception $e) {
    echo 'Exception when calling FahrzeugscheinApi->getResultXmlFahrzeugscheinSessionIdXmlGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **session_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[APIKeyQuery](../../README.md#APIKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getResultXmlFahrzeugscheinSessionIdXmlGet_0**
> getResultXmlFahrzeugscheinSessionIdXmlGet_0($session_id)

Get Result Xml

using this endpoint you can retrieve the result of the registration recognition. To use the endpoint use the `APIKey` provided by MMMint, reach out to [support@mmmint.ai](mailto:support@mmmint.ai).  Make sure the `status` is  `finished`. Check the status periodically by `GET` `/fahrzeugschein/status/{sesionId}`.  ``` /fahrzeugschein/{sesionId}/xml&access_token={access_token} ```  Returns an xml file wich can be imported in KSR System.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: APIKeyQuery
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\FahrzeugscheinApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = "session_id_example"; // string | 

try {
    $apiInstance->getResultXmlFahrzeugscheinSessionIdXmlGet_0($session_id);
} catch (Exception $e) {
    echo 'Exception when calling FahrzeugscheinApi->getResultXmlFahrzeugscheinSessionIdXmlGet_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **session_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[APIKeyQuery](../../README.md#APIKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getResultXmlSasTokenFahrzeugscheinSessionIdXmlSastokenPost**
> \Swagger\Client\Model\FahrzeugscheinXmlSasToken getResultXmlSasTokenFahrzeugscheinSessionIdXmlSastokenPost($session_id, $body)

Get Result Xml Sas Token

using this endpoint you can retrieve the result of the registration as XML File SAS Blob Storage Token. To use the endpoint use the `APIKey` provided by MMMint, reach out to [support@mmmint.ai](mailto:support@mmmint.ai).  Make sure the `status` is  `finished`. Check the status periodically by `GET` `/fahrzeugschein/status/{sesionId}`.  Returns an SAS Token to an xml file wich can be imported in KSR System.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: APIKeyQuery
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\FahrzeugscheinApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = "session_id_example"; // string | 
$body = new \Swagger\Client\Model\Attachment(); // \Swagger\Client\Model\Attachment | 

try {
    $result = $apiInstance->getResultXmlSasTokenFahrzeugscheinSessionIdXmlSastokenPost($session_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FahrzeugscheinApi->getResultXmlSasTokenFahrzeugscheinSessionIdXmlSastokenPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **session_id** | **string**|  |
 **body** | [**\Swagger\Client\Model\Attachment**](../Model/Attachment.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\FahrzeugscheinXmlSasToken**](../Model/FahrzeugscheinXmlSasToken.md)

### Authorization

[APIKeyQuery](../../README.md#APIKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getResultXmlSasTokenFahrzeugscheinSessionIdXmlSastokenPost_0**
> \Swagger\Client\Model\FahrzeugscheinXmlSasToken getResultXmlSasTokenFahrzeugscheinSessionIdXmlSastokenPost_0($session_id, $body)

Get Result Xml Sas Token

using this endpoint you can retrieve the result of the registration as XML File SAS Blob Storage Token. To use the endpoint use the `APIKey` provided by MMMint, reach out to [support@mmmint.ai](mailto:support@mmmint.ai).  Make sure the `status` is  `finished`. Check the status periodically by `GET` `/fahrzeugschein/status/{sesionId}`.  Returns an SAS Token to an xml file wich can be imported in KSR System.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: APIKeyQuery
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\FahrzeugscheinApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = "session_id_example"; // string | 
$body = new \Swagger\Client\Model\Attachment(); // \Swagger\Client\Model\Attachment | 

try {
    $result = $apiInstance->getResultXmlSasTokenFahrzeugscheinSessionIdXmlSastokenPost_0($session_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FahrzeugscheinApi->getResultXmlSasTokenFahrzeugscheinSessionIdXmlSastokenPost_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **session_id** | **string**|  |
 **body** | [**\Swagger\Client\Model\Attachment**](../Model/Attachment.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\FahrzeugscheinXmlSasToken**](../Model/FahrzeugscheinXmlSasToken.md)

### Authorization

[APIKeyQuery](../../README.md#APIKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStatusFahrzeugscheinStatusSessionIdGet**
> \Swagger\Client\Model\StatusResult getStatusFahrzeugscheinStatusSessionIdGet($session_id)

Get Status

Using this endpoint you can retrieve the status of a registration recognition. To use the endpoint use the `APIKey` provided by MMMint, reach out to [support@mmmint.ai](mailto:support@mmmint.ai).  ``` /fahrzeugschein/status/{sesionId}&access_token={access_token} ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: APIKeyQuery
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\FahrzeugscheinApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = "session_id_example"; // string | 

try {
    $result = $apiInstance->getStatusFahrzeugscheinStatusSessionIdGet($session_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FahrzeugscheinApi->getStatusFahrzeugscheinStatusSessionIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **session_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\StatusResult**](../Model/StatusResult.md)

### Authorization

[APIKeyQuery](../../README.md#APIKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStatusFahrzeugscheinStatusSessionIdGet_0**
> \Swagger\Client\Model\StatusResult getStatusFahrzeugscheinStatusSessionIdGet_0($session_id)

Get Status

Using this endpoint you can retrieve the status of a registration recognition. To use the endpoint use the `APIKey` provided by MMMint, reach out to [support@mmmint.ai](mailto:support@mmmint.ai).  ``` /fahrzeugschein/status/{sesionId}&access_token={access_token} ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: APIKeyQuery
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\FahrzeugscheinApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = "session_id_example"; // string | 

try {
    $result = $apiInstance->getStatusFahrzeugscheinStatusSessionIdGet_0($session_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FahrzeugscheinApi->getStatusFahrzeugscheinStatusSessionIdGet_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **session_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\StatusResult**](../Model/StatusResult.md)

### Authorization

[APIKeyQuery](../../README.md#APIKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **submitFahrzeugscheinFileFahrzeugscheinPost**
> \Swagger\Client\Model\SessionResult submitFahrzeugscheinFileFahrzeugscheinPost($file)

Submit Fahrzeugschein File

Submit registration certificate (Fahrzeugschein) via image upload. Using this endpoint we recognize the contents of a submitted image upload, provide the `access_token` APIKey and the `file`.  To use the endpoint use the `APIKey` provided by MMMint, reach out to [support@mmmint.ai](mailto:support@mmmint.ai).  Use `multipar/form-data` to submit the file.  ``` /fahrzeugschein?access_token={access_token} ```  Limitations: - The image is not bigger then 4 MB - The image format is `.jpg` or `.png`  Notice, for best accuracy, please follow these best practices: - the registrations fills the entire image - the registration is unfolded smoothly and photographed vertically from above - the image lighting is bright, not glaring and are optimal for reading - the resolution of the image is sufficient  Upon submission the API will return a `sessionId`, please check the status of the recognition periodically using `/fahrzeugschein/status/{sessionId}` endpoint.   The recognized data can be retrieved using the `sessionId` with a `finished` status via `GET` to `/fahrzeugschein/{sessionId}`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: APIKeyQuery
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\FahrzeugscheinApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = "file_example"; // string | 

try {
    $result = $apiInstance->submitFahrzeugscheinFileFahrzeugscheinPost($file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FahrzeugscheinApi->submitFahrzeugscheinFileFahrzeugscheinPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **string****string**|  |

### Return type

[**\Swagger\Client\Model\SessionResult**](../Model/SessionResult.md)

### Authorization

[APIKeyQuery](../../README.md#APIKeyQuery)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **submitFahrzeugscheinFileFahrzeugscheinPost_0**
> \Swagger\Client\Model\SessionResult submitFahrzeugscheinFileFahrzeugscheinPost_0($file)

Submit Fahrzeugschein File

Submit registration certificate (Fahrzeugschein) via image upload. Using this endpoint we recognize the contents of a submitted image upload, provide the `access_token` APIKey and the `file`.  To use the endpoint use the `APIKey` provided by MMMint, reach out to [support@mmmint.ai](mailto:support@mmmint.ai).  Use `multipar/form-data` to submit the file.  ``` /fahrzeugschein?access_token={access_token} ```  Limitations: - The image is not bigger then 4 MB - The image format is `.jpg` or `.png`  Notice, for best accuracy, please follow these best practices: - the registrations fills the entire image - the registration is unfolded smoothly and photographed vertically from above - the image lighting is bright, not glaring and are optimal for reading - the resolution of the image is sufficient  Upon submission the API will return a `sessionId`, please check the status of the recognition periodically using `/fahrzeugschein/status/{sessionId}` endpoint.   The recognized data can be retrieved using the `sessionId` with a `finished` status via `GET` to `/fahrzeugschein/{sessionId}`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: APIKeyQuery
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\FahrzeugscheinApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = "file_example"; // string | 

try {
    $result = $apiInstance->submitFahrzeugscheinFileFahrzeugscheinPost_0($file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FahrzeugscheinApi->submitFahrzeugscheinFileFahrzeugscheinPost_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **string****string**|  |

### Return type

[**\Swagger\Client\Model\SessionResult**](../Model/SessionResult.md)

### Authorization

[APIKeyQuery](../../README.md#APIKeyQuery)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **submitFahrzeugscheinUrlFahrzeugscheinUrlPost**
> \Swagger\Client\Model\SessionResult submitFahrzeugscheinUrlFahrzeugscheinUrlPost($image_url)

Submit Fahrzeugschein Url

Submit registration certificate (Fahrzeugschein) via image URL. Using this endpoint we read the contents of a submitted image url, provide the `access_token` APIKey and the `image_url`.  To use the endpoint use the `APIKey` provided by MMMint, reach out to [support@mmmint.ai](mailto:support@mmmint.ai).  ``` /fahrzeugschein/url?image_url={image_url}&access_token={access_token} ```  Limitations: - The image is not bigger then 4 MB - The image format is `.jpg` or `.png`  Notice, for best accuracy, please follow these best practices: - the registrations fills the entire image - the registration is unfolded smoothly and photographed vertically from above - the image lighting is bright, not glaring and are optimal for reading - the resolution of the image is sufficient      Upon submission the API will return a `sessionId`, please check the status of the recognition periodically using `/fahrzeugschein/status/{sessionId}` endpoint.   The recognized data can be retrieved using the `sessionId` with a `finished` status via `GET` to `/fahrzeugschein/{sessionId}`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: APIKeyQuery
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\FahrzeugscheinApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$image_url = "image_url_example"; // string | 

try {
    $result = $apiInstance->submitFahrzeugscheinUrlFahrzeugscheinUrlPost($image_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FahrzeugscheinApi->submitFahrzeugscheinUrlFahrzeugscheinUrlPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_url** | **string**|  |

### Return type

[**\Swagger\Client\Model\SessionResult**](../Model/SessionResult.md)

### Authorization

[APIKeyQuery](../../README.md#APIKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **submitFahrzeugscheinUrlFahrzeugscheinUrlPost_0**
> \Swagger\Client\Model\SessionResult submitFahrzeugscheinUrlFahrzeugscheinUrlPost_0($image_url)

Submit Fahrzeugschein Url

Submit registration certificate (Fahrzeugschein) via image URL. Using this endpoint we read the contents of a submitted image url, provide the `access_token` APIKey and the `image_url`.  To use the endpoint use the `APIKey` provided by MMMint, reach out to [support@mmmint.ai](mailto:support@mmmint.ai).  ``` /fahrzeugschein/url?image_url={image_url}&access_token={access_token} ```  Limitations: - The image is not bigger then 4 MB - The image format is `.jpg` or `.png`  Notice, for best accuracy, please follow these best practices: - the registrations fills the entire image - the registration is unfolded smoothly and photographed vertically from above - the image lighting is bright, not glaring and are optimal for reading - the resolution of the image is sufficient      Upon submission the API will return a `sessionId`, please check the status of the recognition periodically using `/fahrzeugschein/status/{sessionId}` endpoint.   The recognized data can be retrieved using the `sessionId` with a `finished` status via `GET` to `/fahrzeugschein/{sessionId}`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: APIKeyQuery
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\FahrzeugscheinApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$image_url = "image_url_example"; // string | 

try {
    $result = $apiInstance->submitFahrzeugscheinUrlFahrzeugscheinUrlPost_0($image_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FahrzeugscheinApi->submitFahrzeugscheinUrlFahrzeugscheinUrlPost_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_url** | **string**|  |

### Return type

[**\Swagger\Client\Model\SessionResult**](../Model/SessionResult.md)

### Authorization

[APIKeyQuery](../../README.md#APIKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

