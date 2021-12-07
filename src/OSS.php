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

/**
 * Class.
 *
 * @method listBuckets($options = null)
 * @method createBucket($bucket, $acl = OssClient::OSS_ACL_TYPE_PRIVATE, $options = null)
 * @method deleteBucket($bucket, $options = null)
 * @method doesBucketExist($bucket)
 * @method getBucketLocation($bucket, $options = null)
 * @method getBucketMeta($bucket, $options = null)
 * @method getBucketAcl($bucket, $options = null)
 * @method putBucketAcl($bucket, $acl, $options = null)
 * @method getObjectAcl($bucket, $object, $options = null)
 * @method putObjectAcl($bucket, $object, $acl, $options = null)
 * @method getBucketLogging($bucket, $options = null)
 * @method putBucketLogging($bucket, $targetBucket, $targetPrefix, $options = null)
 * @method deleteBucketLogging($bucket, $options = null)
 * @method putBucketWebsite($bucket, $websiteConfig, $options = null)
 * @method getBucketWebsite($bucket, $options = null)
 * @method deleteBucketWebsite($bucket, $options = null)
 * @method putBucketCors($bucket, $corsConfig, $options = null)
 * @method getBucketCors($bucket, $options = null)
 * @method deleteBucketCors($bucket, $options = null)
 * @method addBucketCname($bucket, $cname, $options = null)
 * @method getBucketCname($bucket, $options = null)
 * @method deleteBucketCname($bucket, $cname, $options = null)
 * @method putBucketLiveChannel($bucket, $channelName, $channelConfig, $options = null)
 * @method putLiveChannelStatus($bucket, $channelName, $channelStatus, $options = null)
 * @method getLiveChannelInfo($bucket, $channelName, $options = null)
 * @method getLiveChannelStatus($bucket, $channelName, $options = null)
 * @method getLiveChannelHistory($bucket, $channelName, $options = null)
 * @method listBucketLiveChannels($bucket, $options = null)
 * @method postVodPlaylist($bucket, $channelName, $playlistName, $setTime)
 * @method deleteBucketLiveChannel($bucket, $channelName, $options = null)
 * @method signRtmpUrl($bucket, $channelName, $timeout = 60, $options = null)
 * @method generatePresignedRtmpUrl($bucket, $channelName, $expiration, $options = null)
 * @method optionsObject($bucket, $object, $origin, $request_method, $request_headers, $options = null)
 * @method putBucketLifecycle($bucket, $lifecycleConfig, $options = null)
 * @method getBucketLifecycle($bucket, $options = null)
 * @method deleteBucketLifecycle($bucket, $options = null)
 * @method putBucketReferer($bucket, $refererConfig, $options = null)
 * @method getBucketReferer($bucket, $options = null)
 * @method putBucketStorageCapacity($bucket, $storageCapacity, $options = null)
 * @method getBucketStorageCapacity($bucket, $options = null)
 * @method getBucketInfo($bucket, $options = null)
 * @method getBucketStat($bucket, $options = null)
 * @method putBucketPolicy($bucket, $policy, $options = null)
 * @method getBucketPolicy($bucket, $options = null)
 * @method deleteBucketPolicy($bucket, $options = null)
 * @method putBucketEncryption($bucket, $sseConfig, $options = null)
 * @method getBucketEncryption($bucket, $options = null)
 * @method deleteBucketEncryption($bucket, $options = null)
 * @method putBucketRequestPayment($bucket, $payer, $options = null)
 * @method getBucketRequestPayment($bucket, $options = null)
 * @method putBucketTags($bucket, $taggingConfig, $options = null)
 * @method getBucketTags($bucket, $options = null)
 * @method deleteBucketTags($bucket, $tags = null, $options = null)
 * @method putBucketVersioning($bucket, $status, $options = null)
 * @method getBucketVersioning($bucket, $options = null)
 * @method initiateBucketWorm($bucket, $day, $options = null)
 * @method abortBucketWorm($bucket, $options = null)
 * @method completeBucketWorm($bucket, $wormId, $options = null)
 * @method extendBucketWorm($bucket, $wormId, $day, $options = null)
 * @method getBucketWorm($bucket, $options = null)
 * @method listObjects($bucket, $options = null)
 * @method listObjectVersions($bucket, $options = null)
 * @method createObjectDir($bucket, $object, $options = null)
 * @method putObject($bucket, $object, $content, $options = null)
 * @method putSymlink($bucket, $symlink, $targetObject, $options = null)
 * @method getSymlink($bucket, $symlink, $options = null)
 * @method uploadFile($bucket, $object, $file, $options = null)
 * @method uploadStream($bucket, $object, $handle, $options = null)
 * @method appendObject($bucket, $object, $content, $position, $options = null)
 * @method appendFile($bucket, $object, $file, $position, $options = null)
 * @method copyObject($fromBucket, $fromObject, $toBucket, $toObject, $options = null)
 * @method getObjectMeta($bucket, $object, $options = null)
 * @method getSimplifiedObjectMeta($bucket, $object, $options = null)
 * @method deleteObject($bucket, $object, $options = null)
 * @method deleteObjects($bucket, $objects, $options = null)
 * @method deleteObjectVersions($bucket, $objects, $options = null)
 * @method getObject($bucket, $object, $options = null)
 * @method doesObjectExist($bucket, $object, $options = null)
 * @method restoreObject($bucket, $object, $options = null)
 * @method putObjectTagging($bucket, $object, $taggingConfig, $options = null)
 * @method getObjectTagging($bucket, $object, $options = null)
 * @method deleteObjectTagging($bucket, $object, $options = null)
 * @method processObject($bucket, $object, $process, $options = null)
 * @method generateMultiuploadParts($file_size, $partSize = 5242880)
 * @method initiateMultipartUpload($bucket, $object, $options = null)
 * @method uploadPart($bucket, $object, $uploadId, $options = null)
 * @method listParts($bucket, $object, $uploadId, $options = null)
 * @method abortMultipartUpload($bucket, $object, $uploadId, $options = null)
 * @method completeMultipartUpload($bucket, $object, $uploadId, $listParts, $options = null)
 * @method listMultipartUploads($bucket, $options = null)
 * @method uploadPartCopy($fromBucket, $fromObject, $toBucket, $toObject, $partNumber, $uploadId, $options = null)
 * @method multiuploadFile($bucket, $object, $file, $options = null)
 * @method uploadDir($bucket, $prefix, $localDirectory, $exclude = '.|..|.svn|.git', $recursive = false, $checkMd5 = true)
 * @method signUrl($bucket, $object, $timeout = 60, $method = OssClient::OSS_HTTP_GET, $options = null)
 * @method generatePresignedUrl($bucket, $object, $expiration, $method = OssClient::OSS_HTTP_GET, $options = null)
 * @method setMaxTries($maxRetries = 3)
 * @method getMaxRetries()
 * @method setSignStsInUrl($enable)
 * @method isUseSSL()
 * @method setUseSSL($useSSL)
 * @method setTimeout($timeout)
 * @method setConnectTimeout($connectTimeout)
 */
class OSS
{
    protected $client = [];

    public function __call(string $name, array $arguments)
    {
        return $this->make()->{$name}(...$arguments);
    }

    /**
     * @param mixed $configName
     * @throws \OSS\Core\OssException
     */
    public function make($configName = 'default')
    {
        if (! array_key_exists($configName, $this->client)) {
            $config = config("oss.{$configName}");
            $client = new Client($config);
            $this->client[$configName] = $client;
        }

        return $this->client[$configName];
    }
}
