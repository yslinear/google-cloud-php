<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/data_quality.proto

namespace Google\Cloud\Dataplex\V1\DataQualityRule;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Evaluates whether each column value lies between a specified range.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.DataQualityRule.RangeExpectation</code>
 */
class RangeExpectation extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The minimum column value allowed for a row to pass this
     * validation. At least one of `min_value` and `max_value` need to be
     * provided.
     *
     * Generated from protobuf field <code>string min_value = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $min_value = '';
    /**
     * Optional. The maximum column value allowed for a row to pass this
     * validation. At least one of `min_value` and `max_value` need to be
     * provided.
     *
     * Generated from protobuf field <code>string max_value = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $max_value = '';
    /**
     * Optional. Whether each value needs to be strictly greater than ('>') the
     * minimum, or if equality is allowed.
     * Only relevant if a `min_value` has been defined. Default = false.
     *
     * Generated from protobuf field <code>bool strict_min_enabled = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $strict_min_enabled = false;
    /**
     * Optional. Whether each value needs to be strictly lesser than ('<') the
     * maximum, or if equality is allowed.
     * Only relevant if a `max_value` has been defined. Default = false.
     *
     * Generated from protobuf field <code>bool strict_max_enabled = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $strict_max_enabled = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $min_value
     *           Optional. The minimum column value allowed for a row to pass this
     *           validation. At least one of `min_value` and `max_value` need to be
     *           provided.
     *     @type string $max_value
     *           Optional. The maximum column value allowed for a row to pass this
     *           validation. At least one of `min_value` and `max_value` need to be
     *           provided.
     *     @type bool $strict_min_enabled
     *           Optional. Whether each value needs to be strictly greater than ('>') the
     *           minimum, or if equality is allowed.
     *           Only relevant if a `min_value` has been defined. Default = false.
     *     @type bool $strict_max_enabled
     *           Optional. Whether each value needs to be strictly lesser than ('<') the
     *           maximum, or if equality is allowed.
     *           Only relevant if a `max_value` has been defined. Default = false.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\DataQuality::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The minimum column value allowed for a row to pass this
     * validation. At least one of `min_value` and `max_value` need to be
     * provided.
     *
     * Generated from protobuf field <code>string min_value = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getMinValue()
    {
        return $this->min_value;
    }

    /**
     * Optional. The minimum column value allowed for a row to pass this
     * validation. At least one of `min_value` and `max_value` need to be
     * provided.
     *
     * Generated from protobuf field <code>string min_value = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setMinValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->min_value = $var;

        return $this;
    }

    /**
     * Optional. The maximum column value allowed for a row to pass this
     * validation. At least one of `min_value` and `max_value` need to be
     * provided.
     *
     * Generated from protobuf field <code>string max_value = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getMaxValue()
    {
        return $this->max_value;
    }

    /**
     * Optional. The maximum column value allowed for a row to pass this
     * validation. At least one of `min_value` and `max_value` need to be
     * provided.
     *
     * Generated from protobuf field <code>string max_value = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setMaxValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->max_value = $var;

        return $this;
    }

    /**
     * Optional. Whether each value needs to be strictly greater than ('>') the
     * minimum, or if equality is allowed.
     * Only relevant if a `min_value` has been defined. Default = false.
     *
     * Generated from protobuf field <code>bool strict_min_enabled = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getStrictMinEnabled()
    {
        return $this->strict_min_enabled;
    }

    /**
     * Optional. Whether each value needs to be strictly greater than ('>') the
     * minimum, or if equality is allowed.
     * Only relevant if a `min_value` has been defined. Default = false.
     *
     * Generated from protobuf field <code>bool strict_min_enabled = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setStrictMinEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->strict_min_enabled = $var;

        return $this;
    }

    /**
     * Optional. Whether each value needs to be strictly lesser than ('<') the
     * maximum, or if equality is allowed.
     * Only relevant if a `max_value` has been defined. Default = false.
     *
     * Generated from protobuf field <code>bool strict_max_enabled = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getStrictMaxEnabled()
    {
        return $this->strict_max_enabled;
    }

    /**
     * Optional. Whether each value needs to be strictly lesser than ('<') the
     * maximum, or if equality is allowed.
     * Only relevant if a `max_value` has been defined. Default = false.
     *
     * Generated from protobuf field <code>bool strict_max_enabled = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setStrictMaxEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->strict_max_enabled = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RangeExpectation::class, \Google\Cloud\Dataplex\V1\DataQualityRule_RangeExpectation::class);

