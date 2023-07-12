<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Fleet is the fleet configuration for the cluster.
 *
 * Generated from protobuf message <code>google.container.v1.Fleet</code>
 */
class Fleet extends \Google\Protobuf\Internal\Message
{
    /**
     * The Fleet host project(project ID or project number) where this cluster
     * will be registered to. This field cannot be changed after the cluster has
     * been registered.
     *
     * Generated from protobuf field <code>string project = 1;</code>
     */
    protected $project = '';
    /**
     * [Output only] The full resource name of the registered fleet membership of
     * the cluster, in the format
     * `//gkehub.googleapis.com/projects/&#42;&#47;locations/&#42;&#47;memberships/&#42;`.
     *
     * Generated from protobuf field <code>string membership = 2;</code>
     */
    protected $membership = '';
    /**
     * [Output only] Whether the cluster has been registered through the fleet
     * API.
     *
     * Generated from protobuf field <code>bool pre_registered = 3;</code>
     */
    protected $pre_registered = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project
     *           The Fleet host project(project ID or project number) where this cluster
     *           will be registered to. This field cannot be changed after the cluster has
     *           been registered.
     *     @type string $membership
     *           [Output only] The full resource name of the registered fleet membership of
     *           the cluster, in the format
     *           `//gkehub.googleapis.com/projects/&#42;&#47;locations/&#42;&#47;memberships/&#42;`.
     *     @type bool $pre_registered
     *           [Output only] Whether the cluster has been registered through the fleet
     *           API.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * The Fleet host project(project ID or project number) where this cluster
     * will be registered to. This field cannot be changed after the cluster has
     * been registered.
     *
     * Generated from protobuf field <code>string project = 1;</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * The Fleet host project(project ID or project number) where this cluster
     * will be registered to. This field cannot be changed after the cluster has
     * been registered.
     *
     * Generated from protobuf field <code>string project = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

    /**
     * [Output only] The full resource name of the registered fleet membership of
     * the cluster, in the format
     * `//gkehub.googleapis.com/projects/&#42;&#47;locations/&#42;&#47;memberships/&#42;`.
     *
     * Generated from protobuf field <code>string membership = 2;</code>
     * @return string
     */
    public function getMembership()
    {
        return $this->membership;
    }

    /**
     * [Output only] The full resource name of the registered fleet membership of
     * the cluster, in the format
     * `//gkehub.googleapis.com/projects/&#42;&#47;locations/&#42;&#47;memberships/&#42;`.
     *
     * Generated from protobuf field <code>string membership = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMembership($var)
    {
        GPBUtil::checkString($var, True);
        $this->membership = $var;

        return $this;
    }

    /**
     * [Output only] Whether the cluster has been registered through the fleet
     * API.
     *
     * Generated from protobuf field <code>bool pre_registered = 3;</code>
     * @return bool
     */
    public function getPreRegistered()
    {
        return $this->pre_registered;
    }

    /**
     * [Output only] Whether the cluster has been registered through the fleet
     * API.
     *
     * Generated from protobuf field <code>bool pre_registered = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setPreRegistered($var)
    {
        GPBUtil::checkBool($var);
        $this->pre_registered = $var;

        return $this;
    }

}

