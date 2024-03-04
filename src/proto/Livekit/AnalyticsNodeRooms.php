<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: livekit_analytics.proto

namespace Livekit;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>livekit.AnalyticsNodeRooms</code>
 */
class AnalyticsNodeRooms extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string node_id = 1;</code>
     */
    protected $node_id = '';
    /**
     * Generated from protobuf field <code>uint64 sequence_number = 2;</code>
     */
    protected $sequence_number = 0;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestamp = 3;</code>
     */
    protected $timestamp = null;
    /**
     * Generated from protobuf field <code>repeated .livekit.AnalyticsRoom rooms = 4;</code>
     */
    private $rooms;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $node_id
     *     @type int|string $sequence_number
     *     @type \Google\Protobuf\Timestamp $timestamp
     *     @type array<\Livekit\AnalyticsRoom>|\Google\Protobuf\Internal\RepeatedField $rooms
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\LivekitAnalytics::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string node_id = 1;</code>
     * @return string
     */
    public function getNodeId()
    {
        return $this->node_id;
    }

    /**
     * Generated from protobuf field <code>string node_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setNodeId($var)
    {
        GPBUtil::checkString($var, True);
        $this->node_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 sequence_number = 2;</code>
     * @return int|string
     */
    public function getSequenceNumber()
    {
        return $this->sequence_number;
    }

    /**
     * Generated from protobuf field <code>uint64 sequence_number = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSequenceNumber($var)
    {
        GPBUtil::checkUint64($var);
        $this->sequence_number = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestamp = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    public function hasTimestamp()
    {
        return isset($this->timestamp);
    }

    public function clearTimestamp()
    {
        unset($this->timestamp);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestamp = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setTimestamp($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->timestamp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .livekit.AnalyticsRoom rooms = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRooms()
    {
        return $this->rooms;
    }

    /**
     * Generated from protobuf field <code>repeated .livekit.AnalyticsRoom rooms = 4;</code>
     * @param array<\Livekit\AnalyticsRoom>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRooms($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Livekit\AnalyticsRoom::class);
        $this->rooms = $arr;

        return $this;
    }

}

