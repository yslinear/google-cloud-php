<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/v2/data.proto

namespace Google\Cloud\Bigtable\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specifies a contiguous range of rows.
 *
 * Generated from protobuf message <code>google.bigtable.v2.RowRange</code>
 */
class RowRange extends \Google\Protobuf\Internal\Message
{
    protected $start_key;
    protected $end_key;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $start_key_closed
     *           Used when giving an inclusive lower bound for the range.
     *     @type string $start_key_open
     *           Used when giving an exclusive lower bound for the range.
     *     @type string $end_key_open
     *           Used when giving an exclusive upper bound for the range.
     *     @type string $end_key_closed
     *           Used when giving an inclusive upper bound for the range.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\V2\Data::initOnce();
        parent::__construct($data);
    }

    /**
     * Used when giving an inclusive lower bound for the range.
     *
     * Generated from protobuf field <code>bytes start_key_closed = 1;</code>
     * @return string
     */
    public function getStartKeyClosed()
    {
        return $this->readOneof(1);
    }

    public function hasStartKeyClosed()
    {
        return $this->hasOneof(1);
    }

    /**
     * Used when giving an inclusive lower bound for the range.
     *
     * Generated from protobuf field <code>bytes start_key_closed = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setStartKeyClosed($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Used when giving an exclusive lower bound for the range.
     *
     * Generated from protobuf field <code>bytes start_key_open = 2;</code>
     * @return string
     */
    public function getStartKeyOpen()
    {
        return $this->readOneof(2);
    }

    public function hasStartKeyOpen()
    {
        return $this->hasOneof(2);
    }

    /**
     * Used when giving an exclusive lower bound for the range.
     *
     * Generated from protobuf field <code>bytes start_key_open = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setStartKeyOpen($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Used when giving an exclusive upper bound for the range.
     *
     * Generated from protobuf field <code>bytes end_key_open = 3;</code>
     * @return string
     */
    public function getEndKeyOpen()
    {
        return $this->readOneof(3);
    }

    public function hasEndKeyOpen()
    {
        return $this->hasOneof(3);
    }

    /**
     * Used when giving an exclusive upper bound for the range.
     *
     * Generated from protobuf field <code>bytes end_key_open = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setEndKeyOpen($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Used when giving an inclusive upper bound for the range.
     *
     * Generated from protobuf field <code>bytes end_key_closed = 4;</code>
     * @return string
     */
    public function getEndKeyClosed()
    {
        return $this->readOneof(4);
    }

    public function hasEndKeyClosed()
    {
        return $this->hasOneof(4);
    }

    /**
     * Used when giving an inclusive upper bound for the range.
     *
     * Generated from protobuf field <code>bytes end_key_closed = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setEndKeyClosed($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getStartKey()
    {
        return $this->whichOneof("start_key");
    }

    /**
     * @return string
     */
    public function getEndKey()
    {
        return $this->whichOneof("end_key");
    }

}

