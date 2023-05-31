<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/common.proto

namespace Google\Cloud\DataCatalog\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Entry metadata relevant only to the user and private to them.
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.PersonalDetails</code>
 */
class PersonalDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * True if the entry is starred by the user; false otherwise.
     *
     * Generated from protobuf field <code>bool starred = 1;</code>
     */
    protected $starred = false;
    /**
     * Set if the entry is starred; unset otherwise.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp star_time = 2;</code>
     */
    protected $star_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $starred
     *           True if the entry is starred by the user; false otherwise.
     *     @type \Google\Protobuf\Timestamp $star_time
     *           Set if the entry is starred; unset otherwise.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * True if the entry is starred by the user; false otherwise.
     *
     * Generated from protobuf field <code>bool starred = 1;</code>
     * @return bool
     */
    public function getStarred()
    {
        return $this->starred;
    }

    /**
     * True if the entry is starred by the user; false otherwise.
     *
     * Generated from protobuf field <code>bool starred = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setStarred($var)
    {
        GPBUtil::checkBool($var);
        $this->starred = $var;

        return $this;
    }

    /**
     * Set if the entry is starred; unset otherwise.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp star_time = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStarTime()
    {
        return $this->star_time;
    }

    public function hasStarTime()
    {
        return isset($this->star_time);
    }

    public function clearStarTime()
    {
        unset($this->star_time);
    }

    /**
     * Set if the entry is starred; unset otherwise.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp star_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStarTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->star_time = $var;

        return $this;
    }

}

