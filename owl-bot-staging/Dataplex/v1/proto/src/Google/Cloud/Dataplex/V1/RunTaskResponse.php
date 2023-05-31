<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/service.proto

namespace Google\Cloud\Dataplex\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.dataplex.v1.RunTaskResponse</code>
 */
class RunTaskResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Jobs created by RunTask API.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Job job = 1;</code>
     */
    protected $job = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dataplex\V1\Job $job
     *           Jobs created by RunTask API.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Jobs created by RunTask API.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Job job = 1;</code>
     * @return \Google\Cloud\Dataplex\V1\Job|null
     */
    public function getJob()
    {
        return $this->job;
    }

    public function hasJob()
    {
        return isset($this->job);
    }

    public function clearJob()
    {
        unset($this->job);
    }

    /**
     * Jobs created by RunTask API.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Job job = 1;</code>
     * @param \Google\Cloud\Dataplex\V1\Job $var
     * @return $this
     */
    public function setJob($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\Job::class);
        $this->job = $var;

        return $this;
    }

}

