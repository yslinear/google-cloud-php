<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datalabeling/v1beta1/dataset.proto

namespace Google\Cloud\DataLabeling\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Dataset is the resource to hold your data. You can request multiple labeling
 * tasks for a dataset while each one will generate an AnnotatedDataset.
 *
 * Generated from protobuf message <code>google.cloud.datalabeling.v1beta1.Dataset</code>
 */
class Dataset extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Dataset resource name, format is:
     * projects/{project_id}/datasets/{dataset_id}
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Required. The display name of the dataset. Maximum of 64 characters.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     */
    protected $display_name = '';
    /**
     * Optional. User-provided description of the annotation specification set.
     * The description can be up to 10000 characters long.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     */
    protected $description = '';
    /**
     * Output only. Time the dataset is created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4;</code>
     */
    protected $create_time = null;
    /**
     * Output only. This is populated with the original input configs
     * where ImportData is called. It is available only after the clients
     * import data to this dataset.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datalabeling.v1beta1.InputConfig input_configs = 5;</code>
     */
    private $input_configs;
    /**
     * Output only. The names of any related resources that are blocking changes
     * to the dataset.
     *
     * Generated from protobuf field <code>repeated string blocking_resources = 6;</code>
     */
    private $blocking_resources;
    /**
     * Output only. The number of data items in the dataset.
     *
     * Generated from protobuf field <code>int64 data_item_count = 7;</code>
     */
    protected $data_item_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Dataset resource name, format is:
     *           projects/{project_id}/datasets/{dataset_id}
     *     @type string $display_name
     *           Required. The display name of the dataset. Maximum of 64 characters.
     *     @type string $description
     *           Optional. User-provided description of the annotation specification set.
     *           The description can be up to 10000 characters long.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Time the dataset is created.
     *     @type array<\Google\Cloud\DataLabeling\V1beta1\InputConfig>|\Google\Protobuf\Internal\RepeatedField $input_configs
     *           Output only. This is populated with the original input configs
     *           where ImportData is called. It is available only after the clients
     *           import data to this dataset.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $blocking_resources
     *           Output only. The names of any related resources that are blocking changes
     *           to the dataset.
     *     @type int|string $data_item_count
     *           Output only. The number of data items in the dataset.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datalabeling\V1Beta1\Dataset::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Dataset resource name, format is:
     * projects/{project_id}/datasets/{dataset_id}
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Dataset resource name, format is:
     * projects/{project_id}/datasets/{dataset_id}
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
     * Required. The display name of the dataset. Maximum of 64 characters.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Required. The display name of the dataset. Maximum of 64 characters.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Optional. User-provided description of the annotation specification set.
     * The description can be up to 10000 characters long.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. User-provided description of the annotation specification set.
     * The description can be up to 10000 characters long.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Output only. Time the dataset is created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4;</code>
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
     * Output only. Time the dataset is created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4;</code>
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
     * Output only. This is populated with the original input configs
     * where ImportData is called. It is available only after the clients
     * import data to this dataset.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datalabeling.v1beta1.InputConfig input_configs = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInputConfigs()
    {
        return $this->input_configs;
    }

    /**
     * Output only. This is populated with the original input configs
     * where ImportData is called. It is available only after the clients
     * import data to this dataset.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datalabeling.v1beta1.InputConfig input_configs = 5;</code>
     * @param array<\Google\Cloud\DataLabeling\V1beta1\InputConfig>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInputConfigs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DataLabeling\V1beta1\InputConfig::class);
        $this->input_configs = $arr;

        return $this;
    }

    /**
     * Output only. The names of any related resources that are blocking changes
     * to the dataset.
     *
     * Generated from protobuf field <code>repeated string blocking_resources = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBlockingResources()
    {
        return $this->blocking_resources;
    }

    /**
     * Output only. The names of any related resources that are blocking changes
     * to the dataset.
     *
     * Generated from protobuf field <code>repeated string blocking_resources = 6;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBlockingResources($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->blocking_resources = $arr;

        return $this;
    }

    /**
     * Output only. The number of data items in the dataset.
     *
     * Generated from protobuf field <code>int64 data_item_count = 7;</code>
     * @return int|string
     */
    public function getDataItemCount()
    {
        return $this->data_item_count;
    }

    /**
     * Output only. The number of data items in the dataset.
     *
     * Generated from protobuf field <code>int64 data_item_count = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDataItemCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->data_item_count = $var;

        return $this;
    }

}

