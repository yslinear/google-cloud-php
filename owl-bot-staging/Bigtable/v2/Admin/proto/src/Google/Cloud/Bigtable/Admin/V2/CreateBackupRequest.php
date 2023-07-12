<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/bigtable_table_admin.proto

namespace Google\Cloud\Bigtable\Admin\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for [CreateBackup][google.bigtable.admin.v2.BigtableTableAdmin.CreateBackup].
 *
 * Generated from protobuf message <code>google.bigtable.admin.v2.CreateBackupRequest</code>
 */
class CreateBackupRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. This must be one of the clusters in the instance in which this
     * table is located. The backup will be stored in this cluster. Values are
     * of the form `projects/{project}/instances/{instance}/clusters/{cluster}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The id of the backup to be created. The `backup_id` along with
     * the parent `parent` are combined as {parent}/backups/{backup_id} to create
     * the full backup name, of the form:
     * `projects/{project}/instances/{instance}/clusters/{cluster}/backups/{backup_id}`.
     * This string must be between 1 and 50 characters in length and match the
     * regex [_a-zA-Z0-9][-_.a-zA-Z0-9]*.
     *
     * Generated from protobuf field <code>string backup_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $backup_id = '';
    /**
     * Required. The backup to create.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Backup backup = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $backup = null;

    /**
     * @param string                                 $parent   Required. This must be one of the clusters in the instance in which this
     *                                                         table is located. The backup will be stored in this cluster. Values are
     *                                                         of the form `projects/{project}/instances/{instance}/clusters/{cluster}`. Please see
     *                                                         {@see BigtableTableAdminClient::clusterName()} for help formatting this field.
     * @param string                                 $backupId Required. The id of the backup to be created. The `backup_id` along with
     *                                                         the parent `parent` are combined as {parent}/backups/{backup_id} to create
     *                                                         the full backup name, of the form:
     *                                                         `projects/{project}/instances/{instance}/clusters/{cluster}/backups/{backup_id}`.
     *                                                         This string must be between 1 and 50 characters in length and match the
     *                                                         regex [_a-zA-Z0-9][-_.a-zA-Z0-9]*.
     * @param \Google\Cloud\Bigtable\Admin\V2\Backup $backup   Required. The backup to create.
     *
     * @return \Google\Cloud\Bigtable\Admin\V2\CreateBackupRequest
     *
     * @experimental
     */
    public static function build(string $parent, string $backupId, \Google\Cloud\Bigtable\Admin\V2\Backup $backup): self
    {
        return (new self())
            ->setParent($parent)
            ->setBackupId($backupId)
            ->setBackup($backup);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. This must be one of the clusters in the instance in which this
     *           table is located. The backup will be stored in this cluster. Values are
     *           of the form `projects/{project}/instances/{instance}/clusters/{cluster}`.
     *     @type string $backup_id
     *           Required. The id of the backup to be created. The `backup_id` along with
     *           the parent `parent` are combined as {parent}/backups/{backup_id} to create
     *           the full backup name, of the form:
     *           `projects/{project}/instances/{instance}/clusters/{cluster}/backups/{backup_id}`.
     *           This string must be between 1 and 50 characters in length and match the
     *           regex [_a-zA-Z0-9][-_.a-zA-Z0-9]*.
     *     @type \Google\Cloud\Bigtable\Admin\V2\Backup $backup
     *           Required. The backup to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\Admin\V2\BigtableTableAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. This must be one of the clusters in the instance in which this
     * table is located. The backup will be stored in this cluster. Values are
     * of the form `projects/{project}/instances/{instance}/clusters/{cluster}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. This must be one of the clusters in the instance in which this
     * table is located. The backup will be stored in this cluster. Values are
     * of the form `projects/{project}/instances/{instance}/clusters/{cluster}`.
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
     * Required. The id of the backup to be created. The `backup_id` along with
     * the parent `parent` are combined as {parent}/backups/{backup_id} to create
     * the full backup name, of the form:
     * `projects/{project}/instances/{instance}/clusters/{cluster}/backups/{backup_id}`.
     * This string must be between 1 and 50 characters in length and match the
     * regex [_a-zA-Z0-9][-_.a-zA-Z0-9]*.
     *
     * Generated from protobuf field <code>string backup_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getBackupId()
    {
        return $this->backup_id;
    }

    /**
     * Required. The id of the backup to be created. The `backup_id` along with
     * the parent `parent` are combined as {parent}/backups/{backup_id} to create
     * the full backup name, of the form:
     * `projects/{project}/instances/{instance}/clusters/{cluster}/backups/{backup_id}`.
     * This string must be between 1 and 50 characters in length and match the
     * regex [_a-zA-Z0-9][-_.a-zA-Z0-9]*.
     *
     * Generated from protobuf field <code>string backup_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setBackupId($var)
    {
        GPBUtil::checkString($var, True);
        $this->backup_id = $var;

        return $this;
    }

    /**
     * Required. The backup to create.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Backup backup = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Bigtable\Admin\V2\Backup|null
     */
    public function getBackup()
    {
        return $this->backup;
    }

    public function hasBackup()
    {
        return isset($this->backup);
    }

    public function clearBackup()
    {
        unset($this->backup);
    }

    /**
     * Required. The backup to create.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Backup backup = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Bigtable\Admin\V2\Backup $var
     * @return $this
     */
    public function setBackup($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Bigtable\Admin\V2\Backup::class);
        $this->backup = $var;

        return $this;
    }

}

