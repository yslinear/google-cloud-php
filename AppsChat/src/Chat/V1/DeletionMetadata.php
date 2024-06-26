<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/chat/v1/deletion_metadata.proto

namespace Google\Apps\Chat\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information about a deleted message. A message is deleted when `delete_time`
 * is set.
 *
 * Generated from protobuf message <code>google.chat.v1.DeletionMetadata</code>
 */
class DeletionMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Indicates who deleted the message.
     *
     * Generated from protobuf field <code>.google.chat.v1.DeletionMetadata.DeletionType deletion_type = 1;</code>
     */
    protected $deletion_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $deletion_type
     *           Indicates who deleted the message.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Chat\V1\DeletionMetadata::initOnce();
        parent::__construct($data);
    }

    /**
     * Indicates who deleted the message.
     *
     * Generated from protobuf field <code>.google.chat.v1.DeletionMetadata.DeletionType deletion_type = 1;</code>
     * @return int
     */
    public function getDeletionType()
    {
        return $this->deletion_type;
    }

    /**
     * Indicates who deleted the message.
     *
     * Generated from protobuf field <code>.google.chat.v1.DeletionMetadata.DeletionType deletion_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setDeletionType($var)
    {
        GPBUtil::checkEnum($var, \Google\Apps\Chat\V1\DeletionMetadata\DeletionType::class);
        $this->deletion_type = $var;

        return $this;
    }

}

