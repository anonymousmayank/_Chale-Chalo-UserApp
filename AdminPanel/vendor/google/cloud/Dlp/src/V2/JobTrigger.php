<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Contains a configuration to make dlp api calls on a repeating basis.
 * See https://cloud.google.com/dlp/docs/concepts-job-triggers to learn more.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.JobTrigger</code>
 */
class JobTrigger extends \Google\Protobuf\Internal\Message
{
    /**
     * Unique resource name for the triggeredJob, assigned by the service when the
     * triggeredJob is created, for example
     * `projects/dlp-test-project/jobTriggers/53234423`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Display name (max 100 chars)
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     */
    private $display_name = '';
    /**
     * User provided description (max 256 chars)
     *
     * Generated from protobuf field <code>string description = 3;</code>
     */
    private $description = '';
    /**
     * A list of triggers which will be OR'ed together. Only one in the list
     * needs to trigger for a job to be started. The list may contain only
     * a single Schedule trigger and must have at least one object.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.JobTrigger.Trigger triggers = 5;</code>
     */
    private $triggers;
    /**
     * Output only. A stream of errors encountered when the trigger was activated.
     * Repeated errors may result in the JobTrigger automatically being paused.
     * Will return the last 100 errors. Whenever the JobTrigger is modified
     * this list will be cleared.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.Error errors = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $errors;
    /**
     * Output only. The creation timestamp of a triggeredJob.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. The last update timestamp of a triggeredJob.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $update_time = null;
    /**
     * Output only. The timestamp of the last time this trigger executed.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_run_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $last_run_time = null;
    /**
     * Required. A status for this trigger.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.JobTrigger.Status status = 10 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $status = 0;
    protected $job;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Unique resource name for the triggeredJob, assigned by the service when the
     *           triggeredJob is created, for example
     *           `projects/dlp-test-project/jobTriggers/53234423`.
     *     @type string $display_name
     *           Display name (max 100 chars)
     *     @type string $description
     *           User provided description (max 256 chars)
     *     @type \Google\Cloud\Dlp\V2\InspectJobConfig $inspect_job
     *           For inspect jobs, a snapshot of the configuration.
     *     @type \Google\Cloud\Dlp\V2\JobTrigger\Trigger[]|\Google\Protobuf\Internal\RepeatedField $triggers
     *           A list of triggers which will be OR'ed together. Only one in the list
     *           needs to trigger for a job to be started. The list may contain only
     *           a single Schedule trigger and must have at least one object.
     *     @type \Google\Cloud\Dlp\V2\Error[]|\Google\Protobuf\Internal\RepeatedField $errors
     *           Output only. A stream of errors encountered when the trigger was activated.
     *           Repeated errors may result in the JobTrigger automatically being paused.
     *           Will return the last 100 errors. Whenever the JobTrigger is modified
     *           this list will be cleared.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The creation timestamp of a triggeredJob.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The last update timestamp of a triggeredJob.
     *     @type \Google\Protobuf\Timestamp $last_run_time
     *           Output only. The timestamp of the last time this trigger executed.
     *     @type int $status
     *           Required. A status for this trigger.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Unique resource name for the triggeredJob, assigned by the service when the
     * triggeredJob is created, for example
     * `projects/dlp-test-project/jobTriggers/53234423`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Unique resource name for the triggeredJob, assigned by the service when the
     * triggeredJob is created, for example
     * `projects/dlp-test-project/jobTriggers/53234423`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * Display name (max 100 chars)
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Display name (max 100 chars)
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * User provided description (max 256 chars)
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * User provided description (max 256 chars)
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * For inspect jobs, a snapshot of the configuration.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.InspectJobConfig inspect_job = 4;</code>
     * @return \Google\Cloud\Dlp\V2\InspectJobConfig
     */
    public function getInspectJob()
    {
        return $this->readOneof(4);
    }

    /**
     * For inspect jobs, a snapshot of the configuration.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.InspectJobConfig inspect_job = 4;</code>
     * @param \Google\Cloud\Dlp\V2\InspectJobConfig $var
     * @return $this
     */
    public function setInspectJob($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\InspectJobConfig::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * A list of triggers which will be OR'ed together. Only one in the list
     * needs to trigger for a job to be started. The list may contain only
     * a single Schedule trigger and must have at least one object.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.JobTrigger.Trigger triggers = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTriggers()
    {
        return $this->triggers;
    }

    /**
     * A list of triggers which will be OR'ed together. Only one in the list
     * needs to trigger for a job to be started. The list may contain only
     * a single Schedule trigger and must have at least one object.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.JobTrigger.Trigger triggers = 5;</code>
     * @param \Google\Cloud\Dlp\V2\JobTrigger\Trigger[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTriggers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dlp\V2\JobTrigger\Trigger::class);
        $this->triggers = $arr;

        return $this;
    }

    /**
     * Output only. A stream of errors encountered when the trigger was activated.
     * Repeated errors may result in the JobTrigger automatically being paused.
     * Will return the last 100 errors. Whenever the JobTrigger is modified
     * this list will be cleared.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.Error errors = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * Output only. A stream of errors encountered when the trigger was activated.
     * Repeated errors may result in the JobTrigger automatically being paused.
     * Will return the last 100 errors. Whenever the JobTrigger is modified
     * this list will be cleared.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.Error errors = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Dlp\V2\Error[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setErrors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dlp\V2\Error::class);
        $this->errors = $arr;

        return $this;
    }

    /**
     * Output only. The creation timestamp of a triggeredJob.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    /**
     * Output only. The creation timestamp of a triggeredJob.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The last update timestamp of a triggeredJob.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    /**
     * Output only. The last update timestamp of a triggeredJob.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Output only. The timestamp of the last time this trigger executed.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_run_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getLastRunTime()
    {
        return $this->last_run_time;
    }

    /**
     * Output only. The timestamp of the last time this trigger executed.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_run_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLastRunTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->last_run_time = $var;

        return $this;
    }

    /**
     * Required. A status for this trigger.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.JobTrigger.Status status = 10 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Required. A status for this trigger.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.JobTrigger.Status status = 10 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dlp\V2\JobTrigger_Status::class);
        $this->status = $var;

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

