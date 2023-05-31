<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Details of a supported Skaffold version.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.SkaffoldVersion</code>
 */
class SkaffoldVersion extends \Google\Protobuf\Internal\Message
{
    /**
     * Release version number. For example, "1.20.3".
     *
     * Generated from protobuf field <code>string version = 1;</code>
     */
    protected $version = '';
    /**
     * The time at which this version of skaffold will enter maintenance mode.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp maintenance_mode_time = 3;</code>
     */
    protected $maintenance_mode_time = null;
    /**
     * The time at which this version of skaffold will no longer be supported.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp support_expiration_time = 4;</code>
     */
    protected $support_expiration_time = null;
    /**
     * Date when this version is expected to no longer be supported.
     *
     * Generated from protobuf field <code>.google.type.Date support_end_date = 2;</code>
     */
    protected $support_end_date = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $version
     *           Release version number. For example, "1.20.3".
     *     @type \Google\Protobuf\Timestamp $maintenance_mode_time
     *           The time at which this version of skaffold will enter maintenance mode.
     *     @type \Google\Protobuf\Timestamp $support_expiration_time
     *           The time at which this version of skaffold will no longer be supported.
     *     @type \Google\Type\Date $support_end_date
     *           Date when this version is expected to no longer be supported.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\CloudDeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * Release version number. For example, "1.20.3".
     *
     * Generated from protobuf field <code>string version = 1;</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Release version number. For example, "1.20.3".
     *
     * Generated from protobuf field <code>string version = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;

        return $this;
    }

    /**
     * The time at which this version of skaffold will enter maintenance mode.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp maintenance_mode_time = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getMaintenanceModeTime()
    {
        return $this->maintenance_mode_time;
    }

    public function hasMaintenanceModeTime()
    {
        return isset($this->maintenance_mode_time);
    }

    public function clearMaintenanceModeTime()
    {
        unset($this->maintenance_mode_time);
    }

    /**
     * The time at which this version of skaffold will enter maintenance mode.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp maintenance_mode_time = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setMaintenanceModeTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->maintenance_mode_time = $var;

        return $this;
    }

    /**
     * The time at which this version of skaffold will no longer be supported.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp support_expiration_time = 4;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getSupportExpirationTime()
    {
        return $this->support_expiration_time;
    }

    public function hasSupportExpirationTime()
    {
        return isset($this->support_expiration_time);
    }

    public function clearSupportExpirationTime()
    {
        unset($this->support_expiration_time);
    }

    /**
     * The time at which this version of skaffold will no longer be supported.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp support_expiration_time = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setSupportExpirationTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->support_expiration_time = $var;

        return $this;
    }

    /**
     * Date when this version is expected to no longer be supported.
     *
     * Generated from protobuf field <code>.google.type.Date support_end_date = 2;</code>
     * @return \Google\Type\Date|null
     */
    public function getSupportEndDate()
    {
        return $this->support_end_date;
    }

    public function hasSupportEndDate()
    {
        return isset($this->support_end_date);
    }

    public function clearSupportEndDate()
    {
        unset($this->support_end_date);
    }

    /**
     * Date when this version is expected to no longer be supported.
     *
     * Generated from protobuf field <code>.google.type.Date support_end_date = 2;</code>
     * @param \Google\Type\Date $var
     * @return $this
     */
    public function setSupportEndDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\Date::class);
        $this->support_end_date = $var;

        return $this;
    }

}

