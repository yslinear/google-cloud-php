<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/completion_service.proto

namespace Google\Cloud\DiscoveryEngine\V1\CompleteQueryResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Suggestions as search queries.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.CompleteQueryResponse.QuerySuggestion</code>
 */
class QuerySuggestion extends \Google\Protobuf\Internal\Message
{
    /**
     * The suggestion for the query.
     *
     * Generated from protobuf field <code>string suggestion = 1;</code>
     */
    protected $suggestion = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $suggestion
     *           The suggestion for the query.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\CompletionService::initOnce();
        parent::__construct($data);
    }

    /**
     * The suggestion for the query.
     *
     * Generated from protobuf field <code>string suggestion = 1;</code>
     * @return string
     */
    public function getSuggestion()
    {
        return $this->suggestion;
    }

    /**
     * The suggestion for the query.
     *
     * Generated from protobuf field <code>string suggestion = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSuggestion($var)
    {
        GPBUtil::checkString($var, True);
        $this->suggestion = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(QuerySuggestion::class, \Google\Cloud\DiscoveryEngine\V1\CompleteQueryResponse_QuerySuggestion::class);

