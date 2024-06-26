<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/persistent_resource.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration information for the Ray cluster.
 * For experimental launch, Ray cluster creation and Persistent
 * cluster creation are 1:1 mapping: We will provision all the nodes within the
 * Persistent cluster as Ray nodes.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.RaySpec</code>
 */
class RaySpec extends \Google\Protobuf\Internal\Message
{

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\PersistentResource::initOnce();
        parent::__construct($data);
    }

}

