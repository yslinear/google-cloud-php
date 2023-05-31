<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/search_service.proto

namespace GPBMetadata\Google\Cloud\Discoveryengine\V1;

class SearchService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\Common::initOnce();
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\Document::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
4google/cloud/discoveryengine/v1/search_service.protogoogle.cloud.discoveryengine.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto,google/cloud/discoveryengine/v1/common.proto.google/cloud/discoveryengine/v1/document.protogoogle/protobuf/struct.proto"�
SearchRequestL
serving_config (	B4�A�A.
,discoveryengine.googleapis.com/ServingConfig:
branch (	B*�A\'
%discoveryengine.googleapis.com/Branch
query (	
	page_size (

page_token (	
offset (<
	user_info (2).google.cloud.discoveryengine.v1.UserInfoJ
params (2:.google.cloud.discoveryengine.v1.SearchRequest.ParamsEntry_
query_expansion_spec (2A.google.cloud.discoveryengine.v1.SearchRequest.QueryExpansionSpeca
spell_correction_spec (2B.google.cloud.discoveryengine.v1.SearchRequest.SpellCorrectionSpec
user_pseudo_id (	]
content_search_spec (2@.google.cloud.discoveryengine.v1.SearchRequest.ContentSearchSpec
safe_search (S
user_labels (2>.google.cloud.discoveryengine.v1.SearchRequest.UserLabelsEntry�
QueryExpansionSpec^
	condition (2K.google.cloud.discoveryengine.v1.SearchRequest.QueryExpansionSpec.Condition">
	Condition
CONDITION_UNSPECIFIED 
DISABLED
AUTO�
SpellCorrectionSpecU
mode (2G.google.cloud.discoveryengine.v1.SearchRequest.SpellCorrectionSpec.Mode";
Mode
MODE_UNSPECIFIED 
SUGGESTION_ONLY
AUTO�
ContentSearchSpecb
snippet_spec (2L.google.cloud.discoveryengine.v1.SearchRequest.ContentSearchSpec.SnippetSpecb
summary_spec (2L.google.cloud.discoveryengine.v1.SearchRequest.ContentSearchSpec.SummarySpec@
SnippetSpec
max_snippet_count (
reference_only (+
SummarySpec
summary_result_count (E
ParamsEntry
key (	%
value (2.google.protobuf.Value:81
UserLabelsEntry
key (	
value (	:8"�
SearchResponseM
results (2<.google.cloud.discoveryengine.v1.SearchResponse.SearchResult

total_size (
attribution_token (	
next_page_token (	
corrected_query (	H
summary	 (27.google.cloud.discoveryengine.v1.SearchResponse.SummaryW
SearchResult

id (	;
document (2).google.cloud.discoveryengine.v1.Document
Summary
summary_text (	2�
SearchService�
Search..google.cloud.discoveryengine.v1.SearchRequest/.google.cloud.discoveryengine.v1.SearchResponse"�����"P/v1/{serving_config=projects/*/locations/*/dataStores/*/servingConfigs/*}:search:*Zc"^/v1/{serving_config=projects/*/locations/*/collections/*/dataStores/*/servingConfigs/*}:search:*R�Adiscoveryengine.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
#com.google.cloud.discoveryengine.v1BSearchServiceProtoPZMcloud.google.com/go/discoveryengine/apiv1/discoveryenginepb;discoveryenginepb�DISCOVERYENGINE�Google.Cloud.DiscoveryEngine.V1�Google\\Cloud\\DiscoveryEngine\\V1�"Google::Cloud::DiscoveryEngine::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

