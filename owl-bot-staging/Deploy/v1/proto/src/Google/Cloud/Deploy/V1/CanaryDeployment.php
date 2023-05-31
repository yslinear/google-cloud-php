<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * CanaryDeployment represents the canary deployment configuration
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.CanaryDeployment</code>
 */
class CanaryDeployment extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The percentage based deployments that will occur as a part of a
     * `Rollout`. List is expected in ascending order and each integer n is
     * 0 <= n < 100.
     *
     * Generated from protobuf field <code>repeated int32 percentages = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $percentages;
    /**
     * Whether to run verify tests after each percentage deployment.
     *
     * Generated from protobuf field <code>bool verify = 2;</code>
     */
    protected $verify = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $percentages
     *           Required. The percentage based deployments that will occur as a part of a
     *           `Rollout`. List is expected in ascending order and each integer n is
     *           0 <= n < 100.
     *     @type bool $verify
     *           Whether to run verify tests after each percentage deployment.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\CloudDeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The percentage based deployments that will occur as a part of a
     * `Rollout`. List is expected in ascending order and each integer n is
     * 0 <= n < 100.
     *
     * Generated from protobuf field <code>repeated int32 percentages = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPercentages()
    {
        return $this->percentages;
    }

    /**
     * Required. The percentage based deployments that will occur as a part of a
     * `Rollout`. List is expected in ascending order and each integer n is
     * 0 <= n < 100.
     *
     * Generated from protobuf field <code>repeated int32 percentages = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPercentages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->percentages = $arr;

        return $this;
    }

    /**
     * Whether to run verify tests after each percentage deployment.
     *
     * Generated from protobuf field <code>bool verify = 2;</code>
     * @return bool
     */
    public function getVerify()
    {
        return $this->verify;
    }

    /**
     * Whether to run verify tests after each percentage deployment.
     *
     * Generated from protobuf field <code>bool verify = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setVerify($var)
    {
        GPBUtil::checkBool($var);
        $this->verify = $var;

        return $this;
    }

}

