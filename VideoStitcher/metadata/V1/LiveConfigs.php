<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/stitcher/v1/live_configs.proto

namespace GPBMetadata\Google\Cloud\Video\Stitcher\V1;

class LiveConfigs
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        $pool->internalAddGeneratedFile(
            '
�

1google/cloud/video/stitcher/v1/live_configs.protogoogle.cloud.video.stitcher.v1google/api/resource.protogoogle/protobuf/duration.proto"�

LiveConfig
name (	B�A

source_uri (	B�A

ad_tag_uri (	F
gam_live_config (2-.google.cloud.video.stitcher.v1.GamLiveConfigD
state (20.google.cloud.video.stitcher.v1.LiveConfig.StateB�AD
ad_tracking (2*.google.cloud.video.stitcher.v1.AdTrackingB�A>
default_slate (	B\'�A$
"videostitcher.googleapis.com/SlateT
stitching_policy (2:.google.cloud.video.stitcher.v1.LiveConfig.StitchingPolicyG
prefetch_config
 (2..google.cloud.video.stitcher.v1.PrefetchConfig"E
State
STATE_UNSPECIFIED 
CREATING	
READY
DELETING"U
StitchingPolicy 
STITCHING_POLICY_UNSPECIFIED 
CUT_CURRENT
COMPLETE_AD:o�Al
\'videostitcher.googleapis.com/LiveConfigAprojects/{project}/locations/{location}/liveConfigs/{live_config}"f
PrefetchConfig
enabled (B�A>
initial_ad_request_duration (2.google.protobuf.Duration"a
GamLiveConfig
network_code (	B�A
	asset_key (	B�A
custom_asset_key (	B�A*A

AdTracking
AD_TRACKING_UNSPECIFIED 

CLIENT

SERVERBx
"com.google.cloud.video.stitcher.v1BLiveConfigsProtoPZ>cloud.google.com/go/video/stitcher/apiv1/stitcherpb;stitcherpbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

