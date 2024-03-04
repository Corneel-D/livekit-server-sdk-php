<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: livekit_agent.proto

namespace Livekit;

use UnexpectedValueException;

/**
 * Protobuf type <code>livekit.JobType</code>
 */
class JobType
{
    /**
     * Generated from protobuf enum <code>JT_ROOM = 0;</code>
     */
    const JT_ROOM = 0;
    /**
     * Generated from protobuf enum <code>JT_PUBLISHER = 1;</code>
     */
    const JT_PUBLISHER = 1;

    private static $valueToName = [
        self::JT_ROOM => 'JT_ROOM',
        self::JT_PUBLISHER => 'JT_PUBLISHER',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}
