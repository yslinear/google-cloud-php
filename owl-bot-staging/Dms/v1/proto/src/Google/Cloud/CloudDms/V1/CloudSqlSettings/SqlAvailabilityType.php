<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/clouddms/v1/clouddms_resources.proto

namespace Google\Cloud\CloudDms\V1\CloudSqlSettings;

use UnexpectedValueException;

/**
 * The availability type of the given Cloud SQL instance.
 *
 * Protobuf type <code>google.cloud.clouddms.v1.CloudSqlSettings.SqlAvailabilityType</code>
 */
class SqlAvailabilityType
{
    /**
     * This is an unknown Availability type.
     *
     * Generated from protobuf enum <code>SQL_AVAILABILITY_TYPE_UNSPECIFIED = 0;</code>
     */
    const SQL_AVAILABILITY_TYPE_UNSPECIFIED = 0;
    /**
     * Zonal availablility instance.
     *
     * Generated from protobuf enum <code>ZONAL = 1;</code>
     */
    const ZONAL = 1;
    /**
     * Regional availability instance.
     *
     * Generated from protobuf enum <code>REGIONAL = 2;</code>
     */
    const REGIONAL = 2;

    private static $valueToName = [
        self::SQL_AVAILABILITY_TYPE_UNSPECIFIED => 'SQL_AVAILABILITY_TYPE_UNSPECIFIED',
        self::ZONAL => 'ZONAL',
        self::REGIONAL => 'REGIONAL',
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
class_alias(SqlAvailabilityType::class, \Google\Cloud\CloudDms\V1\CloudSqlSettings_SqlAvailabilityType::class);

