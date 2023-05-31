<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/document_processor_service.proto

namespace Google\Cloud\DocumentAI\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for batch process document method.
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1.BatchProcessRequest</code>
 */
class BatchProcessRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of
     * [Processor][google.cloud.documentai.v1.Processor] or
     * [ProcessorVersion][google.cloud.documentai.v1.ProcessorVersion].
     * Format: `projects/{project}/locations/{location}/processors/{processor}`,
     * or
     * `projects/{project}/locations/{location}/processors/{processor}/processorVersions/{processorVersion}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * The input documents for batch process.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.BatchDocumentsInputConfig input_documents = 5;</code>
     */
    protected $input_documents = null;
    /**
     * The overall output config for batch process.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.DocumentOutputConfig document_output_config = 6;</code>
     */
    protected $document_output_config = null;
    /**
     * Whether Human Review feature should be skipped for this request. Default to
     * false.
     *
     * Generated from protobuf field <code>bool skip_human_review = 4;</code>
     */
    protected $skip_human_review = false;

    /**
     * @param string $name Required. The resource name of
     *                     [Processor][google.cloud.documentai.v1.Processor] or
     *                     [ProcessorVersion][google.cloud.documentai.v1.ProcessorVersion].
     *                     Format: `projects/{project}/locations/{location}/processors/{processor}`,
     *                     or
     *                     `projects/{project}/locations/{location}/processors/{processor}/processorVersions/{processorVersion}`
     *
     * @return \Google\Cloud\DocumentAI\V1\BatchProcessRequest
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
     *           Required. The resource name of
     *           [Processor][google.cloud.documentai.v1.Processor] or
     *           [ProcessorVersion][google.cloud.documentai.v1.ProcessorVersion].
     *           Format: `projects/{project}/locations/{location}/processors/{processor}`,
     *           or
     *           `projects/{project}/locations/{location}/processors/{processor}/processorVersions/{processorVersion}`
     *     @type \Google\Cloud\DocumentAI\V1\BatchDocumentsInputConfig $input_documents
     *           The input documents for batch process.
     *     @type \Google\Cloud\DocumentAI\V1\DocumentOutputConfig $document_output_config
     *           The overall output config for batch process.
     *     @type bool $skip_human_review
     *           Whether Human Review feature should be skipped for this request. Default to
     *           false.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1\DocumentProcessorService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of
     * [Processor][google.cloud.documentai.v1.Processor] or
     * [ProcessorVersion][google.cloud.documentai.v1.ProcessorVersion].
     * Format: `projects/{project}/locations/{location}/processors/{processor}`,
     * or
     * `projects/{project}/locations/{location}/processors/{processor}/processorVersions/{processorVersion}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of
     * [Processor][google.cloud.documentai.v1.Processor] or
     * [ProcessorVersion][google.cloud.documentai.v1.ProcessorVersion].
     * Format: `projects/{project}/locations/{location}/processors/{processor}`,
     * or
     * `projects/{project}/locations/{location}/processors/{processor}/processorVersions/{processorVersion}`
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

    /**
     * The input documents for batch process.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.BatchDocumentsInputConfig input_documents = 5;</code>
     * @return \Google\Cloud\DocumentAI\V1\BatchDocumentsInputConfig|null
     */
    public function getInputDocuments()
    {
        return $this->input_documents;
    }

    public function hasInputDocuments()
    {
        return isset($this->input_documents);
    }

    public function clearInputDocuments()
    {
        unset($this->input_documents);
    }

    /**
     * The input documents for batch process.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.BatchDocumentsInputConfig input_documents = 5;</code>
     * @param \Google\Cloud\DocumentAI\V1\BatchDocumentsInputConfig $var
     * @return $this
     */
    public function setInputDocuments($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DocumentAI\V1\BatchDocumentsInputConfig::class);
        $this->input_documents = $var;

        return $this;
    }

    /**
     * The overall output config for batch process.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.DocumentOutputConfig document_output_config = 6;</code>
     * @return \Google\Cloud\DocumentAI\V1\DocumentOutputConfig|null
     */
    public function getDocumentOutputConfig()
    {
        return $this->document_output_config;
    }

    public function hasDocumentOutputConfig()
    {
        return isset($this->document_output_config);
    }

    public function clearDocumentOutputConfig()
    {
        unset($this->document_output_config);
    }

    /**
     * The overall output config for batch process.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.DocumentOutputConfig document_output_config = 6;</code>
     * @param \Google\Cloud\DocumentAI\V1\DocumentOutputConfig $var
     * @return $this
     */
    public function setDocumentOutputConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DocumentAI\V1\DocumentOutputConfig::class);
        $this->document_output_config = $var;

        return $this;
    }

    /**
     * Whether Human Review feature should be skipped for this request. Default to
     * false.
     *
     * Generated from protobuf field <code>bool skip_human_review = 4;</code>
     * @return bool
     */
    public function getSkipHumanReview()
    {
        return $this->skip_human_review;
    }

    /**
     * Whether Human Review feature should be skipped for this request. Default to
     * false.
     *
     * Generated from protobuf field <code>bool skip_human_review = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setSkipHumanReview($var)
    {
        GPBUtil::checkBool($var);
        $this->skip_human_review = $var;

        return $this;
    }

}

