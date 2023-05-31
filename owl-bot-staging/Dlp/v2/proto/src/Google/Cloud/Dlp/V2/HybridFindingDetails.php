<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Populate to associate additional data with each finding.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.HybridFindingDetails</code>
 */
class HybridFindingDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * Details about the container where the content being inspected is from.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.Container container_details = 1;</code>
     */
    protected $container_details = null;
    /**
     * Offset in bytes of the line, from the beginning of the file, where the
     * finding  is located. Populate if the item being scanned is only part of a
     * bigger item, such as a shard of a file and you want to track the absolute
     * position of the finding.
     *
     * Generated from protobuf field <code>int64 file_offset = 2;</code>
     */
    protected $file_offset = 0;
    /**
     * Offset of the row for tables. Populate if the row(s) being scanned are
     * part of a bigger dataset and you want to keep track of their absolute
     * position.
     *
     * Generated from protobuf field <code>int64 row_offset = 3;</code>
     */
    protected $row_offset = 0;
    /**
     * If the container is a table, additional information to make findings
     * meaningful such as the columns that are primary keys. If not known ahead
     * of time, can also be set within each inspect hybrid call and the two
     * will be merged. Note that identifying_fields will only be stored to
     * BigQuery, and only if the BigQuery action has been included.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.TableOptions table_options = 4;</code>
     */
    protected $table_options = null;
    /**
     * Labels to represent user provided metadata about the data being inspected.
     * If configured by the job, some key values may be required.
     * The labels associated with `Finding`'s produced by hybrid
     * inspection.
     * Label keys must be between 1 and 63 characters long and must conform
     * to the following regular expression: `[a-z]([-a-z0-9]*[a-z0-9])?`.
     * Label values must be between 0 and 63 characters long and must conform
     * to the regular expression `([a-z]([-a-z0-9]*[a-z0-9])?)?`.
     * No more than 10 labels can be associated with a given finding.
     * Examples:
     * * `"environment" : "production"`
     * * `"pipeline" : "etl"`
     *
     * Generated from protobuf field <code>map<string, string> labels = 5;</code>
     */
    private $labels;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dlp\V2\Container $container_details
     *           Details about the container where the content being inspected is from.
     *     @type int|string $file_offset
     *           Offset in bytes of the line, from the beginning of the file, where the
     *           finding  is located. Populate if the item being scanned is only part of a
     *           bigger item, such as a shard of a file and you want to track the absolute
     *           position of the finding.
     *     @type int|string $row_offset
     *           Offset of the row for tables. Populate if the row(s) being scanned are
     *           part of a bigger dataset and you want to keep track of their absolute
     *           position.
     *     @type \Google\Cloud\Dlp\V2\TableOptions $table_options
     *           If the container is a table, additional information to make findings
     *           meaningful such as the columns that are primary keys. If not known ahead
     *           of time, can also be set within each inspect hybrid call and the two
     *           will be merged. Note that identifying_fields will only be stored to
     *           BigQuery, and only if the BigQuery action has been included.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Labels to represent user provided metadata about the data being inspected.
     *           If configured by the job, some key values may be required.
     *           The labels associated with `Finding`'s produced by hybrid
     *           inspection.
     *           Label keys must be between 1 and 63 characters long and must conform
     *           to the following regular expression: `[a-z]([-a-z0-9]*[a-z0-9])?`.
     *           Label values must be between 0 and 63 characters long and must conform
     *           to the regular expression `([a-z]([-a-z0-9]*[a-z0-9])?)?`.
     *           No more than 10 labels can be associated with a given finding.
     *           Examples:
     *           * `"environment" : "production"`
     *           * `"pipeline" : "etl"`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Details about the container where the content being inspected is from.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.Container container_details = 1;</code>
     * @return \Google\Cloud\Dlp\V2\Container|null
     */
    public function getContainerDetails()
    {
        return $this->container_details;
    }

    public function hasContainerDetails()
    {
        return isset($this->container_details);
    }

    public function clearContainerDetails()
    {
        unset($this->container_details);
    }

    /**
     * Details about the container where the content being inspected is from.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.Container container_details = 1;</code>
     * @param \Google\Cloud\Dlp\V2\Container $var
     * @return $this
     */
    public function setContainerDetails($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\Container::class);
        $this->container_details = $var;

        return $this;
    }

    /**
     * Offset in bytes of the line, from the beginning of the file, where the
     * finding  is located. Populate if the item being scanned is only part of a
     * bigger item, such as a shard of a file and you want to track the absolute
     * position of the finding.
     *
     * Generated from protobuf field <code>int64 file_offset = 2;</code>
     * @return int|string
     */
    public function getFileOffset()
    {
        return $this->file_offset;
    }

    /**
     * Offset in bytes of the line, from the beginning of the file, where the
     * finding  is located. Populate if the item being scanned is only part of a
     * bigger item, such as a shard of a file and you want to track the absolute
     * position of the finding.
     *
     * Generated from protobuf field <code>int64 file_offset = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFileOffset($var)
    {
        GPBUtil::checkInt64($var);
        $this->file_offset = $var;

        return $this;
    }

    /**
     * Offset of the row for tables. Populate if the row(s) being scanned are
     * part of a bigger dataset and you want to keep track of their absolute
     * position.
     *
     * Generated from protobuf field <code>int64 row_offset = 3;</code>
     * @return int|string
     */
    public function getRowOffset()
    {
        return $this->row_offset;
    }

    /**
     * Offset of the row for tables. Populate if the row(s) being scanned are
     * part of a bigger dataset and you want to keep track of their absolute
     * position.
     *
     * Generated from protobuf field <code>int64 row_offset = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRowOffset($var)
    {
        GPBUtil::checkInt64($var);
        $this->row_offset = $var;

        return $this;
    }

    /**
     * If the container is a table, additional information to make findings
     * meaningful such as the columns that are primary keys. If not known ahead
     * of time, can also be set within each inspect hybrid call and the two
     * will be merged. Note that identifying_fields will only be stored to
     * BigQuery, and only if the BigQuery action has been included.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.TableOptions table_options = 4;</code>
     * @return \Google\Cloud\Dlp\V2\TableOptions|null
     */
    public function getTableOptions()
    {
        return $this->table_options;
    }

    public function hasTableOptions()
    {
        return isset($this->table_options);
    }

    public function clearTableOptions()
    {
        unset($this->table_options);
    }

    /**
     * If the container is a table, additional information to make findings
     * meaningful such as the columns that are primary keys. If not known ahead
     * of time, can also be set within each inspect hybrid call and the two
     * will be merged. Note that identifying_fields will only be stored to
     * BigQuery, and only if the BigQuery action has been included.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.TableOptions table_options = 4;</code>
     * @param \Google\Cloud\Dlp\V2\TableOptions $var
     * @return $this
     */
    public function setTableOptions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\TableOptions::class);
        $this->table_options = $var;

        return $this;
    }

    /**
     * Labels to represent user provided metadata about the data being inspected.
     * If configured by the job, some key values may be required.
     * The labels associated with `Finding`'s produced by hybrid
     * inspection.
     * Label keys must be between 1 and 63 characters long and must conform
     * to the following regular expression: `[a-z]([-a-z0-9]*[a-z0-9])?`.
     * Label values must be between 0 and 63 characters long and must conform
     * to the regular expression `([a-z]([-a-z0-9]*[a-z0-9])?)?`.
     * No more than 10 labels can be associated with a given finding.
     * Examples:
     * * `"environment" : "production"`
     * * `"pipeline" : "etl"`
     *
     * Generated from protobuf field <code>map<string, string> labels = 5;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Labels to represent user provided metadata about the data being inspected.
     * If configured by the job, some key values may be required.
     * The labels associated with `Finding`'s produced by hybrid
     * inspection.
     * Label keys must be between 1 and 63 characters long and must conform
     * to the following regular expression: `[a-z]([-a-z0-9]*[a-z0-9])?`.
     * Label values must be between 0 and 63 characters long and must conform
     * to the regular expression `([a-z]([-a-z0-9]*[a-z0-9])?)?`.
     * No more than 10 labels can be associated with a given finding.
     * Examples:
     * * `"environment" : "production"`
     * * `"pipeline" : "etl"`
     *
     * Generated from protobuf field <code>map<string, string> labels = 5;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

}

