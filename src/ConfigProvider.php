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
namespace HyperfOSS;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [
                OSS::class => OSS::class,
            ],
            'commands' => [
            ],
            'annotations' => [
                'scan' => [
                    'paths' => [
                        __DIR__,
                    ],
                ],
            ],
            'publish' => [
                [
                    'id' => 'config',
                    'description' => 'The config for alioss.',
                    'source' => __DIR__ . '/../publish/oss.php',
                    'destination' => BASE_PATH . '/config/autoload/oss.php',
                ],
            ],
        ];
    }
}
