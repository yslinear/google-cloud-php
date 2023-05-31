<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/lineage/v1/lineage.proto

namespace Google\Cloud\DataCatalog\Lineage\V1\Run;

use UnexpectedValueException;

/**
 * The current state of the run.
 *
 * Protobuf type <code>google.cloud.datacatalog.lineage.v1.Run.State</code>
 */
class State
{
    /**
     * The state is unknown. The true state may be any of the below or a
     * different state that is not supported here explicitly.
     *
     * Generated from protobuf enum <code>UNKNOWN = 0;</code>
     */
    const UNKNOWN = 0;
    /**
     * The run is still executing.
     *
     * Generated from protobuf enum <code>STARTED = 1;</code>
     */
    const STARTED = 1;
    /**
     * The run completed.
     *
     * Generated from protobuf enum <code>COMPLETED = 2;</code>
     */
    const COMPLETED = 2;
    /**
     * The run failed.
     *
     * Generated from protobuf enum <code>FAILED = 3;</code>
     */
    const FAILED = 3;
    /**
     * The run aborted.
     *
     * Generated from protobuf enum <code>ABORTED = 4;</code>
     */
    const ABORTED = 4;

    private static $valueToName = [
        self::UNKNOWN => 'UNKNOWN',
        self::STARTED => 'STARTED',
        self::COMPLETED => 'COMPLETED',
        self::FAILED => 'FAILED',
        self::ABORTED => 'ABORTED',
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
class_alias(State::class, \Google\Cloud\DataCatalog\Lineage\V1\Run_State::class);

