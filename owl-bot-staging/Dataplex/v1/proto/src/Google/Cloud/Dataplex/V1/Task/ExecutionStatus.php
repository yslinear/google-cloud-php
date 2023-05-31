<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/tasks.proto

namespace Google\Cloud\Dataplex\V1\Task;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Status of the task execution (e.g. Jobs).
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.Task.ExecutionStatus</code>
 */
class ExecutionStatus extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Last update time of the status.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * Output only. latest job execution
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Job latest_job = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $latest_job = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. Last update time of the status.
     *     @type \Google\Cloud\Dataplex\V1\Job $latest_job
     *           Output only. latest job execution
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Tasks::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Last update time of the status.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. Last update time of the status.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Output only. latest job execution
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Job latest_job = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Dataplex\V1\Job|null
     */
    public function getLatestJob()
    {
        return $this->latest_job;
    }

    public function hasLatestJob()
    {
        return isset($this->latest_job);
    }

    public function clearLatestJob()
    {
        unset($this->latest_job);
    }

    /**
     * Output only. latest job execution
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Job latest_job = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Dataplex\V1\Job $var
     * @return $this
     */
    public function setLatestJob($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\Job::class);
        $this->latest_job = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ExecutionStatus::class, \Google\Cloud\Dataplex\V1\Task_ExecutionStatus::class);

