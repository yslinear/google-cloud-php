<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/document_processor_service.proto

namespace Google\Cloud\DocumentAI\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for the set default processor version method.
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1.SetDefaultProcessorVersionRequest</code>
 */
class SetDefaultProcessorVersionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the
     * [Processor][google.cloud.documentai.v1.Processor] to change default
     * version.
     *
     * Generated from protobuf field <code>string processor = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $processor = '';
    /**
     * Required. The resource name of child
     * [ProcessorVersion][google.cloud.documentai.v1.ProcessorVersion] to use as
     * default. Format:
     * `projects/{project}/locations/{location}/processors/{processor}/processorVersions/{version}`
     *
     * Generated from protobuf field <code>string default_processor_version = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $default_processor_version = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $processor
     *           Required. The resource name of the
     *           [Processor][google.cloud.documentai.v1.Processor] to change default
     *           version.
     *     @type string $default_processor_version
     *           Required. The resource name of child
     *           [ProcessorVersion][google.cloud.documentai.v1.ProcessorVersion] to use as
     *           default. Format:
     *           `projects/{project}/locations/{location}/processors/{processor}/processorVersions/{version}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1\DocumentProcessorService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the
     * [Processor][google.cloud.documentai.v1.Processor] to change default
     * version.
     *
     * Generated from protobuf field <code>string processor = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getProcessor()
    {
        return $this->processor;
    }

    /**
     * Required. The resource name of the
     * [Processor][google.cloud.documentai.v1.Processor] to change default
     * version.
     *
     * Generated from protobuf field <code>string processor = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setProcessor($var)
    {
        GPBUtil::checkString($var, True);
        $this->processor = $var;

        return $this;
    }

    /**
     * Required. The resource name of child
     * [ProcessorVersion][google.cloud.documentai.v1.ProcessorVersion] to use as
     * default. Format:
     * `projects/{project}/locations/{location}/processors/{processor}/processorVersions/{version}`
     *
     * Generated from protobuf field <code>string default_processor_version = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getDefaultProcessorVersion()
    {
        return $this->default_processor_version;
    }

    /**
     * Required. The resource name of child
     * [ProcessorVersion][google.cloud.documentai.v1.ProcessorVersion] to use as
     * default. Format:
     * `projects/{project}/locations/{location}/processors/{processor}/processorVersions/{version}`
     *
     * Generated from protobuf field <code>string default_processor_version = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setDefaultProcessorVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->default_processor_version = $var;

        return $this;
    }

}

