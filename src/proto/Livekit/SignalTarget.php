<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: livekit_rtc.proto

namespace Livekit;

use UnexpectedValueException;

/**
 * Protobuf type <code>livekit.SignalTarget</code>
 */
class SignalTarget
{
    /**
     * Generated from protobuf enum <code>PUBLISHER = 0;</code>
     */
    const PUBLISHER = 0;
    /**
     * Generated from protobuf enum <code>SUBSCRIBER = 1;</code>
     */
    const SUBSCRIBER = 1;

    private static $valueToName = [
        self::PUBLISHER => 'PUBLISHER',
        self::SUBSCRIBER => 'SUBSCRIBER',
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
