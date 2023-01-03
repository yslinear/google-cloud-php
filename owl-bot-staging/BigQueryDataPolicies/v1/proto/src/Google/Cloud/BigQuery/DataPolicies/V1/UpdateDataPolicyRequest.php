<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/datapolicies/v1/datapolicy.proto

namespace Google\Cloud\BigQuery\DataPolicies\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for the UpdateDataPolicy method.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.datapolicies.v1.UpdateDataPolicyRequest</code>
 */
class UpdateDataPolicyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Update the data policy's metadata.
     * The target data policy is determined by the `name` field.
     * Other fields are updated to the specified values based on the field masks.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.datapolicies.v1.DataPolicy data_policy = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $data_policy = null;
    /**
     * The update mask applies to the resource. For the `FieldMask` definition,
     * see
     * https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask
     * If not set, defaults to all of the fields that are allowed to update.
     * Updates to the `name` and `dataPolicyId` fields are not allowed.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    protected $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\BigQuery\DataPolicies\V1\DataPolicy $data_policy
     *           Required. Update the data policy's metadata.
     *           The target data policy is determined by the `name` field.
     *           Other fields are updated to the specified values based on the field masks.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           The update mask applies to the resource. For the `FieldMask` definition,
     *           see
     *           https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask
     *           If not set, defaults to all of the fields that are allowed to update.
     *           Updates to the `name` and `dataPolicyId` fields are not allowed.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Datapolicies\V1\Datapolicy::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Update the data policy's metadata.
     * The target data policy is determined by the `name` field.
     * Other fields are updated to the specified values based on the field masks.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.datapolicies.v1.DataPolicy data_policy = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\BigQuery\DataPolicies\V1\DataPolicy|null
     */
    public function getDataPolicy()
    {
        return $this->data_policy;
    }

    public function hasDataPolicy()
    {
        return isset($this->data_policy);
    }

    public function clearDataPolicy()
    {
        unset($this->data_policy);
    }

    /**
     * Required. Update the data policy's metadata.
     * The target data policy is determined by the `name` field.
     * Other fields are updated to the specified values based on the field masks.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.datapolicies.v1.DataPolicy data_policy = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\BigQuery\DataPolicies\V1\DataPolicy $var
     * @return $this
     */
    public function setDataPolicy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\DataPolicies\V1\DataPolicy::class);
        $this->data_policy = $var;

        return $this;
    }

    /**
     * The update mask applies to the resource. For the `FieldMask` definition,
     * see
     * https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask
     * If not set, defaults to all of the fields that are allowed to update.
     * Updates to the `name` and `dataPolicyId` fields are not allowed.
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
     * The update mask applies to the resource. For the `FieldMask` definition,
     * see
     * https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask
     * If not set, defaults to all of the fields that are allowed to update.
     * Updates to the `name` and `dataPolicyId` fields are not allowed.
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

