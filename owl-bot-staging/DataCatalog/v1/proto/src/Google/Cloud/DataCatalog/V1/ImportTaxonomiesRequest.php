<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/policytagmanagerserialization.proto

namespace Google\Cloud\DataCatalog\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [ImportTaxonomies][google.cloud.datacatalog.v1.PolicyTagManagerSerialization.ImportTaxonomies].
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.ImportTaxonomiesRequest</code>
 */
class ImportTaxonomiesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Resource name of project that the imported taxonomies will belong to.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    protected $source;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Resource name of project that the imported taxonomies will belong to.
     *     @type \Google\Cloud\DataCatalog\V1\InlineSource $inline_source
     *           Inline source taxonomy to import.
     *     @type \Google\Cloud\DataCatalog\V1\CrossRegionalSource $cross_regional_source
     *           Cross-regional source taxonomy to import.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Policytagmanagerserialization::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Resource name of project that the imported taxonomies will belong to.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Resource name of project that the imported taxonomies will belong to.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Inline source taxonomy to import.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.InlineSource inline_source = 2;</code>
     * @return \Google\Cloud\DataCatalog\V1\InlineSource|null
     */
    public function getInlineSource()
    {
        return $this->readOneof(2);
    }

    public function hasInlineSource()
    {
        return $this->hasOneof(2);
    }

    /**
     * Inline source taxonomy to import.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.InlineSource inline_source = 2;</code>
     * @param \Google\Cloud\DataCatalog\V1\InlineSource $var
     * @return $this
     */
    public function setInlineSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataCatalog\V1\InlineSource::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Cross-regional source taxonomy to import.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.CrossRegionalSource cross_regional_source = 3;</code>
     * @return \Google\Cloud\DataCatalog\V1\CrossRegionalSource|null
     */
    public function getCrossRegionalSource()
    {
        return $this->readOneof(3);
    }

    public function hasCrossRegionalSource()
    {
        return $this->hasOneof(3);
    }

    /**
     * Cross-regional source taxonomy to import.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.CrossRegionalSource cross_regional_source = 3;</code>
     * @param \Google\Cloud\DataCatalog\V1\CrossRegionalSource $var
     * @return $this
     */
    public function setCrossRegionalSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataCatalog\V1\CrossRegionalSource::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->whichOneof("source");
    }

}

