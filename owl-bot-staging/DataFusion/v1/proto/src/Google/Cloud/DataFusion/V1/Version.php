<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datafusion/v1/datafusion.proto

namespace Google\Cloud\DataFusion\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The Data Fusion version. This proto message stores information about certain
 * Data Fusion version, which is used for Data Fusion version upgrade.
 *
 * Generated from protobuf message <code>google.cloud.datafusion.v1.Version</code>
 */
class Version extends \Google\Protobuf\Internal\Message
{
    /**
     * The version number of the Data Fusion instance, such as '6.0.1.0'.
     *
     * Generated from protobuf field <code>string version_number = 1;</code>
     */
    protected $version_number = '';
    /**
     * Whether this is currently the default version for Cloud Data Fusion
     *
     * Generated from protobuf field <code>bool default_version = 2;</code>
     */
    protected $default_version = false;
    /**
     * Represents a list of available feature names for a given version.
     *
     * Generated from protobuf field <code>repeated string available_features = 3;</code>
     */
    private $available_features;
    /**
     * Type represents the release availability of the version
     *
     * Generated from protobuf field <code>.google.cloud.datafusion.v1.Version.Type type = 4;</code>
     */
    protected $type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $version_number
     *           The version number of the Data Fusion instance, such as '6.0.1.0'.
     *     @type bool $default_version
     *           Whether this is currently the default version for Cloud Data Fusion
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $available_features
     *           Represents a list of available feature names for a given version.
     *     @type int $type
     *           Type represents the release availability of the version
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datafusion\V1\Datafusion::initOnce();
        parent::__construct($data);
    }

    /**
     * The version number of the Data Fusion instance, such as '6.0.1.0'.
     *
     * Generated from protobuf field <code>string version_number = 1;</code>
     * @return string
     */
    public function getVersionNumber()
    {
        return $this->version_number;
    }

    /**
     * The version number of the Data Fusion instance, such as '6.0.1.0'.
     *
     * Generated from protobuf field <code>string version_number = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setVersionNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->version_number = $var;

        return $this;
    }

    /**
     * Whether this is currently the default version for Cloud Data Fusion
     *
     * Generated from protobuf field <code>bool default_version = 2;</code>
     * @return bool
     */
    public function getDefaultVersion()
    {
        return $this->default_version;
    }

    /**
     * Whether this is currently the default version for Cloud Data Fusion
     *
     * Generated from protobuf field <code>bool default_version = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setDefaultVersion($var)
    {
        GPBUtil::checkBool($var);
        $this->default_version = $var;

        return $this;
    }

    /**
     * Represents a list of available feature names for a given version.
     *
     * Generated from protobuf field <code>repeated string available_features = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAvailableFeatures()
    {
        return $this->available_features;
    }

    /**
     * Represents a list of available feature names for a given version.
     *
     * Generated from protobuf field <code>repeated string available_features = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAvailableFeatures($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->available_features = $arr;

        return $this;
    }

    /**
     * Type represents the release availability of the version
     *
     * Generated from protobuf field <code>.google.cloud.datafusion.v1.Version.Type type = 4;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Type represents the release availability of the version
     *
     * Generated from protobuf field <code>.google.cloud.datafusion.v1.Version.Type type = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\DataFusion\V1\Version\Type::class);
        $this->type = $var;

        return $this;
    }

}

