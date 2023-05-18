<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1/cloud_sql_ssl_certs.proto

namespace Google\Cloud\Sql\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * SslCert insert response.
 *
 * Generated from protobuf message <code>google.cloud.sql.v1.SslCertsInsertResponse</code>
 */
class SslCertsInsertResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * This is always **sql#sslCertsInsert**.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     */
    private $kind = '';
    /**
     * The operation to track the ssl certs insert request.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.Operation operation = 2;</code>
     */
    private $operation = null;
    /**
     * The server Certificate Authority's certificate.  If this is missing you can
     * force a new one to be generated by calling resetSslConfig method on
     * instances resource.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.SslCert server_ca_cert = 3;</code>
     */
    private $server_ca_cert = null;
    /**
     * The new client certificate and private key.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.SslCertDetail client_cert = 4;</code>
     */
    private $client_cert = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $kind
     *           This is always **sql#sslCertsInsert**.
     *     @type \Google\Cloud\Sql\V1\Operation $operation
     *           The operation to track the ssl certs insert request.
     *     @type \Google\Cloud\Sql\V1\SslCert $server_ca_cert
     *           The server Certificate Authority's certificate.  If this is missing you can
     *           force a new one to be generated by calling resetSslConfig method on
     *           instances resource.
     *     @type \Google\Cloud\Sql\V1\SslCertDetail $client_cert
     *           The new client certificate and private key.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1\CloudSqlSslCerts::initOnce();
        parent::__construct($data);
    }

    /**
     * This is always **sql#sslCertsInsert**.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * This is always **sql#sslCertsInsert**.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * The operation to track the ssl certs insert request.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.Operation operation = 2;</code>
     * @return \Google\Cloud\Sql\V1\Operation|null
     */
    public function getOperation()
    {
        return $this->operation;
    }

    public function hasOperation()
    {
        return isset($this->operation);
    }

    public function clearOperation()
    {
        unset($this->operation);
    }

    /**
     * The operation to track the ssl certs insert request.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.Operation operation = 2;</code>
     * @param \Google\Cloud\Sql\V1\Operation $var
     * @return $this
     */
    public function setOperation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Sql\V1\Operation::class);
        $this->operation = $var;

        return $this;
    }

    /**
     * The server Certificate Authority's certificate.  If this is missing you can
     * force a new one to be generated by calling resetSslConfig method on
     * instances resource.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.SslCert server_ca_cert = 3;</code>
     * @return \Google\Cloud\Sql\V1\SslCert|null
     */
    public function getServerCaCert()
    {
        return $this->server_ca_cert;
    }

    public function hasServerCaCert()
    {
        return isset($this->server_ca_cert);
    }

    public function clearServerCaCert()
    {
        unset($this->server_ca_cert);
    }

    /**
     * The server Certificate Authority's certificate.  If this is missing you can
     * force a new one to be generated by calling resetSslConfig method on
     * instances resource.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.SslCert server_ca_cert = 3;</code>
     * @param \Google\Cloud\Sql\V1\SslCert $var
     * @return $this
     */
    public function setServerCaCert($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Sql\V1\SslCert::class);
        $this->server_ca_cert = $var;

        return $this;
    }

    /**
     * The new client certificate and private key.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.SslCertDetail client_cert = 4;</code>
     * @return \Google\Cloud\Sql\V1\SslCertDetail|null
     */
    public function getClientCert()
    {
        return $this->client_cert;
    }

    public function hasClientCert()
    {
        return isset($this->client_cert);
    }

    public function clearClientCert()
    {
        unset($this->client_cert);
    }

    /**
     * The new client certificate and private key.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.SslCertDetail client_cert = 4;</code>
     * @param \Google\Cloud\Sql\V1\SslCertDetail $var
     * @return $this
     */
    public function setClientCert($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Sql\V1\SslCertDetail::class);
        $this->client_cert = $var;

        return $this;
    }

}

