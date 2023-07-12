<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v1/cloudbuild.proto

namespace Google\Cloud\Build\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ApprovalResult describes the decision and associated metadata of a manual
 * approval of a build.
 *
 * Generated from protobuf message <code>google.devtools.cloudbuild.v1.ApprovalResult</code>
 */
class ApprovalResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Email of the user that called the ApproveBuild API to
     * approve or reject a build at the time that the API was called.
     *
     * Generated from protobuf field <code>string approver_account = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $approver_account = '';
    /**
     * Output only. The time when the approval decision was made.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp approval_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $approval_time = null;
    /**
     * Required. The decision of this manual approval.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.ApprovalResult.Decision decision = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $decision = 0;
    /**
     * Optional. An optional comment for this manual approval result.
     *
     * Generated from protobuf field <code>string comment = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $comment = '';
    /**
     * Optional. An optional URL tied to this manual approval result. This field
     * is essentially the same as comment, except that it will be rendered by the
     * UI differently. An example use case is a link to an external job that
     * approved this Build.
     *
     * Generated from protobuf field <code>string url = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $url = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $approver_account
     *           Output only. Email of the user that called the ApproveBuild API to
     *           approve or reject a build at the time that the API was called.
     *     @type \Google\Protobuf\Timestamp $approval_time
     *           Output only. The time when the approval decision was made.
     *     @type int $decision
     *           Required. The decision of this manual approval.
     *     @type string $comment
     *           Optional. An optional comment for this manual approval result.
     *     @type string $url
     *           Optional. An optional URL tied to this manual approval result. This field
     *           is essentially the same as comment, except that it will be rendered by the
     *           UI differently. An example use case is a link to an external job that
     *           approved this Build.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Cloudbuild\V1\Cloudbuild::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Email of the user that called the ApproveBuild API to
     * approve or reject a build at the time that the API was called.
     *
     * Generated from protobuf field <code>string approver_account = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getApproverAccount()
    {
        return $this->approver_account;
    }

    /**
     * Output only. Email of the user that called the ApproveBuild API to
     * approve or reject a build at the time that the API was called.
     *
     * Generated from protobuf field <code>string approver_account = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setApproverAccount($var)
    {
        GPBUtil::checkString($var, True);
        $this->approver_account = $var;

        return $this;
    }

    /**
     * Output only. The time when the approval decision was made.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp approval_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getApprovalTime()
    {
        return $this->approval_time;
    }

    public function hasApprovalTime()
    {
        return isset($this->approval_time);
    }

    public function clearApprovalTime()
    {
        unset($this->approval_time);
    }

    /**
     * Output only. The time when the approval decision was made.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp approval_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setApprovalTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->approval_time = $var;

        return $this;
    }

    /**
     * Required. The decision of this manual approval.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.ApprovalResult.Decision decision = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getDecision()
    {
        return $this->decision;
    }

    /**
     * Required. The decision of this manual approval.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.ApprovalResult.Decision decision = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setDecision($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Build\V1\ApprovalResult\Decision::class);
        $this->decision = $var;

        return $this;
    }

    /**
     * Optional. An optional comment for this manual approval result.
     *
     * Generated from protobuf field <code>string comment = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Optional. An optional comment for this manual approval result.
     *
     * Generated from protobuf field <code>string comment = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setComment($var)
    {
        GPBUtil::checkString($var, True);
        $this->comment = $var;

        return $this;
    }

    /**
     * Optional. An optional URL tied to this manual approval result. This field
     * is essentially the same as comment, except that it will be rendered by the
     * UI differently. An example use case is a link to an external job that
     * approved this Build.
     *
     * Generated from protobuf field <code>string url = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Optional. An optional URL tied to this manual approval result. This field
     * is essentially the same as comment, except that it will be rendered by the
     * UI differently. An example use case is a link to an external job that
     * approved this Build.
     *
     * Generated from protobuf field <code>string url = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->url = $var;

        return $this;
    }

}

