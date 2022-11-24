<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * VerifyJobRun contains information specific to a verify `JobRun`.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.VerifyJobRun</code>
 */
class VerifyJobRun extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the Cloud Build `Build` object that is used to verify.
     * Format is projects/{project}/locations/{location}/builds/{build}.
     *
     * Generated from protobuf field <code>string build = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    private $build = '';
    /**
     * Output only. URI of a directory containing the verify artifacts. This contains the
     * Skaffold event log.
     *
     * Generated from protobuf field <code>string artifact_uri = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $artifact_uri = '';
    /**
     * Output only. File path of the Skaffold event log relative to the artifact URI.
     *
     * Generated from protobuf field <code>string event_log_path = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $event_log_path = '';
    /**
     * Output only. The reason the verify failed. This will always be unspecified while the
     * verify is in progress or if it succeeded.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.VerifyJobRun.FailureCause failure_cause = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $failure_cause = 0;
    /**
     * Output only. Additional information about the verify failure, if available.
     *
     * Generated from protobuf field <code>string failure_message = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $failure_message = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $build
     *           Output only. The resource name of the Cloud Build `Build` object that is used to verify.
     *           Format is projects/{project}/locations/{location}/builds/{build}.
     *     @type string $artifact_uri
     *           Output only. URI of a directory containing the verify artifacts. This contains the
     *           Skaffold event log.
     *     @type string $event_log_path
     *           Output only. File path of the Skaffold event log relative to the artifact URI.
     *     @type int $failure_cause
     *           Output only. The reason the verify failed. This will always be unspecified while the
     *           verify is in progress or if it succeeded.
     *     @type string $failure_message
     *           Output only. Additional information about the verify failure, if available.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\CloudDeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the Cloud Build `Build` object that is used to verify.
     * Format is projects/{project}/locations/{location}/builds/{build}.
     *
     * Generated from protobuf field <code>string build = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getBuild()
    {
        return $this->build;
    }

    /**
     * Output only. The resource name of the Cloud Build `Build` object that is used to verify.
     * Format is projects/{project}/locations/{location}/builds/{build}.
     *
     * Generated from protobuf field <code>string build = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setBuild($var)
    {
        GPBUtil::checkString($var, True);
        $this->build = $var;

        return $this;
    }

    /**
     * Output only. URI of a directory containing the verify artifacts. This contains the
     * Skaffold event log.
     *
     * Generated from protobuf field <code>string artifact_uri = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getArtifactUri()
    {
        return $this->artifact_uri;
    }

    /**
     * Output only. URI of a directory containing the verify artifacts. This contains the
     * Skaffold event log.
     *
     * Generated from protobuf field <code>string artifact_uri = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setArtifactUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->artifact_uri = $var;

        return $this;
    }

    /**
     * Output only. File path of the Skaffold event log relative to the artifact URI.
     *
     * Generated from protobuf field <code>string event_log_path = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getEventLogPath()
    {
        return $this->event_log_path;
    }

    /**
     * Output only. File path of the Skaffold event log relative to the artifact URI.
     *
     * Generated from protobuf field <code>string event_log_path = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setEventLogPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->event_log_path = $var;

        return $this;
    }

    /**
     * Output only. The reason the verify failed. This will always be unspecified while the
     * verify is in progress or if it succeeded.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.VerifyJobRun.FailureCause failure_cause = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getFailureCause()
    {
        return $this->failure_cause;
    }

    /**
     * Output only. The reason the verify failed. This will always be unspecified while the
     * verify is in progress or if it succeeded.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.VerifyJobRun.FailureCause failure_cause = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setFailureCause($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Deploy\V1\VerifyJobRun\FailureCause::class);
        $this->failure_cause = $var;

        return $this;
    }

    /**
     * Output only. Additional information about the verify failure, if available.
     *
     * Generated from protobuf field <code>string failure_message = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getFailureMessage()
    {
        return $this->failure_message;
    }

    /**
     * Output only. Additional information about the verify failure, if available.
     *
     * Generated from protobuf field <code>string failure_message = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setFailureMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->failure_message = $var;

        return $this;
    }

}

