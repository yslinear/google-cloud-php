<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.PacketMirroringFilter</code>
 */
class PacketMirroringFilter extends \Google\Protobuf\Internal\Message
{
    /**
     * Protocols that apply as filter on mirrored traffic. If no protocols are specified, all traffic that matches the specified CIDR ranges is mirrored. If neither cidrRanges nor IPProtocols is specified, all traffic is mirrored.
     *
     * Generated from protobuf field <code>repeated string I_p_protocols = 98544854;</code>
     */
    private $I_p_protocols;
    /**
     * IP CIDR ranges that apply as filter on the source (ingress) or destination (egress) IP in the IP header. Only IPv4 is supported. If no ranges are specified, all traffic that matches the specified IPProtocols is mirrored. If neither cidrRanges nor IPProtocols is specified, all traffic is mirrored.
     *
     * Generated from protobuf field <code>repeated string cidr_ranges = 487901697;</code>
     */
    private $cidr_ranges;
    /**
     * Direction of traffic to mirror, either INGRESS, EGRESS, or BOTH. The default is BOTH.
     * Check the Direction enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string direction = 111150975;</code>
     */
    protected $direction = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $I_p_protocols
     *           Protocols that apply as filter on mirrored traffic. If no protocols are specified, all traffic that matches the specified CIDR ranges is mirrored. If neither cidrRanges nor IPProtocols is specified, all traffic is mirrored.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $cidr_ranges
     *           IP CIDR ranges that apply as filter on the source (ingress) or destination (egress) IP in the IP header. Only IPv4 is supported. If no ranges are specified, all traffic that matches the specified IPProtocols is mirrored. If neither cidrRanges nor IPProtocols is specified, all traffic is mirrored.
     *     @type string $direction
     *           Direction of traffic to mirror, either INGRESS, EGRESS, or BOTH. The default is BOTH.
     *           Check the Direction enum for the list of possible values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Protocols that apply as filter on mirrored traffic. If no protocols are specified, all traffic that matches the specified CIDR ranges is mirrored. If neither cidrRanges nor IPProtocols is specified, all traffic is mirrored.
     *
     * Generated from protobuf field <code>repeated string I_p_protocols = 98544854;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIPProtocols()
    {
        return $this->I_p_protocols;
    }

    /**
     * Protocols that apply as filter on mirrored traffic. If no protocols are specified, all traffic that matches the specified CIDR ranges is mirrored. If neither cidrRanges nor IPProtocols is specified, all traffic is mirrored.
     *
     * Generated from protobuf field <code>repeated string I_p_protocols = 98544854;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIPProtocols($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->I_p_protocols = $arr;

        return $this;
    }

    /**
     * IP CIDR ranges that apply as filter on the source (ingress) or destination (egress) IP in the IP header. Only IPv4 is supported. If no ranges are specified, all traffic that matches the specified IPProtocols is mirrored. If neither cidrRanges nor IPProtocols is specified, all traffic is mirrored.
     *
     * Generated from protobuf field <code>repeated string cidr_ranges = 487901697;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCidrRanges()
    {
        return $this->cidr_ranges;
    }

    /**
     * IP CIDR ranges that apply as filter on the source (ingress) or destination (egress) IP in the IP header. Only IPv4 is supported. If no ranges are specified, all traffic that matches the specified IPProtocols is mirrored. If neither cidrRanges nor IPProtocols is specified, all traffic is mirrored.
     *
     * Generated from protobuf field <code>repeated string cidr_ranges = 487901697;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCidrRanges($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->cidr_ranges = $arr;

        return $this;
    }

    /**
     * Direction of traffic to mirror, either INGRESS, EGRESS, or BOTH. The default is BOTH.
     * Check the Direction enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string direction = 111150975;</code>
     * @return string
     */
    public function getDirection()
    {
        return isset($this->direction) ? $this->direction : '';
    }

    public function hasDirection()
    {
        return isset($this->direction);
    }

    public function clearDirection()
    {
        unset($this->direction);
    }

    /**
     * Direction of traffic to mirror, either INGRESS, EGRESS, or BOTH. The default is BOTH.
     * Check the Direction enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string direction = 111150975;</code>
     * @param string $var
     * @return $this
     */
    public function setDirection($var)
    {
        GPBUtil::checkString($var, True);
        $this->direction = $var;

        return $this;
    }

}

