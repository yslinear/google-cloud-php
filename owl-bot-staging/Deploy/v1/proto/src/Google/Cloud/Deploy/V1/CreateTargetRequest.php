<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request object for `CreateTarget`.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.CreateTargetRequest</code>
 */
class CreateTargetRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent collection in which the `Target` should be created.
     * Format should be
     * projects/{project_id}/locations/{location_name}.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. ID of the `Target`.
     *
     * Generated from protobuf field <code>string target_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $target_id = '';
    /**
     * Required. The `Target` to create.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.Target target = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $target = null;
    /**
     * Optional. A request ID to identify requests. Specify a unique request ID
     * so that if you must retry your request, the server will know to ignore
     * the request if it has already been completed. The server will guarantee
     * that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request ID,
     * the server can check if original operation with the same request ID was
     * received, and if so, will ignore the second request. This prevents clients
     * from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $request_id = '';
    /**
     * Optional. If set to true, the request is validated and the user is provided
     * with an expected result, but no actual change is made.
     *
     * Generated from protobuf field <code>bool validate_only = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $validate_only = false;

    /**
     * @param string                         $parent   Required. The parent collection in which the `Target` should be created.
     *                                                 Format should be
     *                                                 projects/{project_id}/locations/{location_name}. Please see
     *                                                 {@see CloudDeployClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\Deploy\V1\Target $target   Required. The `Target` to create.
     * @param string                         $targetId Required. ID of the `Target`.
     *
     * @return \Google\Cloud\Deploy\V1\CreateTargetRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\Deploy\V1\Target $target, string $targetId): self
    {
        return (new self())
            ->setParent($parent)
            ->setTarget($target)
            ->setTargetId($targetId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent collection in which the `Target` should be created.
     *           Format should be
     *           projects/{project_id}/locations/{location_name}.
     *     @type string $target_id
     *           Required. ID of the `Target`.
     *     @type \Google\Cloud\Deploy\V1\Target $target
     *           Required. The `Target` to create.
     *     @type string $request_id
     *           Optional. A request ID to identify requests. Specify a unique request ID
     *           so that if you must retry your request, the server will know to ignore
     *           the request if it has already been completed. The server will guarantee
     *           that for at least 60 minutes since the first request.
     *           For example, consider a situation where you make an initial request and the
     *           request times out. If you make the request again with the same request ID,
     *           the server can check if original operation with the same request ID was
     *           received, and if so, will ignore the second request. This prevents clients
     *           from accidentally creating duplicate commitments.
     *           The request ID must be a valid UUID with the exception that zero UUID is
     *           not supported (00000000-0000-0000-0000-000000000000).
     *     @type bool $validate_only
     *           Optional. If set to true, the request is validated and the user is provided
     *           with an expected result, but no actual change is made.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\CloudDeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent collection in which the `Target` should be created.
     * Format should be
     * projects/{project_id}/locations/{location_name}.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent collection in which the `Target` should be created.
     * Format should be
     * projects/{project_id}/locations/{location_name}.
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
     * Required. ID of the `Target`.
     *
     * Generated from protobuf field <code>string target_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getTargetId()
    {
        return $this->target_id;
    }

    /**
     * Required. ID of the `Target`.
     *
     * Generated from protobuf field <code>string target_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setTargetId($var)
    {
        GPBUtil::checkString($var, True);
        $this->target_id = $var;

        return $this;
    }

    /**
     * Required. The `Target` to create.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.Target target = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Deploy\V1\Target|null
     */
    public function getTarget()
    {
        return $this->target;
    }

    public function hasTarget()
    {
        return isset($this->target);
    }

    public function clearTarget()
    {
        unset($this->target);
    }

    /**
     * Required. The `Target` to create.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.Target target = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Deploy\V1\Target $var
     * @return $this
     */
    public function setTarget($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Deploy\V1\Target::class);
        $this->target = $var;

        return $this;
    }

    /**
     * Optional. A request ID to identify requests. Specify a unique request ID
     * so that if you must retry your request, the server will know to ignore
     * the request if it has already been completed. The server will guarantee
     * that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request ID,
     * the server can check if original operation with the same request ID was
     * received, and if so, will ignore the second request. This prevents clients
     * from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. A request ID to identify requests. Specify a unique request ID
     * so that if you must retry your request, the server will know to ignore
     * the request if it has already been completed. The server will guarantee
     * that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request ID,
     * the server can check if original operation with the same request ID was
     * received, and if so, will ignore the second request. This prevents clients
     * from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

    /**
     * Optional. If set to true, the request is validated and the user is provided
     * with an expected result, but no actual change is made.
     *
     * Generated from protobuf field <code>bool validate_only = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * Optional. If set to true, the request is validated and the user is provided
     * with an expected result, but no actual change is made.
     *
     * Generated from protobuf field <code>bool validate_only = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

}

