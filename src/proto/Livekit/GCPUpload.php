<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: livekit_egress.proto

namespace Livekit;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>livekit.GCPUpload</code>
 */
class GCPUpload extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string credentials = 1;</code>
     */
    protected $credentials = '';
    /**
     * Generated from protobuf field <code>string bucket = 2;</code>
     */
    protected $bucket = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $credentials
     *     @type string $bucket
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\LivekitEgress::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string credentials = 1;</code>
     * @return string
     */
    public function getCredentials()
    {
        return $this->credentials;
    }

    /**
     * Generated from protobuf field <code>string credentials = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCredentials($var)
    {
        GPBUtil::checkString($var, True);
        $this->credentials = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string bucket = 2;</code>
     * @return string
     */
    public function getBucket()
    {
        return $this->bucket;
    }

    /**
     * Generated from protobuf field <code>string bucket = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setBucket($var)
    {
        GPBUtil::checkString($var, True);
        $this->bucket = $var;

        return $this;
    }

}

