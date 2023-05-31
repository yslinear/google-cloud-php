<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/conversation.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response message for
 * [Conversations.GenerateStatelessSummary][google.cloud.dialogflow.v2.Conversations.GenerateStatelessSummary].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.GenerateStatelessSummaryResponse</code>
 */
class GenerateStatelessSummaryResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated summary.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.GenerateStatelessSummaryResponse.Summary summary = 1;</code>
     */
    protected $summary = null;
    /**
     * The name of the latest conversation message used as context for
     * compiling suggestion. The format is specific to the user and the names of
     * the messages provided.
     *
     * Generated from protobuf field <code>string latest_message = 2 [(.google.api.resource_reference) = {</code>
     */
    protected $latest_message = '';
    /**
     * Number of messages prior to and including
     * [last_conversation_message][] used to compile the suggestion. It may be
     * smaller than the [GenerateStatelessSummaryRequest.context_size][] field in
     * the request if there weren't that many messages in the conversation.
     *
     * Generated from protobuf field <code>int32 context_size = 3;</code>
     */
    protected $context_size = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dialogflow\V2\GenerateStatelessSummaryResponse\Summary $summary
     *           Generated summary.
     *     @type string $latest_message
     *           The name of the latest conversation message used as context for
     *           compiling suggestion. The format is specific to the user and the names of
     *           the messages provided.
     *     @type int $context_size
     *           Number of messages prior to and including
     *           [last_conversation_message][] used to compile the suggestion. It may be
     *           smaller than the [GenerateStatelessSummaryRequest.context_size][] field in
     *           the request if there weren't that many messages in the conversation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Conversation::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated summary.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.GenerateStatelessSummaryResponse.Summary summary = 1;</code>
     * @return \Google\Cloud\Dialogflow\V2\GenerateStatelessSummaryResponse\Summary|null
     */
    public function getSummary()
    {
        return $this->summary;
    }

    public function hasSummary()
    {
        return isset($this->summary);
    }

    public function clearSummary()
    {
        unset($this->summary);
    }

    /**
     * Generated summary.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.GenerateStatelessSummaryResponse.Summary summary = 1;</code>
     * @param \Google\Cloud\Dialogflow\V2\GenerateStatelessSummaryResponse\Summary $var
     * @return $this
     */
    public function setSummary($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\GenerateStatelessSummaryResponse\Summary::class);
        $this->summary = $var;

        return $this;
    }

    /**
     * The name of the latest conversation message used as context for
     * compiling suggestion. The format is specific to the user and the names of
     * the messages provided.
     *
     * Generated from protobuf field <code>string latest_message = 2 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getLatestMessage()
    {
        return $this->latest_message;
    }

    /**
     * The name of the latest conversation message used as context for
     * compiling suggestion. The format is specific to the user and the names of
     * the messages provided.
     *
     * Generated from protobuf field <code>string latest_message = 2 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setLatestMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->latest_message = $var;

        return $this;
    }

    /**
     * Number of messages prior to and including
     * [last_conversation_message][] used to compile the suggestion. It may be
     * smaller than the [GenerateStatelessSummaryRequest.context_size][] field in
     * the request if there weren't that many messages in the conversation.
     *
     * Generated from protobuf field <code>int32 context_size = 3;</code>
     * @return int
     */
    public function getContextSize()
    {
        return $this->context_size;
    }

    /**
     * Number of messages prior to and including
     * [last_conversation_message][] used to compile the suggestion. It may be
     * smaller than the [GenerateStatelessSummaryRequest.context_size][] field in
     * the request if there weren't that many messages in the conversation.
     *
     * Generated from protobuf field <code>int32 context_size = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setContextSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->context_size = $var;

        return $this;
    }

}

