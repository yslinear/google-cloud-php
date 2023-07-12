<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/bigtable_table_admin.proto

namespace Google\Cloud\Bigtable\Admin\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for [GetBackup][google.bigtable.admin.v2.BigtableTableAdmin.GetBackup].
 *
 * Generated from protobuf message <code>google.bigtable.admin.v2.GetBackupRequest</code>
 */
class GetBackupRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the backup.
     * Values are of the form
     * `projects/{project}/instances/{instance}/clusters/{cluster}/backups/{backup}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. Name of the backup.
     *                     Values are of the form
     *                     `projects/{project}/instances/{instance}/clusters/{cluster}/backups/{backup}`. Please see
     *                     {@see BigtableTableAdminClient::backupName()} for help formatting this field.
     *
     * @return \Google\Cloud\Bigtable\Admin\V2\GetBackupRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Name of the backup.
     *           Values are of the form
     *           `projects/{project}/instances/{instance}/clusters/{cluster}/backups/{backup}`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\Admin\V2\BigtableTableAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the backup.
     * Values are of the form
     * `projects/{project}/instances/{instance}/clusters/{cluster}/backups/{backup}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Name of the backup.
     * Values are of the form
     * `projects/{project}/instances/{instance}/clusters/{cluster}/backups/{backup}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

