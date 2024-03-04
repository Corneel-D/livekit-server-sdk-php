<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: livekit_analytics.proto

namespace Livekit;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>livekit.AnalyticsRoom</code>
 */
class AnalyticsRoom extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string name = 2;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 3;</code>
     */
    protected $created_at = null;
    /**
     * Generated from protobuf field <code>repeated .livekit.AnalyticsRoomParticipant participants = 4;</code>
     */
    private $participants;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $name
     *     @type \Google\Protobuf\Timestamp $created_at
     *     @type array<\Livekit\AnalyticsRoomParticipant>|\Google\Protobuf\Internal\RepeatedField $participants
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\LivekitAnalytics::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 2;</code>
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
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function hasCreatedAt()
    {
        return isset($this->created_at);
    }

    public function clearCreatedAt()
    {
        unset($this->created_at);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreatedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->created_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .livekit.AnalyticsRoomParticipant participants = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getParticipants()
    {
        return $this->participants;
    }

    /**
     * Generated from protobuf field <code>repeated .livekit.AnalyticsRoomParticipant participants = 4;</code>
     * @param array<\Livekit\AnalyticsRoomParticipant>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setParticipants($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Livekit\AnalyticsRoomParticipant::class);
        $this->participants = $arr;

        return $this;
    }

}

