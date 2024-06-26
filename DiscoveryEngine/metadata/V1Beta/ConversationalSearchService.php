<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/conversational_search_service.proto

namespace GPBMetadata\Google\Cloud\Discoveryengine\V1Beta;

class ConversationalSearchService
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
        \GPBMetadata\Google\Cloud\Discoveryengine\V1Beta\Answer::initOnce();
        \GPBMetadata\Google\Cloud\Discoveryengine\V1Beta\Conversation::initOnce();
        \GPBMetadata\Google\Cloud\Discoveryengine\V1Beta\SearchService::initOnce();
        \GPBMetadata\Google\Cloud\Discoveryengine\V1Beta\Session::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(
            '
�b
Ggoogle/cloud/discoveryengine/v1beta/conversational_search_service.proto#google.cloud.discoveryengine.v1betagoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto0google/cloud/discoveryengine/v1beta/answer.proto6google/cloud/discoveryengine/v1beta/conversation.proto8google/cloud/discoveryengine/v1beta/search_service.proto1google/cloud/discoveryengine/v1beta/session.protogoogle/protobuf/empty.proto google/protobuf/field_mask.proto"�
ConverseConversationRequestA
name (	B3�A�A-
+discoveryengine.googleapis.com/ConversationB
query (2..google.cloud.discoveryengine.v1beta.TextInputB�AI
serving_config (	B1�A.
,discoveryengine.googleapis.com/ServingConfigG
conversation (21.google.cloud.discoveryengine.v1beta.Conversation
safe_search (e
user_labels (2P.google.cloud.discoveryengine.v1beta.ConverseConversationRequest.UserLabelsEntryf
summary_spec (2P.google.cloud.discoveryengine.v1beta.SearchRequest.ContentSearchSpec.SummarySpec
filter	 (	P

boost_spec
 (2<.google.cloud.discoveryengine.v1beta.SearchRequest.BoostSpec1
UserLabelsEntry
key (	
value (	:8"�
ConverseConversationResponse9
reply (2*.google.cloud.discoveryengine.v1beta.ReplyG
conversation (21.google.cloud.discoveryengine.v1beta.Conversation
related_questions (	X
search_results (2@.google.cloud.discoveryengine.v1beta.SearchResponse.SearchResult"�
CreateConversationRequest@
parent (	B0�A�A*
(discoveryengine.googleapis.com/DataStoreL
conversation (21.google.cloud.discoveryengine.v1beta.ConversationB�A"�
UpdateConversationRequestL
conversation (21.google.cloud.discoveryengine.v1beta.ConversationB�A/
update_mask (2.google.protobuf.FieldMask"^
DeleteConversationRequestA
name (	B3�A�A-
+discoveryengine.googleapis.com/Conversation"[
GetConversationRequestA
name (	B3�A�A-
+discoveryengine.googleapis.com/Conversation"�
ListConversationsRequest@
parent (	B0�A�A*
(discoveryengine.googleapis.com/DataStore
	page_size (

page_token (	
filter (	
order_by (	"~
ListConversationsResponseH
conversations (21.google.cloud.discoveryengine.v1beta.Conversation
next_page_token (	"�
AnswerQueryRequestL
serving_config (	B4�A�A.
,discoveryengine.googleapis.com/ServingConfig>
query (2*.google.cloud.discoveryengine.v1beta.QueryB�A<
session (	B+�A(
&discoveryengine.googleapis.com/SessionW
safety_spec (2B.google.cloud.discoveryengine.v1beta.AnswerQueryRequest.SafetySpecl
related_questions_spec (2L.google.cloud.discoveryengine.v1beta.AnswerQueryRequest.RelatedQuestionsSpecl
answer_generation_spec (2L.google.cloud.discoveryengine.v1beta.AnswerQueryRequest.AnswerGenerationSpecW
search_spec (2B.google.cloud.discoveryengine.v1beta.AnswerQueryRequest.SearchSpecp
query_understanding_spec	 (2N.google.cloud.discoveryengine.v1beta.AnswerQueryRequest.QueryUnderstandingSpec
asynchronous_mode
 (
user_pseudo_id (	

SafetySpec
enable (&
RelatedQuestionsSpec
enable (�
AnswerGenerationSpecj

model_spec (2V.google.cloud.discoveryengine.v1beta.AnswerQueryRequest.AnswerGenerationSpec.ModelSpecl
prompt_spec (2W.google.cloud.discoveryengine.v1beta.AnswerQueryRequest.AnswerGenerationSpec.PromptSpec
include_citations (
answer_language_code (	 
ignore_adversarial_query (\'
ignore_non_answer_seeking_query ("
	ModelSpec
model_version (	

PromptSpec
preamble (	�

SearchSpech
search_params (2O.google.cloud.discoveryengine.v1beta.AnswerQueryRequest.SearchSpec.SearchParamsH q
search_result_list (2S.google.cloud.discoveryengine.v1beta.AnswerQueryRequest.SearchSpec.SearchResultListH �
SearchParams
max_return_results (
filter (	P

boost_spec (2<.google.cloud.discoveryengine.v1beta.SearchRequest.BoostSpec
order_by (	�

SearchResultListx
search_results (2`.google.cloud.discoveryengine.v1beta.AnswerQueryRequest.SearchSpec.SearchResultList.SearchResult�	
SearchResult�
unstructured_document_info (2y.google.cloud.discoveryengine.v1beta.AnswerQueryRequest.SearchSpec.SearchResultList.SearchResult.UnstructuredDocumentInfoH �

chunk_info (2j.google.cloud.discoveryengine.v1beta.AnswerQueryRequest.SearchSpec.SearchResultList.SearchResult.ChunkInfoH �
UnstructuredDocumentInfo>
document (	B,�A)
\'discoveryengine.googleapis.com/Document
uri (	
title (	�
document_contexts (2�.google.cloud.discoveryengine.v1beta.AnswerQueryRequest.SearchSpec.SearchResultList.SearchResult.UnstructuredDocumentInfo.DocumentContext�
extractive_segments (2�.google.cloud.discoveryengine.v1beta.AnswerQueryRequest.SearchSpec.SearchResultList.SearchResult.UnstructuredDocumentInfo.ExtractiveSegment�
extractive_answers (2�.google.cloud.discoveryengine.v1beta.AnswerQueryRequest.SearchSpec.SearchResultList.SearchResult.UnstructuredDocumentInfo.ExtractiveAnswer;
DocumentContext
page_identifier (	
content (	=
ExtractiveSegment
page_identifier (	
content (	<
ExtractiveAnswer
page_identifier (	
content (	V
	ChunkInfo8
chunk (	B)�A&
$discoveryengine.googleapis.com/Chunk
content (	B	
contentB
input�
QueryUnderstandingSpec�
query_classification_spec (2f.google.cloud.discoveryengine.v1beta.AnswerQueryRequest.QueryUnderstandingSpec.QueryClassificationSpec
query_rephraser_spec (2a.google.cloud.discoveryengine.v1beta.AnswerQueryRequest.QueryUnderstandingSpec.QueryRephraserSpec�
QueryClassificationSpecz
types (2k.google.cloud.discoveryengine.v1beta.AnswerQueryRequest.QueryUnderstandingSpec.QueryClassificationSpec.Type"Q
Type
TYPE_UNSPECIFIED 
ADVERSARIAL_QUERY
NON_ANSWER_SEEKING_QUERYA
QueryRephraserSpec
disable (
max_rephrase_steps ("�
AnswerQueryResponse;
answer (2+.google.cloud.discoveryengine.v1beta.Answer=
session (2,.google.cloud.discoveryengine.v1beta.Session"O
GetAnswerRequest;
name (	B-�A�A\'
%discoveryengine.googleapis.com/Answer"�
CreateSessionRequest@
parent (	B0�A�A*
(discoveryengine.googleapis.com/DataStoreB
session (2,.google.cloud.discoveryengine.v1beta.SessionB�A"�
UpdateSessionRequestB
session (2,.google.cloud.discoveryengine.v1beta.SessionB�A/
update_mask (2.google.protobuf.FieldMask"T
DeleteSessionRequest<
name (	B.�A�A(
&discoveryengine.googleapis.com/Session"Q
GetSessionRequest<
name (	B.�A�A(
&discoveryengine.googleapis.com/Session"�
ListSessionsRequest@
parent (	B0�A�A*
(discoveryengine.googleapis.com/DataStore
	page_size (

page_token (	
filter (	
order_by (	"o
ListSessionsResponse>
sessions (2,.google.cloud.discoveryengine.v1beta.Session
next_page_token (	2�)
ConversationalSearchService�
ConverseConversation@.google.cloud.discoveryengine.v1beta.ConverseConversationRequestA.google.cloud.discoveryengine.v1beta.ConverseConversationResponse"��A
name,query����"K/v1beta/{name=projects/*/locations/*/dataStores/*/conversations/*}:converse:*Z^"Y/v1beta/{name=projects/*/locations/*/collections/*/dataStores/*/conversations/*}:converse:*Z["V/v1beta/{name=projects/*/locations/*/collections/*/engines/*/conversations/*}:converse:*�
CreateConversation>.google.cloud.discoveryengine.v1beta.CreateConversationRequest1.google.cloud.discoveryengine.v1beta.Conversation"��Aparent,conversation����"B/v1beta/{parent=projects/*/locations/*/dataStores/*}/conversations:conversationZ`"P/v1beta/{parent=projects/*/locations/*/collections/*/dataStores/*}/conversations:conversationZ]"M/v1beta/{parent=projects/*/locations/*/collections/*/engines/*}/conversations:conversation�
DeleteConversation>.google.cloud.discoveryengine.v1beta.DeleteConversationRequest.google.protobuf.Empty"��Aname����*B/v1beta/{name=projects/*/locations/*/dataStores/*/conversations/*}ZR*P/v1beta/{name=projects/*/locations/*/collections/*/dataStores/*/conversations/*}ZO*M/v1beta/{name=projects/*/locations/*/collections/*/engines/*/conversations/*}�
UpdateConversation>.google.cloud.discoveryengine.v1beta.UpdateConversationRequest1.google.cloud.discoveryengine.v1beta.Conversation"��Aconversation,update_mask����2O/v1beta/{conversation.name=projects/*/locations/*/dataStores/*/conversations/*}:conversationZm2]/v1beta/{conversation.name=projects/*/locations/*/collections/*/dataStores/*/conversations/*}:conversationZj2Z/v1beta/{conversation.name=projects/*/locations/*/collections/*/engines/*/conversations/*}:conversation�
GetConversation;.google.cloud.discoveryengine.v1beta.GetConversationRequest1.google.cloud.discoveryengine.v1beta.Conversation"��Aname����B/v1beta/{name=projects/*/locations/*/dataStores/*/conversations/*}ZRP/v1beta/{name=projects/*/locations/*/collections/*/dataStores/*/conversations/*}ZOM/v1beta/{name=projects/*/locations/*/collections/*/engines/*/conversations/*}�
ListConversations=.google.cloud.discoveryengine.v1beta.ListConversationsRequest>.google.cloud.discoveryengine.v1beta.ListConversationsResponse"��Aparent����B/v1beta/{parent=projects/*/locations/*/dataStores/*}/conversationsZRP/v1beta/{parent=projects/*/locations/*/collections/*/dataStores/*}/conversationsZOM/v1beta/{parent=projects/*/locations/*/collections/*/engines/*}/conversations�
AnswerQuery7.google.cloud.discoveryengine.v1beta.AnswerQueryRequest8.google.cloud.discoveryengine.v1beta.AnswerQueryResponse"�����"T/v1beta/{serving_config=projects/*/locations/*/dataStores/*/servingConfigs/*}:answer:*Zg"b/v1beta/{serving_config=projects/*/locations/*/collections/*/dataStores/*/servingConfigs/*}:answer:*Zd"_/v1beta/{serving_config=projects/*/locations/*/collections/*/engines/*/servingConfigs/*}:answer:*�
	GetAnswer5.google.cloud.discoveryengine.v1beta.GetAnswerRequest+.google.cloud.discoveryengine.v1beta.Answer"��Aname����G/v1beta/{name=projects/*/locations/*/dataStores/*/sessions/*/answers/*}ZWU/v1beta/{name=projects/*/locations/*/collections/*/dataStores/*/sessions/*/answers/*}ZTR/v1beta/{name=projects/*/locations/*/collections/*/engines/*/sessions/*/answers/*}�
CreateSession9.google.cloud.discoveryengine.v1beta.CreateSessionRequest,.google.cloud.discoveryengine.v1beta.Session"��Aparent,session����"=/v1beta/{parent=projects/*/locations/*/dataStores/*}/sessions:sessionZV"K/v1beta/{parent=projects/*/locations/*/collections/*/dataStores/*}/sessions:sessionZS"H/v1beta/{parent=projects/*/locations/*/collections/*/engines/*}/sessions:session�
DeleteSession9.google.cloud.discoveryengine.v1beta.DeleteSessionRequest.google.protobuf.Empty"��Aname����*=/v1beta/{name=projects/*/locations/*/dataStores/*/sessions/*}ZM*K/v1beta/{name=projects/*/locations/*/collections/*/dataStores/*/sessions/*}ZJ*H/v1beta/{name=projects/*/locations/*/collections/*/engines/*/sessions/*}�
UpdateSession9.google.cloud.discoveryengine.v1beta.UpdateSessionRequest,.google.cloud.discoveryengine.v1beta.Session"��Asession,update_mask����2E/v1beta/{session.name=projects/*/locations/*/dataStores/*/sessions/*}:sessionZ^2S/v1beta/{session.name=projects/*/locations/*/collections/*/dataStores/*/sessions/*}:sessionZ[2P/v1beta/{session.name=projects/*/locations/*/collections/*/engines/*/sessions/*}:session�

GetSession6.google.cloud.discoveryengine.v1beta.GetSessionRequest,.google.cloud.discoveryengine.v1beta.Session"��Aname����=/v1beta/{name=projects/*/locations/*/dataStores/*/sessions/*}ZMK/v1beta/{name=projects/*/locations/*/collections/*/dataStores/*/sessions/*}ZJH/v1beta/{name=projects/*/locations/*/collections/*/engines/*/sessions/*}�
ListSessions8.google.cloud.discoveryengine.v1beta.ListSessionsRequest9.google.cloud.discoveryengine.v1beta.ListSessionsResponse"��Aparent����=/v1beta/{parent=projects/*/locations/*/dataStores/*}/sessionsZMK/v1beta/{parent=projects/*/locations/*/collections/*/dataStores/*}/sessionsZJH/v1beta/{parent=projects/*/locations/*/collections/*/engines/*}/sessionsR�Adiscoveryengine.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
\'com.google.cloud.discoveryengine.v1betaB ConversationalSearchServiceProtoPZQcloud.google.com/go/discoveryengine/apiv1beta/discoveryenginepb;discoveryenginepb�DISCOVERYENGINE�#Google.Cloud.DiscoveryEngine.V1Beta�#Google\\Cloud\\DiscoveryEngine\\V1beta�&Google::Cloud::DiscoveryEngine::V1betabproto3'
        , true);

        static::$is_initialized = true;
    }
}

