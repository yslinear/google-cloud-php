<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/migration/v2/migration_entities.proto

namespace Google\Cloud\BigQuery\Migration\V2\MigrationSubtask;

use UnexpectedValueException;

/**
 * Possible states of a migration subtask.
 *
 * Protobuf type <code>google.cloud.bigquery.migration.v2.MigrationSubtask.State</code>
 */
class State
{
    /**
     * The state is unspecified.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * The subtask is ready, i.e. it is ready for execution.
     *
     * Generated from protobuf enum <code>ACTIVE = 1;</code>
     */
    const ACTIVE = 1;
    /**
     * The subtask is running, i.e. it is assigned to a worker for execution.
     *
     * Generated from protobuf enum <code>RUNNING = 2;</code>
     */
    const RUNNING = 2;
    /**
     * The subtask finished successfully.
     *
     * Generated from protobuf enum <code>SUCCEEDED = 3;</code>
     */
    const SUCCEEDED = 3;
    /**
     * The subtask finished unsuccessfully.
     *
     * Generated from protobuf enum <code>FAILED = 4;</code>
     */
    const FAILED = 4;
    /**
     * The subtask is paused, i.e., it will not be scheduled. If it was already
     * assigned,it might still finish but no new lease renewals will be granted.
     *
     * Generated from protobuf enum <code>PAUSED = 5;</code>
     */
    const PAUSED = 5;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::ACTIVE => 'ACTIVE',
        self::RUNNING => 'RUNNING',
        self::SUCCEEDED => 'SUCCEEDED',
        self::FAILED => 'FAILED',
        self::PAUSED => 'PAUSED',
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


