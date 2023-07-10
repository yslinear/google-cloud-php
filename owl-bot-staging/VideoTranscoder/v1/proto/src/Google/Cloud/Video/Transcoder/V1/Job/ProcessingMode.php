<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/transcoder/v1/resources.proto

namespace Google\Cloud\Video\Transcoder\V1\Job;

use UnexpectedValueException;

/**
 * The processing mode of the job.
 *
 * Protobuf type <code>google.cloud.video.transcoder.v1.Job.ProcessingMode</code>
 */
class ProcessingMode
{
    /**
     * The job processing mode is not specified.
     *
     * Generated from protobuf enum <code>PROCESSING_MODE_UNSPECIFIED = 0;</code>
     */
    const PROCESSING_MODE_UNSPECIFIED = 0;
    /**
     * The job processing mode is interactive mode.
     * Interactive job will either be ran or rejected if quota does not allow
     * for it.
     *
     * Generated from protobuf enum <code>PROCESSING_MODE_INTERACTIVE = 1;</code>
     */
    const PROCESSING_MODE_INTERACTIVE = 1;
    /**
     * The job processing mode is batch mode.
     * Batch mode allows queuing of jobs.
     *
     * Generated from protobuf enum <code>PROCESSING_MODE_BATCH = 2;</code>
     */
    const PROCESSING_MODE_BATCH = 2;

    private static $valueToName = [
        self::PROCESSING_MODE_UNSPECIFIED => 'PROCESSING_MODE_UNSPECIFIED',
        self::PROCESSING_MODE_INTERACTIVE => 'PROCESSING_MODE_INTERACTIVE',
        self::PROCESSING_MODE_BATCH => 'PROCESSING_MODE_BATCH',
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
class_alias(ProcessingMode::class, \Google\Cloud\Video\Transcoder\V1\Job_ProcessingMode::class);

