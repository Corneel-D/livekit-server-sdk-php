<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: livekit_egress.proto

namespace Livekit;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>livekit.AzureBlobUpload</code>
 */
class AzureBlobUpload extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string account_name = 1;</code>
     */
    protected $account_name = '';
    /**
     * Generated from protobuf field <code>string account_key = 2;</code>
     */
    protected $account_key = '';
    /**
     * Generated from protobuf field <code>string container_name = 3;</code>
     */
    protected $container_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $account_name
     *     @type string $account_key
     *     @type string $container_name
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\LivekitEgress::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string account_name = 1;</code>
     * @return string
     */
    public function getAccountName()
    {
        return $this->account_name;
    }

    /**
     * Generated from protobuf field <code>string account_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAccountName($var)
    {
        GPBUtil::checkString($var, True);
        $this->account_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string account_key = 2;</code>
     * @return string
     */
    public function getAccountKey()
    {
        return $this->account_key;
    }

    /**
     * Generated from protobuf field <code>string account_key = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAccountKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->account_key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string container_name = 3;</code>
     * @return string
     */
    public function getContainerName()
    {
        return $this->container_name;
    }

    /**
     * Generated from protobuf field <code>string container_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setContainerName($var)
    {
        GPBUtil::checkString($var, True);
        $this->container_name = $var;

        return $this;
    }

}
