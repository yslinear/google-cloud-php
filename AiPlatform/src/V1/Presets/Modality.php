<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/explanation.proto

namespace Google\Cloud\AIPlatform\V1\Presets;

use UnexpectedValueException;

/**
 * Preset option controlling parameters for different modalities
 *
 * Protobuf type <code>google.cloud.aiplatform.v1.Presets.Modality</code>
 */
class Modality
{
    /**
     * Should not be set. Added as a recommended best practice for enums
     *
     * Generated from protobuf enum <code>MODALITY_UNSPECIFIED = 0;</code>
     */
    const MODALITY_UNSPECIFIED = 0;
    /**
     * IMAGE modality
     *
     * Generated from protobuf enum <code>IMAGE = 1;</code>
     */
    const IMAGE = 1;
    /**
     * TEXT modality
     *
     * Generated from protobuf enum <code>TEXT = 2;</code>
     */
    const TEXT = 2;
    /**
     * TABULAR modality
     *
     * Generated from protobuf enum <code>TABULAR = 3;</code>
     */
    const TABULAR = 3;

    private static $valueToName = [
        self::MODALITY_UNSPECIFIED => 'MODALITY_UNSPECIFIED',
        self::IMAGE => 'IMAGE',
        self::TEXT => 'TEXT',
        self::TABULAR => 'TABULAR',
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


