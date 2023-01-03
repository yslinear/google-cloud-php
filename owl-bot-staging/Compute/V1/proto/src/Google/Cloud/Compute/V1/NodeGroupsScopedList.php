<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.NodeGroupsScopedList</code>
 */
class NodeGroupsScopedList extends \Google\Protobuf\Internal\Message
{
    /**
     * [Output Only] A list of node groups contained in this scope.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.NodeGroup node_groups = 73188017;</code>
     */
    private $node_groups;
    /**
     * [Output Only] An informational warning that appears when the nodeGroup list is empty.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Warning warning = 50704284;</code>
     */
    protected $warning = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Compute\V1\NodeGroup>|\Google\Protobuf\Internal\RepeatedField $node_groups
     *           [Output Only] A list of node groups contained in this scope.
     *     @type \Google\Cloud\Compute\V1\Warning $warning
     *           [Output Only] An informational warning that appears when the nodeGroup list is empty.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * [Output Only] A list of node groups contained in this scope.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.NodeGroup node_groups = 73188017;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNodeGroups()
    {
        return $this->node_groups;
    }

    /**
     * [Output Only] A list of node groups contained in this scope.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.NodeGroup node_groups = 73188017;</code>
     * @param array<\Google\Cloud\Compute\V1\NodeGroup>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNodeGroups($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\NodeGroup::class);
        $this->node_groups = $arr;

        return $this;
    }

    /**
     * [Output Only] An informational warning that appears when the nodeGroup list is empty.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Warning warning = 50704284;</code>
     * @return \Google\Cloud\Compute\V1\Warning|null
     */
    public function getWarning()
    {
        return $this->warning;
    }

    public function hasWarning()
    {
        return isset($this->warning);
    }

    public function clearWarning()
    {
        unset($this->warning);
    }

    /**
     * [Output Only] An informational warning that appears when the nodeGroup list is empty.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Warning warning = 50704284;</code>
     * @param \Google\Cloud\Compute\V1\Warning $var
     * @return $this
     */
    public function setWarning($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\Warning::class);
        $this->warning = $var;

        return $this;
    }

}

