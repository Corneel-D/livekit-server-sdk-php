<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: livekit_analytics.proto

namespace Livekit;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>livekit.AnalyticsEvents</code>
 */
class AnalyticsEvents extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .livekit.AnalyticsEvent events = 1;</code>
     */
    private $events;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Livekit\AnalyticsEvent>|\Google\Protobuf\Internal\RepeatedField $events
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\LivekitAnalytics::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .livekit.AnalyticsEvent events = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * Generated from protobuf field <code>repeated .livekit.AnalyticsEvent events = 1;</code>
     * @param array<\Livekit\AnalyticsEvent>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEvents($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Livekit\AnalyticsEvent::class);
        $this->events = $arr;

        return $this;
    }

}
