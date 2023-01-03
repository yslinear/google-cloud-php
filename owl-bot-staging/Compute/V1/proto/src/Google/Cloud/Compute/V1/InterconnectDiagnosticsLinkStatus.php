<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.InterconnectDiagnosticsLinkStatus</code>
 */
class InterconnectDiagnosticsLinkStatus extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of InterconnectDiagnostics.ARPEntry objects, describing the ARP neighbor entries seen on this link. This will be empty if the link is bundled
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.InterconnectDiagnosticsARPEntry arp_caches = 414591761;</code>
     */
    private $arp_caches;
    /**
     * The unique ID for this link assigned during turn up by Google.
     *
     * Generated from protobuf field <code>optional string circuit_id = 225180977;</code>
     */
    protected $circuit_id = null;
    /**
     * The Demarc address assigned by Google and provided in the LoA.
     *
     * Generated from protobuf field <code>optional string google_demarc = 51084;</code>
     */
    protected $google_demarc = null;
    /**
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.InterconnectDiagnosticsLinkLACPStatus lacp_status = 361210415;</code>
     */
    protected $lacp_status = null;
    /**
     * The operational status of the link.
     * Check the OperationalStatus enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string operational_status = 201070847;</code>
     */
    protected $operational_status = null;
    /**
     * An InterconnectDiagnostics.LinkOpticalPower object, describing the current value and status of the received light level.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.InterconnectDiagnosticsLinkOpticalPower receiving_optical_power = 244717279;</code>
     */
    protected $receiving_optical_power = null;
    /**
     * An InterconnectDiagnostics.LinkOpticalPower object, describing the current value and status of the transmitted light level.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.InterconnectDiagnosticsLinkOpticalPower transmitting_optical_power = 459431197;</code>
     */
    protected $transmitting_optical_power = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Compute\V1\InterconnectDiagnosticsARPEntry>|\Google\Protobuf\Internal\RepeatedField $arp_caches
     *           A list of InterconnectDiagnostics.ARPEntry objects, describing the ARP neighbor entries seen on this link. This will be empty if the link is bundled
     *     @type string $circuit_id
     *           The unique ID for this link assigned during turn up by Google.
     *     @type string $google_demarc
     *           The Demarc address assigned by Google and provided in the LoA.
     *     @type \Google\Cloud\Compute\V1\InterconnectDiagnosticsLinkLACPStatus $lacp_status
     *     @type string $operational_status
     *           The operational status of the link.
     *           Check the OperationalStatus enum for the list of possible values.
     *     @type \Google\Cloud\Compute\V1\InterconnectDiagnosticsLinkOpticalPower $receiving_optical_power
     *           An InterconnectDiagnostics.LinkOpticalPower object, describing the current value and status of the received light level.
     *     @type \Google\Cloud\Compute\V1\InterconnectDiagnosticsLinkOpticalPower $transmitting_optical_power
     *           An InterconnectDiagnostics.LinkOpticalPower object, describing the current value and status of the transmitted light level.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of InterconnectDiagnostics.ARPEntry objects, describing the ARP neighbor entries seen on this link. This will be empty if the link is bundled
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.InterconnectDiagnosticsARPEntry arp_caches = 414591761;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getArpCaches()
    {
        return $this->arp_caches;
    }

    /**
     * A list of InterconnectDiagnostics.ARPEntry objects, describing the ARP neighbor entries seen on this link. This will be empty if the link is bundled
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.InterconnectDiagnosticsARPEntry arp_caches = 414591761;</code>
     * @param array<\Google\Cloud\Compute\V1\InterconnectDiagnosticsARPEntry>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setArpCaches($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\InterconnectDiagnosticsARPEntry::class);
        $this->arp_caches = $arr;

        return $this;
    }

    /**
     * The unique ID for this link assigned during turn up by Google.
     *
     * Generated from protobuf field <code>optional string circuit_id = 225180977;</code>
     * @return string
     */
    public function getCircuitId()
    {
        return isset($this->circuit_id) ? $this->circuit_id : '';
    }

    public function hasCircuitId()
    {
        return isset($this->circuit_id);
    }

    public function clearCircuitId()
    {
        unset($this->circuit_id);
    }

    /**
     * The unique ID for this link assigned during turn up by Google.
     *
     * Generated from protobuf field <code>optional string circuit_id = 225180977;</code>
     * @param string $var
     * @return $this
     */
    public function setCircuitId($var)
    {
        GPBUtil::checkString($var, True);
        $this->circuit_id = $var;

        return $this;
    }

    /**
     * The Demarc address assigned by Google and provided in the LoA.
     *
     * Generated from protobuf field <code>optional string google_demarc = 51084;</code>
     * @return string
     */
    public function getGoogleDemarc()
    {
        return isset($this->google_demarc) ? $this->google_demarc : '';
    }

    public function hasGoogleDemarc()
    {
        return isset($this->google_demarc);
    }

    public function clearGoogleDemarc()
    {
        unset($this->google_demarc);
    }

    /**
     * The Demarc address assigned by Google and provided in the LoA.
     *
     * Generated from protobuf field <code>optional string google_demarc = 51084;</code>
     * @param string $var
     * @return $this
     */
    public function setGoogleDemarc($var)
    {
        GPBUtil::checkString($var, True);
        $this->google_demarc = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.InterconnectDiagnosticsLinkLACPStatus lacp_status = 361210415;</code>
     * @return \Google\Cloud\Compute\V1\InterconnectDiagnosticsLinkLACPStatus|null
     */
    public function getLacpStatus()
    {
        return $this->lacp_status;
    }

    public function hasLacpStatus()
    {
        return isset($this->lacp_status);
    }

    public function clearLacpStatus()
    {
        unset($this->lacp_status);
    }

    /**
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.InterconnectDiagnosticsLinkLACPStatus lacp_status = 361210415;</code>
     * @param \Google\Cloud\Compute\V1\InterconnectDiagnosticsLinkLACPStatus $var
     * @return $this
     */
    public function setLacpStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\InterconnectDiagnosticsLinkLACPStatus::class);
        $this->lacp_status = $var;

        return $this;
    }

    /**
     * The operational status of the link.
     * Check the OperationalStatus enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string operational_status = 201070847;</code>
     * @return string
     */
    public function getOperationalStatus()
    {
        return isset($this->operational_status) ? $this->operational_status : '';
    }

    public function hasOperationalStatus()
    {
        return isset($this->operational_status);
    }

    public function clearOperationalStatus()
    {
        unset($this->operational_status);
    }

    /**
     * The operational status of the link.
     * Check the OperationalStatus enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string operational_status = 201070847;</code>
     * @param string $var
     * @return $this
     */
    public function setOperationalStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->operational_status = $var;

        return $this;
    }

    /**
     * An InterconnectDiagnostics.LinkOpticalPower object, describing the current value and status of the received light level.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.InterconnectDiagnosticsLinkOpticalPower receiving_optical_power = 244717279;</code>
     * @return \Google\Cloud\Compute\V1\InterconnectDiagnosticsLinkOpticalPower|null
     */
    public function getReceivingOpticalPower()
    {
        return $this->receiving_optical_power;
    }

    public function hasReceivingOpticalPower()
    {
        return isset($this->receiving_optical_power);
    }

    public function clearReceivingOpticalPower()
    {
        unset($this->receiving_optical_power);
    }

    /**
     * An InterconnectDiagnostics.LinkOpticalPower object, describing the current value and status of the received light level.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.InterconnectDiagnosticsLinkOpticalPower receiving_optical_power = 244717279;</code>
     * @param \Google\Cloud\Compute\V1\InterconnectDiagnosticsLinkOpticalPower $var
     * @return $this
     */
    public function setReceivingOpticalPower($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\InterconnectDiagnosticsLinkOpticalPower::class);
        $this->receiving_optical_power = $var;

        return $this;
    }

    /**
     * An InterconnectDiagnostics.LinkOpticalPower object, describing the current value and status of the transmitted light level.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.InterconnectDiagnosticsLinkOpticalPower transmitting_optical_power = 459431197;</code>
     * @return \Google\Cloud\Compute\V1\InterconnectDiagnosticsLinkOpticalPower|null
     */
    public function getTransmittingOpticalPower()
    {
        return $this->transmitting_optical_power;
    }

    public function hasTransmittingOpticalPower()
    {
        return isset($this->transmitting_optical_power);
    }

    public function clearTransmittingOpticalPower()
    {
        unset($this->transmitting_optical_power);
    }

    /**
     * An InterconnectDiagnostics.LinkOpticalPower object, describing the current value and status of the transmitted light level.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.InterconnectDiagnosticsLinkOpticalPower transmitting_optical_power = 459431197;</code>
     * @param \Google\Cloud\Compute\V1\InterconnectDiagnosticsLinkOpticalPower $var
     * @return $this
     */
    public function setTransmittingOpticalPower($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\InterconnectDiagnosticsLinkOpticalPower::class);
        $this->transmitting_optical_power = $var;

        return $this;
    }

}

