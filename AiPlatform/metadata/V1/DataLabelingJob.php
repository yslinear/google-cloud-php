<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/data_labeling_job.proto

namespace GPBMetadata\Google\Cloud\Aiplatform\V1;

class DataLabelingJob
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
        \GPBMetadata\Google\Cloud\Aiplatform\V1\JobState::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Type\Money::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
2google/cloud/aiplatform/v1/data_labeling_job.protogoogle.cloud.aiplatform.v1google/api/resource.proto0google/cloud/aiplatform/v1/encryption_spec.proto*google/cloud/aiplatform/v1/job_state.protogoogle/protobuf/struct.protogoogle/protobuf/timestamp.protogoogle/rpc/status.protogoogle/type/money.proto"�
DataLabelingJob
name (	B�A
display_name (	B�A;
datasets (	B)�A�A#
!aiplatform.googleapis.com/Dataset\\
annotation_labels (2A.google.cloud.aiplatform.v1.DataLabelingJob.AnnotationLabelsEntry
labeler_count (B�A
instruction_uri (	B�A
inputs_schema_uri (	B�A+
inputs (2.google.protobuf.ValueB�A8
state (2$.google.cloud.aiplatform.v1.JobStateB�A
labeling_progress (B�A.
current_spend (2.google.type.MoneyB�A4
create_time	 (2.google.protobuf.TimestampB�A4
update_time
 (2.google.protobuf.TimestampB�A&
error (2.google.rpc.StatusB�AG
labels (27.google.cloud.aiplatform.v1.DataLabelingJob.LabelsEntry
specialist_pools (	C
encryption_spec (2*.google.cloud.aiplatform.v1.EncryptionSpecP
active_learning_config (20.google.cloud.aiplatform.v1.ActiveLearningConfig7
AnnotationLabelsEntry
key (	
value (	:8-
LabelsEntry
key (	
value (	:8:|�Ay
)aiplatform.googleapis.com/DataLabelingJobLprojects/{project}/locations/{location}/dataLabelingJobs/{data_labeling_job}"�
ActiveLearningConfig
max_data_item_count (H "
max_data_item_percentage (H ?
sample_config (2(.google.cloud.aiplatform.v1.SampleConfigC
training_config (2*.google.cloud.aiplatform.v1.TrainingConfigB
human_labeling_budget"�
SampleConfig)
initial_batch_sample_percentage (H +
!following_batch_sample_percentage (HP
sample_strategy (27.google.cloud.aiplatform.v1.SampleConfig.SampleStrategy"B
SampleStrategy
SAMPLE_STRATEGY_UNSPECIFIED 
UNCERTAINTYB
initial_batch_sample_sizeB
following_batch_sample_size"6
TrainingConfig$
timeout_training_milli_hours (B�
com.google.cloud.aiplatform.v1BDataLabelingJobProtoPZ>cloud.google.com/go/aiplatform/apiv1/aiplatformpb;aiplatformpb�Google.Cloud.AIPlatform.V1�Google\\Cloud\\AIPlatform\\V1�Google::Cloud::AIPlatform::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

