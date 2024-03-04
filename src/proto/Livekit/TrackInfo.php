<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: livekit_models.proto

namespace Livekit;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>livekit.TrackInfo</code>
 */
class TrackInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string sid = 1;</code>
     */
    protected $sid = '';
    /**
     * Generated from protobuf field <code>.livekit.TrackType type = 2;</code>
     */
    protected $type = 0;
    /**
     * Generated from protobuf field <code>string name = 3;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>bool muted = 4;</code>
     */
    protected $muted = false;
    /**
     * original width of video (unset for audio)
     * clients may receive a lower resolution version with simulcast
     *
     * Generated from protobuf field <code>uint32 width = 5;</code>
     */
    protected $width = 0;
    /**
     * original height of video (unset for audio)
     *
     * Generated from protobuf field <code>uint32 height = 6;</code>
     */
    protected $height = 0;
    /**
     * true if track is simulcasted
     *
     * Generated from protobuf field <code>bool simulcast = 7;</code>
     */
    protected $simulcast = false;
    /**
     * true if DTX (Discontinuous Transmission) is disabled for audio
     *
     * Generated from protobuf field <code>bool disable_dtx = 8;</code>
     */
    protected $disable_dtx = false;
    /**
     * source of media
     *
     * Generated from protobuf field <code>.livekit.TrackSource source = 9;</code>
     */
    protected $source = 0;
    /**
     * Generated from protobuf field <code>repeated .livekit.VideoLayer layers = 10;</code>
     */
    private $layers;
    /**
     * mime type of codec
     *
     * Generated from protobuf field <code>string mime_type = 11;</code>
     */
    protected $mime_type = '';
    /**
     * Generated from protobuf field <code>string mid = 12;</code>
     */
    protected $mid = '';
    /**
     * Generated from protobuf field <code>repeated .livekit.SimulcastCodecInfo codecs = 13;</code>
     */
    private $codecs;
    /**
     * Generated from protobuf field <code>bool stereo = 14;</code>
     */
    protected $stereo = false;
    /**
     * true if RED (Redundant Encoding) is disabled for audio
     *
     * Generated from protobuf field <code>bool disable_red = 15;</code>
     */
    protected $disable_red = false;
    /**
     * Generated from protobuf field <code>.livekit.Encryption.Type encryption = 16;</code>
     */
    protected $encryption = 0;
    /**
     * Generated from protobuf field <code>string stream = 17;</code>
     */
    protected $stream = '';
    /**
     * Generated from protobuf field <code>.livekit.TimedVersion version = 18;</code>
     */
    protected $version = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $sid
     *     @type int $type
     *     @type string $name
     *     @type bool $muted
     *     @type int $width
     *           original width of video (unset for audio)
     *           clients may receive a lower resolution version with simulcast
     *     @type int $height
     *           original height of video (unset for audio)
     *     @type bool $simulcast
     *           true if track is simulcasted
     *     @type bool $disable_dtx
     *           true if DTX (Discontinuous Transmission) is disabled for audio
     *     @type int $source
     *           source of media
     *     @type array<\Livekit\VideoLayer>|\Google\Protobuf\Internal\RepeatedField $layers
     *     @type string $mime_type
     *           mime type of codec
     *     @type string $mid
     *     @type array<\Livekit\SimulcastCodecInfo>|\Google\Protobuf\Internal\RepeatedField $codecs
     *     @type bool $stereo
     *     @type bool $disable_red
     *           true if RED (Redundant Encoding) is disabled for audio
     *     @type int $encryption
     *     @type string $stream
     *     @type \Livekit\TimedVersion $version
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\LivekitModels::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string sid = 1;</code>
     * @return string
     */
    public function getSid()
    {
        return $this->sid;
    }

    /**
     * Generated from protobuf field <code>string sid = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSid($var)
    {
        GPBUtil::checkString($var, True);
        $this->sid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.livekit.TrackType type = 2;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.livekit.TrackType type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Livekit\TrackType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string name = 3;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 3;</code>
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
     * Generated from protobuf field <code>bool muted = 4;</code>
     * @return bool
     */
    public function getMuted()
    {
        return $this->muted;
    }

    /**
     * Generated from protobuf field <code>bool muted = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setMuted($var)
    {
        GPBUtil::checkBool($var);
        $this->muted = $var;

        return $this;
    }

    /**
     * original width of video (unset for audio)
     * clients may receive a lower resolution version with simulcast
     *
     * Generated from protobuf field <code>uint32 width = 5;</code>
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * original width of video (unset for audio)
     * clients may receive a lower resolution version with simulcast
     *
     * Generated from protobuf field <code>uint32 width = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setWidth($var)
    {
        GPBUtil::checkUint32($var);
        $this->width = $var;

        return $this;
    }

    /**
     * original height of video (unset for audio)
     *
     * Generated from protobuf field <code>uint32 height = 6;</code>
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * original height of video (unset for audio)
     *
     * Generated from protobuf field <code>uint32 height = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setHeight($var)
    {
        GPBUtil::checkUint32($var);
        $this->height = $var;

        return $this;
    }

    /**
     * true if track is simulcasted
     *
     * Generated from protobuf field <code>bool simulcast = 7;</code>
     * @return bool
     */
    public function getSimulcast()
    {
        return $this->simulcast;
    }

    /**
     * true if track is simulcasted
     *
     * Generated from protobuf field <code>bool simulcast = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setSimulcast($var)
    {
        GPBUtil::checkBool($var);
        $this->simulcast = $var;

        return $this;
    }

    /**
     * true if DTX (Discontinuous Transmission) is disabled for audio
     *
     * Generated from protobuf field <code>bool disable_dtx = 8;</code>
     * @return bool
     */
    public function getDisableDtx()
    {
        return $this->disable_dtx;
    }

    /**
     * true if DTX (Discontinuous Transmission) is disabled for audio
     *
     * Generated from protobuf field <code>bool disable_dtx = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setDisableDtx($var)
    {
        GPBUtil::checkBool($var);
        $this->disable_dtx = $var;

        return $this;
    }

    /**
     * source of media
     *
     * Generated from protobuf field <code>.livekit.TrackSource source = 9;</code>
     * @return int
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * source of media
     *
     * Generated from protobuf field <code>.livekit.TrackSource source = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setSource($var)
    {
        GPBUtil::checkEnum($var, \Livekit\TrackSource::class);
        $this->source = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .livekit.VideoLayer layers = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLayers()
    {
        return $this->layers;
    }

    /**
     * Generated from protobuf field <code>repeated .livekit.VideoLayer layers = 10;</code>
     * @param array<\Livekit\VideoLayer>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLayers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Livekit\VideoLayer::class);
        $this->layers = $arr;

        return $this;
    }

    /**
     * mime type of codec
     *
     * Generated from protobuf field <code>string mime_type = 11;</code>
     * @return string
     */
    public function getMimeType()
    {
        return $this->mime_type;
    }

    /**
     * mime type of codec
     *
     * Generated from protobuf field <code>string mime_type = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setMimeType($var)
    {
        GPBUtil::checkString($var, True);
        $this->mime_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string mid = 12;</code>
     * @return string
     */
    public function getMid()
    {
        return $this->mid;
    }

    /**
     * Generated from protobuf field <code>string mid = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setMid($var)
    {
        GPBUtil::checkString($var, True);
        $this->mid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .livekit.SimulcastCodecInfo codecs = 13;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCodecs()
    {
        return $this->codecs;
    }

    /**
     * Generated from protobuf field <code>repeated .livekit.SimulcastCodecInfo codecs = 13;</code>
     * @param array<\Livekit\SimulcastCodecInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCodecs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Livekit\SimulcastCodecInfo::class);
        $this->codecs = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool stereo = 14;</code>
     * @return bool
     */
    public function getStereo()
    {
        return $this->stereo;
    }

    /**
     * Generated from protobuf field <code>bool stereo = 14;</code>
     * @param bool $var
     * @return $this
     */
    public function setStereo($var)
    {
        GPBUtil::checkBool($var);
        $this->stereo = $var;

        return $this;
    }

    /**
     * true if RED (Redundant Encoding) is disabled for audio
     *
     * Generated from protobuf field <code>bool disable_red = 15;</code>
     * @return bool
     */
    public function getDisableRed()
    {
        return $this->disable_red;
    }

    /**
     * true if RED (Redundant Encoding) is disabled for audio
     *
     * Generated from protobuf field <code>bool disable_red = 15;</code>
     * @param bool $var
     * @return $this
     */
    public function setDisableRed($var)
    {
        GPBUtil::checkBool($var);
        $this->disable_red = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.livekit.Encryption.Type encryption = 16;</code>
     * @return int
     */
    public function getEncryption()
    {
        return $this->encryption;
    }

    /**
     * Generated from protobuf field <code>.livekit.Encryption.Type encryption = 16;</code>
     * @param int $var
     * @return $this
     */
    public function setEncryption($var)
    {
        GPBUtil::checkEnum($var, \Livekit\Encryption\Type::class);
        $this->encryption = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string stream = 17;</code>
     * @return string
     */
    public function getStream()
    {
        return $this->stream;
    }

    /**
     * Generated from protobuf field <code>string stream = 17;</code>
     * @param string $var
     * @return $this
     */
    public function setStream($var)
    {
        GPBUtil::checkString($var, True);
        $this->stream = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.livekit.TimedVersion version = 18;</code>
     * @return \Livekit\TimedVersion|null
     */
    public function getVersion()
    {
        return $this->version;
    }

    public function hasVersion()
    {
        return isset($this->version);
    }

    public function clearVersion()
    {
        unset($this->version);
    }

    /**
     * Generated from protobuf field <code>.livekit.TimedVersion version = 18;</code>
     * @param \Livekit\TimedVersion $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkMessage($var, \Livekit\TimedVersion::class);
        $this->version = $var;

        return $this;
    }

}

