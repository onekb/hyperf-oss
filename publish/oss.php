<?php

declare(strict_types=1);
/**
 * This file is part of onekb.
 *
 * @link     https://www.hyperf.io https://github.com/aliyun/aliyun-oss-php-sdk
 * @document https://hyperf.wiki https://help.aliyun.com/document_detail/32098.html
 * @contact  https://github.com/onekb
 * @license  MIT
 */
return [
    'default' => [
        'access_key_id' => env('OSS_ACCESS_KEY_ID', 'key'),
        'access_key_secret' => env('OSS_ACCESS_KEY_SECRET', 'secret'),
        'endpoint' => env('OSS_ENDPOINT', 'oss-cn-hangzhou.aliyuncs.com'),
        'use_ssl' => (bool) env('OSS_USE_SSL', true),
    ],
];
