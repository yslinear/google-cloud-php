<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/datatransfer/v1/datatransfer.proto

namespace Google\Cloud\BigQuery\DataTransfer\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request to list data transfer runs.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.datatransfer.v1.ListTransferRunsRequest</code>
 */
class ListTransferRunsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of transfer configuration for which transfer runs should be
     * retrieved. Format of transfer configuration resource name is:
     * `projects/{project_id}/transferConfigs/{config_id}` or
     * `projects/{project_id}/locations/{location_id}/transferConfigs/{config_id}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * When specified, only transfer runs with requested states are returned.
     *
     * Generated from protobuf field <code>repeated .google.cloud.bigquery.datatransfer.v1.TransferState states = 2;</code>
     */
    private $states;
    /**
     * Pagination token, which can be used to request a specific page
     * of `ListTransferRunsRequest` list results. For multiple-page
     * results, `ListTransferRunsResponse` outputs
     * a `next_page` token, which can be used as the
     * `page_token` value to request the next page of list results.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    private $page_token = '';
    /**
     * Page size. The default page size is the maximum value of 1000 results.
     *
     * Generated from protobuf field <code>int32 page_size = 4;</code>
     */
    private $page_size = 0;
    /**
     * Indicates how run attempts are to be pulled.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.datatransfer.v1.ListTransferRunsRequest.RunAttempt run_attempt = 5;</code>
     */
    private $run_attempt = 0;

    /**
     * @param string $parent Required. Name of transfer configuration for which transfer runs should be
     *                       retrieved. Format of transfer configuration resource name is:
     *                       `projects/{project_id}/transferConfigs/{config_id}` or
     *                       `projects/{project_id}/locations/{location_id}/transferConfigs/{config_id}`. Please see
     *                       {@see DataTransferServiceClient::transferConfigName()} for help formatting this field.
     *
     * @return \Google\Cloud\BigQuery\DataTransfer\V1\ListTransferRunsRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Name of transfer configuration for which transfer runs should be
     *           retrieved. Format of transfer configuration resource name is:
     *           `projects/{project_id}/transferConfigs/{config_id}` or
     *           `projects/{project_id}/locations/{location_id}/transferConfigs/{config_id}`.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $states
     *           When specified, only transfer runs with requested states are returned.
     *     @type string $page_token
     *           Pagination token, which can be used to request a specific page
     *           of `ListTransferRunsRequest` list results. For multiple-page
     *           results, `ListTransferRunsResponse` outputs
     *           a `next_page` token, which can be used as the
     *           `page_token` value to request the next page of list results.
     *     @type int $page_size
     *           Page size. The default page size is the maximum value of 1000 results.
     *     @type int $run_attempt
     *           Indicates how run attempts are to be pulled.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Datatransfer\V1\Datatransfer::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of transfer configuration for which transfer runs should be
     * retrieved. Format of transfer configuration resource name is:
     * `projects/{project_id}/transferConfigs/{config_id}` or
     * `projects/{project_id}/locations/{location_id}/transferConfigs/{config_id}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Name of transfer configuration for which transfer runs should be
     * retrieved. Format of transfer configuration resource name is:
     * `projects/{project_id}/transferConfigs/{config_id}` or
     * `projects/{project_id}/locations/{location_id}/transferConfigs/{config_id}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * When specified, only transfer runs with requested states are returned.
     *
     * Generated from protobuf field <code>repeated .google.cloud.bigquery.datatransfer.v1.TransferState states = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStates()
    {
        return $this->states;
    }

    /**
     * When specified, only transfer runs with requested states are returned.
     *
     * Generated from protobuf field <code>repeated .google.cloud.bigquery.datatransfer.v1.TransferState states = 2;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStates($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\BigQuery\DataTransfer\V1\TransferState::class);
        $this->states = $arr;

        return $this;
    }

    /**
     * Pagination token, which can be used to request a specific page
     * of `ListTransferRunsRequest` list results. For multiple-page
     * results, `ListTransferRunsResponse` outputs
     * a `next_page` token, which can be used as the
     * `page_token` value to request the next page of list results.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Pagination token, which can be used to request a specific page
     * of `ListTransferRunsRequest` list results. For multiple-page
     * results, `ListTransferRunsResponse` outputs
     * a `next_page` token, which can be used as the
     * `page_token` value to request the next page of list results.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Page size. The default page size is the maximum value of 1000 results.
     *
     * Generated from protobuf field <code>int32 page_size = 4;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Page size. The default page size is the maximum value of 1000 results.
     *
     * Generated from protobuf field <code>int32 page_size = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Indicates how run attempts are to be pulled.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.datatransfer.v1.ListTransferRunsRequest.RunAttempt run_attempt = 5;</code>
     * @return int
     */
    public function getRunAttempt()
    {
        return $this->run_attempt;
    }

    /**
     * Indicates how run attempts are to be pulled.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.datatransfer.v1.ListTransferRunsRequest.RunAttempt run_attempt = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setRunAttempt($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\BigQuery\DataTransfer\V1\ListTransferRunsRequest\RunAttempt::class);
        $this->run_attempt = $var;

        return $this;
    }

}

