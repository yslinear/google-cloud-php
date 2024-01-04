<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/cloudquotas/v1/cloudquotas.proto

namespace GPBMetadata\Google\Api\Cloudquotas\V1;

class Cloudquotas
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\Cloudquotas\V1\Resources::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(
            '
�"
+google/api/cloudquotas/v1/cloudquotas.protogoogle.api.cloudquotas.v1google/api/client.proto)google/api/cloudquotas/v1/resources.protogoogle/api/field_behavior.protogoogle/api/resource.proto google/protobuf/field_mask.proto"�
ListQuotaInfosRequest<
parent (	B,�A�A&$cloudquotas.googleapis.com/QuotaInfo
	page_size (B�A

page_token (	B�A"l
ListQuotaInfosResponse9
quota_infos (2$.google.api.cloudquotas.v1.QuotaInfo
next_page_token (	"Q
GetQuotaInfoRequest:
name (	B,�A�A&
$cloudquotas.googleapis.com/QuotaInfo"�
ListQuotaPreferencesRequestB
parent (	B2�A�A,*cloudquotas.googleapis.com/QuotaPreference
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A"�
ListQuotaPreferencesResponseE
quota_preferences (2*.google.api.cloudquotas.v1.QuotaPreference
next_page_token (	
unreachable (	"]
GetQuotaPreferenceRequest@
name (	B2�A�A,
*cloudquotas.googleapis.com/QuotaPreference"�
CreateQuotaPreferenceRequestB
parent (	B2�A�A,*cloudquotas.googleapis.com/QuotaPreference 
quota_preference_id (	B�AI
quota_preference (2*.google.api.cloudquotas.v1.QuotaPreferenceB�AI
ignore_safety_checks (2+.google.api.cloudquotas.v1.QuotaSafetyCheck"�
UpdateQuotaPreferenceRequest4
update_mask (2.google.protobuf.FieldMaskB�AI
quota_preference (2*.google.api.cloudquotas.v1.QuotaPreferenceB�A
allow_missing (B�A
validate_only (B�AI
ignore_safety_checks (2+.google.api.cloudquotas.v1.QuotaSafetyCheck2�
CloudQuotas�
ListQuotaInfos0.google.api.cloudquotas.v1.ListQuotaInfosRequest1.google.api.cloudquotas.v1.ListQuotaInfosResponse"�����9/v1/{parent=projects/*/locations/*/services/*}/quotaInfosZ@>/v1/{parent=organizations/*/locations/*/services/*}/quotaInfosZ:8/v1/{parent=folders/*/locations/*/services/*}/quotaInfos�Aparent�
GetQuotaInfo..google.api.cloudquotas.v1.GetQuotaInfoRequest$.google.api.cloudquotas.v1.QuotaInfo"�����9/v1/{name=projects/*/locations/*/services/*/quotaInfos/*}Z@>/v1/{name=organizations/*/locations/*/services/*/quotaInfos/*}Z:8/v1/{name=folders/*/locations/*/services/*/quotaInfos/*}�Aname�
ListQuotaPreferences6.google.api.cloudquotas.v1.ListQuotaPreferencesRequest7.google.api.cloudquotas.v1.ListQuotaPreferencesResponse"�����4/v1/{parent=projects/*/locations/*}/quotaPreferencesZ53/v1/{parent=folders/*/locations/*}/quotaPreferencesZ;9/v1/{parent=organizations/*/locations/*}/quotaPreferences�Aparent�
GetQuotaPreference4.google.api.cloudquotas.v1.GetQuotaPreferenceRequest*.google.api.cloudquotas.v1.QuotaPreference"�����4/v1/{name=projects/*/locations/*/quotaPreferences/*}Z;9/v1/{name=organizations/*/locations/*/quotaPreferences/*}Z53/v1/{name=folders/*/locations/*/quotaPreferences/*}�Aname�
CreateQuotaPreference7.google.api.cloudquotas.v1.CreateQuotaPreferenceRequest*.google.api.cloudquotas.v1.QuotaPreference"�����"4/v1/{parent=projects/*/locations/*}/quotaPreferences:quota_preferenceZG"3/v1/{parent=folders/*/locations/*}/quotaPreferences:quota_preferenceZM"9/v1/{parent=organizations/*/locations/*}/quotaPreferences:quota_preference�A+parent,quota_preference,quota_preference_id�Aparent,quota_preference�
UpdateQuotaPreference7.google.api.cloudquotas.v1.UpdateQuotaPreferenceRequest*.google.api.cloudquotas.v1.QuotaPreference"�����2E/v1/{quota_preference.name=projects/*/locations/*/quotaPreferences/*}:quota_preferenceZX2D/v1/{quota_preference.name=folders/*/locations/*/quotaPreferences/*}:quota_preferenceZ^2J/v1/{quota_preference.name=organizations/*/locations/*/quotaPreferences/*}:quota_preference�Aquota_preference,update_maskN�Acloudquotas.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
com.google.api.cloudquotas.v1BCloudquotasProtoPZAcloud.google.com/go/cloudquotas/apiv1/cloudquotaspb;cloudquotaspb�Google.Cloud.CloudQuotas.V1�Google\\Cloud\\CloudQuotas\\V1�Google::Cloud::CloudQuotas::V1�A�
"cloudquotas.googleapis.com/Service:projects/{project}/locations/{location}/services/{service}8folders/{folder}/locations/{location}/services/{service}Dorganizations/{organization}/locations/{location}/services/{service}�A�
#cloudquotas.googleapis.com/Location\'projects/{project}/locations/{location}%folders/{folder}/locations/{location}1organizations/{organization}/locations/{location}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

