<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.RegionInstanceGroupManagersSetTargetPoolsRequest</code>
 */
class RegionInstanceGroupManagersSetTargetPoolsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Fingerprint of the target pools information, which is a hash of the contents. This field is used for optimistic locking when you update the target pool entries. This field is optional.
     *
     * Generated from protobuf field <code>optional string fingerprint = 234678500;</code>
     */
    protected $fingerprint = null;
    /**
     * The URL of all TargetPool resources to which instances in the instanceGroup field are added. The target pools automatically apply to all of the instances in the managed instance group.
     *
     * Generated from protobuf field <code>repeated string target_pools = 336072617;</code>
     */
    private $target_pools;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $fingerprint
     *           Fingerprint of the target pools information, which is a hash of the contents. This field is used for optimistic locking when you update the target pool entries. This field is optional.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $target_pools
     *           The URL of all TargetPool resources to which instances in the instanceGroup field are added. The target pools automatically apply to all of the instances in the managed instance group.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Fingerprint of the target pools information, which is a hash of the contents. This field is used for optimistic locking when you update the target pool entries. This field is optional.
     *
     * Generated from protobuf field <code>optional string fingerprint = 234678500;</code>
     * @return string
     */
    public function getFingerprint()
    {
        return isset($this->fingerprint) ? $this->fingerprint : '';
    }

    public function hasFingerprint()
    {
        return isset($this->fingerprint);
    }

    public function clearFingerprint()
    {
        unset($this->fingerprint);
    }

    /**
     * Fingerprint of the target pools information, which is a hash of the contents. This field is used for optimistic locking when you update the target pool entries. This field is optional.
     *
     * Generated from protobuf field <code>optional string fingerprint = 234678500;</code>
     * @param string $var
     * @return $this
     */
    public function setFingerprint($var)
    {
        GPBUtil::checkString($var, True);
        $this->fingerprint = $var;

        return $this;
    }

    /**
     * The URL of all TargetPool resources to which instances in the instanceGroup field are added. The target pools automatically apply to all of the instances in the managed instance group.
     *
     * Generated from protobuf field <code>repeated string target_pools = 336072617;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTargetPools()
    {
        return $this->target_pools;
    }

    /**
     * The URL of all TargetPool resources to which instances in the instanceGroup field are added. The target pools automatically apply to all of the instances in the managed instance group.
     *
     * Generated from protobuf field <code>repeated string target_pools = 336072617;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTargetPools($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->target_pools = $arr;

        return $this;
    }

}

