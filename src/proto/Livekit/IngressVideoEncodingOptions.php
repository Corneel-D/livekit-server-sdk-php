<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: livekit_ingress.proto

namespace Livekit;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>livekit.IngressVideoEncodingOptions</code>
 */
class IngressVideoEncodingOptions extends \Google\Protobuf\Internal\Message
{
    /**
     * desired codec to publish to room
     *
     * Generated from protobuf field <code>.livekit.VideoCodec video_codec = 1;</code>
     */
    protected $video_codec = 0;
    /**
     * Generated from protobuf field <code>double frame_rate = 2;</code>
     */
    protected $frame_rate = 0.0;
    /**
     * simulcast layers to publish, when empty, should usually be set to layers at 1/2 and 1/4 of the dimensions
     *
     * Generated from protobuf field <code>repeated .livekit.VideoLayer layers = 3;</code>
     */
    private $layers;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $video_codec
     *           desired codec to publish to room
     *     @type float $frame_rate
     *     @type array<\Livekit\VideoLayer>|\Google\Protobuf\Internal\RepeatedField $layers
     *           simulcast layers to publish, when empty, should usually be set to layers at 1/2 and 1/4 of the dimensions
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\LivekitIngress::initOnce();
        parent::__construct($data);
    }

    /**
     * desired codec to publish to room
     *
     * Generated from protobuf field <code>.livekit.VideoCodec video_codec = 1;</code>
     * @return int
     */
    public function getVideoCodec()
    {
        return $this->video_codec;
    }

    /**
     * desired codec to publish to room
     *
     * Generated from protobuf field <code>.livekit.VideoCodec video_codec = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setVideoCodec($var)
    {
        GPBUtil::checkEnum($var, \Livekit\VideoCodec::class);
        $this->video_codec = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double frame_rate = 2;</code>
     * @return float
     */
    public function getFrameRate()
    {
        return $this->frame_rate;
    }

    /**
     * Generated from protobuf field <code>double frame_rate = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setFrameRate($var)
    {
        GPBUtil::checkDouble($var);
        $this->frame_rate = $var;

        return $this;
    }

    /**
     * simulcast layers to publish, when empty, should usually be set to layers at 1/2 and 1/4 of the dimensions
     *
     * Generated from protobuf field <code>repeated .livekit.VideoLayer layers = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLayers()
    {
        return $this->layers;
    }

    /**
     * simulcast layers to publish, when empty, should usually be set to layers at 1/2 and 1/4 of the dimensions
     *
     * Generated from protobuf field <code>repeated .livekit.VideoLayer layers = 3;</code>
     * @param array<\Livekit\VideoLayer>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLayers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Livekit\VideoLayer::class);
        $this->layers = $arr;

        return $this;
    }

}

