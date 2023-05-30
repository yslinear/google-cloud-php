<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/apigateway/v1/apigateway.proto

namespace Google\Cloud\ApiGateway\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for ApiGatewayService.DeleteApiConfig
 *
 * Generated from protobuf message <code>google.cloud.apigateway.v1.DeleteApiConfigRequest</code>
 */
class DeleteApiConfigRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Resource name of the form:
     * `projects/&#42;&#47;locations/global/apis/&#42;&#47;configs/&#42;`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';

    /**
     * @param string $name Required. Resource name of the form:
     *                     `projects/&#42;/locations/global/apis/&#42;/configs/*`
     *                     Please see {@see ApiGatewayServiceClient::apiConfigName()} for help formatting this field.
     *
     * @return \Google\Cloud\ApiGateway\V1\DeleteApiConfigRequest
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
     *           Required. Resource name of the form:
     *           `projects/&#42;&#47;locations/global/apis/&#42;&#47;configs/&#42;`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Apigateway\V1\Apigateway::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Resource name of the form:
     * `projects/&#42;&#47;locations/global/apis/&#42;&#47;configs/&#42;`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Resource name of the form:
     * `projects/&#42;&#47;locations/global/apis/&#42;&#47;configs/&#42;`
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

