<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/connection/v1/connection.proto

namespace Google\Cloud\BigQuery\Connection\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Connection properties specific to Cloud Spanner.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.connection.v1.CloudSpannerProperties</code>
 */
class CloudSpannerProperties extends \Google\Protobuf\Internal\Message
{
    /**
     * Cloud Spanner database in the form `project/instance/database'
     *
     * Generated from protobuf field <code>string database = 1;</code>
     */
    protected $database = '';
    /**
     * If parallelism should be used when reading from Cloud Spanner
     *
     * Generated from protobuf field <code>bool use_parallelism = 2;</code>
     */
    protected $use_parallelism = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $database
     *           Cloud Spanner database in the form `project/instance/database'
     *     @type bool $use_parallelism
     *           If parallelism should be used when reading from Cloud Spanner
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Connection\V1\Connection::initOnce();
        parent::__construct($data);
    }

    /**
     * Cloud Spanner database in the form `project/instance/database'
     *
     * Generated from protobuf field <code>string database = 1;</code>
     * @return string
     */
    public function getDatabase()
    {
        return $this->database;
    }

    /**
     * Cloud Spanner database in the form `project/instance/database'
     *
     * Generated from protobuf field <code>string database = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDatabase($var)
    {
        GPBUtil::checkString($var, True);
        $this->database = $var;

        return $this;
    }

    /**
     * If parallelism should be used when reading from Cloud Spanner
     *
     * Generated from protobuf field <code>bool use_parallelism = 2;</code>
     * @return bool
     */
    public function getUseParallelism()
    {
        return $this->use_parallelism;
    }

    /**
     * If parallelism should be used when reading from Cloud Spanner
     *
     * Generated from protobuf field <code>bool use_parallelism = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setUseParallelism($var)
    {
        GPBUtil::checkBool($var);
        $this->use_parallelism = $var;

        return $this;
    }

}

