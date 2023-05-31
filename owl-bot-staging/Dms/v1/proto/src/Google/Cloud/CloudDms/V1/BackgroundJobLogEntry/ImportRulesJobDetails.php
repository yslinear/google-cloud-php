<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/clouddms/v1/conversionworkspace_resources.proto

namespace Google\Cloud\CloudDms\V1\BackgroundJobLogEntry;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Details regarding an Import Rules background job.
 *
 * Generated from protobuf message <code>google.cloud.clouddms.v1.BackgroundJobLogEntry.ImportRulesJobDetails</code>
 */
class ImportRulesJobDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * File names used for the import rules job.
     *
     * Generated from protobuf field <code>repeated string files = 1;</code>
     */
    private $files;
    /**
     * The requested file format.
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.ImportRulesFileFormat file_format = 2;</code>
     */
    protected $file_format = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $files
     *           File names used for the import rules job.
     *     @type int $file_format
     *           The requested file format.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Clouddms\V1\ConversionworkspaceResources::initOnce();
        parent::__construct($data);
    }

    /**
     * File names used for the import rules job.
     *
     * Generated from protobuf field <code>repeated string files = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFiles()
    {
        return $this->files;
    }

    /**
     * File names used for the import rules job.
     *
     * Generated from protobuf field <code>repeated string files = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFiles($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->files = $arr;

        return $this;
    }

    /**
     * The requested file format.
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.ImportRulesFileFormat file_format = 2;</code>
     * @return int
     */
    public function getFileFormat()
    {
        return $this->file_format;
    }

    /**
     * The requested file format.
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.ImportRulesFileFormat file_format = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setFileFormat($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\CloudDms\V1\ImportRulesFileFormat::class);
        $this->file_format = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ImportRulesJobDetails::class, \Google\Cloud\CloudDms\V1\BackgroundJobLogEntry_ImportRulesJobDetails::class);

