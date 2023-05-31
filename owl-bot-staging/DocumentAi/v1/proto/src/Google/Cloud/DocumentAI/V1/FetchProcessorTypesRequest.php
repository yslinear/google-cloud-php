<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/document_processor_service.proto

namespace Google\Cloud\DocumentAI\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for fetch processor types.
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1.FetchProcessorTypesRequest</code>
 */
class FetchProcessorTypesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The project of processor type to list.
     * The available processor types may depend on the allow-listing on projects.
     * Format: `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';

    /**
     * @param string $parent Required. The project of processor type to list.
     *                       The available processor types may depend on the allow-listing on projects.
     *                       Format: `projects/{project}/locations/{location}`
     *                       Please see {@see DocumentProcessorServiceClient::locationName()} for help formatting this field.
     *
     * @return \Google\Cloud\DocumentAI\V1\FetchProcessorTypesRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The project of processor type to list.
     *           The available processor types may depend on the allow-listing on projects.
     *           Format: `projects/{project}/locations/{location}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1\DocumentProcessorService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The project of processor type to list.
     * The available processor types may depend on the allow-listing on projects.
     * Format: `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The project of processor type to list.
     * The available processor types may depend on the allow-listing on projects.
     * Format: `projects/{project}/locations/{location}`
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

}

