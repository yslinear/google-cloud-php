<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/metastore/v1beta/metastore.proto

namespace Google\Cloud\Metastore\V1beta\MetadataImport\DatabaseDump;

use UnexpectedValueException;

/**
 * The type of the database.
 *
 * Protobuf type <code>google.cloud.metastore.v1beta.MetadataImport.DatabaseDump.DatabaseType</code>
 */
class DatabaseType
{
    /**
     * The type of the source database is unknown.
     *
     * Generated from protobuf enum <code>DATABASE_TYPE_UNSPECIFIED = 0;</code>
     */
    const DATABASE_TYPE_UNSPECIFIED = 0;
    /**
     * The type of the source database is MySQL.
     *
     * Generated from protobuf enum <code>MYSQL = 1;</code>
     */
    const MYSQL = 1;

    private static $valueToName = [
        self::DATABASE_TYPE_UNSPECIFIED => 'DATABASE_TYPE_UNSPECIFIED',
        self::MYSQL => 'MYSQL',
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
class_alias(DatabaseType::class, \Google\Cloud\Metastore\V1beta\MetadataImport_DatabaseDump_DatabaseType::class);

