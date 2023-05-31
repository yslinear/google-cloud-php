<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datastream/v1/datastream_resources.proto

namespace Google\Cloud\Datastream\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Google Cloud Storage destination configuration
 *
 * Generated from protobuf message <code>google.cloud.datastream.v1.GcsDestinationConfig</code>
 */
class GcsDestinationConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Path inside the Cloud Storage bucket to write data to.
     *
     * Generated from protobuf field <code>string path = 1;</code>
     */
    protected $path = '';
    /**
     * The maximum file size to be saved in the bucket.
     *
     * Generated from protobuf field <code>int32 file_rotation_mb = 2;</code>
     */
    protected $file_rotation_mb = 0;
    /**
     * The maximum duration for which new events are added before a file is
     * closed and a new file is created. Values within the range of 15-60 seconds
     * are allowed.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration file_rotation_interval = 3;</code>
     */
    protected $file_rotation_interval = null;
    protected $file_format;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $path
     *           Path inside the Cloud Storage bucket to write data to.
     *     @type int $file_rotation_mb
     *           The maximum file size to be saved in the bucket.
     *     @type \Google\Protobuf\Duration $file_rotation_interval
     *           The maximum duration for which new events are added before a file is
     *           closed and a new file is created. Values within the range of 15-60 seconds
     *           are allowed.
     *     @type \Google\Cloud\Datastream\V1\AvroFileFormat $avro_file_format
     *           AVRO file format configuration.
     *     @type \Google\Cloud\Datastream\V1\JsonFileFormat $json_file_format
     *           JSON file format configuration.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datastream\V1\DatastreamResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Path inside the Cloud Storage bucket to write data to.
     *
     * Generated from protobuf field <code>string path = 1;</code>
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Path inside the Cloud Storage bucket to write data to.
     *
     * Generated from protobuf field <code>string path = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->path = $var;

        return $this;
    }

    /**
     * The maximum file size to be saved in the bucket.
     *
     * Generated from protobuf field <code>int32 file_rotation_mb = 2;</code>
     * @return int
     */
    public function getFileRotationMb()
    {
        return $this->file_rotation_mb;
    }

    /**
     * The maximum file size to be saved in the bucket.
     *
     * Generated from protobuf field <code>int32 file_rotation_mb = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setFileRotationMb($var)
    {
        GPBUtil::checkInt32($var);
        $this->file_rotation_mb = $var;

        return $this;
    }

    /**
     * The maximum duration for which new events are added before a file is
     * closed and a new file is created. Values within the range of 15-60 seconds
     * are allowed.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration file_rotation_interval = 3;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getFileRotationInterval()
    {
        return $this->file_rotation_interval;
    }

    public function hasFileRotationInterval()
    {
        return isset($this->file_rotation_interval);
    }

    public function clearFileRotationInterval()
    {
        unset($this->file_rotation_interval);
    }

    /**
     * The maximum duration for which new events are added before a file is
     * closed and a new file is created. Values within the range of 15-60 seconds
     * are allowed.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration file_rotation_interval = 3;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setFileRotationInterval($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->file_rotation_interval = $var;

        return $this;
    }

    /**
     * AVRO file format configuration.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.AvroFileFormat avro_file_format = 100;</code>
     * @return \Google\Cloud\Datastream\V1\AvroFileFormat|null
     */
    public function getAvroFileFormat()
    {
        return $this->readOneof(100);
    }

    public function hasAvroFileFormat()
    {
        return $this->hasOneof(100);
    }

    /**
     * AVRO file format configuration.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.AvroFileFormat avro_file_format = 100;</code>
     * @param \Google\Cloud\Datastream\V1\AvroFileFormat $var
     * @return $this
     */
    public function setAvroFileFormat($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastream\V1\AvroFileFormat::class);
        $this->writeOneof(100, $var);

        return $this;
    }

    /**
     * JSON file format configuration.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.JsonFileFormat json_file_format = 101;</code>
     * @return \Google\Cloud\Datastream\V1\JsonFileFormat|null
     */
    public function getJsonFileFormat()
    {
        return $this->readOneof(101);
    }

    public function hasJsonFileFormat()
    {
        return $this->hasOneof(101);
    }

    /**
     * JSON file format configuration.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.JsonFileFormat json_file_format = 101;</code>
     * @param \Google\Cloud\Datastream\V1\JsonFileFormat $var
     * @return $this
     */
    public function setJsonFileFormat($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastream\V1\JsonFileFormat::class);
        $this->writeOneof(101, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getFileFormat()
    {
        return $this->whichOneof("file_format");
    }

}

