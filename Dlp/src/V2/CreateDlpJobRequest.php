<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for CreateDlpJobRequest. Used to initiate long running
 * jobs such as calculating risk metrics or inspecting Google Cloud
 * Storage.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.CreateDlpJobRequest</code>
 */
class CreateDlpJobRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Parent resource name.
     * The format of this value varies depending on whether you have [specified a
     * processing
     * location](https://cloud.google.com/dlp/docs/specifying-location):
     * + Projects scope, location specified:<br/>
     *   `projects/`<var>PROJECT_ID</var>`/locations/`<var>LOCATION_ID</var>
     * + Projects scope, no location specified (defaults to global):<br/>
     *   `projects/`<var>PROJECT_ID</var>
     * The following example `parent` string specifies a parent project with the
     * identifier `example-project`, and specifies the `europe-west3` location
     * for processing data:
     *     parent=projects/example-project/locations/europe-west3
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * The job id can contain uppercase and lowercase letters,
     * numbers, and hyphens; that is, it must match the regular
     * expression: `[a-zA-Z\d-_]+`. The maximum length is 100
     * characters. Can be empty to allow the system to generate one.
     *
     * Generated from protobuf field <code>string job_id = 4;</code>
     */
    private $job_id = '';
    /**
     * Deprecated. This field has no effect.
     *
     * Generated from protobuf field <code>string location_id = 5;</code>
     */
    private $location_id = '';
    protected $job;

    /**
     * @param string                                $parent     Required. Parent resource name.
     *
     *                                                          The format of this value varies depending on whether you have [specified a
     *                                                          processing
     *                                                          location](https://cloud.google.com/dlp/docs/specifying-location):
     *
     *                                                          + Projects scope, location specified:<br/>
     *                                                          `projects/`<var>PROJECT_ID</var>`/locations/`<var>LOCATION_ID</var>
     *                                                          + Projects scope, no location specified (defaults to global):<br/>
     *                                                          `projects/`<var>PROJECT_ID</var>
     *
     *                                                          The following example `parent` string specifies a parent project with the
     *                                                          identifier `example-project`, and specifies the `europe-west3` location
     *                                                          for processing data:
     *
     *                                                          parent=projects/example-project/locations/europe-west3
     *                                                          Please see {@see DlpServiceClient::projectName()} for help formatting this field.
     * @param \Google\Cloud\Dlp\V2\InspectJobConfig $inspectJob An inspection job scans a storage repository for InfoTypes.
     *
     * @return \Google\Cloud\Dlp\V2\CreateDlpJobRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\Dlp\V2\InspectJobConfig $inspectJob): self
    {
        return (new self())
            ->setParent($parent)
            ->setInspectJob($inspectJob);
    }

    /**
     * @param string                                     $parent  Required. Parent resource name.
     *
     *                                                            The format of this value varies depending on whether you have [specified a
     *                                                            processing
     *                                                            location](https://cloud.google.com/dlp/docs/specifying-location):
     *
     *                                                            + Projects scope, location specified:<br/>
     *                                                            `projects/`<var>PROJECT_ID</var>`/locations/`<var>LOCATION_ID</var>
     *                                                            + Projects scope, no location specified (defaults to global):<br/>
     *                                                            `projects/`<var>PROJECT_ID</var>
     *
     *                                                            The following example `parent` string specifies a parent project with the
     *                                                            identifier `example-project`, and specifies the `europe-west3` location
     *                                                            for processing data:
     *
     *                                                            parent=projects/example-project/locations/europe-west3
     *                                                            Please see {@see DlpServiceClient::projectName()} for help formatting this field.
     * @param \Google\Cloud\Dlp\V2\RiskAnalysisJobConfig $riskJob A risk analysis job calculates re-identification risk metrics for a
     *                                                            BigQuery table.
     *
     * @return \Google\Cloud\Dlp\V2\CreateDlpJobRequest
     *
     * @experimental
     */
    public static function buildFromParentRiskJob(string $parent, \Google\Cloud\Dlp\V2\RiskAnalysisJobConfig $riskJob): self
    {
        return (new self())
            ->setParent($parent)
            ->setRiskJob($riskJob);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Parent resource name.
     *           The format of this value varies depending on whether you have [specified a
     *           processing
     *           location](https://cloud.google.com/dlp/docs/specifying-location):
     *           + Projects scope, location specified:<br/>
     *             `projects/`<var>PROJECT_ID</var>`/locations/`<var>LOCATION_ID</var>
     *           + Projects scope, no location specified (defaults to global):<br/>
     *             `projects/`<var>PROJECT_ID</var>
     *           The following example `parent` string specifies a parent project with the
     *           identifier `example-project`, and specifies the `europe-west3` location
     *           for processing data:
     *               parent=projects/example-project/locations/europe-west3
     *     @type \Google\Cloud\Dlp\V2\InspectJobConfig $inspect_job
     *           An inspection job scans a storage repository for InfoTypes.
     *     @type \Google\Cloud\Dlp\V2\RiskAnalysisJobConfig $risk_job
     *           A risk analysis job calculates re-identification risk metrics for a
     *           BigQuery table.
     *     @type string $job_id
     *           The job id can contain uppercase and lowercase letters,
     *           numbers, and hyphens; that is, it must match the regular
     *           expression: `[a-zA-Z\d-_]+`. The maximum length is 100
     *           characters. Can be empty to allow the system to generate one.
     *     @type string $location_id
     *           Deprecated. This field has no effect.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Parent resource name.
     * The format of this value varies depending on whether you have [specified a
     * processing
     * location](https://cloud.google.com/dlp/docs/specifying-location):
     * + Projects scope, location specified:<br/>
     *   `projects/`<var>PROJECT_ID</var>`/locations/`<var>LOCATION_ID</var>
     * + Projects scope, no location specified (defaults to global):<br/>
     *   `projects/`<var>PROJECT_ID</var>
     * The following example `parent` string specifies a parent project with the
     * identifier `example-project`, and specifies the `europe-west3` location
     * for processing data:
     *     parent=projects/example-project/locations/europe-west3
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Parent resource name.
     * The format of this value varies depending on whether you have [specified a
     * processing
     * location](https://cloud.google.com/dlp/docs/specifying-location):
     * + Projects scope, location specified:<br/>
     *   `projects/`<var>PROJECT_ID</var>`/locations/`<var>LOCATION_ID</var>
     * + Projects scope, no location specified (defaults to global):<br/>
     *   `projects/`<var>PROJECT_ID</var>
     * The following example `parent` string specifies a parent project with the
     * identifier `example-project`, and specifies the `europe-west3` location
     * for processing data:
     *     parent=projects/example-project/locations/europe-west3
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
     * An inspection job scans a storage repository for InfoTypes.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.InspectJobConfig inspect_job = 2;</code>
     * @return \Google\Cloud\Dlp\V2\InspectJobConfig|null
     */
    public function getInspectJob()
    {
        return $this->readOneof(2);
    }

    public function hasInspectJob()
    {
        return $this->hasOneof(2);
    }

    /**
     * An inspection job scans a storage repository for InfoTypes.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.InspectJobConfig inspect_job = 2;</code>
     * @param \Google\Cloud\Dlp\V2\InspectJobConfig $var
     * @return $this
     */
    public function setInspectJob($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\InspectJobConfig::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * A risk analysis job calculates re-identification risk metrics for a
     * BigQuery table.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.RiskAnalysisJobConfig risk_job = 3;</code>
     * @return \Google\Cloud\Dlp\V2\RiskAnalysisJobConfig|null
     */
    public function getRiskJob()
    {
        return $this->readOneof(3);
    }

    public function hasRiskJob()
    {
        return $this->hasOneof(3);
    }

    /**
     * A risk analysis job calculates re-identification risk metrics for a
     * BigQuery table.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.RiskAnalysisJobConfig risk_job = 3;</code>
     * @param \Google\Cloud\Dlp\V2\RiskAnalysisJobConfig $var
     * @return $this
     */
    public function setRiskJob($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\RiskAnalysisJobConfig::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * The job id can contain uppercase and lowercase letters,
     * numbers, and hyphens; that is, it must match the regular
     * expression: `[a-zA-Z\d-_]+`. The maximum length is 100
     * characters. Can be empty to allow the system to generate one.
     *
     * Generated from protobuf field <code>string job_id = 4;</code>
     * @return string
     */
    public function getJobId()
    {
        return $this->job_id;
    }

    /**
     * The job id can contain uppercase and lowercase letters,
     * numbers, and hyphens; that is, it must match the regular
     * expression: `[a-zA-Z\d-_]+`. The maximum length is 100
     * characters. Can be empty to allow the system to generate one.
     *
     * Generated from protobuf field <code>string job_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setJobId($var)
    {
        GPBUtil::checkString($var, True);
        $this->job_id = $var;

        return $this;
    }

    /**
     * Deprecated. This field has no effect.
     *
     * Generated from protobuf field <code>string location_id = 5;</code>
     * @return string
     */
    public function getLocationId()
    {
        return $this->location_id;
    }

    /**
     * Deprecated. This field has no effect.
     *
     * Generated from protobuf field <code>string location_id = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setLocationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->location_id = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getJob()
    {
        return $this->whichOneof("job");
    }

}

