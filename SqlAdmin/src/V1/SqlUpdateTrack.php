<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1/cloud_sql_resources.proto

namespace Google\Cloud\Sql\V1;

use UnexpectedValueException;

/**
 * Protobuf type <code>google.cloud.sql.v1.SqlUpdateTrack</code>
 */
class SqlUpdateTrack
{
    /**
     * This is an unknown maintenance timing preference.
     *
     * Generated from protobuf enum <code>SQL_UPDATE_TRACK_UNSPECIFIED = 0;</code>
     */
    const SQL_UPDATE_TRACK_UNSPECIFIED = 0;
    /**
     * For instance update that requires a restart, this update track indicates
     * your instance prefer to restart for new version early in maintenance
     * window.
     *
     * Generated from protobuf enum <code>canary = 1;</code>
     */
    const canary = 1;
    /**
     * For instance update that requires a restart, this update track indicates
     * your instance prefer to let Cloud SQL choose the timing of restart (within
     * its Maintenance window, if applicable).
     *
     * Generated from protobuf enum <code>stable = 2;</code>
     */
    const stable = 2;

    private static $valueToName = [
        self::SQL_UPDATE_TRACK_UNSPECIFIED => 'SQL_UPDATE_TRACK_UNSPECIFIED',
        self::canary => 'canary',
        self::stable => 'stable',
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

