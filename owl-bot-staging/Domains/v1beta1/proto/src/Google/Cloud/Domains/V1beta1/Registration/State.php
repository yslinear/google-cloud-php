<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/domains/v1beta1/domains.proto

namespace Google\Cloud\Domains\V1beta1\Registration;

use UnexpectedValueException;

/**
 * Possible states of a `Registration`.
 *
 * Protobuf type <code>google.cloud.domains.v1beta1.Registration.State</code>
 */
class State
{
    /**
     * The state is undefined.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * The domain is being registered.
     *
     * Generated from protobuf enum <code>REGISTRATION_PENDING = 1;</code>
     */
    const REGISTRATION_PENDING = 1;
    /**
     * The domain registration failed. You can delete resources in this state
     * to allow registration to be retried.
     *
     * Generated from protobuf enum <code>REGISTRATION_FAILED = 2;</code>
     */
    const REGISTRATION_FAILED = 2;
    /**
     * The domain is being transferred from another registrar to Cloud Domains.
     *
     * Generated from protobuf enum <code>TRANSFER_PENDING = 3;</code>
     */
    const TRANSFER_PENDING = 3;
    /**
     * The attempt to transfer the domain from another registrar to
     * Cloud Domains failed. You can delete resources in this state and retry
     * the transfer.
     *
     * Generated from protobuf enum <code>TRANSFER_FAILED = 4;</code>
     */
    const TRANSFER_FAILED = 4;
    /**
     * The domain is registered and operational. The domain renews automatically
     * as long as it remains in this state.
     *
     * Generated from protobuf enum <code>ACTIVE = 6;</code>
     */
    const ACTIVE = 6;
    /**
     * The domain is suspended and inoperative. For more details, see the
     * `issues` field.
     *
     * Generated from protobuf enum <code>SUSPENDED = 7;</code>
     */
    const SUSPENDED = 7;
    /**
     * The domain is no longer managed with Cloud Domains. It may have been
     * transferred to another registrar or exported for management in
     * [Google Domains](https://domains.google/). You can no longer update it
     * with this API, and information shown about it may be stale. Domains in
     * this state are not automatically renewed by Cloud Domains.
     *
     * Generated from protobuf enum <code>EXPORTED = 8;</code>
     */
    const EXPORTED = 8;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::REGISTRATION_PENDING => 'REGISTRATION_PENDING',
        self::REGISTRATION_FAILED => 'REGISTRATION_FAILED',
        self::TRANSFER_PENDING => 'TRANSFER_PENDING',
        self::TRANSFER_FAILED => 'TRANSFER_FAILED',
        self::ACTIVE => 'ACTIVE',
        self::SUSPENDED => 'SUSPENDED',
        self::EXPORTED => 'EXPORTED',
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
class_alias(State::class, \Google\Cloud\Domains\V1beta1\Registration_State::class);

