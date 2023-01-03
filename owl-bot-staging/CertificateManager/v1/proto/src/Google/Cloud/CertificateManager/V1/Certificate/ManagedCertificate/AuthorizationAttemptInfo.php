<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/certificatemanager/v1/certificate_manager.proto

namespace Google\Cloud\CertificateManager\V1\Certificate\ManagedCertificate;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * State of the latest attempt to authorize a domain for certificate
 * issuance.
 *
 * Generated from protobuf message <code>google.cloud.certificatemanager.v1.Certificate.ManagedCertificate.AuthorizationAttemptInfo</code>
 */
class AuthorizationAttemptInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Domain name of the authorization attempt.
     *
     * Generated from protobuf field <code>string domain = 1;</code>
     */
    protected $domain = '';
    /**
     * Output only. State of the domain for managed certificate issuance.
     *
     * Generated from protobuf field <code>.google.cloud.certificatemanager.v1.Certificate.ManagedCertificate.AuthorizationAttemptInfo.State state = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;
    /**
     * Output only. Reason for failure of the authorization attempt for the
     * domain.
     *
     * Generated from protobuf field <code>.google.cloud.certificatemanager.v1.Certificate.ManagedCertificate.AuthorizationAttemptInfo.FailureReason failure_reason = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $failure_reason = 0;
    /**
     * Output only. Human readable explanation for reaching the state.
     * Provided to help address the configuration issues. Not guaranteed to be
     * stable. For programmatic access use FailureReason enum.
     *
     * Generated from protobuf field <code>string details = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $details = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $domain
     *           Domain name of the authorization attempt.
     *     @type int $state
     *           Output only. State of the domain for managed certificate issuance.
     *     @type int $failure_reason
     *           Output only. Reason for failure of the authorization attempt for the
     *           domain.
     *     @type string $details
     *           Output only. Human readable explanation for reaching the state.
     *           Provided to help address the configuration issues. Not guaranteed to be
     *           stable. For programmatic access use FailureReason enum.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Certificatemanager\V1\CertificateManager::initOnce();
        parent::__construct($data);
    }

    /**
     * Domain name of the authorization attempt.
     *
     * Generated from protobuf field <code>string domain = 1;</code>
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Domain name of the authorization attempt.
     *
     * Generated from protobuf field <code>string domain = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDomain($var)
    {
        GPBUtil::checkString($var, True);
        $this->domain = $var;

        return $this;
    }

    /**
     * Output only. State of the domain for managed certificate issuance.
     *
     * Generated from protobuf field <code>.google.cloud.certificatemanager.v1.Certificate.ManagedCertificate.AuthorizationAttemptInfo.State state = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. State of the domain for managed certificate issuance.
     *
     * Generated from protobuf field <code>.google.cloud.certificatemanager.v1.Certificate.ManagedCertificate.AuthorizationAttemptInfo.State state = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\CertificateManager\V1\Certificate\ManagedCertificate\AuthorizationAttemptInfo\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. Reason for failure of the authorization attempt for the
     * domain.
     *
     * Generated from protobuf field <code>.google.cloud.certificatemanager.v1.Certificate.ManagedCertificate.AuthorizationAttemptInfo.FailureReason failure_reason = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getFailureReason()
    {
        return $this->failure_reason;
    }

    /**
     * Output only. Reason for failure of the authorization attempt for the
     * domain.
     *
     * Generated from protobuf field <code>.google.cloud.certificatemanager.v1.Certificate.ManagedCertificate.AuthorizationAttemptInfo.FailureReason failure_reason = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setFailureReason($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\CertificateManager\V1\Certificate\ManagedCertificate\AuthorizationAttemptInfo\FailureReason::class);
        $this->failure_reason = $var;

        return $this;
    }

    /**
     * Output only. Human readable explanation for reaching the state.
     * Provided to help address the configuration issues. Not guaranteed to be
     * stable. For programmatic access use FailureReason enum.
     *
     * Generated from protobuf field <code>string details = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Output only. Human readable explanation for reaching the state.
     * Provided to help address the configuration issues. Not guaranteed to be
     * stable. For programmatic access use FailureReason enum.
     *
     * Generated from protobuf field <code>string details = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setDetails($var)
    {
        GPBUtil::checkString($var, True);
        $this->details = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AuthorizationAttemptInfo::class, \Google\Cloud\CertificateManager\V1\Certificate_ManagedCertificate_AuthorizationAttemptInfo::class);

