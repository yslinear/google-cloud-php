<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataform/v1beta1/dataform.proto

namespace Google\Cloud\Dataform\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * `ListWorkflowInvocations` request message.
 *
 * Generated from protobuf message <code>google.cloud.dataform.v1beta1.ListWorkflowInvocationsRequest</code>
 */
class ListWorkflowInvocationsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource of the WorkflowInvocation type. Must be in the
     * format `projects/&#42;&#47;locations/&#42;&#47;repositories/&#42;`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Optional. Maximum number of workflow invocations to return. The server may return
     * fewer items than requested. If unspecified, the server will pick an
     * appropriate default.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_size = 0;
    /**
     * Optional. Page token received from a previous `ListWorkflowInvocations` call.
     * Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to `ListWorkflowInvocations`
     * must match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent resource of the WorkflowInvocation type. Must be in the
     *           format `projects/&#42;&#47;locations/&#42;&#47;repositories/&#42;`.
     *     @type int $page_size
     *           Optional. Maximum number of workflow invocations to return. The server may return
     *           fewer items than requested. If unspecified, the server will pick an
     *           appropriate default.
     *     @type string $page_token
     *           Optional. Page token received from a previous `ListWorkflowInvocations` call.
     *           Provide this to retrieve the subsequent page.
     *           When paginating, all other parameters provided to `ListWorkflowInvocations`
     *           must match the call that provided the page token.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataform\V1Beta1\Dataform::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent resource of the WorkflowInvocation type. Must be in the
     * format `projects/&#42;&#47;locations/&#42;&#47;repositories/&#42;`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent resource of the WorkflowInvocation type. Must be in the
     * format `projects/&#42;&#47;locations/&#42;&#47;repositories/&#42;`.
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

    /**
     * Optional. Maximum number of workflow invocations to return. The server may return
     * fewer items than requested. If unspecified, the server will pick an
     * appropriate default.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. Maximum number of workflow invocations to return. The server may return
     * fewer items than requested. If unspecified, the server will pick an
     * appropriate default.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Optional. Page token received from a previous `ListWorkflowInvocations` call.
     * Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to `ListWorkflowInvocations`
     * must match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. Page token received from a previous `ListWorkflowInvocations` call.
     * Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to `ListWorkflowInvocations`
     * must match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

