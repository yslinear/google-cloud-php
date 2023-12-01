<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/agent.proto

namespace GPBMetadata\Google\Cloud\Dialogflow\Cx\V3;

class Agent
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
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\AdvancedSettings::initOnce();
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\AudioConfig::initOnce();
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\Flow::initOnce();
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\GenerativeSettings::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        $pool->internalAddGeneratedFile(
            '
�6
)google/cloud/dialogflow/cx/v3/agent.protogoogle.cloud.dialogflow.cx.v3google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto5google/cloud/dialogflow/cx/v3/advanced_settings.proto0google/cloud/dialogflow/cx/v3/audio_config.proto(google/cloud/dialogflow/cx/v3/flow.proto7google/cloud/dialogflow/cx/v3/generative_settings.proto#google/longrunning/operations.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/struct.proto"8
SpeechToTextSettings 
enable_speech_adaptation ("�
Agent
name (	
display_name (	B�A%
default_language_code (	B�A�A 
supported_language_codes (	
	time_zone (	B�A
description (	

avatar_uri (	T
speech_to_text_settings (23.google.cloud.dialogflow.cx.v3.SpeechToTextSettings:

start_flow (	B&�A�A 
dialogflow.googleapis.com/FlowJ
security_settings (	B/�A,
*dialogflow.googleapis.com/SecuritySettings&
enable_stackdriver_logging (B
enable_spell_correction (
locked (J
advanced_settings (2/.google.cloud.dialogflow.cx.v3.AdvancedSettings]
git_integration_settings (2;.google.cloud.dialogflow.cx.v3.Agent.GitIntegrationSettingsT
text_to_speech_settings (23.google.cloud.dialogflow.cx.v3.TextToSpeechSettingsa
gen_app_builder_settings! (2:.google.cloud.dialogflow.cx.v3.Agent.GenAppBuilderSettingsH �b
answer_feedback_settings& (2;.google.cloud.dialogflow.cx.v3.Agent.AnswerFeedbackSettingsB�A�
GitIntegrationSettingse
github_settings (2J.google.cloud.dialogflow.cx.v3.Agent.GitIntegrationSettings.GithubSettingsH 
GithubSettings
display_name (	
repository_uri (	
tracking_branch (	
access_token (	
branches (	B
git_settings,
GenAppBuilderSettings
engine (	B�A=
AnswerFeedbackSettings#
enable_answer_feedback (B�A:\\�AY
dialogflow.googleapis.com/Agent6projects/{project}/locations/{location}/agents/{agent}B
_gen_app_builder_settings"s
ListAgentsRequest7
parent (	B\'�A�A!dialogflow.googleapis.com/Agent
	page_size (

page_token (	"c
ListAgentsResponse4
agents (2$.google.cloud.dialogflow.cx.v3.Agent
next_page_token (	"H
GetAgentRequest5
name (	B\'�A�A!
dialogflow.googleapis.com/Agent"�
CreateAgentRequest7
parent (	B\'�A�A!dialogflow.googleapis.com/Agent8
agent (2$.google.cloud.dialogflow.cx.v3.AgentB�A"
UpdateAgentRequest8
agent (2$.google.cloud.dialogflow.cx.v3.AgentB�A/
update_mask (2.google.protobuf.FieldMask"K
DeleteAgentRequest5
name (	B\'�A�A!
dialogflow.googleapis.com/Agent"�
ExportAgentRequest5
name (	B\'�A�A!
dialogflow.googleapis.com/Agent
	agent_uri (	B�AV
data_format (2<.google.cloud.dialogflow.cx.v3.ExportAgentRequest.DataFormatB�AB
environment (	B-�A�A\'
%dialogflow.googleapis.com/Environment^
git_destination (2@.google.cloud.dialogflow.cx.v3.ExportAgentRequest.GitDestinationB�A-
 include_bigquery_export_settings (B�AA
GitDestination
tracking_branch (	
commit_message (	"E

DataFormat
DATA_FORMAT_UNSPECIFIED 
BLOB
JSON_PACKAGE"b
ExportAgentResponse
	agent_uri (	H 
agent_content (H 

commit_sha (	H B
agent"�
RestoreAgentRequest5
name (	B\'�A�A!
dialogflow.googleapis.com/Agent
	agent_uri (	H 
agent_content (H R

git_source (2<.google.cloud.dialogflow.cx.v3.RestoreAgentRequest.GitSourceH X
restore_option (2@.google.cloud.dialogflow.cx.v3.RestoreAgentRequest.RestoreOption$
	GitSource
tracking_branch (	"G
RestoreOption
RESTORE_OPTION_UNSPECIFIED 
KEEP
FALLBACKB
agent"d
ValidateAgentRequest5
name (	B\'�A�A!
dialogflow.googleapis.com/Agent
language_code (	"
GetAgentValidationResultRequestE
name (	B7�A�A1
/dialogflow.googleapis.com/AgentValidationResult
language_code (	"�
AgentValidationResult
name (	T
flow_validation_results (23.google.cloud.dialogflow.cx.v3.FlowValidationResult:}�Az
/dialogflow.googleapis.com/AgentValidationResultGprojects/{project}/locations/{location}/agents/{agent}/validationResult"�
GetGenerativeSettingsRequestG
name (	B9�A�A3
1dialogflow.googleapis.com/AgentGenerativeSettings
language_code (	B�A"�
UpdateGenerativeSettingsRequestS
generative_settings (21.google.cloud.dialogflow.cx.v3.GenerativeSettingsB�A4
update_mask (2.google.protobuf.FieldMaskB�A2�
Agents�

ListAgents0.google.cloud.dialogflow.cx.v3.ListAgentsRequest1.google.cloud.dialogflow.cx.v3.ListAgentsResponse";���,*/v3/{parent=projects/*/locations/*}/agents�Aparent�
GetAgent..google.cloud.dialogflow.cx.v3.GetAgentRequest$.google.cloud.dialogflow.cx.v3.Agent"9���,*/v3/{name=projects/*/locations/*/agents/*}�Aname�
CreateAgent1.google.cloud.dialogflow.cx.v3.CreateAgentRequest$.google.cloud.dialogflow.cx.v3.Agent"H���3"*/v3/{parent=projects/*/locations/*}/agents:agent�Aparent,agent�
UpdateAgent1.google.cloud.dialogflow.cx.v3.UpdateAgentRequest$.google.cloud.dialogflow.cx.v3.Agent"S���920/v3/{agent.name=projects/*/locations/*/agents/*}:agent�Aagent,update_mask�
DeleteAgent1.google.cloud.dialogflow.cx.v3.DeleteAgentRequest.google.protobuf.Empty"9���,**/v3/{name=projects/*/locations/*/agents/*}�Aname�
ExportAgent1.google.cloud.dialogflow.cx.v3.ExportAgentRequest.google.longrunning.Operation"l���6"1/v3/{name=projects/*/locations/*/agents/*}:export:*�A-
ExportAgentResponsegoogle.protobuf.Struct�
RestoreAgent2.google.cloud.dialogflow.cx.v3.RestoreAgentRequest.google.longrunning.Operation"o���7"2/v3/{name=projects/*/locations/*/agents/*}:restore:*�A/
google.protobuf.Emptygoogle.protobuf.Struct�
ValidateAgent3.google.cloud.dialogflow.cx.v3.ValidateAgentRequest4.google.cloud.dialogflow.cx.v3.AgentValidationResult">���8"3/v3/{name=projects/*/locations/*/agents/*}:validate:*�
GetAgentValidationResult>.google.cloud.dialogflow.cx.v3.GetAgentValidationResultRequest4.google.cloud.dialogflow.cx.v3.AgentValidationResult"J���=;/v3/{name=projects/*/locations/*/agents/*/validationResult}�Aname�
GetGenerativeSettings;.google.cloud.dialogflow.cx.v3.GetGenerativeSettingsRequest1.google.cloud.dialogflow.cx.v3.GenerativeSettings"Z���?=/v3/{name=projects/*/locations/*/agents/*/generativeSettings}�Aname,language_code�
UpdateGenerativeSettings>.google.cloud.dialogflow.cx.v3.UpdateGenerativeSettingsRequest1.google.cloud.dialogflow.cx.v3.GenerativeSettings"����h2Q/v3/{generative_settings.name=projects/*/locations/*/agents/*/generativeSettings}:generative_settings�Agenerative_settings,update_maskx�Adialogflow.googleapis.com�AYhttps://www.googleapis.com/auth/cloud-platform,https://www.googleapis.com/auth/dialogflowB�
!com.google.cloud.dialogflow.cx.v3B
AgentProtoPZ1cloud.google.com/go/dialogflow/cx/apiv3/cxpb;cxpb��DF�Google.Cloud.Dialogflow.Cx.V3�!Google::Cloud::Dialogflow::CX::V3bproto3'
        , true);

        static::$is_initialized = true;
    }
}

