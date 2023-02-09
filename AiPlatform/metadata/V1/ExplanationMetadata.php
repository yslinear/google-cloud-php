<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/explanation_metadata.proto

namespace GPBMetadata\Google\Cloud\Aiplatform\V1;

class ExplanationMetadata
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
5google/cloud/aiplatform/v1/explanation_metadata.protogoogle.cloud.aiplatform.v1google/protobuf/struct.proto"�
ExplanationMetadataP
inputs (2;.google.cloud.aiplatform.v1.ExplanationMetadata.InputsEntryB�AR
outputs (2<.google.cloud.aiplatform.v1.ExplanationMetadata.OutputsEntryB�A\'
feature_attributions_schema_uri (	
latent_space_source (	�
InputMetadata/
input_baselines (2.google.protobuf.Value
input_tensor_name (	X
encoding (2F.google.cloud.aiplatform.v1.ExplanationMetadata.InputMetadata.Encoding
modality (	n
feature_value_domain (2P.google.cloud.aiplatform.v1.ExplanationMetadata.InputMetadata.FeatureValueDomain
indices_tensor_name (	
dense_shape_tensor_name (	
index_feature_mapping (	
encoded_tensor_name	 (	1
encoded_baselines
 (2.google.protobuf.Valueb
visualization (2K.google.cloud.aiplatform.v1.ExplanationMetadata.InputMetadata.Visualization

group_name (	j
FeatureValueDomain
	min_value (
	max_value (
original_mean (
original_stddev (�
Visualization^
type (2P.google.cloud.aiplatform.v1.ExplanationMetadata.InputMetadata.Visualization.Typef
polarity (2T.google.cloud.aiplatform.v1.ExplanationMetadata.InputMetadata.Visualization.Polarityg
	color_map (2T.google.cloud.aiplatform.v1.ExplanationMetadata.InputMetadata.Visualization.ColorMap
clip_percent_upperbound (
clip_percent_lowerbound (m
overlay_type (2W.google.cloud.aiplatform.v1.ExplanationMetadata.InputMetadata.Visualization.OverlayType"6
Type
TYPE_UNSPECIFIED 

PIXELS
OUTLINES"J
Polarity
POLARITY_UNSPECIFIED 
POSITIVE
NEGATIVE
BOTH"{
ColorMap
COLOR_MAP_UNSPECIFIED 

PINK_GREEN
VIRIDIS
RED	
GREEN
	RED_GREEN
PINK_WHITE_GREEN"b
OverlayType
OVERLAY_TYPE_UNSPECIFIED 
NONE
ORIGINAL
	GRAYSCALE

MASK_BLACK"�
Encoding
ENCODING_UNSPECIFIED 
IDENTITY
BAG_OF_FEATURES
BAG_OF_FEATURES_SPARSE
	INDICATOR
COMBINED_EMBEDDING
CONCAT_EMBEDDING�
OutputMetadata<
index_display_name_mapping (2.google.protobuf.ValueH "
display_name_mapping_key (	H 
output_tensor_name (	B
display_name_mappingl
InputsEntry
key (	L
value (2=.google.cloud.aiplatform.v1.ExplanationMetadata.InputMetadata:8n
OutputsEntry
key (	M
value (2>.google.cloud.aiplatform.v1.ExplanationMetadata.OutputMetadata:8B�
com.google.cloud.aiplatform.v1BExplanationMetadataProtoPZ>cloud.google.com/go/aiplatform/apiv1/aiplatformpb;aiplatformpb�Google.Cloud.AIPlatform.V1�Google\\Cloud\\AIPlatform\\V1�Google::Cloud::AIPlatform::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

