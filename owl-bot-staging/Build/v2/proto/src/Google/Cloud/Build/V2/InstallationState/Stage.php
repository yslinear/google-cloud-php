<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v2/repositories.proto

namespace Google\Cloud\Build\V2\InstallationState;

use UnexpectedValueException;

/**
 * Stage of the installation process.
 *
 * Protobuf type <code>google.devtools.cloudbuild.v2.InstallationState.Stage</code>
 */
class Stage
{
    /**
     * No stage specified.
     *
     * Generated from protobuf enum <code>STAGE_UNSPECIFIED = 0;</code>
     */
    const STAGE_UNSPECIFIED = 0;
    /**
     * Only for GitHub Enterprise. An App creation has been requested.
     * The user needs to confirm the creation in their GitHub enterprise host.
     *
     * Generated from protobuf enum <code>PENDING_CREATE_APP = 1;</code>
     */
    const PENDING_CREATE_APP = 1;
    /**
     * User needs to authorize the GitHub (or Enterprise) App via OAuth.
     *
     * Generated from protobuf enum <code>PENDING_USER_OAUTH = 2;</code>
     */
    const PENDING_USER_OAUTH = 2;
    /**
     * User needs to follow the link to install the GitHub (or Enterprise) App.
     *
     * Generated from protobuf enum <code>PENDING_INSTALL_APP = 3;</code>
     */
    const PENDING_INSTALL_APP = 3;
    /**
     * Installation process has been completed.
     *
     * Generated from protobuf enum <code>COMPLETE = 10;</code>
     */
    const COMPLETE = 10;

    private static $valueToName = [
        self::STAGE_UNSPECIFIED => 'STAGE_UNSPECIFIED',
        self::PENDING_CREATE_APP => 'PENDING_CREATE_APP',
        self::PENDING_USER_OAUTH => 'PENDING_USER_OAUTH',
        self::PENDING_INSTALL_APP => 'PENDING_INSTALL_APP',
        self::COMPLETE => 'COMPLETE',
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
class_alias(Stage::class, \Google\Cloud\Build\V2\InstallationState_Stage::class);

