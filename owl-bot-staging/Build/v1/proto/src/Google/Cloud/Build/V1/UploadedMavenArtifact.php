<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v1/cloudbuild.proto

namespace Google\Cloud\Build\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Maven artifact uploaded using the MavenArtifact directive.
 *
 * Generated from protobuf message <code>google.devtools.cloudbuild.v1.UploadedMavenArtifact</code>
 */
class UploadedMavenArtifact extends \Google\Protobuf\Internal\Message
{
    /**
     * URI of the uploaded artifact.
     *
     * Generated from protobuf field <code>string uri = 1;</code>
     */
    protected $uri = '';
    /**
     * Hash types and values of the Maven Artifact.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.FileHashes file_hashes = 2;</code>
     */
    protected $file_hashes = null;
    /**
     * Output only. Stores timing information for pushing the specified artifact.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.TimeSpan push_timing = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $push_timing = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $uri
     *           URI of the uploaded artifact.
     *     @type \Google\Cloud\Build\V1\FileHashes $file_hashes
     *           Hash types and values of the Maven Artifact.
     *     @type \Google\Cloud\Build\V1\TimeSpan $push_timing
     *           Output only. Stores timing information for pushing the specified artifact.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Cloudbuild\V1\Cloudbuild::initOnce();
        parent::__construct($data);
    }

    /**
     * URI of the uploaded artifact.
     *
     * Generated from protobuf field <code>string uri = 1;</code>
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * URI of the uploaded artifact.
     *
     * Generated from protobuf field <code>string uri = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->uri = $var;

        return $this;
    }

    /**
     * Hash types and values of the Maven Artifact.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.FileHashes file_hashes = 2;</code>
     * @return \Google\Cloud\Build\V1\FileHashes|null
     */
    public function getFileHashes()
    {
        return $this->file_hashes;
    }

    public function hasFileHashes()
    {
        return isset($this->file_hashes);
    }

    public function clearFileHashes()
    {
        unset($this->file_hashes);
    }

    /**
     * Hash types and values of the Maven Artifact.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.FileHashes file_hashes = 2;</code>
     * @param \Google\Cloud\Build\V1\FileHashes $var
     * @return $this
     */
    public function setFileHashes($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Build\V1\FileHashes::class);
        $this->file_hashes = $var;

        return $this;
    }

    /**
     * Output only. Stores timing information for pushing the specified artifact.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.TimeSpan push_timing = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Build\V1\TimeSpan|null
     */
    public function getPushTiming()
    {
        return $this->push_timing;
    }

    public function hasPushTiming()
    {
        return isset($this->push_timing);
    }

    public function clearPushTiming()
    {
        unset($this->push_timing);
    }

    /**
     * Output only. Stores timing information for pushing the specified artifact.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.TimeSpan push_timing = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Build\V1\TimeSpan $var
     * @return $this
     */
    public function setPushTiming($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Build\V1\TimeSpan::class);
        $this->push_timing = $var;

        return $this;
    }

}

