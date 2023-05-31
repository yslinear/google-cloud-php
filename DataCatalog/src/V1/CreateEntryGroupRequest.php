<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/datacatalog.proto

namespace Google\Cloud\DataCatalog\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [CreateEntryGroup][google.cloud.datacatalog.v1.DataCatalog.CreateEntryGroup].
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.CreateEntryGroupRequest</code>
 */
class CreateEntryGroupRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The names of the project and location that the new entry group
     * belongs to.
     * Note: The entry group itself and its child resources might not be
     * stored in the location specified in its name.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The ID of the entry group to create.
     * The ID must contain only letters (a-z, A-Z), numbers (0-9),
     * underscores (_), and must start with a letter or underscore.
     * The maximum size is 64 bytes when encoded in UTF-8.
     *
     * Generated from protobuf field <code>string entry_group_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $entry_group_id = '';
    /**
     * The entry group to create. Defaults to empty.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.EntryGroup entry_group = 2;</code>
     */
    private $entry_group = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The names of the project and location that the new entry group
     *           belongs to.
     *           Note: The entry group itself and its child resources might not be
     *           stored in the location specified in its name.
     *     @type string $entry_group_id
     *           Required. The ID of the entry group to create.
     *           The ID must contain only letters (a-z, A-Z), numbers (0-9),
     *           underscores (_), and must start with a letter or underscore.
     *           The maximum size is 64 bytes when encoded in UTF-8.
     *     @type \Google\Cloud\DataCatalog\V1\EntryGroup $entry_group
     *           The entry group to create. Defaults to empty.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Datacatalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The names of the project and location that the new entry group
     * belongs to.
     * Note: The entry group itself and its child resources might not be
     * stored in the location specified in its name.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The names of the project and location that the new entry group
     * belongs to.
     * Note: The entry group itself and its child resources might not be
     * stored in the location specified in its name.
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
     * Required. The ID of the entry group to create.
     * The ID must contain only letters (a-z, A-Z), numbers (0-9),
     * underscores (_), and must start with a letter or underscore.
     * The maximum size is 64 bytes when encoded in UTF-8.
     *
     * Generated from protobuf field <code>string entry_group_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getEntryGroupId()
    {
        return $this->entry_group_id;
    }

    /**
     * Required. The ID of the entry group to create.
     * The ID must contain only letters (a-z, A-Z), numbers (0-9),
     * underscores (_), and must start with a letter or underscore.
     * The maximum size is 64 bytes when encoded in UTF-8.
     *
     * Generated from protobuf field <code>string entry_group_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setEntryGroupId($var)
    {
        GPBUtil::checkString($var, True);
        $this->entry_group_id = $var;

        return $this;
    }

    /**
     * The entry group to create. Defaults to empty.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.EntryGroup entry_group = 2;</code>
     * @return \Google\Cloud\DataCatalog\V1\EntryGroup|null
     */
    public function getEntryGroup()
    {
        return $this->entry_group;
    }

    public function hasEntryGroup()
    {
        return isset($this->entry_group);
    }

    public function clearEntryGroup()
    {
        unset($this->entry_group);
    }

    /**
     * The entry group to create. Defaults to empty.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.EntryGroup entry_group = 2;</code>
     * @param \Google\Cloud\DataCatalog\V1\EntryGroup $var
     * @return $this
     */
    public function setEntryGroup($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataCatalog\V1\EntryGroup::class);
        $this->entry_group = $var;

        return $this;
    }

}

