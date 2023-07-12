<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GetJSONWebKeysRequest gets the public component of the keys used by the
 * cluster to sign token requests. This will be the jwks_uri for the discover
 * document returned by getOpenIDConfig. See the OpenID Connect
 * Discovery 1.0 specification for details.
 *
 * Generated from protobuf message <code>google.container.v1.GetJSONWebKeysRequest</code>
 */
class GetJSONWebKeysRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The cluster (project, location, cluster name) to get keys for. Specified in
     * the format `projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    protected $parent = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           The cluster (project, location, cluster name) to get keys for. Specified in
     *           the format `projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * The cluster (project, location, cluster name) to get keys for. Specified in
     * the format `projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * The cluster (project, location, cluster name) to get keys for. Specified in
     * the format `projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

}

