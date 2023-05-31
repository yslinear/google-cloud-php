<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/document_schema.proto

namespace Google\Cloud\DocumentAI\V1\DocumentSchema;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata for global schema behavior.
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1.DocumentSchema.Metadata</code>
 */
class Metadata extends \Google\Protobuf\Internal\Message
{
    /**
     * If true, a `document` entity type can be applied to subdocument (
     * splitting). Otherwise, it can only be applied to the entire document
     * (classification).
     *
     * Generated from protobuf field <code>bool document_splitter = 1;</code>
     */
    protected $document_splitter = false;
    /**
     * If true, on a given page, there can be multiple `document` annotations
     * covering it.
     *
     * Generated from protobuf field <code>bool document_allow_multiple_labels = 2;</code>
     */
    protected $document_allow_multiple_labels = false;
    /**
     * If set, all the nested entities must be prefixed with the parents.
     *
     * Generated from protobuf field <code>bool prefixed_naming_on_properties = 6;</code>
     */
    protected $prefixed_naming_on_properties = false;
    /**
     * If set, we will skip the naming format validation in the schema. So the
     * string values in `DocumentSchema.EntityType.name` and
     * `DocumentSchema.EntityType.Property.name` will not be checked.
     *
     * Generated from protobuf field <code>bool skip_naming_validation = 7;</code>
     */
    protected $skip_naming_validation = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $document_splitter
     *           If true, a `document` entity type can be applied to subdocument (
     *           splitting). Otherwise, it can only be applied to the entire document
     *           (classification).
     *     @type bool $document_allow_multiple_labels
     *           If true, on a given page, there can be multiple `document` annotations
     *           covering it.
     *     @type bool $prefixed_naming_on_properties
     *           If set, all the nested entities must be prefixed with the parents.
     *     @type bool $skip_naming_validation
     *           If set, we will skip the naming format validation in the schema. So the
     *           string values in `DocumentSchema.EntityType.name` and
     *           `DocumentSchema.EntityType.Property.name` will not be checked.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1\DocumentSchema::initOnce();
        parent::__construct($data);
    }

    /**
     * If true, a `document` entity type can be applied to subdocument (
     * splitting). Otherwise, it can only be applied to the entire document
     * (classification).
     *
     * Generated from protobuf field <code>bool document_splitter = 1;</code>
     * @return bool
     */
    public function getDocumentSplitter()
    {
        return $this->document_splitter;
    }

    /**
     * If true, a `document` entity type can be applied to subdocument (
     * splitting). Otherwise, it can only be applied to the entire document
     * (classification).
     *
     * Generated from protobuf field <code>bool document_splitter = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setDocumentSplitter($var)
    {
        GPBUtil::checkBool($var);
        $this->document_splitter = $var;

        return $this;
    }

    /**
     * If true, on a given page, there can be multiple `document` annotations
     * covering it.
     *
     * Generated from protobuf field <code>bool document_allow_multiple_labels = 2;</code>
     * @return bool
     */
    public function getDocumentAllowMultipleLabels()
    {
        return $this->document_allow_multiple_labels;
    }

    /**
     * If true, on a given page, there can be multiple `document` annotations
     * covering it.
     *
     * Generated from protobuf field <code>bool document_allow_multiple_labels = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setDocumentAllowMultipleLabels($var)
    {
        GPBUtil::checkBool($var);
        $this->document_allow_multiple_labels = $var;

        return $this;
    }

    /**
     * If set, all the nested entities must be prefixed with the parents.
     *
     * Generated from protobuf field <code>bool prefixed_naming_on_properties = 6;</code>
     * @return bool
     */
    public function getPrefixedNamingOnProperties()
    {
        return $this->prefixed_naming_on_properties;
    }

    /**
     * If set, all the nested entities must be prefixed with the parents.
     *
     * Generated from protobuf field <code>bool prefixed_naming_on_properties = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setPrefixedNamingOnProperties($var)
    {
        GPBUtil::checkBool($var);
        $this->prefixed_naming_on_properties = $var;

        return $this;
    }

    /**
     * If set, we will skip the naming format validation in the schema. So the
     * string values in `DocumentSchema.EntityType.name` and
     * `DocumentSchema.EntityType.Property.name` will not be checked.
     *
     * Generated from protobuf field <code>bool skip_naming_validation = 7;</code>
     * @return bool
     */
    public function getSkipNamingValidation()
    {
        return $this->skip_naming_validation;
    }

    /**
     * If set, we will skip the naming format validation in the schema. So the
     * string values in `DocumentSchema.EntityType.name` and
     * `DocumentSchema.EntityType.Property.name` will not be checked.
     *
     * Generated from protobuf field <code>bool skip_naming_validation = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setSkipNamingValidation($var)
    {
        GPBUtil::checkBool($var);
        $this->skip_naming_validation = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Metadata::class, \Google\Cloud\DocumentAI\V1\DocumentSchema_Metadata::class);

