<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/content.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata returned to client when grounding is enabled.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.GroundingMetadata</code>
 */
class GroundingMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Web search queries for the following-up web search.
     *
     * Generated from protobuf field <code>repeated string web_search_queries = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $web_search_queries;
    /**
     * Optional. List of grounding attributions.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.GroundingAttribution grounding_attributions = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $grounding_attributions;
    /**
     * Optional. Google search entry for the following-up web searches.
     *
     * Generated from protobuf field <code>optional .google.cloud.aiplatform.v1.SearchEntryPoint search_entry_point = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $search_entry_point = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $web_search_queries
     *           Optional. Web search queries for the following-up web search.
     *     @type array<\Google\Cloud\AIPlatform\V1\GroundingAttribution>|\Google\Protobuf\Internal\RepeatedField $grounding_attributions
     *           Optional. List of grounding attributions.
     *     @type \Google\Cloud\AIPlatform\V1\SearchEntryPoint $search_entry_point
     *           Optional. Google search entry for the following-up web searches.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Content::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Web search queries for the following-up web search.
     *
     * Generated from protobuf field <code>repeated string web_search_queries = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getWebSearchQueries()
    {
        return $this->web_search_queries;
    }

    /**
     * Optional. Web search queries for the following-up web search.
     *
     * Generated from protobuf field <code>repeated string web_search_queries = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setWebSearchQueries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->web_search_queries = $arr;

        return $this;
    }

    /**
     * Optional. List of grounding attributions.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.GroundingAttribution grounding_attributions = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGroundingAttributions()
    {
        return $this->grounding_attributions;
    }

    /**
     * Optional. List of grounding attributions.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.GroundingAttribution grounding_attributions = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\AIPlatform\V1\GroundingAttribution>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGroundingAttributions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\GroundingAttribution::class);
        $this->grounding_attributions = $arr;

        return $this;
    }

    /**
     * Optional. Google search entry for the following-up web searches.
     *
     * Generated from protobuf field <code>optional .google.cloud.aiplatform.v1.SearchEntryPoint search_entry_point = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\AIPlatform\V1\SearchEntryPoint|null
     */
    public function getSearchEntryPoint()
    {
        return $this->search_entry_point;
    }

    public function hasSearchEntryPoint()
    {
        return isset($this->search_entry_point);
    }

    public function clearSearchEntryPoint()
    {
        unset($this->search_entry_point);
    }

    /**
     * Optional. Google search entry for the following-up web searches.
     *
     * Generated from protobuf field <code>optional .google.cloud.aiplatform.v1.SearchEntryPoint search_entry_point = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\AIPlatform\V1\SearchEntryPoint $var
     * @return $this
     */
    public function setSearchEntryPoint($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\SearchEntryPoint::class);
        $this->search_entry_point = $var;

        return $this;
    }

}

