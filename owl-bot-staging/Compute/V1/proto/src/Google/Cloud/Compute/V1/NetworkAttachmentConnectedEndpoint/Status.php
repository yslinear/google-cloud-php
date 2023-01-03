<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\NetworkAttachmentConnectedEndpoint;

use UnexpectedValueException;

/**
 * The status of a connected endpoint to this network attachment.
 *
 * Protobuf type <code>google.cloud.compute.v1.NetworkAttachmentConnectedEndpoint.Status</code>
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
     * The consumer allows traffic from the producer to reach its VPC.
     *
     * Generated from protobuf enum <code>ACCEPTED = 246714279;</code>
     */
    const ACCEPTED = 246714279;
    /**
     * The consumer network attachment no longer exists.
     *
     * Generated from protobuf enum <code>CLOSED = 380163436;</code>
     */
    const CLOSED = 380163436;
    /**
     * The consumer needs to take further action before traffic can be served.
     *
     * Generated from protobuf enum <code>NEEDS_ATTENTION = 344491452;</code>
     */
    const NEEDS_ATTENTION = 344491452;
    /**
     * The consumer neither allows nor prohibits traffic from the producer to reach its VPC.
     *
     * Generated from protobuf enum <code>PENDING = 35394935;</code>
     */
    const PENDING = 35394935;
    /**
     * The consumer prohibits traffic from the producer to reach its VPC.
     *
     * Generated from protobuf enum <code>REJECTED = 174130302;</code>
     */
    const REJECTED = 174130302;
    /**
     * Generated from protobuf enum <code>STATUS_UNSPECIFIED = 42133066;</code>
     */
    const STATUS_UNSPECIFIED = 42133066;

    private static $valueToName = [
        self::UNDEFINED_STATUS => 'UNDEFINED_STATUS',
        self::ACCEPTED => 'ACCEPTED',
        self::CLOSED => 'CLOSED',
        self::NEEDS_ATTENTION => 'NEEDS_ATTENTION',
        self::PENDING => 'PENDING',
        self::REJECTED => 'REJECTED',
        self::STATUS_UNSPECIFIED => 'STATUS_UNSPECIFIED',
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
class_alias(Status::class, \Google\Cloud\Compute\V1\NetworkAttachmentConnectedEndpoint_Status::class);

