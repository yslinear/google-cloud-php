<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1\KubernetesConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information about the Kubernetes Service networking configuration.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.KubernetesConfig.ServiceNetworking</code>
 */
class ServiceNetworking extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the Kubernetes Service.
     *
     * Generated from protobuf field <code>string service = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $service = '';
    /**
     * Required. Name of the Kubernetes Deployment whose traffic is managed by
     * the specified Service.
     *
     * Generated from protobuf field <code>string deployment = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $deployment = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $service
     *           Required. Name of the Kubernetes Service.
     *     @type string $deployment
     *           Required. Name of the Kubernetes Deployment whose traffic is managed by
     *           the specified Service.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\CloudDeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the Kubernetes Service.
     *
     * Generated from protobuf field <code>string service = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Required. Name of the Kubernetes Service.
     *
     * Generated from protobuf field <code>string service = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setService($var)
    {
        GPBUtil::checkString($var, True);
        $this->service = $var;

        return $this;
    }

    /**
     * Required. Name of the Kubernetes Deployment whose traffic is managed by
     * the specified Service.
     *
     * Generated from protobuf field <code>string deployment = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDeployment()
    {
        return $this->deployment;
    }

    /**
     * Required. Name of the Kubernetes Deployment whose traffic is managed by
     * the specified Service.
     *
     * Generated from protobuf field <code>string deployment = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDeployment($var)
    {
        GPBUtil::checkString($var, True);
        $this->deployment = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ServiceNetworking::class, \Google\Cloud\Deploy\V1\KubernetesConfig_ServiceNetworking::class);

