<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/conversation_model.proto

namespace Google\Cloud\Dialogflow\V2\EvaluationConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Smart compose specific configuration for evaluation job.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.EvaluationConfig.SmartComposeConfig</code>
 */
class SmartComposeConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * The allowlist document resource name.
     * Format: `projects/<Project ID>/knowledgeBases/<Knowledge Base
     * ID>/documents/<Document ID>`. Only used for smart compose model.
     *
     * Generated from protobuf field <code>string allowlist_document = 1 [(.google.api.resource_reference) = {</code>
     */
    protected $allowlist_document = '';
    /**
     * Required. The model to be evaluated can return multiple results with
     * confidence score on each query. These results will be sorted by the
     * descending order of the scores and we only keep the first
     * max_result_count results as the final results to evaluate.
     *
     * Generated from protobuf field <code>int32 max_result_count = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $max_result_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $allowlist_document
     *           The allowlist document resource name.
     *           Format: `projects/<Project ID>/knowledgeBases/<Knowledge Base
     *           ID>/documents/<Document ID>`. Only used for smart compose model.
     *     @type int $max_result_count
     *           Required. The model to be evaluated can return multiple results with
     *           confidence score on each query. These results will be sorted by the
     *           descending order of the scores and we only keep the first
     *           max_result_count results as the final results to evaluate.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\ConversationModel::initOnce();
        parent::__construct($data);
    }

    /**
     * The allowlist document resource name.
     * Format: `projects/<Project ID>/knowledgeBases/<Knowledge Base
     * ID>/documents/<Document ID>`. Only used for smart compose model.
     *
     * Generated from protobuf field <code>string allowlist_document = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getAllowlistDocument()
    {
        return $this->allowlist_document;
    }

    /**
     * The allowlist document resource name.
     * Format: `projects/<Project ID>/knowledgeBases/<Knowledge Base
     * ID>/documents/<Document ID>`. Only used for smart compose model.
     *
     * Generated from protobuf field <code>string allowlist_document = 1 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setAllowlistDocument($var)
    {
        GPBUtil::checkString($var, True);
        $this->allowlist_document = $var;

        return $this;
    }

    /**
     * Required. The model to be evaluated can return multiple results with
     * confidence score on each query. These results will be sorted by the
     * descending order of the scores and we only keep the first
     * max_result_count results as the final results to evaluate.
     *
     * Generated from protobuf field <code>int32 max_result_count = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getMaxResultCount()
    {
        return $this->max_result_count;
    }

    /**
     * Required. The model to be evaluated can return multiple results with
     * confidence score on each query. These results will be sorted by the
     * descending order of the scores and we only keep the first
     * max_result_count results as the final results to evaluate.
     *
     * Generated from protobuf field <code>int32 max_result_count = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setMaxResultCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_result_count = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SmartComposeConfig::class, \Google\Cloud\Dialogflow\V2\EvaluationConfig_SmartComposeConfig::class);

