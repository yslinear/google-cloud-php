<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.HTTPSHealthCheck</code>
 */
class HTTPSHealthCheck extends \Google\Protobuf\Internal\Message
{
    /**
     * The value of the host header in the HTTPS health check request. If left empty (default value), the host header is set to the destination IP address to which health check packets are sent. The destination IP address depends on the type of load balancer. For details, see: https://cloud.google.com/load-balancing/docs/health-check-concepts#hc-packet-dest
     *
     * Generated from protobuf field <code>optional string host = 3208616;</code>
     */
    protected $host = null;
    /**
     * The TCP port number to which the health check prober sends packets. The default value is 443. Valid values are 1 through 65535.
     *
     * Generated from protobuf field <code>optional int32 port = 3446913;</code>
     */
    protected $port = null;
    /**
     * Not supported.
     *
     * Generated from protobuf field <code>optional string port_name = 41534345;</code>
     */
    protected $port_name = null;
    /**
     * Specifies how a port is selected for health checking. Can be one of the following values: USE_FIXED_PORT: Specifies a port number explicitly using the port field in the health check. Supported by backend services for pass-through load balancers and backend services for proxy load balancers. Not supported by target pools. The health check supports all backends supported by the backend service provided the backend can be health checked. For example, GCE_VM_IP network endpoint groups, GCE_VM_IP_PORT network endpoint groups, and instance group backends. USE_NAMED_PORT: Not supported. USE_SERVING_PORT: Provides an indirect method of specifying the health check port by referring to the backend service. Only supported by backend services for proxy load balancers. Not supported by target pools. Not supported by backend services for pass-through load balancers. Supports all backends that can be health checked; for example, GCE_VM_IP_PORT network endpoint groups and instance group backends. For GCE_VM_IP_PORT network endpoint group backends, the health check uses the port number specified for each endpoint in the network endpoint group. For instance group backends, the health check uses the port number determined by looking up the backend service's named port in the instance group's list of named ports.
     * Check the PortSpecification enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string port_specification = 51590597;</code>
     */
    protected $port_specification = null;
    /**
     * Specifies the type of proxy header to append before sending data to the backend, either NONE or PROXY_V1. The default is NONE.
     * Check the ProxyHeader enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string proxy_header = 160374142;</code>
     */
    protected $proxy_header = null;
    /**
     * The request path of the HTTPS health check request. The default value is /.
     *
     * Generated from protobuf field <code>optional string request_path = 229403605;</code>
     */
    protected $request_path = null;
    /**
     * Creates a content-based HTTPS health check. In addition to the required HTTP 200 (OK) status code, you can configure the health check to pass only when the backend sends this specific ASCII response string within the first 1024 bytes of the HTTP response body. For details, see: https://cloud.google.com/load-balancing/docs/health-check-concepts#criteria-protocol-http
     *
     * Generated from protobuf field <code>optional string response = 196547649;</code>
     */
    protected $response = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $host
     *           The value of the host header in the HTTPS health check request. If left empty (default value), the host header is set to the destination IP address to which health check packets are sent. The destination IP address depends on the type of load balancer. For details, see: https://cloud.google.com/load-balancing/docs/health-check-concepts#hc-packet-dest
     *     @type int $port
     *           The TCP port number to which the health check prober sends packets. The default value is 443. Valid values are 1 through 65535.
     *     @type string $port_name
     *           Not supported.
     *     @type string $port_specification
     *           Specifies how a port is selected for health checking. Can be one of the following values: USE_FIXED_PORT: Specifies a port number explicitly using the port field in the health check. Supported by backend services for pass-through load balancers and backend services for proxy load balancers. Not supported by target pools. The health check supports all backends supported by the backend service provided the backend can be health checked. For example, GCE_VM_IP network endpoint groups, GCE_VM_IP_PORT network endpoint groups, and instance group backends. USE_NAMED_PORT: Not supported. USE_SERVING_PORT: Provides an indirect method of specifying the health check port by referring to the backend service. Only supported by backend services for proxy load balancers. Not supported by target pools. Not supported by backend services for pass-through load balancers. Supports all backends that can be health checked; for example, GCE_VM_IP_PORT network endpoint groups and instance group backends. For GCE_VM_IP_PORT network endpoint group backends, the health check uses the port number specified for each endpoint in the network endpoint group. For instance group backends, the health check uses the port number determined by looking up the backend service's named port in the instance group's list of named ports.
     *           Check the PortSpecification enum for the list of possible values.
     *     @type string $proxy_header
     *           Specifies the type of proxy header to append before sending data to the backend, either NONE or PROXY_V1. The default is NONE.
     *           Check the ProxyHeader enum for the list of possible values.
     *     @type string $request_path
     *           The request path of the HTTPS health check request. The default value is /.
     *     @type string $response
     *           Creates a content-based HTTPS health check. In addition to the required HTTP 200 (OK) status code, you can configure the health check to pass only when the backend sends this specific ASCII response string within the first 1024 bytes of the HTTP response body. For details, see: https://cloud.google.com/load-balancing/docs/health-check-concepts#criteria-protocol-http
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The value of the host header in the HTTPS health check request. If left empty (default value), the host header is set to the destination IP address to which health check packets are sent. The destination IP address depends on the type of load balancer. For details, see: https://cloud.google.com/load-balancing/docs/health-check-concepts#hc-packet-dest
     *
     * Generated from protobuf field <code>optional string host = 3208616;</code>
     * @return string
     */
    public function getHost()
    {
        return isset($this->host) ? $this->host : '';
    }

    public function hasHost()
    {
        return isset($this->host);
    }

    public function clearHost()
    {
        unset($this->host);
    }

    /**
     * The value of the host header in the HTTPS health check request. If left empty (default value), the host header is set to the destination IP address to which health check packets are sent. The destination IP address depends on the type of load balancer. For details, see: https://cloud.google.com/load-balancing/docs/health-check-concepts#hc-packet-dest
     *
     * Generated from protobuf field <code>optional string host = 3208616;</code>
     * @param string $var
     * @return $this
     */
    public function setHost($var)
    {
        GPBUtil::checkString($var, True);
        $this->host = $var;

        return $this;
    }

    /**
     * The TCP port number to which the health check prober sends packets. The default value is 443. Valid values are 1 through 65535.
     *
     * Generated from protobuf field <code>optional int32 port = 3446913;</code>
     * @return int
     */
    public function getPort()
    {
        return isset($this->port) ? $this->port : 0;
    }

    public function hasPort()
    {
        return isset($this->port);
    }

    public function clearPort()
    {
        unset($this->port);
    }

    /**
     * The TCP port number to which the health check prober sends packets. The default value is 443. Valid values are 1 through 65535.
     *
     * Generated from protobuf field <code>optional int32 port = 3446913;</code>
     * @param int $var
     * @return $this
     */
    public function setPort($var)
    {
        GPBUtil::checkInt32($var);
        $this->port = $var;

        return $this;
    }

    /**
     * Not supported.
     *
     * Generated from protobuf field <code>optional string port_name = 41534345;</code>
     * @return string
     */
    public function getPortName()
    {
        return isset($this->port_name) ? $this->port_name : '';
    }

    public function hasPortName()
    {
        return isset($this->port_name);
    }

    public function clearPortName()
    {
        unset($this->port_name);
    }

    /**
     * Not supported.
     *
     * Generated from protobuf field <code>optional string port_name = 41534345;</code>
     * @param string $var
     * @return $this
     */
    public function setPortName($var)
    {
        GPBUtil::checkString($var, True);
        $this->port_name = $var;

        return $this;
    }

    /**
     * Specifies how a port is selected for health checking. Can be one of the following values: USE_FIXED_PORT: Specifies a port number explicitly using the port field in the health check. Supported by backend services for pass-through load balancers and backend services for proxy load balancers. Not supported by target pools. The health check supports all backends supported by the backend service provided the backend can be health checked. For example, GCE_VM_IP network endpoint groups, GCE_VM_IP_PORT network endpoint groups, and instance group backends. USE_NAMED_PORT: Not supported. USE_SERVING_PORT: Provides an indirect method of specifying the health check port by referring to the backend service. Only supported by backend services for proxy load balancers. Not supported by target pools. Not supported by backend services for pass-through load balancers. Supports all backends that can be health checked; for example, GCE_VM_IP_PORT network endpoint groups and instance group backends. For GCE_VM_IP_PORT network endpoint group backends, the health check uses the port number specified for each endpoint in the network endpoint group. For instance group backends, the health check uses the port number determined by looking up the backend service's named port in the instance group's list of named ports.
     * Check the PortSpecification enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string port_specification = 51590597;</code>
     * @return string
     */
    public function getPortSpecification()
    {
        return isset($this->port_specification) ? $this->port_specification : '';
    }

    public function hasPortSpecification()
    {
        return isset($this->port_specification);
    }

    public function clearPortSpecification()
    {
        unset($this->port_specification);
    }

    /**
     * Specifies how a port is selected for health checking. Can be one of the following values: USE_FIXED_PORT: Specifies a port number explicitly using the port field in the health check. Supported by backend services for pass-through load balancers and backend services for proxy load balancers. Not supported by target pools. The health check supports all backends supported by the backend service provided the backend can be health checked. For example, GCE_VM_IP network endpoint groups, GCE_VM_IP_PORT network endpoint groups, and instance group backends. USE_NAMED_PORT: Not supported. USE_SERVING_PORT: Provides an indirect method of specifying the health check port by referring to the backend service. Only supported by backend services for proxy load balancers. Not supported by target pools. Not supported by backend services for pass-through load balancers. Supports all backends that can be health checked; for example, GCE_VM_IP_PORT network endpoint groups and instance group backends. For GCE_VM_IP_PORT network endpoint group backends, the health check uses the port number specified for each endpoint in the network endpoint group. For instance group backends, the health check uses the port number determined by looking up the backend service's named port in the instance group's list of named ports.
     * Check the PortSpecification enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string port_specification = 51590597;</code>
     * @param string $var
     * @return $this
     */
    public function setPortSpecification($var)
    {
        GPBUtil::checkString($var, True);
        $this->port_specification = $var;

        return $this;
    }

    /**
     * Specifies the type of proxy header to append before sending data to the backend, either NONE or PROXY_V1. The default is NONE.
     * Check the ProxyHeader enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string proxy_header = 160374142;</code>
     * @return string
     */
    public function getProxyHeader()
    {
        return isset($this->proxy_header) ? $this->proxy_header : '';
    }

    public function hasProxyHeader()
    {
        return isset($this->proxy_header);
    }

    public function clearProxyHeader()
    {
        unset($this->proxy_header);
    }

    /**
     * Specifies the type of proxy header to append before sending data to the backend, either NONE or PROXY_V1. The default is NONE.
     * Check the ProxyHeader enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string proxy_header = 160374142;</code>
     * @param string $var
     * @return $this
     */
    public function setProxyHeader($var)
    {
        GPBUtil::checkString($var, True);
        $this->proxy_header = $var;

        return $this;
    }

    /**
     * The request path of the HTTPS health check request. The default value is /.
     *
     * Generated from protobuf field <code>optional string request_path = 229403605;</code>
     * @return string
     */
    public function getRequestPath()
    {
        return isset($this->request_path) ? $this->request_path : '';
    }

    public function hasRequestPath()
    {
        return isset($this->request_path);
    }

    public function clearRequestPath()
    {
        unset($this->request_path);
    }

    /**
     * The request path of the HTTPS health check request. The default value is /.
     *
     * Generated from protobuf field <code>optional string request_path = 229403605;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_path = $var;

        return $this;
    }

    /**
     * Creates a content-based HTTPS health check. In addition to the required HTTP 200 (OK) status code, you can configure the health check to pass only when the backend sends this specific ASCII response string within the first 1024 bytes of the HTTP response body. For details, see: https://cloud.google.com/load-balancing/docs/health-check-concepts#criteria-protocol-http
     *
     * Generated from protobuf field <code>optional string response = 196547649;</code>
     * @return string
     */
    public function getResponse()
    {
        return isset($this->response) ? $this->response : '';
    }

    public function hasResponse()
    {
        return isset($this->response);
    }

    public function clearResponse()
    {
        unset($this->response);
    }

    /**
     * Creates a content-based HTTPS health check. In addition to the required HTTP 200 (OK) status code, you can configure the health check to pass only when the backend sends this specific ASCII response string within the first 1024 bytes of the HTTP response body. For details, see: https://cloud.google.com/load-balancing/docs/health-check-concepts#criteria-protocol-http
     *
     * Generated from protobuf field <code>optional string response = 196547649;</code>
     * @param string $var
     * @return $this
     */
    public function setResponse($var)
    {
        GPBUtil::checkString($var, True);
        $this->response = $var;

        return $this;
    }

}

