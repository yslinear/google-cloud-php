<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/usage.proto

namespace GPBMetadata\Google\Cloud\Datacatalog\V1;

class Usage
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
\'google/cloud/datacatalog/v1/usage.protogoogle.cloud.datacatalog.v1google/protobuf/timestamp.proto"�

UsageStats
total_completions (
total_failures (
total_cancellations (3
+total_execution_time_for_completions_millis ("�
UsageSignal/
update_time (2.google.protobuf.Timestamph
usage_within_time_range (2B.google.cloud.datacatalog.v1.UsageSignal.UsageWithinTimeRangeEntryB�Ad
UsageWithinTimeRangeEntry
key (	6
value (2\'.google.cloud.datacatalog.v1.UsageStats:8B�
com.google.cloud.datacatalog.v1PZFgoogle.golang.org/genproto/googleapis/cloud/datacatalog/v1;datacatalog��Google.Cloud.DataCatalog.V1�Google\\Cloud\\DataCatalog\\V1�Google::Cloud::DataCatalog::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

