<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/fulfillment.proto

namespace Google\Cloud\Dialogflow\V2\Fulfillment;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents configuration for a generic web service.
 * Dialogflow supports two mechanisms for authentications:
 * - Basic authentication with username and password.
 * - Authentication with additional authentication headers.
 * More information could be found at:
 * https://cloud.google.com/dialogflow/docs/fulfillment-configure.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.Fulfillment.GenericWebService</code>
 */
class GenericWebService extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The fulfillment URI for receiving POST requests.
     * It must use https protocol.
     *
     * Generated from protobuf field <code>string uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $uri = '';
    /**
     * Optional. The user name for HTTP Basic authentication.
     *
     * Generated from protobuf field <code>string username = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $username = '';
    /**
     * Optional. The password for HTTP Basic authentication.
     *
     * Generated from protobuf field <code>string password = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $password = '';
    /**
     * Optional. The HTTP request headers to send together with fulfillment
     * requests.
     *
     * Generated from protobuf field <code>map<string, string> request_headers = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $request_headers;
    /**
     * Optional. Indicates if generic web service is created through Cloud
     * Functions integration. Defaults to false.
     * is_cloud_function is deprecated. Cloud functions can be configured by
     * its uri as a regular web service now.
     *
     * Generated from protobuf field <code>bool is_cloud_function = 5 [deprecated = true, (.google.api.field_behavior) = OPTIONAL];</code>
     * @deprecated
     */
    protected $is_cloud_function = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $uri
     *           Required. The fulfillment URI for receiving POST requests.
     *           It must use https protocol.
     *     @type string $username
     *           Optional. The user name for HTTP Basic authentication.
     *     @type string $password
     *           Optional. The password for HTTP Basic authentication.
     *     @type array|\Google\Protobuf\Internal\MapField $request_headers
     *           Optional. The HTTP request headers to send together with fulfillment
     *           requests.
     *     @type bool $is_cloud_function
     *           Optional. Indicates if generic web service is created through Cloud
     *           Functions integration. Defaults to false.
     *           is_cloud_function is deprecated. Cloud functions can be configured by
     *           its uri as a regular web service now.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Fulfillment::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The fulfillment URI for receiving POST requests.
     * It must use https protocol.
     *
     * Generated from protobuf field <code>string uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Required. The fulfillment URI for receiving POST requests.
     * It must use https protocol.
     *
     * Generated from protobuf field <code>string uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->uri = $var;

        return $this;
    }

    /**
     * Optional. The user name for HTTP Basic authentication.
     *
     * Generated from protobuf field <code>string username = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Optional. The user name for HTTP Basic authentication.
     *
     * Generated from protobuf field <code>string username = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setUsername($var)
    {
        GPBUtil::checkString($var, True);
        $this->username = $var;

        return $this;
    }

    /**
     * Optional. The password for HTTP Basic authentication.
     *
     * Generated from protobuf field <code>string password = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Optional. The password for HTTP Basic authentication.
     *
     * Generated from protobuf field <code>string password = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPassword($var)
    {
        GPBUtil::checkString($var, True);
        $this->password = $var;

        return $this;
    }

    /**
     * Optional. The HTTP request headers to send together with fulfillment
     * requests.
     *
     * Generated from protobuf field <code>map<string, string> request_headers = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getRequestHeaders()
    {
        return $this->request_headers;
    }

    /**
     * Optional. The HTTP request headers to send together with fulfillment
     * requests.
     *
     * Generated from protobuf field <code>map<string, string> request_headers = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setRequestHeaders($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->request_headers = $arr;

        return $this;
    }

    /**
     * Optional. Indicates if generic web service is created through Cloud
     * Functions integration. Defaults to false.
     * is_cloud_function is deprecated. Cloud functions can be configured by
     * its uri as a regular web service now.
     *
     * Generated from protobuf field <code>bool is_cloud_function = 5 [deprecated = true, (.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     * @deprecated
     */
    public function getIsCloudFunction()
    {
        @trigger_error('is_cloud_function is deprecated.', E_USER_DEPRECATED);
        return $this->is_cloud_function;
    }

    /**
     * Optional. Indicates if generic web service is created through Cloud
     * Functions integration. Defaults to false.
     * is_cloud_function is deprecated. Cloud functions can be configured by
     * its uri as a regular web service now.
     *
     * Generated from protobuf field <code>bool is_cloud_function = 5 [deprecated = true, (.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     * @deprecated
     */
    public function setIsCloudFunction($var)
    {
        @trigger_error('is_cloud_function is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkBool($var);
        $this->is_cloud_function = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenericWebService::class, \Google\Cloud\Dialogflow\V2\Fulfillment_GenericWebService::class);

