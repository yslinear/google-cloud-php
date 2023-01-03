<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/datapolicies/v1/datapolicy.proto

namespace Google\Cloud\BigQuery\DataPolicies\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for the ListDataPolicies method.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.datapolicies.v1.ListDataPoliciesRequest</code>
 */
class ListDataPoliciesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Resource name of the project for which to list data policies.
     * Format is `projects/{project_number}/locations/{location_id}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * The maximum number of data policies to return. Must be a value between 1
     * and 1000.
     * If not set, defaults to 50.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    protected $page_size = 0;
    /**
     * The `nextPageToken` value returned from a previous list request, if any. If
     * not set, defaults to an empty string.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    protected $page_token = '';
    /**
     * Filters the data policies by policy tags that they
     * are associated with. Currently filter only supports
     * "policy<span></span>_tag" based filtering and OR based predicates. Sample
     * filter can be "policy<span></span>_tag:
     * `'projects/1/locations/us/taxonomies/2/policyTags/3'`". You may use
     * wildcard such as "policy<span></span>_tag:
     * `'projects/1/locations/us/taxonomies/2/&#42;'`".
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     */
    protected $filter = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Resource name of the project for which to list data policies.
     *           Format is `projects/{project_number}/locations/{location_id}`.
     *     @type int $page_size
     *           The maximum number of data policies to return. Must be a value between 1
     *           and 1000.
     *           If not set, defaults to 50.
     *     @type string $page_token
     *           The `nextPageToken` value returned from a previous list request, if any. If
     *           not set, defaults to an empty string.
     *     @type string $filter
     *           Filters the data policies by policy tags that they
     *           are associated with. Currently filter only supports
     *           "policy<span></span>_tag" based filtering and OR based predicates. Sample
     *           filter can be "policy<span></span>_tag:
     *           `'projects/1/locations/us/taxonomies/2/policyTags/3'`". You may use
     *           wildcard such as "policy<span></span>_tag:
     *           `'projects/1/locations/us/taxonomies/2/&#42;'`".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Datapolicies\V1\Datapolicy::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Resource name of the project for which to list data policies.
     * Format is `projects/{project_number}/locations/{location_id}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Resource name of the project for which to list data policies.
     * Format is `projects/{project_number}/locations/{location_id}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * The maximum number of data policies to return. Must be a value between 1
     * and 1000.
     * If not set, defaults to 50.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of data policies to return. Must be a value between 1
     * and 1000.
     * If not set, defaults to 50.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * The `nextPageToken` value returned from a previous list request, if any. If
     * not set, defaults to an empty string.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * The `nextPageToken` value returned from a previous list request, if any. If
     * not set, defaults to an empty string.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Filters the data policies by policy tags that they
     * are associated with. Currently filter only supports
     * "policy<span></span>_tag" based filtering and OR based predicates. Sample
     * filter can be "policy<span></span>_tag:
     * `'projects/1/locations/us/taxonomies/2/policyTags/3'`". You may use
     * wildcard such as "policy<span></span>_tag:
     * `'projects/1/locations/us/taxonomies/2/&#42;'`".
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Filters the data policies by policy tags that they
     * are associated with. Currently filter only supports
     * "policy<span></span>_tag" based filtering and OR based predicates. Sample
     * filter can be "policy<span></span>_tag:
     * `'projects/1/locations/us/taxonomies/2/policyTags/3'`". You may use
     * wildcard such as "policy<span></span>_tag:
     * `'projects/1/locations/us/taxonomies/2/&#42;'`".
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

}

