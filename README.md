# aliyun-php-sdk

阿里云PHP SDK 整合

fork by [here](https://github.com/emmtltd/aliyun-php-sdk)
<br>
Delete the proxy configuration in the vendor and force loading bootstrap.php of the original warehouse, and load the configuration when calling DefaultProfile::getProfile instead<br> 
删除原仓库的在vendor配置代理和强制加载bootstrap.php，改由调用DefaultProfile::getProfile时加载配置

## Requirements

- PHP 7.1+

## Installing

```shell
$ composer require xyqweb/aliyun-php-sdk
```

## Quick Examples

```php
$clientProfile = DefaultProfile::getProfile(
    $mps_region_id,
    $access_key_id,
    $access_key_secret
);
//If host is "0.0.0.0" or port is 0, no proxy is used(如果host为’0.0.0.0‘ 或者 port为0不使用代理)
$client = new DefaultAcsClient($clientProfile,[
'host' => '0.0.0.0',//Proxy server ip
'port' => 0 //Proxy server port，0
]);
```


## License

Apache License 2.0
