<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: livekit_agent.proto

namespace Livekit;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>livekit.AvailabilityRequest</code>
 */
class AvailabilityRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.livekit.Job job = 1;</code>
     */
    protected $job = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Livekit\Job $job
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\LivekitAgent::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.livekit.Job job = 1;</code>
     * @return \Livekit\Job|null
     */
    public function getJob()
    {
        return $this->job;
    }

    public function hasJob()
    {
        return isset($this->job);
    }

    public function clearJob()
    {
        unset($this->job);
    }

    /**
     * Generated from protobuf field <code>.livekit.Job job = 1;</code>
     * @param \Livekit\Job $var
     * @return $this
     */
    public function setJob($var)
    {
        GPBUtil::checkMessage($var, \Livekit\Job::class);
        $this->job = $var;

        return $this;
    }

}
