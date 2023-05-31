<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/document_processor_service.proto

namespace Google\Cloud\DocumentAI\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for fetch processor types.
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1.FetchProcessorTypesResponse</code>
 */
class FetchProcessorTypesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of processor types.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.ProcessorType processor_types = 1;</code>
     */
    private $processor_types;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\DocumentAI\V1\ProcessorType>|\Google\Protobuf\Internal\RepeatedField $processor_types
     *           The list of processor types.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1\DocumentProcessorService::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of processor types.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.ProcessorType processor_types = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getProcessorTypes()
    {
        return $this->processor_types;
    }

    /**
     * The list of processor types.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.ProcessorType processor_types = 1;</code>
     * @param array<\Google\Cloud\DocumentAI\V1\ProcessorType>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setProcessorTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DocumentAI\V1\ProcessorType::class);
        $this->processor_types = $arr;

        return $this;
    }

}

