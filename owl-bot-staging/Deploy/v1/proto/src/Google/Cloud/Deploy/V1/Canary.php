<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Canary represents the canary deployment strategy.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.Canary</code>
 */
class Canary extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Runtime specific configurations for the deployment strategy. The
     * runtime configuration is used to determine how Cloud Deploy will split
     * traffic to enable a progressive deployment.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.RuntimeConfig runtime_config = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $runtime_config = null;
    protected $mode;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Deploy\V1\RuntimeConfig $runtime_config
     *           Optional. Runtime specific configurations for the deployment strategy. The
     *           runtime configuration is used to determine how Cloud Deploy will split
     *           traffic to enable a progressive deployment.
     *     @type \Google\Cloud\Deploy\V1\CanaryDeployment $canary_deployment
     *           Configures the progressive based deployment for a Target.
     *     @type \Google\Cloud\Deploy\V1\CustomCanaryDeployment $custom_canary_deployment
     *           Configures the progressive based deployment for a Target, but allows
     *           customizing at the phase level where a phase represents each of the
     *           percentage deployments.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\CloudDeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Runtime specific configurations for the deployment strategy. The
     * runtime configuration is used to determine how Cloud Deploy will split
     * traffic to enable a progressive deployment.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.RuntimeConfig runtime_config = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Deploy\V1\RuntimeConfig|null
     */
    public function getRuntimeConfig()
    {
        return $this->runtime_config;
    }

    public function hasRuntimeConfig()
    {
        return isset($this->runtime_config);
    }

    public function clearRuntimeConfig()
    {
        unset($this->runtime_config);
    }

    /**
     * Optional. Runtime specific configurations for the deployment strategy. The
     * runtime configuration is used to determine how Cloud Deploy will split
     * traffic to enable a progressive deployment.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.RuntimeConfig runtime_config = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Deploy\V1\RuntimeConfig $var
     * @return $this
     */
    public function setRuntimeConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Deploy\V1\RuntimeConfig::class);
        $this->runtime_config = $var;

        return $this;
    }

    /**
     * Configures the progressive based deployment for a Target.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.CanaryDeployment canary_deployment = 2;</code>
     * @return \Google\Cloud\Deploy\V1\CanaryDeployment|null
     */
    public function getCanaryDeployment()
    {
        return $this->readOneof(2);
    }

    public function hasCanaryDeployment()
    {
        return $this->hasOneof(2);
    }

    /**
     * Configures the progressive based deployment for a Target.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.CanaryDeployment canary_deployment = 2;</code>
     * @param \Google\Cloud\Deploy\V1\CanaryDeployment $var
     * @return $this
     */
    public function setCanaryDeployment($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Deploy\V1\CanaryDeployment::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Configures the progressive based deployment for a Target, but allows
     * customizing at the phase level where a phase represents each of the
     * percentage deployments.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.CustomCanaryDeployment custom_canary_deployment = 3;</code>
     * @return \Google\Cloud\Deploy\V1\CustomCanaryDeployment|null
     */
    public function getCustomCanaryDeployment()
    {
        return $this->readOneof(3);
    }

    public function hasCustomCanaryDeployment()
    {
        return $this->hasOneof(3);
    }

    /**
     * Configures the progressive based deployment for a Target, but allows
     * customizing at the phase level where a phase represents each of the
     * percentage deployments.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.CustomCanaryDeployment custom_canary_deployment = 3;</code>
     * @param \Google\Cloud\Deploy\V1\CustomCanaryDeployment $var
     * @return $this
     */
    public function setCustomCanaryDeployment($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Deploy\V1\CustomCanaryDeployment::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getMode()
    {
        return $this->whichOneof("mode");
    }

}

