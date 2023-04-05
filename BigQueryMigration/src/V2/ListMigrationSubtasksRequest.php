<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/migration/v2/migration_service.proto

namespace Google\Cloud\BigQuery\Migration\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request to list previously created migration subtasks.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.migration.v2.ListMigrationSubtasksRequest</code>
 */
class ListMigrationSubtasksRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The migration task of the subtasks to list.
     * Example: `projects/123/locations/us/workflows/1234`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Optional. The list of fields to be retrieved.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask read_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $read_mask = null;
    /**
     * Optional. The maximum number of migration tasks to return. The service may
     * return fewer than this number.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_size = 0;
    /**
     * Optional. A page token, received from previous `ListMigrationSubtasks`
     * call. Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to `ListMigrationSubtasks`
     * must match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_token = '';
    /**
     * Optional. The filter to apply. This can be used to get the subtasks of a
     * specific tasks in a workflow, e.g. `migration_task = "ab012"` where
     * `"ab012"` is the task ID (not the name in the named map).
     *
     * Generated from protobuf field <code>string filter = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $filter = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The migration task of the subtasks to list.
     *           Example: `projects/123/locations/us/workflows/1234`
     *     @type \Google\Protobuf\FieldMask $read_mask
     *           Optional. The list of fields to be retrieved.
     *     @type int $page_size
     *           Optional. The maximum number of migration tasks to return. The service may
     *           return fewer than this number.
     *     @type string $page_token
     *           Optional. A page token, received from previous `ListMigrationSubtasks`
     *           call. Provide this to retrieve the subsequent page.
     *           When paginating, all other parameters provided to `ListMigrationSubtasks`
     *           must match the call that provided the page token.
     *     @type string $filter
     *           Optional. The filter to apply. This can be used to get the subtasks of a
     *           specific tasks in a workflow, e.g. `migration_task = "ab012"` where
     *           `"ab012"` is the task ID (not the name in the named map).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Migration\V2\MigrationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The migration task of the subtasks to list.
     * Example: `projects/123/locations/us/workflows/1234`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The migration task of the subtasks to list.
     * Example: `projects/123/locations/us/workflows/1234`
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
     * Optional. The list of fields to be retrieved.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask read_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getReadMask()
    {
        return $this->read_mask;
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
     * Optional. The list of fields to be retrieved.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask read_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setReadMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->read_mask = $var;

        return $this;
    }

    /**
     * Optional. The maximum number of migration tasks to return. The service may
     * return fewer than this number.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. The maximum number of migration tasks to return. The service may
     * return fewer than this number.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. A page token, received from previous `ListMigrationSubtasks`
     * call. Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to `ListMigrationSubtasks`
     * must match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. A page token, received from previous `ListMigrationSubtasks`
     * call. Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to `ListMigrationSubtasks`
     * must match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. The filter to apply. This can be used to get the subtasks of a
     * specific tasks in a workflow, e.g. `migration_task = "ab012"` where
     * `"ab012"` is the task ID (not the name in the named map).
     *
     * Generated from protobuf field <code>string filter = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Optional. The filter to apply. This can be used to get the subtasks of a
     * specific tasks in a workflow, e.g. `migration_task = "ab012"` where
     * `"ab012"` is the task ID (not the name in the named map).
     *
     * Generated from protobuf field <code>string filter = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
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

