<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/search_service.proto

namespace Google\Cloud\DiscoveryEngine\V1beta\SearchResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Summary of the top N search result specified by the summary spec.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1beta.SearchResponse.Summary</code>
 */
class Summary extends \Google\Protobuf\Internal\Message
{
    /**
     * The summary content.
     *
     * Generated from protobuf field <code>string summary_text = 1;</code>
     */
    protected $summary_text = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $summary_text
     *           The summary content.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1Beta\SearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * The summary content.
     *
     * Generated from protobuf field <code>string summary_text = 1;</code>
     * @return string
     */
    public function getSummaryText()
    {
        return $this->summary_text;
    }

    /**
     * The summary content.
     *
     * Generated from protobuf field <code>string summary_text = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSummaryText($var)
    {
        GPBUtil::checkString($var, True);
        $this->summary_text = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Summary::class, \Google\Cloud\DiscoveryEngine\V1beta\SearchResponse_Summary::class);

