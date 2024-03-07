<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: livekit_rtc.proto

namespace Livekit;

use UnexpectedValueException;

/**
 * Protobuf type <code>livekit.StreamState</code>
 */
class StreamState
{
    /**
     * Generated from protobuf enum <code>ACTIVE = 0;</code>
     */
    const ACTIVE = 0;
    /**
     * Generated from protobuf enum <code>PAUSED = 1;</code>
     */
    const PAUSED = 1;

    private static $valueToName = [
        self::ACTIVE => 'ACTIVE',
        self::PAUSED => 'PAUSED',
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
