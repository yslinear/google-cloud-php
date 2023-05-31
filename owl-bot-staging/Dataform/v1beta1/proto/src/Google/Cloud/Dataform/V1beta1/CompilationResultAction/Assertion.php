<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataform/v1beta1/dataform.proto

namespace Google\Cloud\Dataform\V1beta1\CompilationResultAction;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents an assertion upon a SQL query which is required return zero
 * rows.
 *
 * Generated from protobuf message <code>google.cloud.dataform.v1beta1.CompilationResultAction.Assertion</code>
 */
class Assertion extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of actions that this action depends on.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataform.v1beta1.Target dependency_targets = 1;</code>
     */
    private $dependency_targets;
    /**
     * The parent action of this assertion. Only set if this assertion was
     * automatically generated.
     *
     * Generated from protobuf field <code>.google.cloud.dataform.v1beta1.Target parent_action = 5;</code>
     */
    protected $parent_action = null;
    /**
     * Whether this action is disabled (i.e. should not be run).
     *
     * Generated from protobuf field <code>bool disabled = 2;</code>
     */
    protected $disabled = false;
    /**
     * Arbitrary, user-defined tags on this action.
     *
     * Generated from protobuf field <code>repeated string tags = 3;</code>
     */
    private $tags;
    /**
     * The SELECT query which must return zero rows in order for this assertion
     * to succeed.
     *
     * Generated from protobuf field <code>string select_query = 4;</code>
     */
    protected $select_query = '';
    /**
     * Descriptor for the assertion's automatically-generated view and its
     * columns.
     *
     * Generated from protobuf field <code>.google.cloud.dataform.v1beta1.RelationDescriptor relation_descriptor = 6;</code>
     */
    protected $relation_descriptor = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Dataform\V1beta1\Target>|\Google\Protobuf\Internal\RepeatedField $dependency_targets
     *           A list of actions that this action depends on.
     *     @type \Google\Cloud\Dataform\V1beta1\Target $parent_action
     *           The parent action of this assertion. Only set if this assertion was
     *           automatically generated.
     *     @type bool $disabled
     *           Whether this action is disabled (i.e. should not be run).
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $tags
     *           Arbitrary, user-defined tags on this action.
     *     @type string $select_query
     *           The SELECT query which must return zero rows in order for this assertion
     *           to succeed.
     *     @type \Google\Cloud\Dataform\V1beta1\RelationDescriptor $relation_descriptor
     *           Descriptor for the assertion's automatically-generated view and its
     *           columns.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataform\V1Beta1\Dataform::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of actions that this action depends on.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataform.v1beta1.Target dependency_targets = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDependencyTargets()
    {
        return $this->dependency_targets;
    }

    /**
     * A list of actions that this action depends on.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataform.v1beta1.Target dependency_targets = 1;</code>
     * @param array<\Google\Cloud\Dataform\V1beta1\Target>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDependencyTargets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataform\V1beta1\Target::class);
        $this->dependency_targets = $arr;

        return $this;
    }

    /**
     * The parent action of this assertion. Only set if this assertion was
     * automatically generated.
     *
     * Generated from protobuf field <code>.google.cloud.dataform.v1beta1.Target parent_action = 5;</code>
     * @return \Google\Cloud\Dataform\V1beta1\Target|null
     */
    public function getParentAction()
    {
        return $this->parent_action;
    }

    public function hasParentAction()
    {
        return isset($this->parent_action);
    }

    public function clearParentAction()
    {
        unset($this->parent_action);
    }

    /**
     * The parent action of this assertion. Only set if this assertion was
     * automatically generated.
     *
     * Generated from protobuf field <code>.google.cloud.dataform.v1beta1.Target parent_action = 5;</code>
     * @param \Google\Cloud\Dataform\V1beta1\Target $var
     * @return $this
     */
    public function setParentAction($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataform\V1beta1\Target::class);
        $this->parent_action = $var;

        return $this;
    }

    /**
     * Whether this action is disabled (i.e. should not be run).
     *
     * Generated from protobuf field <code>bool disabled = 2;</code>
     * @return bool
     */
    public function getDisabled()
    {
        return $this->disabled;
    }

    /**
     * Whether this action is disabled (i.e. should not be run).
     *
     * Generated from protobuf field <code>bool disabled = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setDisabled($var)
    {
        GPBUtil::checkBool($var);
        $this->disabled = $var;

        return $this;
    }

    /**
     * Arbitrary, user-defined tags on this action.
     *
     * Generated from protobuf field <code>repeated string tags = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Arbitrary, user-defined tags on this action.
     *
     * Generated from protobuf field <code>repeated string tags = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTags($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->tags = $arr;

        return $this;
    }

    /**
     * The SELECT query which must return zero rows in order for this assertion
     * to succeed.
     *
     * Generated from protobuf field <code>string select_query = 4;</code>
     * @return string
     */
    public function getSelectQuery()
    {
        return $this->select_query;
    }

    /**
     * The SELECT query which must return zero rows in order for this assertion
     * to succeed.
     *
     * Generated from protobuf field <code>string select_query = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setSelectQuery($var)
    {
        GPBUtil::checkString($var, True);
        $this->select_query = $var;

        return $this;
    }

    /**
     * Descriptor for the assertion's automatically-generated view and its
     * columns.
     *
     * Generated from protobuf field <code>.google.cloud.dataform.v1beta1.RelationDescriptor relation_descriptor = 6;</code>
     * @return \Google\Cloud\Dataform\V1beta1\RelationDescriptor|null
     */
    public function getRelationDescriptor()
    {
        return $this->relation_descriptor;
    }

    public function hasRelationDescriptor()
    {
        return isset($this->relation_descriptor);
    }

    public function clearRelationDescriptor()
    {
        unset($this->relation_descriptor);
    }

    /**
     * Descriptor for the assertion's automatically-generated view and its
     * columns.
     *
     * Generated from protobuf field <code>.google.cloud.dataform.v1beta1.RelationDescriptor relation_descriptor = 6;</code>
     * @param \Google\Cloud\Dataform\V1beta1\RelationDescriptor $var
     * @return $this
     */
    public function setRelationDescriptor($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataform\V1beta1\RelationDescriptor::class);
        $this->relation_descriptor = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Assertion::class, \Google\Cloud\Dataform\V1beta1\CompilationResultAction_Assertion::class);

