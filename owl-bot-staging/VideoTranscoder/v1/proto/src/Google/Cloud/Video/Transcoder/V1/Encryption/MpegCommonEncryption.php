<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/transcoder/v1/resources.proto

namespace Google\Cloud\Video\Transcoder\V1\Encryption;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration for MPEG Common Encryption (MPEG-CENC).
 *
 * Generated from protobuf message <code>google.cloud.video.transcoder.v1.Encryption.MpegCommonEncryption</code>
 */
class MpegCommonEncryption extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Specify the encryption scheme.
     * Supported encryption schemes:
     * - `cenc`
     * - `cbcs`
     *
     * Generated from protobuf field <code>string scheme = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $scheme = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $scheme
     *           Required. Specify the encryption scheme.
     *           Supported encryption schemes:
     *           - `cenc`
     *           - `cbcs`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Transcoder\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Specify the encryption scheme.
     * Supported encryption schemes:
     * - `cenc`
     * - `cbcs`
     *
     * Generated from protobuf field <code>string scheme = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getScheme()
    {
        return $this->scheme;
    }

    /**
     * Required. Specify the encryption scheme.
     * Supported encryption schemes:
     * - `cenc`
     * - `cbcs`
     *
     * Generated from protobuf field <code>string scheme = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setScheme($var)
    {
        GPBUtil::checkString($var, True);
        $this->scheme = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MpegCommonEncryption::class, \Google\Cloud\Video\Transcoder\V1\Encryption_MpegCommonEncryption::class);

