<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/transcoder/v1/resources.proto

namespace Google\Cloud\Video\Transcoder\V1\Manifest\DashConfig;

use UnexpectedValueException;

/**
 * The segment reference scheme for a `DASH` manifest.
 *
 * Protobuf type <code>google.cloud.video.transcoder.v1.Manifest.DashConfig.SegmentReferenceScheme</code>
 */
class SegmentReferenceScheme
{
    /**
     * The segment reference scheme is not specified.
     *
     * Generated from protobuf enum <code>SEGMENT_REFERENCE_SCHEME_UNSPECIFIED = 0;</code>
     */
    const SEGMENT_REFERENCE_SCHEME_UNSPECIFIED = 0;
    /**
     * Lists the URLs of media files for each segment.
     *
     * Generated from protobuf enum <code>SEGMENT_LIST = 1;</code>
     */
    const SEGMENT_LIST = 1;
    /**
     * Lists each segment from a template with $Number$ variable.
     *
     * Generated from protobuf enum <code>SEGMENT_TEMPLATE_NUMBER = 2;</code>
     */
    const SEGMENT_TEMPLATE_NUMBER = 2;

    private static $valueToName = [
        self::SEGMENT_REFERENCE_SCHEME_UNSPECIFIED => 'SEGMENT_REFERENCE_SCHEME_UNSPECIFIED',
        self::SEGMENT_LIST => 'SEGMENT_LIST',
        self::SEGMENT_TEMPLATE_NUMBER => 'SEGMENT_TEMPLATE_NUMBER',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SegmentReferenceScheme::class, \Google\Cloud\Video\Transcoder\V1\Manifest_DashConfig_SegmentReferenceScheme::class);

