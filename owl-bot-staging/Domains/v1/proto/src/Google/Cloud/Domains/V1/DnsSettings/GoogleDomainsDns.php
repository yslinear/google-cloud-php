<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/domains/v1/domains.proto

namespace Google\Cloud\Domains\V1\DnsSettings;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration for using the free DNS zone provided by Google Domains as a
 * `Registration`'s `dns_provider`. You cannot configure the DNS zone itself
 * using the API. To configure the DNS zone, go to
 * [Google Domains](https://domains.google/).
 *
 * Generated from protobuf message <code>google.cloud.domains.v1.DnsSettings.GoogleDomainsDns</code>
 */
class GoogleDomainsDns extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. A list of name servers that store the DNS zone for this domain. Each name
     * server is a domain name, with Unicode domain names expressed in
     * Punycode format. This field is automatically populated with the name
     * servers assigned to the Google Domains DNS zone.
     *
     * Generated from protobuf field <code>repeated string name_servers = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name_servers;
    /**
     * Required. The state of DS records for this domain. Used to enable or disable
     * automatic DNSSEC.
     *
     * Generated from protobuf field <code>.google.cloud.domains.v1.DnsSettings.DsState ds_state = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $ds_state = 0;
    /**
     * Output only. The list of DS records published for this domain. The list is
     * automatically populated when `ds_state` is `DS_RECORDS_PUBLISHED`,
     * otherwise it remains empty.
     *
     * Generated from protobuf field <code>repeated .google.cloud.domains.v1.DnsSettings.DsRecord ds_records = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $ds_records;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $name_servers
     *           Output only. A list of name servers that store the DNS zone for this domain. Each name
     *           server is a domain name, with Unicode domain names expressed in
     *           Punycode format. This field is automatically populated with the name
     *           servers assigned to the Google Domains DNS zone.
     *     @type int $ds_state
     *           Required. The state of DS records for this domain. Used to enable or disable
     *           automatic DNSSEC.
     *     @type array<\Google\Cloud\Domains\V1\DnsSettings\DsRecord>|\Google\Protobuf\Internal\RepeatedField $ds_records
     *           Output only. The list of DS records published for this domain. The list is
     *           automatically populated when `ds_state` is `DS_RECORDS_PUBLISHED`,
     *           otherwise it remains empty.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Domains\V1\Domains::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. A list of name servers that store the DNS zone for this domain. Each name
     * server is a domain name, with Unicode domain names expressed in
     * Punycode format. This field is automatically populated with the name
     * servers assigned to the Google Domains DNS zone.
     *
     * Generated from protobuf field <code>repeated string name_servers = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNameServers()
    {
        return $this->name_servers;
    }

    /**
     * Output only. A list of name servers that store the DNS zone for this domain. Each name
     * server is a domain name, with Unicode domain names expressed in
     * Punycode format. This field is automatically populated with the name
     * servers assigned to the Google Domains DNS zone.
     *
     * Generated from protobuf field <code>repeated string name_servers = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNameServers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->name_servers = $arr;

        return $this;
    }

    /**
     * Required. The state of DS records for this domain. Used to enable or disable
     * automatic DNSSEC.
     *
     * Generated from protobuf field <code>.google.cloud.domains.v1.DnsSettings.DsState ds_state = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getDsState()
    {
        return $this->ds_state;
    }

    /**
     * Required. The state of DS records for this domain. Used to enable or disable
     * automatic DNSSEC.
     *
     * Generated from protobuf field <code>.google.cloud.domains.v1.DnsSettings.DsState ds_state = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setDsState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Domains\V1\DnsSettings\DsState::class);
        $this->ds_state = $var;

        return $this;
    }

    /**
     * Output only. The list of DS records published for this domain. The list is
     * automatically populated when `ds_state` is `DS_RECORDS_PUBLISHED`,
     * otherwise it remains empty.
     *
     * Generated from protobuf field <code>repeated .google.cloud.domains.v1.DnsSettings.DsRecord ds_records = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDsRecords()
    {
        return $this->ds_records;
    }

    /**
     * Output only. The list of DS records published for this domain. The list is
     * automatically populated when `ds_state` is `DS_RECORDS_PUBLISHED`,
     * otherwise it remains empty.
     *
     * Generated from protobuf field <code>repeated .google.cloud.domains.v1.DnsSettings.DsRecord ds_records = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\Domains\V1\DnsSettings\DsRecord>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDsRecords($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Domains\V1\DnsSettings\DsRecord::class);
        $this->ds_records = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleDomainsDns::class, \Google\Cloud\Domains\V1\DnsSettings_GoogleDomainsDns::class);

