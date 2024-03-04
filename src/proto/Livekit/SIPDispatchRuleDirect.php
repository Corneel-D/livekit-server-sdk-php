<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: livekit_sip.proto

namespace Livekit;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>livekit.SIPDispatchRuleDirect</code>
 */
class SIPDispatchRuleDirect extends \Google\Protobuf\Internal\Message
{
    /**
     * What room should call be directed into
     *
     * Generated from protobuf field <code>string room_name = 1;</code>
     */
    protected $room_name = '';
    /**
     * Optional pin required to enter room
     *
     * Generated from protobuf field <code>string pin = 2;</code>
     */
    protected $pin = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $room_name
     *           What room should call be directed into
     *     @type string $pin
     *           Optional pin required to enter room
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\LivekitSip::initOnce();
        parent::__construct($data);
    }

    /**
     * What room should call be directed into
     *
     * Generated from protobuf field <code>string room_name = 1;</code>
     * @return string
     */
    public function getRoomName()
    {
        return $this->room_name;
    }

    /**
     * What room should call be directed into
     *
     * Generated from protobuf field <code>string room_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRoomName($var)
    {
        GPBUtil::checkString($var, True);
        $this->room_name = $var;

        return $this;
    }

    /**
     * Optional pin required to enter room
     *
     * Generated from protobuf field <code>string pin = 2;</code>
     * @return string
     */
    public function getPin()
    {
        return $this->pin;
    }

    /**
     * Optional pin required to enter room
     *
     * Generated from protobuf field <code>string pin = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPin($var)
    {
        GPBUtil::checkString($var, True);
        $this->pin = $var;

        return $this;
    }

}

