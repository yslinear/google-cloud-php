<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/policytagmanager.proto

namespace Google\Cloud\DataCatalog\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [UpdatePolicyTag][google.cloud.datacatalog.v1.PolicyTagManager.UpdatePolicyTag].
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.UpdatePolicyTagRequest</code>
 */
class UpdatePolicyTagRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The policy tag to update. You can update only its description, display
     * name, and parent policy tag fields.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.PolicyTag policy_tag = 1;</code>
     */
    private $policy_tag = null;
    /**
     * Specifies the fields to update.
     * You can update only display name, description, and parent policy tag.
     * If not set, defaults to all updatable fields.
     * For more information, see [FieldMask]
     * (https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask).
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    private $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DataCatalog\V1\PolicyTag $policy_tag
     *           The policy tag to update. You can update only its description, display
     *           name, and parent policy tag fields.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Specifies the fields to update.
     *           You can update only display name, description, and parent policy tag.
     *           If not set, defaults to all updatable fields.
     *           For more information, see [FieldMask]
     *           (https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Policytagmanager::initOnce();
        parent::__construct($data);
    }

    /**
     * The policy tag to update. You can update only its description, display
     * name, and parent policy tag fields.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.PolicyTag policy_tag = 1;</code>
     * @return \Google\Cloud\DataCatalog\V1\PolicyTag|null
     */
    public function getPolicyTag()
    {
        return $this->policy_tag;
    }

    public function hasPolicyTag()
    {
        return isset($this->policy_tag);
    }

    public function clearPolicyTag()
    {
        unset($this->policy_tag);
    }

    /**
     * The policy tag to update. You can update only its description, display
     * name, and parent policy tag fields.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.PolicyTag policy_tag = 1;</code>
     * @param \Google\Cloud\DataCatalog\V1\PolicyTag $var
     * @return $this
     */
    public function setPolicyTag($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataCatalog\V1\PolicyTag::class);
        $this->policy_tag = $var;

        return $this;
    }

    /**
     * Specifies the fields to update.
     * You can update only display name, description, and parent policy tag.
     * If not set, defaults to all updatable fields.
     * For more information, see [FieldMask]
     * (https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask).
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Specifies the fields to update.
     * You can update only display name, description, and parent policy tag.
     * If not set, defaults to all updatable fields.
     * For more information, see [FieldMask]
     * (https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask).
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

