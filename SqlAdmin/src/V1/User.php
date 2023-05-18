<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1/cloud_sql_users.proto

namespace Google\Cloud\Sql\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Cloud SQL user resource.
 *
 * Generated from protobuf message <code>google.cloud.sql.v1.User</code>
 */
class User extends \Google\Protobuf\Internal\Message
{
    /**
     * This is always **sql#user**.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     */
    private $kind = '';
    /**
     * The password for the user.
     *
     * Generated from protobuf field <code>string password = 2;</code>
     */
    private $password = '';
    /**
     * This field is deprecated and will be removed from a future version of the
     * API.
     *
     * Generated from protobuf field <code>string etag = 3;</code>
     */
    private $etag = '';
    /**
     * The name of the user in the Cloud SQL instance. Can be omitted for
     * **update** since it is already specified in the URL.
     *
     * Generated from protobuf field <code>string name = 4;</code>
     */
    private $name = '';
    /**
     * The host name from which the user can connect. For **insert**
     * operations, host defaults to an empty string. For **update**
     * operations, host is specified as part of the request URL. The host name
     * cannot be updated after insertion.
     *
     * Generated from protobuf field <code>string host = 5;</code>
     */
    private $host = '';
    /**
     * The name of the Cloud SQL instance. This does not include the project ID.
     * Can be omitted for **update** since it is already specified on the
     * URL.
     *
     * Generated from protobuf field <code>string instance = 6;</code>
     */
    private $instance = '';
    /**
     * The project ID of the project containing the Cloud SQL database. The Google
     * apps domain is prefixed if applicable. Can be omitted for **update** since
     * it is already specified on the URL.
     *
     * Generated from protobuf field <code>string project = 7;</code>
     */
    private $project = '';
    /**
     * The user type. It determines the method to authenticate the user during
     * login. The default is the database's built-in user type.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.User.SqlUserType type = 8;</code>
     */
    private $type = 0;
    protected $user_details;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $kind
     *           This is always **sql#user**.
     *     @type string $password
     *           The password for the user.
     *     @type string $etag
     *           This field is deprecated and will be removed from a future version of the
     *           API.
     *     @type string $name
     *           The name of the user in the Cloud SQL instance. Can be omitted for
     *           **update** since it is already specified in the URL.
     *     @type string $host
     *           The host name from which the user can connect. For **insert**
     *           operations, host defaults to an empty string. For **update**
     *           operations, host is specified as part of the request URL. The host name
     *           cannot be updated after insertion.
     *     @type string $instance
     *           The name of the Cloud SQL instance. This does not include the project ID.
     *           Can be omitted for **update** since it is already specified on the
     *           URL.
     *     @type string $project
     *           The project ID of the project containing the Cloud SQL database. The Google
     *           apps domain is prefixed if applicable. Can be omitted for **update** since
     *           it is already specified on the URL.
     *     @type int $type
     *           The user type. It determines the method to authenticate the user during
     *           login. The default is the database's built-in user type.
     *     @type \Google\Cloud\Sql\V1\SqlServerUserDetails $sqlserver_user_details
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1\CloudSqlUsers::initOnce();
        parent::__construct($data);
    }

    /**
     * This is always **sql#user**.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * This is always **sql#user**.
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
     * The password for the user.
     *
     * Generated from protobuf field <code>string password = 2;</code>
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * The password for the user.
     *
     * Generated from protobuf field <code>string password = 2;</code>
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
     * This field is deprecated and will be removed from a future version of the
     * API.
     *
     * Generated from protobuf field <code>string etag = 3;</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * This field is deprecated and will be removed from a future version of the
     * API.
     *
     * Generated from protobuf field <code>string etag = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

    /**
     * The name of the user in the Cloud SQL instance. Can be omitted for
     * **update** since it is already specified in the URL.
     *
     * Generated from protobuf field <code>string name = 4;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the user in the Cloud SQL instance. Can be omitted for
     * **update** since it is already specified in the URL.
     *
     * Generated from protobuf field <code>string name = 4;</code>
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
     * The host name from which the user can connect. For **insert**
     * operations, host defaults to an empty string. For **update**
     * operations, host is specified as part of the request URL. The host name
     * cannot be updated after insertion.
     *
     * Generated from protobuf field <code>string host = 5;</code>
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * The host name from which the user can connect. For **insert**
     * operations, host defaults to an empty string. For **update**
     * operations, host is specified as part of the request URL. The host name
     * cannot be updated after insertion.
     *
     * Generated from protobuf field <code>string host = 5;</code>
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
     * The name of the Cloud SQL instance. This does not include the project ID.
     * Can be omitted for **update** since it is already specified on the
     * URL.
     *
     * Generated from protobuf field <code>string instance = 6;</code>
     * @return string
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * The name of the Cloud SQL instance. This does not include the project ID.
     * Can be omitted for **update** since it is already specified on the
     * URL.
     *
     * Generated from protobuf field <code>string instance = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setInstance($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance = $var;

        return $this;
    }

    /**
     * The project ID of the project containing the Cloud SQL database. The Google
     * apps domain is prefixed if applicable. Can be omitted for **update** since
     * it is already specified on the URL.
     *
     * Generated from protobuf field <code>string project = 7;</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * The project ID of the project containing the Cloud SQL database. The Google
     * apps domain is prefixed if applicable. Can be omitted for **update** since
     * it is already specified on the URL.
     *
     * Generated from protobuf field <code>string project = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

    /**
     * The user type. It determines the method to authenticate the user during
     * login. The default is the database's built-in user type.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.User.SqlUserType type = 8;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The user type. It determines the method to authenticate the user during
     * login. The default is the database's built-in user type.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.User.SqlUserType type = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Sql\V1\User\SqlUserType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.sql.v1.SqlServerUserDetails sqlserver_user_details = 9;</code>
     * @return \Google\Cloud\Sql\V1\SqlServerUserDetails|null
     */
    public function getSqlserverUserDetails()
    {
        return $this->readOneof(9);
    }

    public function hasSqlserverUserDetails()
    {
        return $this->hasOneof(9);
    }

    /**
     * Generated from protobuf field <code>.google.cloud.sql.v1.SqlServerUserDetails sqlserver_user_details = 9;</code>
     * @param \Google\Cloud\Sql\V1\SqlServerUserDetails $var
     * @return $this
     */
    public function setSqlserverUserDetails($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Sql\V1\SqlServerUserDetails::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getUserDetails()
    {
        return $this->whichOneof("user_details");
    }

}

