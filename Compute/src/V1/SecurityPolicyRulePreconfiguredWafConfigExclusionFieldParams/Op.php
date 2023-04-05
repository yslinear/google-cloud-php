<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\SecurityPolicyRulePreconfiguredWafConfigExclusionFieldParams;

use UnexpectedValueException;

/**
 * The match operator for the field.
 *
 * Protobuf type <code>google.cloud.compute.v1.SecurityPolicyRulePreconfiguredWafConfigExclusionFieldParams.Op</code>
 */
class Op
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_OP = 0;</code>
     */
    const UNDEFINED_OP = 0;
    /**
     * The operator matches if the field value contains the specified value.
     *
     * Generated from protobuf enum <code>CONTAINS = 215180831;</code>
     */
    const CONTAINS = 215180831;
    /**
     * The operator matches if the field value ends with the specified value.
     *
     * Generated from protobuf enum <code>ENDS_WITH = 490402221;</code>
     */
    const ENDS_WITH = 490402221;
    /**
     * The operator matches if the field value equals the specified value.
     *
     * Generated from protobuf enum <code>EQUALS = 442201023;</code>
     */
    const EQUALS = 442201023;
    /**
     * The operator matches if the field value is any value.
     *
     * Generated from protobuf enum <code>EQUALS_ANY = 337226060;</code>
     */
    const EQUALS_ANY = 337226060;
    /**
     * The operator matches if the field value starts with the specified value.
     *
     * Generated from protobuf enum <code>STARTS_WITH = 139505652;</code>
     */
    const STARTS_WITH = 139505652;

    private static $valueToName = [
        self::UNDEFINED_OP => 'UNDEFINED_OP',
        self::CONTAINS => 'CONTAINS',
        self::ENDS_WITH => 'ENDS_WITH',
        self::EQUALS => 'EQUALS',
        self::EQUALS_ANY => 'EQUALS_ANY',
        self::STARTS_WITH => 'STARTS_WITH',
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


