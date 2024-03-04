<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: livekit_rtc.proto

namespace Livekit;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>livekit.SpeakersChanged</code>
 */
class SpeakersChanged extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .livekit.SpeakerInfo speakers = 1;</code>
     */
    private $speakers;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Livekit\SpeakerInfo>|\Google\Protobuf\Internal\RepeatedField $speakers
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\LivekitRtc::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .livekit.SpeakerInfo speakers = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSpeakers()
    {
        return $this->speakers;
    }

    /**
     * Generated from protobuf field <code>repeated .livekit.SpeakerInfo speakers = 1;</code>
     * @param array<\Livekit\SpeakerInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSpeakers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Livekit\SpeakerInfo::class);
        $this->speakers = $arr;

        return $this;
    }

}
