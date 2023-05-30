<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/clouddms/v1/clouddms_resources.proto

namespace Google\Cloud\CloudDms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specifies connection parameters required specifically for MySQL databases.
 *
 * Generated from protobuf message <code>google.cloud.clouddms.v1.MySqlConnectionProfile</code>
 */
class MySqlConnectionProfile extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The IP or hostname of the source MySQL database.
     *
     * Generated from protobuf field <code>string host = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $host = '';
    /**
     * Required. The network port of the source MySQL database.
     *
     * Generated from protobuf field <code>int32 port = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $port = 0;
    /**
     * Required. The username that Database Migration Service will use to connect
     * to the database. The value is encrypted when stored in Database Migration
     * Service.
     *
     * Generated from protobuf field <code>string username = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $username = '';
    /**
     * Required. Input only. The password for the user that Database Migration
     * Service will be using to connect to the database. This field is not
     * returned on request, and the value is encrypted when stored in Database
     * Migration Service.
     *
     * Generated from protobuf field <code>string password = 4 [(.google.api.field_behavior) = INPUT_ONLY, (.google.api.field_behavior) = REQUIRED];</code>
     */
    private $password = '';
    /**
     * Output only. Indicates If this connection profile password is stored.
     *
     * Generated from protobuf field <code>bool password_set = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $password_set = false;
    /**
     * SSL configuration for the destination to connect to the source database.
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.SslConfig ssl = 6;</code>
     */
    private $ssl = null;
    /**
     * If the source is a Cloud SQL database, use this field to
     * provide the Cloud SQL instance ID of the source.
     *
     * Generated from protobuf field <code>string cloud_sql_id = 7;</code>
     */
    private $cloud_sql_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $host
     *           Required. The IP or hostname of the source MySQL database.
     *     @type int $port
     *           Required. The network port of the source MySQL database.
     *     @type string $username
     *           Required. The username that Database Migration Service will use to connect
     *           to the database. The value is encrypted when stored in Database Migration
     *           Service.
     *     @type string $password
     *           Required. Input only. The password for the user that Database Migration
     *           Service will be using to connect to the database. This field is not
     *           returned on request, and the value is encrypted when stored in Database
     *           Migration Service.
     *     @type bool $password_set
     *           Output only. Indicates If this connection profile password is stored.
     *     @type \Google\Cloud\CloudDms\V1\SslConfig $ssl
     *           SSL configuration for the destination to connect to the source database.
     *     @type string $cloud_sql_id
     *           If the source is a Cloud SQL database, use this field to
     *           provide the Cloud SQL instance ID of the source.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Clouddms\V1\ClouddmsResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The IP or hostname of the source MySQL database.
     *
     * Generated from protobuf field <code>string host = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Required. The IP or hostname of the source MySQL database.
     *
     * Generated from protobuf field <code>string host = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setHost($var)
    {
        GPBUtil::checkString($var, True);
        $this->host = $var;

        return $this;
    }

    /**
     * Required. The network port of the source MySQL database.
     *
     * Generated from protobuf field <code>int32 port = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Required. The network port of the source MySQL database.
     *
     * Generated from protobuf field <code>int32 port = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setPort($var)
    {
        GPBUtil::checkInt32($var);
        $this->port = $var;

        return $this;
    }

    /**
     * Required. The username that Database Migration Service will use to connect
     * to the database. The value is encrypted when stored in Database Migration
     * Service.
     *
     * Generated from protobuf field <code>string username = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Required. The username that Database Migration Service will use to connect
     * to the database. The value is encrypted when stored in Database Migration
     * Service.
     *
     * Generated from protobuf field <code>string username = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setUsername($var)
    {
        GPBUtil::checkString($var, True);
        $this->username = $var;

        return $this;
    }

    /**
     * Required. Input only. The password for the user that Database Migration
     * Service will be using to connect to the database. This field is not
     * returned on request, and the value is encrypted when stored in Database
     * Migration Service.
     *
     * Generated from protobuf field <code>string password = 4 [(.google.api.field_behavior) = INPUT_ONLY, (.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Required. Input only. The password for the user that Database Migration
     * Service will be using to connect to the database. This field is not
     * returned on request, and the value is encrypted when stored in Database
     * Migration Service.
     *
     * Generated from protobuf field <code>string password = 4 [(.google.api.field_behavior) = INPUT_ONLY, (.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setPassword($var)
    {
        GPBUtil::checkString($var, True);
        $this->password = $var;

        return $this;
    }

    /**
     * Output only. Indicates If this connection profile password is stored.
     *
     * Generated from protobuf field <code>bool password_set = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getPasswordSet()
    {
        return $this->password_set;
    }

    /**
     * Output only. Indicates If this connection profile password is stored.
     *
     * Generated from protobuf field <code>bool password_set = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setPasswordSet($var)
    {
        GPBUtil::checkBool($var);
        $this->password_set = $var;

        return $this;
    }

    /**
     * SSL configuration for the destination to connect to the source database.
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.SslConfig ssl = 6;</code>
     * @return \Google\Cloud\CloudDms\V1\SslConfig|null
     */
    public function getSsl()
    {
        return $this->ssl;
    }

    public function hasSsl()
    {
        return isset($this->ssl);
    }

    public function clearSsl()
    {
        unset($this->ssl);
    }

    /**
     * SSL configuration for the destination to connect to the source database.
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.SslConfig ssl = 6;</code>
     * @param \Google\Cloud\CloudDms\V1\SslConfig $var
     * @return $this
     */
    public function setSsl($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\CloudDms\V1\SslConfig::class);
        $this->ssl = $var;

        return $this;
    }

    /**
     * If the source is a Cloud SQL database, use this field to
     * provide the Cloud SQL instance ID of the source.
     *
     * Generated from protobuf field <code>string cloud_sql_id = 7;</code>
     * @return string
     */
    public function getCloudSqlId()
    {
        return $this->cloud_sql_id;
    }

    /**
     * If the source is a Cloud SQL database, use this field to
     * provide the Cloud SQL instance ID of the source.
     *
     * Generated from protobuf field <code>string cloud_sql_id = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setCloudSqlId($var)
    {
        GPBUtil::checkString($var, True);
        $this->cloud_sql_id = $var;

        return $this;
    }

}

