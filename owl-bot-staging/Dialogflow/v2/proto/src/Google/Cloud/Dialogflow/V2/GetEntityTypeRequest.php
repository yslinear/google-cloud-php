<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/entity_type.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for
 * [EntityTypes.GetEntityType][google.cloud.dialogflow.v2.EntityTypes.GetEntityType].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.GetEntityTypeRequest</code>
 */
class GetEntityTypeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the entity type.
     * Format: `projects/<Project ID>/agent/entityTypes/<EntityType ID>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Optional. The language used to access language-specific data.
     * If not specified, the agent's default language is used.
     * For more information, see
     * [Multilingual intent and entity
     * data](https://cloud.google.com/dialogflow/docs/agents-multilingual#intent-entity).
     *
     * Generated from protobuf field <code>string language_code = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $language_code = '';

    /**
     * @param string $name Required. The name of the entity type.
     *                     Format: `projects/<Project ID>/agent/entityTypes/<EntityType ID>`. Please see
     *                     {@see EntityTypesClient::entityTypeName()} for help formatting this field.
     *
     * @return \Google\Cloud\Dialogflow\V2\GetEntityTypeRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * @param string $name         Required. The name of the entity type.
     *                             Format: `projects/<Project ID>/agent/entityTypes/<EntityType ID>`. Please see
     *                             {@see EntityTypesClient::entityTypeName()} for help formatting this field.
     * @param string $languageCode Optional. The language used to access language-specific data.
     *                             If not specified, the agent's default language is used.
     *                             For more information, see
     *                             [Multilingual intent and entity
     *                             data](https://cloud.google.com/dialogflow/docs/agents-multilingual#intent-entity).
     *
     * @return \Google\Cloud\Dialogflow\V2\GetEntityTypeRequest
     *
     * @experimental
     */
    public static function buildFromNameLanguageCode(string $name, string $languageCode): self
    {
        return (new self())
            ->setName($name)
            ->setLanguageCode($languageCode);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the entity type.
     *           Format: `projects/<Project ID>/agent/entityTypes/<EntityType ID>`.
     *     @type string $language_code
     *           Optional. The language used to access language-specific data.
     *           If not specified, the agent's default language is used.
     *           For more information, see
     *           [Multilingual intent and entity
     *           data](https://cloud.google.com/dialogflow/docs/agents-multilingual#intent-entity).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\EntityType::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the entity type.
     * Format: `projects/<Project ID>/agent/entityTypes/<EntityType ID>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the entity type.
     * Format: `projects/<Project ID>/agent/entityTypes/<EntityType ID>`.
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

    /**
     * Optional. The language used to access language-specific data.
     * If not specified, the agent's default language is used.
     * For more information, see
     * [Multilingual intent and entity
     * data](https://cloud.google.com/dialogflow/docs/agents-multilingual#intent-entity).
     *
     * Generated from protobuf field <code>string language_code = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * Optional. The language used to access language-specific data.
     * If not specified, the agent's default language is used.
     * For more information, see
     * [Multilingual intent and entity
     * data](https://cloud.google.com/dialogflow/docs/agents-multilingual#intent-entity).
     *
     * Generated from protobuf field <code>string language_code = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;

        return $this;
    }

}

