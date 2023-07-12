<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v1/cloudbuild.proto

namespace Google\Cloud\Build\V1\BuildOptions;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Details about how a build should be executed on a `WorkerPool`.
 * See [running builds in a private
 * pool](https://cloud.google.com/build/docs/private-pools/run-builds-in-private-pool)
 * for more information.
 *
 * Generated from protobuf message <code>google.devtools.cloudbuild.v1.BuildOptions.PoolOption</code>
 */
class PoolOption extends \Google\Protobuf\Internal\Message
{
    /**
     * The `WorkerPool` resource to execute the build on.
     * You must have `cloudbuild.workerpools.use` on the project hosting the
     * WorkerPool.
     * Format projects/{project}/locations/{location}/workerPools/{workerPoolId}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The `WorkerPool` resource to execute the build on.
     *           You must have `cloudbuild.workerpools.use` on the project hosting the
     *           WorkerPool.
     *           Format projects/{project}/locations/{location}/workerPools/{workerPoolId}
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Cloudbuild\V1\Cloudbuild::initOnce();
        parent::__construct($data);
    }

    /**
     * The `WorkerPool` resource to execute the build on.
     * You must have `cloudbuild.workerpools.use` on the project hosting the
     * WorkerPool.
     * Format projects/{project}/locations/{location}/workerPools/{workerPoolId}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The `WorkerPool` resource to execute the build on.
     * You must have `cloudbuild.workerpools.use` on the project hosting the
     * WorkerPool.
     * Format projects/{project}/locations/{location}/workerPools/{workerPoolId}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PoolOption::class, \Google\Cloud\Build\V1\BuildOptions_PoolOption::class);

