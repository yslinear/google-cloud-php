<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/import_config.proto

namespace Google\Cloud\DiscoveryEngine\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Cloud FhirStore source import data from.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1beta.FhirStoreSource</code>
 */
class FhirStoreSource extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The full resource name of the FHIR store to import data from, in
     * the format of
     * `projects/{project}/locations/{location}/datasets/{dataset}/fhirStores/{fhir_store}`.
     *
     * Generated from protobuf field <code>string fhir_store = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $fhir_store = '';
    /**
     * Intermediate Cloud Storage directory used for the import with a length
     * limit of 2,000 characters. Can be specified if one wants to have the
     * FhirStore export to a specific Cloud Storage directory.
     *
     * Generated from protobuf field <code>string gcs_staging_dir = 2;</code>
     */
    protected $gcs_staging_dir = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $fhir_store
     *           Required. The full resource name of the FHIR store to import data from, in
     *           the format of
     *           `projects/{project}/locations/{location}/datasets/{dataset}/fhirStores/{fhir_store}`.
     *     @type string $gcs_staging_dir
     *           Intermediate Cloud Storage directory used for the import with a length
     *           limit of 2,000 characters. Can be specified if one wants to have the
     *           FhirStore export to a specific Cloud Storage directory.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1Beta\ImportConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The full resource name of the FHIR store to import data from, in
     * the format of
     * `projects/{project}/locations/{location}/datasets/{dataset}/fhirStores/{fhir_store}`.
     *
     * Generated from protobuf field <code>string fhir_store = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getFhirStore()
    {
        return $this->fhir_store;
    }

    /**
     * Required. The full resource name of the FHIR store to import data from, in
     * the format of
     * `projects/{project}/locations/{location}/datasets/{dataset}/fhirStores/{fhir_store}`.
     *
     * Generated from protobuf field <code>string fhir_store = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setFhirStore($var)
    {
        GPBUtil::checkString($var, True);
        $this->fhir_store = $var;

        return $this;
    }

    /**
     * Intermediate Cloud Storage directory used for the import with a length
     * limit of 2,000 characters. Can be specified if one wants to have the
     * FhirStore export to a specific Cloud Storage directory.
     *
     * Generated from protobuf field <code>string gcs_staging_dir = 2;</code>
     * @return string
     */
    public function getGcsStagingDir()
    {
        return $this->gcs_staging_dir;
    }

    /**
     * Intermediate Cloud Storage directory used for the import with a length
     * limit of 2,000 characters. Can be specified if one wants to have the
     * FhirStore export to a specific Cloud Storage directory.
     *
     * Generated from protobuf field <code>string gcs_staging_dir = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setGcsStagingDir($var)
    {
        GPBUtil::checkString($var, True);
        $this->gcs_staging_dir = $var;

        return $this;
    }

}

