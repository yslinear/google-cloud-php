<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/domains/v1/domains.proto

namespace Google\Cloud\Domains\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response for the `RetrieveRegisterParameters` method.
 *
 * Generated from protobuf message <code>google.cloud.domains.v1.RetrieveRegisterParametersResponse</code>
 */
class RetrieveRegisterParametersResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Parameters to use when calling the `RegisterDomain` method.
     *
     * Generated from protobuf field <code>.google.cloud.domains.v1.RegisterParameters register_parameters = 1;</code>
     */
    protected $register_parameters = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Domains\V1\RegisterParameters $register_parameters
     *           Parameters to use when calling the `RegisterDomain` method.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Domains\V1\Domains::initOnce();
        parent::__construct($data);
    }

    /**
     * Parameters to use when calling the `RegisterDomain` method.
     *
     * Generated from protobuf field <code>.google.cloud.domains.v1.RegisterParameters register_parameters = 1;</code>
     * @return \Google\Cloud\Domains\V1\RegisterParameters|null
     */
    public function getRegisterParameters()
    {
        return $this->register_parameters;
    }

    public function hasRegisterParameters()
    {
        return isset($this->register_parameters);
    }

    public function clearRegisterParameters()
    {
        unset($this->register_parameters);
    }

    /**
     * Parameters to use when calling the `RegisterDomain` method.
     *
     * Generated from protobuf field <code>.google.cloud.domains.v1.RegisterParameters register_parameters = 1;</code>
     * @param \Google\Cloud\Domains\V1\RegisterParameters $var
     * @return $this
     */
    public function setRegisterParameters($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Domains\V1\RegisterParameters::class);
        $this->register_parameters = $var;

        return $this;
    }

}

