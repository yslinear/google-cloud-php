<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/dataset.proto

namespace GPBMetadata\Google\Cloud\Aiplatform\V1;

class Dataset
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\EncryptionSpec::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Io::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
(google/cloud/aiplatform/v1/dataset.protogoogle.cloud.aiplatform.v1google/api/resource.proto0google/cloud/aiplatform/v1/encryption_spec.proto#google/cloud/aiplatform/v1/io.protogoogle/protobuf/struct.protogoogle/protobuf/timestamp.proto"�
Dataset
name (	B�A
display_name (	B�A
description (	B�A 
metadata_schema_uri (	B�A-
metadata (2.google.protobuf.ValueB�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A
etag (	?
labels (2/.google.cloud.aiplatform.v1.Dataset.LabelsEntryC
encryption_spec (2*.google.cloud.aiplatform.v1.EncryptionSpec-
LabelsEntry
key (	
value (	:8:b�A_
!aiplatform.googleapis.com/Dataset:projects/{project}/locations/{location}/datasets/{dataset}"�
ImportDataConfig;

gcs_source (2%.google.cloud.aiplatform.v1.GcsSourceH Z
data_item_labels (2@.google.cloud.aiplatform.v1.ImportDataConfig.DataItemLabelsEntry]
annotation_labels (2B.google.cloud.aiplatform.v1.ImportDataConfig.AnnotationLabelsEntry
import_schema_uri (	B�A5
DataItemLabelsEntry
key (	
value (	:87
AnnotationLabelsEntry
key (	
value (	:8B
source"�
ExportDataConfigE
gcs_destination (2*.google.cloud.aiplatform.v1.GcsDestinationH 
annotations_filter (	B
destinationB�
com.google.cloud.aiplatform.v1BDatasetProtoPZDgoogle.golang.org/genproto/googleapis/cloud/aiplatform/v1;aiplatform�Google.Cloud.AIPlatform.V1�Google\\Cloud\\AIPlatform\\V1�Google::Cloud::AIPlatform::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

