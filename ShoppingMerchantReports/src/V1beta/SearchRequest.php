<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/reports/v1beta/reports.proto

namespace Google\Shopping\Merchant\Reports\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for the `ReportService.Search` method.
 *
 * Generated from protobuf message <code>google.shopping.merchant.reports.v1beta.SearchRequest</code>
 */
class SearchRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Id of the account making the call. Must be a standalone account
     * or an MCA subaccount. Format: accounts/{account}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $parent = '';
    /**
     * Required. Query that defines a report to be retrieved.
     * For details on how to construct your query, see the Query Language
     * guide. For the full list of available tables and fields, see the Available
     * fields.
     *
     * Generated from protobuf field <code>string query = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $query = '';
    /**
     * Optional. Number of `ReportRows` to retrieve in a single page. Defaults to
     * 1000. Values above 5000 are coerced to 5000.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_size = 0;
    /**
     * Optional. Token of the page to retrieve. If not specified, the first page
     * of results is returned. In order to request the next page of results, the
     * value obtained from `next_page_token` in the previous response should be
     * used.
     *
     * Generated from protobuf field <code>string page_token = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_token = '';

    /**
     * @param string $parent Required. Id of the account making the call. Must be a standalone account
     *                       or an MCA subaccount. Format: accounts/{account}
     *
     * @return \Google\Shopping\Merchant\Reports\V1beta\SearchRequest
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
     *           Required. Id of the account making the call. Must be a standalone account
     *           or an MCA subaccount. Format: accounts/{account}
     *     @type string $query
     *           Required. Query that defines a report to be retrieved.
     *           For details on how to construct your query, see the Query Language
     *           guide. For the full list of available tables and fields, see the Available
     *           fields.
     *     @type int $page_size
     *           Optional. Number of `ReportRows` to retrieve in a single page. Defaults to
     *           1000. Values above 5000 are coerced to 5000.
     *     @type string $page_token
     *           Optional. Token of the page to retrieve. If not specified, the first page
     *           of results is returned. In order to request the next page of results, the
     *           value obtained from `next_page_token` in the previous response should be
     *           used.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Shopping\Merchant\Reports\V1Beta\Reports::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Id of the account making the call. Must be a standalone account
     * or an MCA subaccount. Format: accounts/{account}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Id of the account making the call. Must be a standalone account
     * or an MCA subaccount. Format: accounts/{account}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. Query that defines a report to be retrieved.
     * For details on how to construct your query, see the Query Language
     * guide. For the full list of available tables and fields, see the Available
     * fields.
     *
     * Generated from protobuf field <code>string query = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Required. Query that defines a report to be retrieved.
     * For details on how to construct your query, see the Query Language
     * guide. For the full list of available tables and fields, see the Available
     * fields.
     *
     * Generated from protobuf field <code>string query = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setQuery($var)
    {
        GPBUtil::checkString($var, True);
        $this->query = $var;

        return $this;
    }

    /**
     * Optional. Number of `ReportRows` to retrieve in a single page. Defaults to
     * 1000. Values above 5000 are coerced to 5000.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. Number of `ReportRows` to retrieve in a single page. Defaults to
     * 1000. Values above 5000 are coerced to 5000.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. Token of the page to retrieve. If not specified, the first page
     * of results is returned. In order to request the next page of results, the
     * value obtained from `next_page_token` in the previous response should be
     * used.
     *
     * Generated from protobuf field <code>string page_token = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. Token of the page to retrieve. If not specified, the first page
     * of results is returned. In order to request the next page of results, the
     * value obtained from `next_page_token` in the previous response should be
     * used.
     *
     * Generated from protobuf field <code>string page_token = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

