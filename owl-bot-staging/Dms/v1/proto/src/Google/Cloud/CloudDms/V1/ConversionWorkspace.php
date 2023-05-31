<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/clouddms/v1/conversionworkspace_resources.proto

namespace Google\Cloud\CloudDms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The main conversion workspace resource entity.
 *
 * Generated from protobuf message <code>google.cloud.clouddms.v1.ConversionWorkspace</code>
 */
class ConversionWorkspace extends \Google\Protobuf\Internal\Message
{
    /**
     * Full name of the workspace resource, in the form of:
     * projects/{project}/locations/{location}/conversionWorkspaces/{conversion_workspace}.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Required. The source engine details.
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.DatabaseEngineInfo source = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $source = null;
    /**
     * Required. The destination engine details.
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.DatabaseEngineInfo destination = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $destination = null;
    /**
     * A generic list of settings for the workspace.
     * The settings are database pair dependant and can indicate default behavior
     * for the mapping rules engine or turn on or off specific features.
     * Such examples can be: convert_foreign_key_to_interleave=true,
     * skip_triggers=false, ignore_non_table_synonyms=true
     *
     * Generated from protobuf field <code>map<string, string> global_settings = 4;</code>
     */
    private $global_settings;
    /**
     * Output only. Whether the workspace has uncommitted changes (changes which
     * were made after the workspace was committed).
     *
     * Generated from protobuf field <code>bool has_uncommitted_changes = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $has_uncommitted_changes = false;
    /**
     * Output only. The latest commit ID.
     *
     * Generated from protobuf field <code>string latest_commit_id = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $latest_commit_id = '';
    /**
     * Output only. The timestamp when the workspace was committed.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp latest_commit_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $latest_commit_time = null;
    /**
     * Output only. The timestamp when the workspace resource was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. The timestamp when the workspace resource was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * The display name for the workspace.
     *
     * Generated from protobuf field <code>string display_name = 11;</code>
     */
    protected $display_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Full name of the workspace resource, in the form of:
     *           projects/{project}/locations/{location}/conversionWorkspaces/{conversion_workspace}.
     *     @type \Google\Cloud\CloudDms\V1\DatabaseEngineInfo $source
     *           Required. The source engine details.
     *     @type \Google\Cloud\CloudDms\V1\DatabaseEngineInfo $destination
     *           Required. The destination engine details.
     *     @type array|\Google\Protobuf\Internal\MapField $global_settings
     *           A generic list of settings for the workspace.
     *           The settings are database pair dependant and can indicate default behavior
     *           for the mapping rules engine or turn on or off specific features.
     *           Such examples can be: convert_foreign_key_to_interleave=true,
     *           skip_triggers=false, ignore_non_table_synonyms=true
     *     @type bool $has_uncommitted_changes
     *           Output only. Whether the workspace has uncommitted changes (changes which
     *           were made after the workspace was committed).
     *     @type string $latest_commit_id
     *           Output only. The latest commit ID.
     *     @type \Google\Protobuf\Timestamp $latest_commit_time
     *           Output only. The timestamp when the workspace was committed.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The timestamp when the workspace resource was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The timestamp when the workspace resource was last updated.
     *     @type string $display_name
     *           The display name for the workspace.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Clouddms\V1\ConversionworkspaceResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Full name of the workspace resource, in the form of:
     * projects/{project}/locations/{location}/conversionWorkspaces/{conversion_workspace}.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Full name of the workspace resource, in the form of:
     * projects/{project}/locations/{location}/conversionWorkspaces/{conversion_workspace}.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Required. The source engine details.
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.DatabaseEngineInfo source = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\CloudDms\V1\DatabaseEngineInfo|null
     */
    public function getSource()
    {
        return $this->source;
    }

    public function hasSource()
    {
        return isset($this->source);
    }

    public function clearSource()
    {
        unset($this->source);
    }

    /**
     * Required. The source engine details.
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.DatabaseEngineInfo source = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\CloudDms\V1\DatabaseEngineInfo $var
     * @return $this
     */
    public function setSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\CloudDms\V1\DatabaseEngineInfo::class);
        $this->source = $var;

        return $this;
    }

    /**
     * Required. The destination engine details.
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.DatabaseEngineInfo destination = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\CloudDms\V1\DatabaseEngineInfo|null
     */
    public function getDestination()
    {
        return $this->destination;
    }

    public function hasDestination()
    {
        return isset($this->destination);
    }

    public function clearDestination()
    {
        unset($this->destination);
    }

    /**
     * Required. The destination engine details.
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.DatabaseEngineInfo destination = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\CloudDms\V1\DatabaseEngineInfo $var
     * @return $this
     */
    public function setDestination($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\CloudDms\V1\DatabaseEngineInfo::class);
        $this->destination = $var;

        return $this;
    }

    /**
     * A generic list of settings for the workspace.
     * The settings are database pair dependant and can indicate default behavior
     * for the mapping rules engine or turn on or off specific features.
     * Such examples can be: convert_foreign_key_to_interleave=true,
     * skip_triggers=false, ignore_non_table_synonyms=true
     *
     * Generated from protobuf field <code>map<string, string> global_settings = 4;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getGlobalSettings()
    {
        return $this->global_settings;
    }

    /**
     * A generic list of settings for the workspace.
     * The settings are database pair dependant and can indicate default behavior
     * for the mapping rules engine or turn on or off specific features.
     * Such examples can be: convert_foreign_key_to_interleave=true,
     * skip_triggers=false, ignore_non_table_synonyms=true
     *
     * Generated from protobuf field <code>map<string, string> global_settings = 4;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setGlobalSettings($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->global_settings = $arr;

        return $this;
    }

    /**
     * Output only. Whether the workspace has uncommitted changes (changes which
     * were made after the workspace was committed).
     *
     * Generated from protobuf field <code>bool has_uncommitted_changes = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getHasUncommittedChanges()
    {
        return $this->has_uncommitted_changes;
    }

    /**
     * Output only. Whether the workspace has uncommitted changes (changes which
     * were made after the workspace was committed).
     *
     * Generated from protobuf field <code>bool has_uncommitted_changes = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setHasUncommittedChanges($var)
    {
        GPBUtil::checkBool($var);
        $this->has_uncommitted_changes = $var;

        return $this;
    }

    /**
     * Output only. The latest commit ID.
     *
     * Generated from protobuf field <code>string latest_commit_id = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getLatestCommitId()
    {
        return $this->latest_commit_id;
    }

    /**
     * Output only. The latest commit ID.
     *
     * Generated from protobuf field <code>string latest_commit_id = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setLatestCommitId($var)
    {
        GPBUtil::checkString($var, True);
        $this->latest_commit_id = $var;

        return $this;
    }

    /**
     * Output only. The timestamp when the workspace was committed.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp latest_commit_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getLatestCommitTime()
    {
        return $this->latest_commit_time;
    }

    public function hasLatestCommitTime()
    {
        return isset($this->latest_commit_time);
    }

    public function clearLatestCommitTime()
    {
        unset($this->latest_commit_time);
    }

    /**
     * Output only. The timestamp when the workspace was committed.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp latest_commit_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLatestCommitTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->latest_commit_time = $var;

        return $this;
    }

    /**
     * Output only. The timestamp when the workspace resource was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The timestamp when the workspace resource was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The timestamp when the workspace resource was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The timestamp when the workspace resource was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * The display name for the workspace.
     *
     * Generated from protobuf field <code>string display_name = 11;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * The display name for the workspace.
     *
     * Generated from protobuf field <code>string display_name = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

}

