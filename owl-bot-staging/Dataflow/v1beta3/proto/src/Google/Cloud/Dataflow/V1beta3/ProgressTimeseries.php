<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/dataflow/v1beta3/metrics.proto

namespace Google\Cloud\Dataflow\V1beta3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information about the progress of some component of job execution.
 *
 * Generated from protobuf message <code>google.dataflow.v1beta3.ProgressTimeseries</code>
 */
class ProgressTimeseries extends \Google\Protobuf\Internal\Message
{
    /**
     * The current progress of the component, in the range [0,1].
     *
     * Generated from protobuf field <code>double current_progress = 1;</code>
     */
    protected $current_progress = 0.0;
    /**
     * History of progress for the component.
     * Points are sorted by time.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.ProgressTimeseries.Point data_points = 2;</code>
     */
    private $data_points;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $current_progress
     *           The current progress of the component, in the range [0,1].
     *     @type array<\Google\Cloud\Dataflow\V1beta3\ProgressTimeseries\Point>|\Google\Protobuf\Internal\RepeatedField $data_points
     *           History of progress for the component.
     *           Points are sorted by time.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Dataflow\V1Beta3\Metrics::initOnce();
        parent::__construct($data);
    }

    /**
     * The current progress of the component, in the range [0,1].
     *
     * Generated from protobuf field <code>double current_progress = 1;</code>
     * @return float
     */
    public function getCurrentProgress()
    {
        return $this->current_progress;
    }

    /**
     * The current progress of the component, in the range [0,1].
     *
     * Generated from protobuf field <code>double current_progress = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setCurrentProgress($var)
    {
        GPBUtil::checkDouble($var);
        $this->current_progress = $var;

        return $this;
    }

    /**
     * History of progress for the component.
     * Points are sorted by time.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.ProgressTimeseries.Point data_points = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDataPoints()
    {
        return $this->data_points;
    }

    /**
     * History of progress for the component.
     * Points are sorted by time.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.ProgressTimeseries.Point data_points = 2;</code>
     * @param array<\Google\Cloud\Dataflow\V1beta3\ProgressTimeseries\Point>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDataPoints($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataflow\V1beta3\ProgressTimeseries\Point::class);
        $this->data_points = $arr;

        return $this;
    }

}

