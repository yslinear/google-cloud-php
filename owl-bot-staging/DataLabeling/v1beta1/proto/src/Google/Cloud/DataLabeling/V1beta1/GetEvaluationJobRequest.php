<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datalabeling/v1beta1/data_labeling_service.proto

namespace Google\Cloud\DataLabeling\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for GetEvaluationJob.
 *
 * Generated from protobuf message <code>google.cloud.datalabeling.v1beta1.GetEvaluationJobRequest</code>
 */
class GetEvaluationJobRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the evaluation job. Format:
     * "projects/<var>{project_id}</var>/evaluationJobs/<var>{evaluation_job_id}</var>"
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. Name of the evaluation job. Format:
     *
     *                     "projects/<var>{project_id}</var>/evaluationJobs/<var>{evaluation_job_id}</var>"
     *                     Please see {@see DataLabelingServiceClient::evaluationJobName()} for help formatting this field.
     *
     * @return \Google\Cloud\DataLabeling\V1beta1\GetEvaluationJobRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Name of the evaluation job. Format:
     *           "projects/<var>{project_id}</var>/evaluationJobs/<var>{evaluation_job_id}</var>"
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datalabeling\V1Beta1\DataLabelingService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the evaluation job. Format:
     * "projects/<var>{project_id}</var>/evaluationJobs/<var>{evaluation_job_id}</var>"
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Name of the evaluation job. Format:
     * "projects/<var>{project_id}</var>/evaluationJobs/<var>{evaluation_job_id}</var>"
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

