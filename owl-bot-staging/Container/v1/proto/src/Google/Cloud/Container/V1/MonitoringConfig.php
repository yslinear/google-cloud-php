<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MonitoringConfig is cluster monitoring configuration.
 *
 * Generated from protobuf message <code>google.container.v1.MonitoringConfig</code>
 */
class MonitoringConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Monitoring components configuration
     *
     * Generated from protobuf field <code>.google.container.v1.MonitoringComponentConfig component_config = 1;</code>
     */
    protected $component_config = null;
    /**
     * Enable Google Cloud Managed Service for Prometheus
     * in the cluster.
     *
     * Generated from protobuf field <code>.google.container.v1.ManagedPrometheusConfig managed_prometheus_config = 2;</code>
     */
    protected $managed_prometheus_config = null;
    /**
     * Configuration of Advanced Datapath Observability features.
     *
     * Generated from protobuf field <code>.google.container.v1.AdvancedDatapathObservabilityConfig advanced_datapath_observability_config = 3;</code>
     */
    protected $advanced_datapath_observability_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Container\V1\MonitoringComponentConfig $component_config
     *           Monitoring components configuration
     *     @type \Google\Cloud\Container\V1\ManagedPrometheusConfig $managed_prometheus_config
     *           Enable Google Cloud Managed Service for Prometheus
     *           in the cluster.
     *     @type \Google\Cloud\Container\V1\AdvancedDatapathObservabilityConfig $advanced_datapath_observability_config
     *           Configuration of Advanced Datapath Observability features.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Monitoring components configuration
     *
     * Generated from protobuf field <code>.google.container.v1.MonitoringComponentConfig component_config = 1;</code>
     * @return \Google\Cloud\Container\V1\MonitoringComponentConfig|null
     */
    public function getComponentConfig()
    {
        return $this->component_config;
    }

    public function hasComponentConfig()
    {
        return isset($this->component_config);
    }

    public function clearComponentConfig()
    {
        unset($this->component_config);
    }

    /**
     * Monitoring components configuration
     *
     * Generated from protobuf field <code>.google.container.v1.MonitoringComponentConfig component_config = 1;</code>
     * @param \Google\Cloud\Container\V1\MonitoringComponentConfig $var
     * @return $this
     */
    public function setComponentConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\MonitoringComponentConfig::class);
        $this->component_config = $var;

        return $this;
    }

    /**
     * Enable Google Cloud Managed Service for Prometheus
     * in the cluster.
     *
     * Generated from protobuf field <code>.google.container.v1.ManagedPrometheusConfig managed_prometheus_config = 2;</code>
     * @return \Google\Cloud\Container\V1\ManagedPrometheusConfig|null
     */
    public function getManagedPrometheusConfig()
    {
        return $this->managed_prometheus_config;
    }

    public function hasManagedPrometheusConfig()
    {
        return isset($this->managed_prometheus_config);
    }

    public function clearManagedPrometheusConfig()
    {
        unset($this->managed_prometheus_config);
    }

    /**
     * Enable Google Cloud Managed Service for Prometheus
     * in the cluster.
     *
     * Generated from protobuf field <code>.google.container.v1.ManagedPrometheusConfig managed_prometheus_config = 2;</code>
     * @param \Google\Cloud\Container\V1\ManagedPrometheusConfig $var
     * @return $this
     */
    public function setManagedPrometheusConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\ManagedPrometheusConfig::class);
        $this->managed_prometheus_config = $var;

        return $this;
    }

    /**
     * Configuration of Advanced Datapath Observability features.
     *
     * Generated from protobuf field <code>.google.container.v1.AdvancedDatapathObservabilityConfig advanced_datapath_observability_config = 3;</code>
     * @return \Google\Cloud\Container\V1\AdvancedDatapathObservabilityConfig|null
     */
    public function getAdvancedDatapathObservabilityConfig()
    {
        return $this->advanced_datapath_observability_config;
    }

    public function hasAdvancedDatapathObservabilityConfig()
    {
        return isset($this->advanced_datapath_observability_config);
    }

    public function clearAdvancedDatapathObservabilityConfig()
    {
        unset($this->advanced_datapath_observability_config);
    }

    /**
     * Configuration of Advanced Datapath Observability features.
     *
     * Generated from protobuf field <code>.google.container.v1.AdvancedDatapathObservabilityConfig advanced_datapath_observability_config = 3;</code>
     * @param \Google\Cloud\Container\V1\AdvancedDatapathObservabilityConfig $var
     * @return $this
     */
    public function setAdvancedDatapathObservabilityConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\AdvancedDatapathObservabilityConfig::class);
        $this->advanced_datapath_observability_config = $var;

        return $this;
    }

}

