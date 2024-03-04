<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: livekit_rtc.proto

namespace Livekit;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>livekit.ConnectionQualityInfo</code>
 */
class ConnectionQualityInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string participant_sid = 1;</code>
     */
    protected $participant_sid = '';
    /**
     * Generated from protobuf field <code>.livekit.ConnectionQuality quality = 2;</code>
     */
    protected $quality = 0;
    /**
     * Generated from protobuf field <code>float score = 3;</code>
     */
    protected $score = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $participant_sid
     *     @type int $quality
     *     @type float $score
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\LivekitRtc::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string participant_sid = 1;</code>
     * @return string
     */
    public function getParticipantSid()
    {
        return $this->participant_sid;
    }

    /**
     * Generated from protobuf field <code>string participant_sid = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setParticipantSid($var)
    {
        GPBUtil::checkString($var, True);
        $this->participant_sid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.livekit.ConnectionQuality quality = 2;</code>
     * @return int
     */
    public function getQuality()
    {
        return $this->quality;
    }

    /**
     * Generated from protobuf field <code>.livekit.ConnectionQuality quality = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setQuality($var)
    {
        GPBUtil::checkEnum($var, \Livekit\ConnectionQuality::class);
        $this->quality = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float score = 3;</code>
     * @return float
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Generated from protobuf field <code>float score = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setScore($var)
    {
        GPBUtil::checkFloat($var);
        $this->score = $var;

        return $this;
    }

}

