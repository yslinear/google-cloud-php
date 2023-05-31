<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/search_service.proto

namespace Google\Cloud\DiscoveryEngine\V1\SearchRequest\ContentSearchSpec;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The specification that configs the snippet in the search results.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.SearchRequest.ContentSearchSpec.SnippetSpec</code>
 */
class SnippetSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Max number of snippets returned in each search result.
     * If the matching snippets is less than the max_snippet_count, return all
     * of the snippets; otherwise, return the max_snippet_count.
     * At most 5 snippets will be returned for each SearchResult.
     *
     * Generated from protobuf field <code>int32 max_snippet_count = 1;</code>
     */
    protected $max_snippet_count = 0;
    /**
     * if true, only snippet reference is returned.
     *
     * Generated from protobuf field <code>bool reference_only = 2;</code>
     */
    protected $reference_only = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $max_snippet_count
     *           Max number of snippets returned in each search result.
     *           If the matching snippets is less than the max_snippet_count, return all
     *           of the snippets; otherwise, return the max_snippet_count.
     *           At most 5 snippets will be returned for each SearchResult.
     *     @type bool $reference_only
     *           if true, only snippet reference is returned.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\SearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * Max number of snippets returned in each search result.
     * If the matching snippets is less than the max_snippet_count, return all
     * of the snippets; otherwise, return the max_snippet_count.
     * At most 5 snippets will be returned for each SearchResult.
     *
     * Generated from protobuf field <code>int32 max_snippet_count = 1;</code>
     * @return int
     */
    public function getMaxSnippetCount()
    {
        return $this->max_snippet_count;
    }

    /**
     * Max number of snippets returned in each search result.
     * If the matching snippets is less than the max_snippet_count, return all
     * of the snippets; otherwise, return the max_snippet_count.
     * At most 5 snippets will be returned for each SearchResult.
     *
     * Generated from protobuf field <code>int32 max_snippet_count = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxSnippetCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_snippet_count = $var;

        return $this;
    }

    /**
     * if true, only snippet reference is returned.
     *
     * Generated from protobuf field <code>bool reference_only = 2;</code>
     * @return bool
     */
    public function getReferenceOnly()
    {
        return $this->reference_only;
    }

    /**
     * if true, only snippet reference is returned.
     *
     * Generated from protobuf field <code>bool reference_only = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setReferenceOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->reference_only = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SnippetSpec::class, \Google\Cloud\DiscoveryEngine\V1\SearchRequest_ContentSearchSpec_SnippetSpec::class);

