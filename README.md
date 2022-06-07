# mmmint.ai registration recognition PHP sample

Add environment variable `ACCESS_TOKEN` before executing. See [.env](./.env.sample).

## How to

For executing request against`https://api.mmmint.ai/fahrzeugschein/v1/` you have to request an access token, email: [info@mmmint.ai](mailto:info@mmmint.ai).

Make sure the headers are set to `multipart/form-data`

```php
  $headers = array(
    "Content-Type:multipart/form-data",
    "Accept:application/json"
  );
```

The to be uploaded file needs to be encoded:

```php
  $fields = [
    'file' => new \CurlFile($filePath, 'image/png', $fileName)
  ]
```

After that you can initialize curl and send the request

```php
$url="https://api.mmmint.ai/fahrzeugschein/v1/fahrzeugschein?access_token=".$_ENV["ACCESS_TOKEN"];

$curl = curl_init($url);

curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_POSTFIELDS, $fields);

curl_exec($curl);
```
