<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v1/cloudbuild.proto

namespace Google\Cloud\Build\V1\BuildOptions;

use UnexpectedValueException;

/**
 * Specifies the behavior when writing build logs to Cloud Storage.
 *
 * Protobuf type <code>google.devtools.cloudbuild.v1.BuildOptions.LogStreamingOption</code>
 */
class LogStreamingOption
{
    /**
     * Service may automatically determine build log streaming behavior.
     *
     * Generated from protobuf enum <code>STREAM_DEFAULT = 0;</code>
     */
    const STREAM_DEFAULT = 0;
    /**
     * Build logs should be streamed to Cloud Storage.
     *
     * Generated from protobuf enum <code>STREAM_ON = 1;</code>
     */
    const STREAM_ON = 1;
    /**
     * Build logs should not be streamed to Cloud Storage; they will be
     * written when the build is completed.
     *
     * Generated from protobuf enum <code>STREAM_OFF = 2;</code>
     */
    const STREAM_OFF = 2;

    private static $valueToName = [
        self::STREAM_DEFAULT => 'STREAM_DEFAULT',
        self::STREAM_ON => 'STREAM_ON',
        self::STREAM_OFF => 'STREAM_OFF',
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


