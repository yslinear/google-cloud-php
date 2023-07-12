<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * RangeInfo contains the range name and the range utilization by this cluster.
 *
 * Generated from protobuf message <code>google.container.v1.RangeInfo</code>
 */
class RangeInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. [Output only] Name of a range.
     *
     * Generated from protobuf field <code>string range_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $range_name = '';
    /**
     * Output only. [Output only] The utilization of the range.
     *
     * Generated from protobuf field <code>double utilization = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $utilization = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $range_name
     *           Output only. [Output only] Name of a range.
     *     @type float $utilization
     *           Output only. [Output only] The utilization of the range.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. [Output only] Name of a range.
     *
     * Generated from protobuf field <code>string range_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getRangeName()
    {
        return $this->range_name;
    }

    /**
     * Output only. [Output only] Name of a range.
     *
     * Generated from protobuf field <code>string range_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setRangeName($var)
    {
        GPBUtil::checkString($var, True);
        $this->range_name = $var;

        return $this;
    }

    /**
     * Output only. [Output only] The utilization of the range.
     *
     * Generated from protobuf field <code>double utilization = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return float
     */
    public function getUtilization()
    {
        return $this->utilization;
    }

    /**
     * Output only. [Output only] The utilization of the range.
     *
     * Generated from protobuf field <code>double utilization = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param float $var
     * @return $this
     */
    public function setUtilization($var)
    {
        GPBUtil::checkDouble($var);
        $this->utilization = $var;

        return $this;
    }

}

