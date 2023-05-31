<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for GetInspectTemplate.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.GetInspectTemplateRequest</code>
 */
class GetInspectTemplateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Resource name of the organization and inspectTemplate to be read, for
     * example `organizations/433245324/inspectTemplates/432452342` or
     * projects/project-id/inspectTemplates/432452342.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. Resource name of the organization and inspectTemplate to be read, for
     *                     example `organizations/433245324/inspectTemplates/432452342` or
     *                     projects/project-id/inspectTemplates/432452342. Please see
     *                     {@see DlpServiceClient::inspectTemplateName()} for help formatting this field.
     *
     * @return \Google\Cloud\Dlp\V2\GetInspectTemplateRequest
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
     *           Required. Resource name of the organization and inspectTemplate to be read, for
     *           example `organizations/433245324/inspectTemplates/432452342` or
     *           projects/project-id/inspectTemplates/432452342.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Resource name of the organization and inspectTemplate to be read, for
     * example `organizations/433245324/inspectTemplates/432452342` or
     * projects/project-id/inspectTemplates/432452342.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Resource name of the organization and inspectTemplate to be read, for
     * example `organizations/433245324/inspectTemplates/432452342` or
     * projects/project-id/inspectTemplates/432452342.
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

}

