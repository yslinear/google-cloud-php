<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/domains/v1/domains.proto

namespace Google\Cloud\Domains\V1\ContactSettings;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Details required for a contact associated with a `Registration`.
 *
 * Generated from protobuf message <code>google.cloud.domains.v1.ContactSettings.Contact</code>
 */
class Contact extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Postal address of the contact.
     *
     * Generated from protobuf field <code>.google.type.PostalAddress postal_address = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $postal_address = null;
    /**
     * Required. Email address of the contact.
     *
     * Generated from protobuf field <code>string email = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $email = '';
    /**
     * Required. Phone number of the contact in international format. For example,
     * `"+1-800-555-0123"`.
     *
     * Generated from protobuf field <code>string phone_number = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $phone_number = '';
    /**
     * Fax number of the contact in international format. For example,
     * `"+1-800-555-0123"`.
     *
     * Generated from protobuf field <code>string fax_number = 4;</code>
     */
    protected $fax_number = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Type\PostalAddress $postal_address
     *           Required. Postal address of the contact.
     *     @type string $email
     *           Required. Email address of the contact.
     *     @type string $phone_number
     *           Required. Phone number of the contact in international format. For example,
     *           `"+1-800-555-0123"`.
     *     @type string $fax_number
     *           Fax number of the contact in international format. For example,
     *           `"+1-800-555-0123"`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Domains\V1\Domains::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Postal address of the contact.
     *
     * Generated from protobuf field <code>.google.type.PostalAddress postal_address = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Type\PostalAddress|null
     */
    public function getPostalAddress()
    {
        return $this->postal_address;
    }

    public function hasPostalAddress()
    {
        return isset($this->postal_address);
    }

    public function clearPostalAddress()
    {
        unset($this->postal_address);
    }

    /**
     * Required. Postal address of the contact.
     *
     * Generated from protobuf field <code>.google.type.PostalAddress postal_address = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Type\PostalAddress $var
     * @return $this
     */
    public function setPostalAddress($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\PostalAddress::class);
        $this->postal_address = $var;

        return $this;
    }

    /**
     * Required. Email address of the contact.
     *
     * Generated from protobuf field <code>string email = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Required. Email address of the contact.
     *
     * Generated from protobuf field <code>string email = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->email = $var;

        return $this;
    }

    /**
     * Required. Phone number of the contact in international format. For example,
     * `"+1-800-555-0123"`.
     *
     * Generated from protobuf field <code>string phone_number = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phone_number;
    }

    /**
     * Required. Phone number of the contact in international format. For example,
     * `"+1-800-555-0123"`.
     *
     * Generated from protobuf field <code>string phone_number = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setPhoneNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->phone_number = $var;

        return $this;
    }

    /**
     * Fax number of the contact in international format. For example,
     * `"+1-800-555-0123"`.
     *
     * Generated from protobuf field <code>string fax_number = 4;</code>
     * @return string
     */
    public function getFaxNumber()
    {
        return $this->fax_number;
    }

    /**
     * Fax number of the contact in international format. For example,
     * `"+1-800-555-0123"`.
     *
     * Generated from protobuf field <code>string fax_number = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setFaxNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->fax_number = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Contact::class, \Google\Cloud\Domains\V1\ContactSettings_Contact::class);

