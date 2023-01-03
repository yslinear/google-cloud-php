<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\NodeGroupNode;

use UnexpectedValueException;

/**
 *
 * Protobuf type <code>google.cloud.compute.v1.NodeGroupNode.Status</code>
 */
class Status
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_STATUS = 0;</code>
     */
    const UNDEFINED_STATUS = 0;
    /**
     * Generated from protobuf enum <code>CREATING = 455564985;</code>
     */
    const CREATING = 455564985;
    /**
     * Generated from protobuf enum <code>DELETING = 528602024;</code>
     */
    const DELETING = 528602024;
    /**
     * Generated from protobuf enum <code>INVALID = 530283991;</code>
     */
    const INVALID = 530283991;
    /**
     * Generated from protobuf enum <code>READY = 77848963;</code>
     */
    const READY = 77848963;
    /**
     * Generated from protobuf enum <code>REPAIRING = 413483285;</code>
     */
    const REPAIRING = 413483285;

    private static $valueToName = [
        self::UNDEFINED_STATUS => 'UNDEFINED_STATUS',
        self::CREATING => 'CREATING',
        self::DELETING => 'DELETING',
        self::INVALID => 'INVALID',
        self::READY => 'READY',
        self::REPAIRING => 'REPAIRING',
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
class_alias(Status::class, \Google\Cloud\Compute\V1\NodeGroupNode_Status::class);

