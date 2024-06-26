<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\NodeGroup;

use UnexpectedValueException;

/**
 * Specifies the frequency of planned maintenance events. The accepted values are: `AS_NEEDED` and `RECURRENT`.
 *
 * Protobuf type <code>google.cloud.compute.v1.NodeGroup.MaintenanceInterval</code>
 */
class MaintenanceInterval
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_MAINTENANCE_INTERVAL = 0;</code>
     */
    const UNDEFINED_MAINTENANCE_INTERVAL = 0;
    /**
     * VMs are eligible to receive infrastructure and hypervisor updates as they become available. This may result in more maintenance operations (live migrations or terminations) for the VM than the PERIODIC and RECURRENT options.
     *
     * Generated from protobuf enum <code>AS_NEEDED = 500724834;</code>
     */
    const AS_NEEDED = 500724834;
    /**
     * VMs receive infrastructure and hypervisor updates on a periodic basis, minimizing the number of maintenance operations (live migrations or terminations) on an individual VM. This may mean a VM will take longer to receive an update than if it was configured for AS_NEEDED. Security updates will still be applied as soon as they are available. RECURRENT is used for GEN3 and Slice of Hardware VMs.
     *
     * Generated from protobuf enum <code>RECURRENT = 194244550;</code>
     */
    const RECURRENT = 194244550;

    private static $valueToName = [
        self::UNDEFINED_MAINTENANCE_INTERVAL => 'UNDEFINED_MAINTENANCE_INTERVAL',
        self::AS_NEEDED => 'AS_NEEDED',
        self::RECURRENT => 'RECURRENT',
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


