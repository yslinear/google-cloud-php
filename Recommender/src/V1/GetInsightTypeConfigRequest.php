<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recommender/v1/recommender_service.proto

namespace Google\Cloud\Recommender\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the GetInsightTypeConfig` method.
 *
 * Generated from protobuf message <code>google.cloud.recommender.v1.GetInsightTypeConfigRequest</code>
 */
class GetInsightTypeConfigRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the InsightTypeConfig to get.
     * Acceptable formats:
     * * `projects/[PROJECT_NUMBER]/locations/global/recommenders/[INSIGHT_TYPE_ID]/config`
     * * `projects/[PROJECT_ID]/locations/global/recommenders/[INSIGHT_TYPE_ID]/config`
     * * `organizations/[ORGANIZATION_ID]/locations/global/recommenders/[INSIGHT_TYPE_ID]/config`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';

    /**
     * @param string $name Required. Name of the InsightTypeConfig to get.
     *
     *                     Acceptable formats:
     *
     *                     * `projects/[PROJECT_NUMBER]/locations/global/recommenders/[INSIGHT_TYPE_ID]/config`
     *
     *                     * `projects/[PROJECT_ID]/locations/global/recommenders/[INSIGHT_TYPE_ID]/config`
     *
     *                     * `organizations/[ORGANIZATION_ID]/locations/global/recommenders/[INSIGHT_TYPE_ID]/config`
     *                     Please see {@see RecommenderClient::insightTypeConfigName()} for help formatting this field.
     *
     * @return \Google\Cloud\Recommender\V1\GetInsightTypeConfigRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Name of the InsightTypeConfig to get.
     *           Acceptable formats:
     *           * `projects/[PROJECT_NUMBER]/locations/global/recommenders/[INSIGHT_TYPE_ID]/config`
     *           * `projects/[PROJECT_ID]/locations/global/recommenders/[INSIGHT_TYPE_ID]/config`
     *           * `organizations/[ORGANIZATION_ID]/locations/global/recommenders/[INSIGHT_TYPE_ID]/config`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Recommender\V1\RecommenderService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the InsightTypeConfig to get.
     * Acceptable formats:
     * * `projects/[PROJECT_NUMBER]/locations/global/recommenders/[INSIGHT_TYPE_ID]/config`
     * * `projects/[PROJECT_ID]/locations/global/recommenders/[INSIGHT_TYPE_ID]/config`
     * * `organizations/[ORGANIZATION_ID]/locations/global/recommenders/[INSIGHT_TYPE_ID]/config`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Name of the InsightTypeConfig to get.
     * Acceptable formats:
     * * `projects/[PROJECT_NUMBER]/locations/global/recommenders/[INSIGHT_TYPE_ID]/config`
     * * `projects/[PROJECT_ID]/locations/global/recommenders/[INSIGHT_TYPE_ID]/config`
     * * `organizations/[ORGANIZATION_ID]/locations/global/recommenders/[INSIGHT_TYPE_ID]/config`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

