<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/domains/v1/domains.proto

namespace Google\Cloud\Domains\V1\ManagementSettings;

use UnexpectedValueException;

/**
 * Defines how the `Registration` is renewed.
 *
 * Protobuf type <code>google.cloud.domains.v1.ManagementSettings.RenewalMethod</code>
 */
class RenewalMethod
{
    /**
     * The renewal method is undefined.
     *
     * Generated from protobuf enum <code>RENEWAL_METHOD_UNSPECIFIED = 0;</code>
     */
    const RENEWAL_METHOD_UNSPECIFIED = 0;
    /**
     * The domain is automatically renewed each year .
     * To disable automatic renewals, delete the resource by calling
     * `DeleteRegistration` or export it by calling `ExportRegistration`.
     *
     * Generated from protobuf enum <code>AUTOMATIC_RENEWAL = 1;</code>
     */
    const AUTOMATIC_RENEWAL = 1;
    /**
     * The domain must be explicitly renewed each year before its
     * `expire_time`. This option is only available when the `Registration`
     * is in state `EXPORTED`.
     * To manage the domain's current billing and
     * renewal settings, go to [Google Domains](https://domains.google/).
     *
     * Generated from protobuf enum <code>MANUAL_RENEWAL = 2;</code>
     */
    const MANUAL_RENEWAL = 2;

    private static $valueToName = [
        self::RENEWAL_METHOD_UNSPECIFIED => 'RENEWAL_METHOD_UNSPECIFIED',
        self::AUTOMATIC_RENEWAL => 'AUTOMATIC_RENEWAL',
        self::MANUAL_RENEWAL => 'MANUAL_RENEWAL',
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
class_alias(RenewalMethod::class, \Google\Cloud\Domains\V1\ManagementSettings_RenewalMethod::class);

