<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Deployment job composition.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.DeploymentJobs</code>
 */
class DeploymentJobs extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The deploy Job. This is the deploy job in the phase.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.Job deploy_job = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $deploy_job = null;
    /**
     * Output only. The verify Job. Runs after a deploy if the deploy succeeds.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.Job verify_job = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $verify_job = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Deploy\V1\Job $deploy_job
     *           Output only. The deploy Job. This is the deploy job in the phase.
     *     @type \Google\Cloud\Deploy\V1\Job $verify_job
     *           Output only. The verify Job. Runs after a deploy if the deploy succeeds.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\CloudDeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The deploy Job. This is the deploy job in the phase.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.Job deploy_job = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Deploy\V1\Job|null
     */
    public function getDeployJob()
    {
        return $this->deploy_job;
    }

    public function hasDeployJob()
    {
        return isset($this->deploy_job);
    }

    public function clearDeployJob()
    {
        unset($this->deploy_job);
    }

    /**
     * Output only. The deploy Job. This is the deploy job in the phase.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.Job deploy_job = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Deploy\V1\Job $var
     * @return $this
     */
    public function setDeployJob($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Deploy\V1\Job::class);
        $this->deploy_job = $var;

        return $this;
    }

    /**
     * Output only. The verify Job. Runs after a deploy if the deploy succeeds.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.Job verify_job = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Deploy\V1\Job|null
     */
    public function getVerifyJob()
    {
        return $this->verify_job;
    }

    public function hasVerifyJob()
    {
        return isset($this->verify_job);
    }

    public function clearVerifyJob()
    {
        unset($this->verify_job);
    }

    /**
     * Output only. The verify Job. Runs after a deploy if the deploy succeeds.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.Job verify_job = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Deploy\V1\Job $var
     * @return $this
     */
    public function setVerifyJob($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Deploy\V1\Job::class);
        $this->verify_job = $var;

        return $this;
    }

}

