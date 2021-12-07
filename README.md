# HyperfOSS

Aliyun OSS SDK for Hyperf2.X 基于 [aliyuncs/oss-sdk-php](https://github.com/aliyun/aliyun-oss-php-sdk)

## 安装

```shell
composer require onekb/hyperf-oss
```

## 配置

1. 创建配置文件

```shell
php bin/hyperf.php vendor:publish onekb/hyperf-oss
```

2. 修改 `config/autoload/oss.php` 参数或者修改 .env 环境变量参数。

## 使用

```php
// 方法一：hyperf类里面自动注入
/**
 * @Inject
 * @var HyperfOSS\OSS
 */
protected $oss;

// 方法二：主动new
$oss = new OSS();

// 方法三：在容器里拿出来
$oss = Hyperf\Utils\ApplicationContext::getContainer()->get(OSS::class)

// 直接调用方法
$oss->signUrl('bucket-name', 'filename.pdf', 3600, OssClient::OSS_HTTP_PUT);
// 使用其他配置
$oss->make('other-config')->signUrl('bucket-name', 'filename.pdf', 3600, OssClient::OSS_HTTP_PUT);
```

## [方法详情参考官方文档](https://help.aliyun.com/document_detail/32098.html)

## License

MIT