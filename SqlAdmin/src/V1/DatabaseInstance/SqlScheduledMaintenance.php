<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1/cloud_sql_instances.proto

namespace Google\Cloud\Sql\V1\DatabaseInstance;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Any scheduled maintenance for this instance.
 *
 * Generated from protobuf message <code>google.cloud.sql.v1.DatabaseInstance.SqlScheduledMaintenance</code>
 */
class SqlScheduledMaintenance extends \Google\Protobuf\Internal\Message
{
    /**
     * The start time of any upcoming scheduled maintenance for this instance.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 1;</code>
     */
    private $start_time = null;
    /**
     * Generated from protobuf field <code>bool can_defer = 2 [deprecated = true];</code>
     * @deprecated
     */
    protected $can_defer = false;
    /**
     * If the scheduled maintenance can be rescheduled.
     *
     * Generated from protobuf field <code>bool can_reschedule = 3;</code>
     */
    private $can_reschedule = false;
    /**
     * Maintenance cannot be rescheduled to start beyond this deadline.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Timestamp schedule_deadline_time = 4;</code>
     */
    private $schedule_deadline_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $start_time
     *           The start time of any upcoming scheduled maintenance for this instance.
     *     @type bool $can_defer
     *     @type bool $can_reschedule
     *           If the scheduled maintenance can be rescheduled.
     *     @type \Google\Protobuf\Timestamp $schedule_deadline_time
     *           Maintenance cannot be rescheduled to start beyond this deadline.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1\CloudSqlInstances::initOnce();
        parent::__construct($data);
    }

    /**
     * The start time of any upcoming scheduled maintenance for this instance.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 1;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * The start time of any upcoming scheduled maintenance for this instance.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool can_defer = 2 [deprecated = true];</code>
     * @return bool
     * @deprecated
     */
    public function getCanDefer()
    {
        @trigger_error('can_defer is deprecated.', E_USER_DEPRECATED);
        return $this->can_defer;
    }

    /**
     * Generated from protobuf field <code>bool can_defer = 2 [deprecated = true];</code>
     * @param bool $var
     * @return $this
     * @deprecated
     */
    public function setCanDefer($var)
    {
        @trigger_error('can_defer is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkBool($var);
        $this->can_defer = $var;

        return $this;
    }

    /**
     * If the scheduled maintenance can be rescheduled.
     *
     * Generated from protobuf field <code>bool can_reschedule = 3;</code>
     * @return bool
     */
    public function getCanReschedule()
    {
        return $this->can_reschedule;
    }

    /**
     * If the scheduled maintenance can be rescheduled.
     *
     * Generated from protobuf field <code>bool can_reschedule = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setCanReschedule($var)
    {
        GPBUtil::checkBool($var);
        $this->can_reschedule = $var;

        return $this;
    }

    /**
     * Maintenance cannot be rescheduled to start beyond this deadline.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Timestamp schedule_deadline_time = 4;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getScheduleDeadlineTime()
    {
        return $this->schedule_deadline_time;
    }

    public function hasScheduleDeadlineTime()
    {
        return isset($this->schedule_deadline_time);
    }

    public function clearScheduleDeadlineTime()
    {
        unset($this->schedule_deadline_time);
    }

    /**
     * Maintenance cannot be rescheduled to start beyond this deadline.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Timestamp schedule_deadline_time = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setScheduleDeadlineTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->schedule_deadline_time = $var;

        return $this;
    }

}


