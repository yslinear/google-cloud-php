<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/shared.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The usage snaphot represents the resources consumed by a workload at a
 * specified time.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.UsageSnapshot</code>
 */
class UsageSnapshot extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Milli (one-thousandth) Dataproc Compute Units (DCUs) (see
     * [Dataproc Serverless pricing]
     * (https://cloud.google.com/dataproc-serverless/pricing)).
     *
     * Generated from protobuf field <code>int64 milli_dcu = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $milli_dcu = 0;
    /**
     * Optional. Shuffle Storage in gigabytes (GB). (see [Dataproc Serverless
     * pricing] (https://cloud.google.com/dataproc-serverless/pricing))
     *
     * Generated from protobuf field <code>int64 shuffle_storage_gb = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $shuffle_storage_gb = 0;
    /**
     * Optional. The timestamp of the usage snapshot.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp snapshot_time = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $snapshot_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $milli_dcu
     *           Optional. Milli (one-thousandth) Dataproc Compute Units (DCUs) (see
     *           [Dataproc Serverless pricing]
     *           (https://cloud.google.com/dataproc-serverless/pricing)).
     *     @type int|string $shuffle_storage_gb
     *           Optional. Shuffle Storage in gigabytes (GB). (see [Dataproc Serverless
     *           pricing] (https://cloud.google.com/dataproc-serverless/pricing))
     *     @type \Google\Protobuf\Timestamp $snapshot_time
     *           Optional. The timestamp of the usage snapshot.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\Shared::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Milli (one-thousandth) Dataproc Compute Units (DCUs) (see
     * [Dataproc Serverless pricing]
     * (https://cloud.google.com/dataproc-serverless/pricing)).
     *
     * Generated from protobuf field <code>int64 milli_dcu = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int|string
     */
    public function getMilliDcu()
    {
        return $this->milli_dcu;
    }

    /**
     * Optional. Milli (one-thousandth) Dataproc Compute Units (DCUs) (see
     * [Dataproc Serverless pricing]
     * (https://cloud.google.com/dataproc-serverless/pricing)).
     *
     * Generated from protobuf field <code>int64 milli_dcu = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int|string $var
     * @return $this
     */
    public function setMilliDcu($var)
    {
        GPBUtil::checkInt64($var);
        $this->milli_dcu = $var;

        return $this;
    }

    /**
     * Optional. Shuffle Storage in gigabytes (GB). (see [Dataproc Serverless
     * pricing] (https://cloud.google.com/dataproc-serverless/pricing))
     *
     * Generated from protobuf field <code>int64 shuffle_storage_gb = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int|string
     */
    public function getShuffleStorageGb()
    {
        return $this->shuffle_storage_gb;
    }

    /**
     * Optional. Shuffle Storage in gigabytes (GB). (see [Dataproc Serverless
     * pricing] (https://cloud.google.com/dataproc-serverless/pricing))
     *
     * Generated from protobuf field <code>int64 shuffle_storage_gb = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int|string $var
     * @return $this
     */
    public function setShuffleStorageGb($var)
    {
        GPBUtil::checkInt64($var);
        $this->shuffle_storage_gb = $var;

        return $this;
    }

    /**
     * Optional. The timestamp of the usage snapshot.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp snapshot_time = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getSnapshotTime()
    {
        return $this->snapshot_time;
    }

    public function hasSnapshotTime()
    {
        return isset($this->snapshot_time);
    }

    public function clearSnapshotTime()
    {
        unset($this->snapshot_time);
    }

    /**
     * Optional. The timestamp of the usage snapshot.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp snapshot_time = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setSnapshotTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->snapshot_time = $var;

        return $this;
    }

}

