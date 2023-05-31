<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/tasks.proto

namespace Google\Cloud\Dataplex\V1\Task;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Execution related settings, like retry and service_account.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.Task.ExecutionSpec</code>
 */
class ExecutionSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The arguments to pass to the task.
     * The args can use placeholders of the format ${placeholder} as
     * part of key/value string. These will be interpolated before passing the
     * args to the driver. Currently supported placeholders:
     * - ${task_id}
     * - ${job_time}
     * To pass positional args, set the key as TASK_ARGS. The value should be a
     * comma-separated string of all the positional arguments. To use a
     * delimiter other than comma, refer to
     * https://cloud.google.com/sdk/gcloud/reference/topic/escaping. In case of
     * other keys being present in the args, then TASK_ARGS will be passed as
     * the last argument.
     *
     * Generated from protobuf field <code>map<string, string> args = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $args;
    /**
     * Required. Service account to use to execute a task.
     * If not provided, the default Compute service account for the project is
     * used.
     *
     * Generated from protobuf field <code>string service_account = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $service_account = '';
    /**
     * Optional. The project in which jobs are run. By default, the project
     * containing the Lake is used. If a project is provided, the
     * [ExecutionSpec.service_account][google.cloud.dataplex.v1.Task.ExecutionSpec.service_account]
     * must belong to this project.
     *
     * Generated from protobuf field <code>string project = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $project = '';
    /**
     * Optional. The maximum duration after which the job execution is expired.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration max_job_execution_lifetime = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $max_job_execution_lifetime = null;
    /**
     * Optional. The Cloud KMS key to use for encryption, of the form:
     * `projects/{project_number}/locations/{location_id}/keyRings/{key-ring-name}/cryptoKeys/{key-name}`.
     *
     * Generated from protobuf field <code>string kms_key = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $kms_key = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $args
     *           Optional. The arguments to pass to the task.
     *           The args can use placeholders of the format ${placeholder} as
     *           part of key/value string. These will be interpolated before passing the
     *           args to the driver. Currently supported placeholders:
     *           - ${task_id}
     *           - ${job_time}
     *           To pass positional args, set the key as TASK_ARGS. The value should be a
     *           comma-separated string of all the positional arguments. To use a
     *           delimiter other than comma, refer to
     *           https://cloud.google.com/sdk/gcloud/reference/topic/escaping. In case of
     *           other keys being present in the args, then TASK_ARGS will be passed as
     *           the last argument.
     *     @type string $service_account
     *           Required. Service account to use to execute a task.
     *           If not provided, the default Compute service account for the project is
     *           used.
     *     @type string $project
     *           Optional. The project in which jobs are run. By default, the project
     *           containing the Lake is used. If a project is provided, the
     *           [ExecutionSpec.service_account][google.cloud.dataplex.v1.Task.ExecutionSpec.service_account]
     *           must belong to this project.
     *     @type \Google\Protobuf\Duration $max_job_execution_lifetime
     *           Optional. The maximum duration after which the job execution is expired.
     *     @type string $kms_key
     *           Optional. The Cloud KMS key to use for encryption, of the form:
     *           `projects/{project_number}/locations/{location_id}/keyRings/{key-ring-name}/cryptoKeys/{key-name}`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Tasks::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The arguments to pass to the task.
     * The args can use placeholders of the format ${placeholder} as
     * part of key/value string. These will be interpolated before passing the
     * args to the driver. Currently supported placeholders:
     * - ${task_id}
     * - ${job_time}
     * To pass positional args, set the key as TASK_ARGS. The value should be a
     * comma-separated string of all the positional arguments. To use a
     * delimiter other than comma, refer to
     * https://cloud.google.com/sdk/gcloud/reference/topic/escaping. In case of
     * other keys being present in the args, then TASK_ARGS will be passed as
     * the last argument.
     *
     * Generated from protobuf field <code>map<string, string> args = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getArgs()
    {
        return $this->args;
    }

    /**
     * Optional. The arguments to pass to the task.
     * The args can use placeholders of the format ${placeholder} as
     * part of key/value string. These will be interpolated before passing the
     * args to the driver. Currently supported placeholders:
     * - ${task_id}
     * - ${job_time}
     * To pass positional args, set the key as TASK_ARGS. The value should be a
     * comma-separated string of all the positional arguments. To use a
     * delimiter other than comma, refer to
     * https://cloud.google.com/sdk/gcloud/reference/topic/escaping. In case of
     * other keys being present in the args, then TASK_ARGS will be passed as
     * the last argument.
     *
     * Generated from protobuf field <code>map<string, string> args = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setArgs($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->args = $arr;

        return $this;
    }

    /**
     * Required. Service account to use to execute a task.
     * If not provided, the default Compute service account for the project is
     * used.
     *
     * Generated from protobuf field <code>string service_account = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getServiceAccount()
    {
        return $this->service_account;
    }

    /**
     * Required. Service account to use to execute a task.
     * If not provided, the default Compute service account for the project is
     * used.
     *
     * Generated from protobuf field <code>string service_account = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setServiceAccount($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_account = $var;

        return $this;
    }

    /**
     * Optional. The project in which jobs are run. By default, the project
     * containing the Lake is used. If a project is provided, the
     * [ExecutionSpec.service_account][google.cloud.dataplex.v1.Task.ExecutionSpec.service_account]
     * must belong to this project.
     *
     * Generated from protobuf field <code>string project = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Optional. The project in which jobs are run. By default, the project
     * containing the Lake is used. If a project is provided, the
     * [ExecutionSpec.service_account][google.cloud.dataplex.v1.Task.ExecutionSpec.service_account]
     * must belong to this project.
     *
     * Generated from protobuf field <code>string project = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. The maximum duration after which the job execution is expired.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration max_job_execution_lifetime = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getMaxJobExecutionLifetime()
    {
        return $this->max_job_execution_lifetime;
    }

    public function hasMaxJobExecutionLifetime()
    {
        return isset($this->max_job_execution_lifetime);
    }

    public function clearMaxJobExecutionLifetime()
    {
        unset($this->max_job_execution_lifetime);
    }

    /**
     * Optional. The maximum duration after which the job execution is expired.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration max_job_execution_lifetime = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setMaxJobExecutionLifetime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->max_job_execution_lifetime = $var;

        return $this;
    }

    /**
     * Optional. The Cloud KMS key to use for encryption, of the form:
     * `projects/{project_number}/locations/{location_id}/keyRings/{key-ring-name}/cryptoKeys/{key-name}`.
     *
     * Generated from protobuf field <code>string kms_key = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getKmsKey()
    {
        return $this->kms_key;
    }

    /**
     * Optional. The Cloud KMS key to use for encryption, of the form:
     * `projects/{project_number}/locations/{location_id}/keyRings/{key-ring-name}/cryptoKeys/{key-name}`.
     *
     * Generated from protobuf field <code>string kms_key = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setKmsKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->kms_key = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ExecutionSpec::class, \Google\Cloud\Dataplex\V1\Task_ExecutionSpec::class);

