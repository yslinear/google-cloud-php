<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.RoutersPreviewResponse</code>
 */
class RoutersPreviewResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Preview of given router.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Router resource = 195806222;</code>
     */
    protected $resource = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Compute\V1\Router $resource
     *           Preview of given router.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Preview of given router.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Router resource = 195806222;</code>
     * @return \Google\Cloud\Compute\V1\Router|null
     */
    public function getResource()
    {
        return $this->resource;
    }

    public function hasResource()
    {
        return isset($this->resource);
    }

    public function clearResource()
    {
        unset($this->resource);
    }

    /**
     * Preview of given router.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Router resource = 195806222;</code>
     * @param \Google\Cloud\Compute\V1\Router $var
     * @return $this
     */
    public function setResource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\Router::class);
        $this->resource = $var;

        return $this;
    }

}

