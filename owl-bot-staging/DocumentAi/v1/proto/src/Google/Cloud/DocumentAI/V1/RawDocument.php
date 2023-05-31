<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/document_io.proto

namespace Google\Cloud\DocumentAI\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Payload message of raw document content (bytes).
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1.RawDocument</code>
 */
class RawDocument extends \Google\Protobuf\Internal\Message
{
    /**
     * Inline document content.
     *
     * Generated from protobuf field <code>bytes content = 1;</code>
     */
    protected $content = '';
    /**
     * An IANA MIME type (RFC6838) indicating the nature and format of the
     * [content][google.cloud.documentai.v1.RawDocument.content].
     *
     * Generated from protobuf field <code>string mime_type = 2;</code>
     */
    protected $mime_type = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $content
     *           Inline document content.
     *     @type string $mime_type
     *           An IANA MIME type (RFC6838) indicating the nature and format of the
     *           [content][google.cloud.documentai.v1.RawDocument.content].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1\DocumentIo::initOnce();
        parent::__construct($data);
    }

    /**
     * Inline document content.
     *
     * Generated from protobuf field <code>bytes content = 1;</code>
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Inline document content.
     *
     * Generated from protobuf field <code>bytes content = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setContent($var)
    {
        GPBUtil::checkString($var, False);
        $this->content = $var;

        return $this;
    }

    /**
     * An IANA MIME type (RFC6838) indicating the nature and format of the
     * [content][google.cloud.documentai.v1.RawDocument.content].
     *
     * Generated from protobuf field <code>string mime_type = 2;</code>
     * @return string
     */
    public function getMimeType()
    {
        return $this->mime_type;
    }

    /**
     * An IANA MIME type (RFC6838) indicating the nature and format of the
     * [content][google.cloud.documentai.v1.RawDocument.content].
     *
     * Generated from protobuf field <code>string mime_type = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMimeType($var)
    {
        GPBUtil::checkString($var, True);
        $this->mime_type = $var;

        return $this;
    }

}

