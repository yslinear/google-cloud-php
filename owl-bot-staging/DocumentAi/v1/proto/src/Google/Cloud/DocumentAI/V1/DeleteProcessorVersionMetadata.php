<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/document_processor_service.proto

namespace Google\Cloud\DocumentAI\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The long running operation metadata for delete processor version method.
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1.DeleteProcessorVersionMetadata</code>
 */
class DeleteProcessorVersionMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * The basic metadata of the long running operation.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.CommonOperationMetadata common_metadata = 1;</code>
     */
    protected $common_metadata = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DocumentAI\V1\CommonOperationMetadata $common_metadata
     *           The basic metadata of the long running operation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1\DocumentProcessorService::initOnce();
        parent::__construct($data);
    }

    /**
     * The basic metadata of the long running operation.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.CommonOperationMetadata common_metadata = 1;</code>
     * @return \Google\Cloud\DocumentAI\V1\CommonOperationMetadata|null
     */
    public function getCommonMetadata()
    {
        return $this->common_metadata;
    }

    public function hasCommonMetadata()
    {
        return isset($this->common_metadata);
    }

    public function clearCommonMetadata()
    {
        unset($this->common_metadata);
    }

    /**
     * The basic metadata of the long running operation.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.CommonOperationMetadata common_metadata = 1;</code>
     * @param \Google\Cloud\DocumentAI\V1\CommonOperationMetadata $var
     * @return $this
     */
    public function setCommonMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DocumentAI\V1\CommonOperationMetadata::class);
        $this->common_metadata = $var;

        return $this;
    }

}

