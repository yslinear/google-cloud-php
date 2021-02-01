<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/tasks/v2beta2/cloudtasks.proto

namespace Google\Cloud\Tasks\V2beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [ListQueues][google.cloud.tasks.v2beta2.CloudTasks.ListQueues].
 *
 * Generated from protobuf message <code>google.cloud.tasks.v2beta2.ListQueuesRequest</code>
 */
class ListQueuesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The location name.
     * For example: `projects/PROJECT_ID/locations/LOCATION_ID`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * `filter` can be used to specify a subset of queues. Any [Queue][google.cloud.tasks.v2beta2.Queue]
     * field can be used as a filter and several operators as supported.
     * For example: `<=, <, >=, >, !=, =, :`. The filter syntax is the same as
     * described in
     * [Stackdriver's Advanced Logs
     * Filters](https://cloud.google.com/logging/docs/view/advanced_filters).
     * Sample filter "app_engine_http_target: *".
     * Note that using filters might cause fewer queues than the
     * requested_page size to be returned.
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     */
    private $filter = '';
    /**
     * Requested page size.
     * The maximum page size is 9800. If unspecified, the page size will
     * be the maximum. Fewer queues than requested might be returned,
     * even if more queues exist; use the
     * [next_page_token][google.cloud.tasks.v2beta2.ListQueuesResponse.next_page_token] in the
     * response to determine if more queues exist.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     */
    private $page_size = 0;
    /**
     * A token identifying the page of results to return.
     * To request the first page results, page_token must be empty. To
     * request the next page of results, page_token must be the value of
     * [next_page_token][google.cloud.tasks.v2beta2.ListQueuesResponse.next_page_token] returned
     * from the previous call to [ListQueues][google.cloud.tasks.v2beta2.CloudTasks.ListQueues]
     * method. It is an error to switch the value of the
     * [filter][google.cloud.tasks.v2beta2.ListQueuesRequest.filter] while iterating through pages.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     */
    private $page_token = '';
    /**
     * Optional. Read mask is used for a more granular control over what the API returns.
     * If the mask is not present all fields will be returned except
     * [Queue.stats]. [Queue.stats] will be returned only if it was  explicitly
     * specified in the mask.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask read_mask = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $read_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The location name.
     *           For example: `projects/PROJECT_ID/locations/LOCATION_ID`
     *     @type string $filter
     *           `filter` can be used to specify a subset of queues. Any [Queue][google.cloud.tasks.v2beta2.Queue]
     *           field can be used as a filter and several operators as supported.
     *           For example: `<=, <, >=, >, !=, =, :`. The filter syntax is the same as
     *           described in
     *           [Stackdriver's Advanced Logs
     *           Filters](https://cloud.google.com/logging/docs/view/advanced_filters).
     *           Sample filter "app_engine_http_target: *".
     *           Note that using filters might cause fewer queues than the
     *           requested_page size to be returned.
     *     @type int $page_size
     *           Requested page size.
     *           The maximum page size is 9800. If unspecified, the page size will
     *           be the maximum. Fewer queues than requested might be returned,
     *           even if more queues exist; use the
     *           [next_page_token][google.cloud.tasks.v2beta2.ListQueuesResponse.next_page_token] in the
     *           response to determine if more queues exist.
     *     @type string $page_token
     *           A token identifying the page of results to return.
     *           To request the first page results, page_token must be empty. To
     *           request the next page of results, page_token must be the value of
     *           [next_page_token][google.cloud.tasks.v2beta2.ListQueuesResponse.next_page_token] returned
     *           from the previous call to [ListQueues][google.cloud.tasks.v2beta2.CloudTasks.ListQueues]
     *           method. It is an error to switch the value of the
     *           [filter][google.cloud.tasks.v2beta2.ListQueuesRequest.filter] while iterating through pages.
     *     @type \Google\Protobuf\FieldMask $read_mask
     *           Optional. Read mask is used for a more granular control over what the API returns.
     *           If the mask is not present all fields will be returned except
     *           [Queue.stats]. [Queue.stats] will be returned only if it was  explicitly
     *           specified in the mask.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Tasks\V2Beta2\Cloudtasks::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The location name.
     * For example: `projects/PROJECT_ID/locations/LOCATION_ID`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The location name.
     * For example: `projects/PROJECT_ID/locations/LOCATION_ID`
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
     * `filter` can be used to specify a subset of queues. Any [Queue][google.cloud.tasks.v2beta2.Queue]
     * field can be used as a filter and several operators as supported.
     * For example: `<=, <, >=, >, !=, =, :`. The filter syntax is the same as
     * described in
     * [Stackdriver's Advanced Logs
     * Filters](https://cloud.google.com/logging/docs/view/advanced_filters).
     * Sample filter "app_engine_http_target: *".
     * Note that using filters might cause fewer queues than the
     * requested_page size to be returned.
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * `filter` can be used to specify a subset of queues. Any [Queue][google.cloud.tasks.v2beta2.Queue]
     * field can be used as a filter and several operators as supported.
     * For example: `<=, <, >=, >, !=, =, :`. The filter syntax is the same as
     * described in
     * [Stackdriver's Advanced Logs
     * Filters](https://cloud.google.com/logging/docs/view/advanced_filters).
     * Sample filter "app_engine_http_target: *".
     * Note that using filters might cause fewer queues than the
     * requested_page size to be returned.
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * Requested page size.
     * The maximum page size is 9800. If unspecified, the page size will
     * be the maximum. Fewer queues than requested might be returned,
     * even if more queues exist; use the
     * [next_page_token][google.cloud.tasks.v2beta2.ListQueuesResponse.next_page_token] in the
     * response to determine if more queues exist.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Requested page size.
     * The maximum page size is 9800. If unspecified, the page size will
     * be the maximum. Fewer queues than requested might be returned,
     * even if more queues exist; use the
     * [next_page_token][google.cloud.tasks.v2beta2.ListQueuesResponse.next_page_token] in the
     * response to determine if more queues exist.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
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
     * A token identifying the page of results to return.
     * To request the first page results, page_token must be empty. To
     * request the next page of results, page_token must be the value of
     * [next_page_token][google.cloud.tasks.v2beta2.ListQueuesResponse.next_page_token] returned
     * from the previous call to [ListQueues][google.cloud.tasks.v2beta2.CloudTasks.ListQueues]
     * method. It is an error to switch the value of the
     * [filter][google.cloud.tasks.v2beta2.ListQueuesRequest.filter] while iterating through pages.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * A token identifying the page of results to return.
     * To request the first page results, page_token must be empty. To
     * request the next page of results, page_token must be the value of
     * [next_page_token][google.cloud.tasks.v2beta2.ListQueuesResponse.next_page_token] returned
     * from the previous call to [ListQueues][google.cloud.tasks.v2beta2.CloudTasks.ListQueues]
     * method. It is an error to switch the value of the
     * [filter][google.cloud.tasks.v2beta2.ListQueuesRequest.filter] while iterating through pages.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
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
     * Optional. Read mask is used for a more granular control over what the API returns.
     * If the mask is not present all fields will be returned except
     * [Queue.stats]. [Queue.stats] will be returned only if it was  explicitly
     * specified in the mask.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask read_mask = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\FieldMask
     */
    public function getReadMask()
    {
        return isset($this->read_mask) ? $this->read_mask : null;
    }

    public function hasReadMask()
    {
        return isset($this->read_mask);
    }

    public function clearReadMask()
    {
        unset($this->read_mask);
    }

    /**
     * Optional. Read mask is used for a more granular control over what the API returns.
     * If the mask is not present all fields will be returned except
     * [Queue.stats]. [Queue.stats] will be returned only if it was  explicitly
     * specified in the mask.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask read_mask = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setReadMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->read_mask = $var;

        return $this;
    }

}

