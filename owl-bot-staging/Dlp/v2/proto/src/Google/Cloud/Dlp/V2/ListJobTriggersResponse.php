<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for ListJobTriggers.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.ListJobTriggersResponse</code>
 */
class ListJobTriggersResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * List of triggeredJobs, up to page_size in ListJobTriggersRequest.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.JobTrigger job_triggers = 1;</code>
     */
    private $job_triggers;
    /**
     * If the next page is available then the next page token to be used
     * in following ListJobTriggers request.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Dlp\V2\JobTrigger>|\Google\Protobuf\Internal\RepeatedField $job_triggers
     *           List of triggeredJobs, up to page_size in ListJobTriggersRequest.
     *     @type string $next_page_token
     *           If the next page is available then the next page token to be used
     *           in following ListJobTriggers request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * List of triggeredJobs, up to page_size in ListJobTriggersRequest.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.JobTrigger job_triggers = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getJobTriggers()
    {
        return $this->job_triggers;
    }

    /**
     * List of triggeredJobs, up to page_size in ListJobTriggersRequest.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.JobTrigger job_triggers = 1;</code>
     * @param array<\Google\Cloud\Dlp\V2\JobTrigger>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setJobTriggers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dlp\V2\JobTrigger::class);
        $this->job_triggers = $arr;

        return $this;
    }

    /**
     * If the next page is available then the next page token to be used
     * in following ListJobTriggers request.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * If the next page is available then the next page token to be used
     * in following ListJobTriggers request.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

