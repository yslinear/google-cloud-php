<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/clouddms/v1/clouddms.proto

namespace Google\Cloud\CloudDms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for 'DescribeDatabaseEntities' request.
 *
 * Generated from protobuf message <code>google.cloud.clouddms.v1.DescribeDatabaseEntitiesResponse</code>
 */
class DescribeDatabaseEntitiesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of database entities for the conversion workspace.
     *
     * Generated from protobuf field <code>repeated .google.cloud.clouddms.v1.DatabaseEntity database_entities = 1;</code>
     */
    private $database_entities;
    /**
     * A token which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\CloudDms\V1\DatabaseEntity>|\Google\Protobuf\Internal\RepeatedField $database_entities
     *           The list of database entities for the conversion workspace.
     *     @type string $next_page_token
     *           A token which can be sent as `page_token` to retrieve the next page.
     *           If this field is omitted, there are no subsequent pages.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Clouddms\V1\Clouddms::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of database entities for the conversion workspace.
     *
     * Generated from protobuf field <code>repeated .google.cloud.clouddms.v1.DatabaseEntity database_entities = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDatabaseEntities()
    {
        return $this->database_entities;
    }

    /**
     * The list of database entities for the conversion workspace.
     *
     * Generated from protobuf field <code>repeated .google.cloud.clouddms.v1.DatabaseEntity database_entities = 1;</code>
     * @param array<\Google\Cloud\CloudDms\V1\DatabaseEntity>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDatabaseEntities($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\CloudDms\V1\DatabaseEntity::class);
        $this->database_entities = $arr;

        return $this;
    }

    /**
     * A token which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

