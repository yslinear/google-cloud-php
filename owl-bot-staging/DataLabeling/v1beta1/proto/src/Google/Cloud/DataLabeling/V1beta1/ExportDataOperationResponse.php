<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datalabeling/v1beta1/operations.proto

namespace Google\Cloud\DataLabeling\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response used for ExportDataset longrunning operation.
 *
 * Generated from protobuf message <code>google.cloud.datalabeling.v1beta1.ExportDataOperationResponse</code>
 */
class ExportDataOperationResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Ouptut only. The name of dataset.
     * "projects/&#42;&#47;datasets/&#42;"
     *
     * Generated from protobuf field <code>string dataset = 1;</code>
     */
    protected $dataset = '';
    /**
     * Output only. Total number of examples requested to export
     *
     * Generated from protobuf field <code>int32 total_count = 2;</code>
     */
    protected $total_count = 0;
    /**
     * Output only. Number of examples exported successfully.
     *
     * Generated from protobuf field <code>int32 export_count = 3;</code>
     */
    protected $export_count = 0;
    /**
     * Output only. Statistic infos of labels in the exported dataset.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.LabelStats label_stats = 4;</code>
     */
    protected $label_stats = null;
    /**
     * Output only. output_config in the ExportData request.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.OutputConfig output_config = 5;</code>
     */
    protected $output_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $dataset
     *           Ouptut only. The name of dataset.
     *           "projects/&#42;&#47;datasets/&#42;"
     *     @type int $total_count
     *           Output only. Total number of examples requested to export
     *     @type int $export_count
     *           Output only. Number of examples exported successfully.
     *     @type \Google\Cloud\DataLabeling\V1beta1\LabelStats $label_stats
     *           Output only. Statistic infos of labels in the exported dataset.
     *     @type \Google\Cloud\DataLabeling\V1beta1\OutputConfig $output_config
     *           Output only. output_config in the ExportData request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datalabeling\V1Beta1\Operations::initOnce();
        parent::__construct($data);
    }

    /**
     * Ouptut only. The name of dataset.
     * "projects/&#42;&#47;datasets/&#42;"
     *
     * Generated from protobuf field <code>string dataset = 1;</code>
     * @return string
     */
    public function getDataset()
    {
        return $this->dataset;
    }

    /**
     * Ouptut only. The name of dataset.
     * "projects/&#42;&#47;datasets/&#42;"
     *
     * Generated from protobuf field <code>string dataset = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDataset($var)
    {
        GPBUtil::checkString($var, True);
        $this->dataset = $var;

        return $this;
    }

    /**
     * Output only. Total number of examples requested to export
     *
     * Generated from protobuf field <code>int32 total_count = 2;</code>
     * @return int
     */
    public function getTotalCount()
    {
        return $this->total_count;
    }

    /**
     * Output only. Total number of examples requested to export
     *
     * Generated from protobuf field <code>int32 total_count = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setTotalCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->total_count = $var;

        return $this;
    }

    /**
     * Output only. Number of examples exported successfully.
     *
     * Generated from protobuf field <code>int32 export_count = 3;</code>
     * @return int
     */
    public function getExportCount()
    {
        return $this->export_count;
    }

    /**
     * Output only. Number of examples exported successfully.
     *
     * Generated from protobuf field <code>int32 export_count = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setExportCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->export_count = $var;

        return $this;
    }

    /**
     * Output only. Statistic infos of labels in the exported dataset.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.LabelStats label_stats = 4;</code>
     * @return \Google\Cloud\DataLabeling\V1beta1\LabelStats|null
     */
    public function getLabelStats()
    {
        return $this->label_stats;
    }

    public function hasLabelStats()
    {
        return isset($this->label_stats);
    }

    public function clearLabelStats()
    {
        unset($this->label_stats);
    }

    /**
     * Output only. Statistic infos of labels in the exported dataset.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.LabelStats label_stats = 4;</code>
     * @param \Google\Cloud\DataLabeling\V1beta1\LabelStats $var
     * @return $this
     */
    public function setLabelStats($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataLabeling\V1beta1\LabelStats::class);
        $this->label_stats = $var;

        return $this;
    }

    /**
     * Output only. output_config in the ExportData request.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.OutputConfig output_config = 5;</code>
     * @return \Google\Cloud\DataLabeling\V1beta1\OutputConfig|null
     */
    public function getOutputConfig()
    {
        return $this->output_config;
    }

    public function hasOutputConfig()
    {
        return isset($this->output_config);
    }

    public function clearOutputConfig()
    {
        unset($this->output_config);
    }

    /**
     * Output only. output_config in the ExportData request.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.OutputConfig output_config = 5;</code>
     * @param \Google\Cloud\DataLabeling\V1beta1\OutputConfig $var
     * @return $this
     */
    public function setOutputConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataLabeling\V1beta1\OutputConfig::class);
        $this->output_config = $var;

        return $this;
    }

}

