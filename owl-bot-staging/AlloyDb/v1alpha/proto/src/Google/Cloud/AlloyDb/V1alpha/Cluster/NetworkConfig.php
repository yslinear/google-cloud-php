<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/alloydb/v1alpha/resources.proto

namespace Google\Cloud\AlloyDb\V1alpha\Cluster;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata related to network configuration.
 *
 * Generated from protobuf message <code>google.cloud.alloydb.v1alpha.Cluster.NetworkConfig</code>
 */
class NetworkConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource link for the VPC network in which cluster
     * resources are created and from which they are accessible via Private IP.
     * The network must belong to the same project as the cluster. It is
     * specified in the form:
     * "projects/{project_number}/global/networks/{network_id}". This is
     * required to create a cluster. It can be updated, but it cannot be
     * removed.
     *
     * Generated from protobuf field <code>string network = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $network = '';
    /**
     * Optional. The name of the allocated IP range for the private IP AlloyDB
     * cluster. For example: "google-managed-services-default". If set, the
     * instance IPs for this cluster will be created in the allocated range. The
     * range name must comply with RFC 1035. Specifically, the name must be 1-63
     * characters long and match the regular expression
     * [a-z]([-a-z0-9]*[a-z0-9])?.
     * Field name is intended to be consistent with CloudSQL.
     *
     * Generated from protobuf field <code>string allocated_ip_range = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $allocated_ip_range = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $network
     *           Required. The resource link for the VPC network in which cluster
     *           resources are created and from which they are accessible via Private IP.
     *           The network must belong to the same project as the cluster. It is
     *           specified in the form:
     *           "projects/{project_number}/global/networks/{network_id}". This is
     *           required to create a cluster. It can be updated, but it cannot be
     *           removed.
     *     @type string $allocated_ip_range
     *           Optional. The name of the allocated IP range for the private IP AlloyDB
     *           cluster. For example: "google-managed-services-default". If set, the
     *           instance IPs for this cluster will be created in the allocated range. The
     *           range name must comply with RFC 1035. Specifically, the name must be 1-63
     *           characters long and match the regular expression
     *           [a-z]([-a-z0-9]*[a-z0-9])?.
     *           Field name is intended to be consistent with CloudSQL.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Alloydb\V1Alpha\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource link for the VPC network in which cluster
     * resources are created and from which they are accessible via Private IP.
     * The network must belong to the same project as the cluster. It is
     * specified in the form:
     * "projects/{project_number}/global/networks/{network_id}". This is
     * required to create a cluster. It can be updated, but it cannot be
     * removed.
     *
     * Generated from protobuf field <code>string network = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * Required. The resource link for the VPC network in which cluster
     * resources are created and from which they are accessible via Private IP.
     * The network must belong to the same project as the cluster. It is
     * specified in the form:
     * "projects/{project_number}/global/networks/{network_id}". This is
     * required to create a cluster. It can be updated, but it cannot be
     * removed.
     *
     * Generated from protobuf field <code>string network = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setNetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->network = $var;

        return $this;
    }

    /**
     * Optional. The name of the allocated IP range for the private IP AlloyDB
     * cluster. For example: "google-managed-services-default". If set, the
     * instance IPs for this cluster will be created in the allocated range. The
     * range name must comply with RFC 1035. Specifically, the name must be 1-63
     * characters long and match the regular expression
     * [a-z]([-a-z0-9]*[a-z0-9])?.
     * Field name is intended to be consistent with CloudSQL.
     *
     * Generated from protobuf field <code>string allocated_ip_range = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getAllocatedIpRange()
    {
        return $this->allocated_ip_range;
    }

    /**
     * Optional. The name of the allocated IP range for the private IP AlloyDB
     * cluster. For example: "google-managed-services-default". If set, the
     * instance IPs for this cluster will be created in the allocated range. The
     * range name must comply with RFC 1035. Specifically, the name must be 1-63
     * characters long and match the regular expression
     * [a-z]([-a-z0-9]*[a-z0-9])?.
     * Field name is intended to be consistent with CloudSQL.
     *
     * Generated from protobuf field <code>string allocated_ip_range = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setAllocatedIpRange($var)
    {
        GPBUtil::checkString($var, True);
        $this->allocated_ip_range = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(NetworkConfig::class, \Google\Cloud\AlloyDb\V1alpha\Cluster_NetworkConfig::class);

