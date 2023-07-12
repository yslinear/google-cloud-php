<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/alloydb/v1alpha/resources.proto

namespace Google\Cloud\AlloyDb\V1alpha\Instance;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration for a read pool instance.
 *
 * Generated from protobuf message <code>google.cloud.alloydb.v1alpha.Instance.ReadPoolConfig</code>
 */
class ReadPoolConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Read capacity, i.e. number of nodes in a read pool instance.
     *
     * Generated from protobuf field <code>int32 node_count = 1;</code>
     */
    protected $node_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $node_count
     *           Read capacity, i.e. number of nodes in a read pool instance.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Alloydb\V1Alpha\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Read capacity, i.e. number of nodes in a read pool instance.
     *
     * Generated from protobuf field <code>int32 node_count = 1;</code>
     * @return int
     */
    public function getNodeCount()
    {
        return $this->node_count;
    }

    /**
     * Read capacity, i.e. number of nodes in a read pool instance.
     *
     * Generated from protobuf field <code>int32 node_count = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setNodeCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->node_count = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ReadPoolConfig::class, \Google\Cloud\AlloyDb\V1alpha\Instance_ReadPoolConfig::class);

