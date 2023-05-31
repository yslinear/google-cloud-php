<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * RetryJobRequest is the request object used by `RetryJob`.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.RetryJobRequest</code>
 */
class RetryJobRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the Rollout. Format is
     * projects/{project}/locations/{location}/deliveryPipelines/{deliveryPipeline}/
     * releases/{release}/rollouts/{rollout}.
     *
     * Generated from protobuf field <code>string rollout = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $rollout = '';
    /**
     * Required. The phase ID the Job to retry belongs to.
     *
     * Generated from protobuf field <code>string phase_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $phase_id = '';
    /**
     * Required. The job ID for the Job to retry.
     *
     * Generated from protobuf field <code>string job_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $job_id = '';

    /**
     * @param string $rollout Required. Name of the Rollout. Format is
     *                        projects/{project}/locations/{location}/deliveryPipelines/{deliveryPipeline}/
     *                        releases/{release}/rollouts/{rollout}. Please see
     *                        {@see CloudDeployClient::rolloutName()} for help formatting this field.
     * @param string $phaseId Required. The phase ID the Job to retry belongs to.
     * @param string $jobId   Required. The job ID for the Job to retry.
     *
     * @return \Google\Cloud\Deploy\V1\RetryJobRequest
     *
     * @experimental
     */
    public static function build(string $rollout, string $phaseId, string $jobId): self
    {
        return (new self())
            ->setRollout($rollout)
            ->setPhaseId($phaseId)
            ->setJobId($jobId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $rollout
     *           Required. Name of the Rollout. Format is
     *           projects/{project}/locations/{location}/deliveryPipelines/{deliveryPipeline}/
     *           releases/{release}/rollouts/{rollout}.
     *     @type string $phase_id
     *           Required. The phase ID the Job to retry belongs to.
     *     @type string $job_id
     *           Required. The job ID for the Job to retry.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\CloudDeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the Rollout. Format is
     * projects/{project}/locations/{location}/deliveryPipelines/{deliveryPipeline}/
     * releases/{release}/rollouts/{rollout}.
     *
     * Generated from protobuf field <code>string rollout = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getRollout()
    {
        return $this->rollout;
    }

    /**
     * Required. Name of the Rollout. Format is
     * projects/{project}/locations/{location}/deliveryPipelines/{deliveryPipeline}/
     * releases/{release}/rollouts/{rollout}.
     *
     * Generated from protobuf field <code>string rollout = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setRollout($var)
    {
        GPBUtil::checkString($var, True);
        $this->rollout = $var;

        return $this;
    }

    /**
     * Required. The phase ID the Job to retry belongs to.
     *
     * Generated from protobuf field <code>string phase_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getPhaseId()
    {
        return $this->phase_id;
    }

    /**
     * Required. The phase ID the Job to retry belongs to.
     *
     * Generated from protobuf field <code>string phase_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setPhaseId($var)
    {
        GPBUtil::checkString($var, True);
        $this->phase_id = $var;

        return $this;
    }

    /**
     * Required. The job ID for the Job to retry.
     *
     * Generated from protobuf field <code>string job_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getJobId()
    {
        return $this->job_id;
    }

    /**
     * Required. The job ID for the Job to retry.
     *
     * Generated from protobuf field <code>string job_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setJobId($var)
    {
        GPBUtil::checkString($var, True);
        $this->job_id = $var;

        return $this;
    }

}

