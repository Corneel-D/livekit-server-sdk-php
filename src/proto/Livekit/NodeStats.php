<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: livekit_internal.proto

namespace Livekit;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>livekit.NodeStats</code>
 */
class NodeStats extends \Google\Protobuf\Internal\Message
{
    /**
     * when server was started
     *
     * Generated from protobuf field <code>int64 started_at = 1;</code>
     */
    protected $started_at = 0;
    /**
     * when server last reported its status
     *
     * Generated from protobuf field <code>int64 updated_at = 2;</code>
     */
    protected $updated_at = 0;
    /**
     * room
     *
     * Generated from protobuf field <code>int32 num_rooms = 3;</code>
     */
    protected $num_rooms = 0;
    /**
     * Generated from protobuf field <code>int32 num_clients = 4;</code>
     */
    protected $num_clients = 0;
    /**
     * Generated from protobuf field <code>int32 num_tracks_in = 5;</code>
     */
    protected $num_tracks_in = 0;
    /**
     * Generated from protobuf field <code>int32 num_tracks_out = 6;</code>
     */
    protected $num_tracks_out = 0;
    /**
     * Generated from protobuf field <code>int32 num_track_publish_attempts = 36;</code>
     */
    protected $num_track_publish_attempts = 0;
    /**
     * Generated from protobuf field <code>float track_publish_attempts_per_sec = 37;</code>
     */
    protected $track_publish_attempts_per_sec = 0.0;
    /**
     * Generated from protobuf field <code>int32 num_track_publish_success = 38;</code>
     */
    protected $num_track_publish_success = 0;
    /**
     * Generated from protobuf field <code>float track_publish_success_per_sec = 39;</code>
     */
    protected $track_publish_success_per_sec = 0.0;
    /**
     * Generated from protobuf field <code>int32 num_track_subscribe_attempts = 40;</code>
     */
    protected $num_track_subscribe_attempts = 0;
    /**
     * Generated from protobuf field <code>float track_subscribe_attempts_per_sec = 41;</code>
     */
    protected $track_subscribe_attempts_per_sec = 0.0;
    /**
     * Generated from protobuf field <code>int32 num_track_subscribe_success = 42;</code>
     */
    protected $num_track_subscribe_success = 0;
    /**
     * Generated from protobuf field <code>float track_subscribe_success_per_sec = 43;</code>
     */
    protected $track_subscribe_success_per_sec = 0.0;
    /**
     * packet
     *
     * Generated from protobuf field <code>uint64 bytes_in = 7;</code>
     */
    protected $bytes_in = 0;
    /**
     * Generated from protobuf field <code>uint64 bytes_out = 8;</code>
     */
    protected $bytes_out = 0;
    /**
     * Generated from protobuf field <code>uint64 packets_in = 9;</code>
     */
    protected $packets_in = 0;
    /**
     * Generated from protobuf field <code>uint64 packets_out = 10;</code>
     */
    protected $packets_out = 0;
    /**
     * Generated from protobuf field <code>uint64 nack_total = 11;</code>
     */
    protected $nack_total = 0;
    /**
     * Generated from protobuf field <code>float bytes_in_per_sec = 12;</code>
     */
    protected $bytes_in_per_sec = 0.0;
    /**
     * Generated from protobuf field <code>float bytes_out_per_sec = 13;</code>
     */
    protected $bytes_out_per_sec = 0.0;
    /**
     * Generated from protobuf field <code>float packets_in_per_sec = 14;</code>
     */
    protected $packets_in_per_sec = 0.0;
    /**
     * Generated from protobuf field <code>float packets_out_per_sec = 15;</code>
     */
    protected $packets_out_per_sec = 0.0;
    /**
     * Generated from protobuf field <code>float nack_per_sec = 16;</code>
     */
    protected $nack_per_sec = 0.0;
    /**
     * system
     *
     * Generated from protobuf field <code>uint32 num_cpus = 17;</code>
     */
    protected $num_cpus = 0;
    /**
     * Generated from protobuf field <code>float load_avg_last1min = 18;</code>
     */
    protected $load_avg_last1min = 0.0;
    /**
     * Generated from protobuf field <code>float load_avg_last5min = 19;</code>
     */
    protected $load_avg_last5min = 0.0;
    /**
     * Generated from protobuf field <code>float load_avg_last15min = 20;</code>
     */
    protected $load_avg_last15min = 0.0;
    /**
     * Generated from protobuf field <code>float cpu_load = 21;</code>
     */
    protected $cpu_load = 0.0;
    /**
     * deprecated
     *
     * Generated from protobuf field <code>float memory_load = 33;</code>
     */
    protected $memory_load = 0.0;
    /**
     * Generated from protobuf field <code>uint64 memory_total = 34;</code>
     */
    protected $memory_total = 0;
    /**
     * Generated from protobuf field <code>uint64 memory_used = 35;</code>
     */
    protected $memory_used = 0;
    /**
     * Generated from protobuf field <code>uint32 sys_packets_out = 28;</code>
     */
    protected $sys_packets_out = 0;
    /**
     * Generated from protobuf field <code>uint32 sys_packets_dropped = 29;</code>
     */
    protected $sys_packets_dropped = 0;
    /**
     * Generated from protobuf field <code>float sys_packets_out_per_sec = 30;</code>
     */
    protected $sys_packets_out_per_sec = 0.0;
    /**
     * Generated from protobuf field <code>float sys_packets_dropped_per_sec = 31;</code>
     */
    protected $sys_packets_dropped_per_sec = 0.0;
    /**
     * Generated from protobuf field <code>float sys_packets_dropped_pct_per_sec = 32;</code>
     */
    protected $sys_packets_dropped_pct_per_sec = 0.0;
    /**
     * retransmissions
     *
     * Generated from protobuf field <code>uint64 retransmit_bytes_out = 22;</code>
     */
    protected $retransmit_bytes_out = 0;
    /**
     * Generated from protobuf field <code>uint64 retransmit_packets_out = 23;</code>
     */
    protected $retransmit_packets_out = 0;
    /**
     * Generated from protobuf field <code>float retransmit_bytes_out_per_sec = 24;</code>
     */
    protected $retransmit_bytes_out_per_sec = 0.0;
    /**
     * Generated from protobuf field <code>float retransmit_packets_out_per_sec = 25;</code>
     */
    protected $retransmit_packets_out_per_sec = 0.0;
    /**
     * participant joins
     *
     * Generated from protobuf field <code>uint64 participant_signal_connected = 26;</code>
     */
    protected $participant_signal_connected = 0;
    /**
     * Generated from protobuf field <code>float participant_signal_connected_per_sec = 27;</code>
     */
    protected $participant_signal_connected_per_sec = 0.0;
    /**
     * Generated from protobuf field <code>uint64 participant_rtc_connected = 44;</code>
     */
    protected $participant_rtc_connected = 0;
    /**
     * Generated from protobuf field <code>float participant_rtc_connected_per_sec = 45;</code>
     */
    protected $participant_rtc_connected_per_sec = 0.0;
    /**
     * Generated from protobuf field <code>uint64 participant_rtc_init = 46;</code>
     */
    protected $participant_rtc_init = 0;
    /**
     * Generated from protobuf field <code>float participant_rtc_init_per_sec = 47;</code>
     */
    protected $participant_rtc_init_per_sec = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $started_at
     *           when server was started
     *     @type int|string $updated_at
     *           when server last reported its status
     *     @type int $num_rooms
     *           room
     *     @type int $num_clients
     *     @type int $num_tracks_in
     *     @type int $num_tracks_out
     *     @type int $num_track_publish_attempts
     *     @type float $track_publish_attempts_per_sec
     *     @type int $num_track_publish_success
     *     @type float $track_publish_success_per_sec
     *     @type int $num_track_subscribe_attempts
     *     @type float $track_subscribe_attempts_per_sec
     *     @type int $num_track_subscribe_success
     *     @type float $track_subscribe_success_per_sec
     *     @type int|string $bytes_in
     *           packet
     *     @type int|string $bytes_out
     *     @type int|string $packets_in
     *     @type int|string $packets_out
     *     @type int|string $nack_total
     *     @type float $bytes_in_per_sec
     *     @type float $bytes_out_per_sec
     *     @type float $packets_in_per_sec
     *     @type float $packets_out_per_sec
     *     @type float $nack_per_sec
     *     @type int $num_cpus
     *           system
     *     @type float $load_avg_last1min
     *     @type float $load_avg_last5min
     *     @type float $load_avg_last15min
     *     @type float $cpu_load
     *     @type float $memory_load
     *           deprecated
     *     @type int|string $memory_total
     *     @type int|string $memory_used
     *     @type int $sys_packets_out
     *     @type int $sys_packets_dropped
     *     @type float $sys_packets_out_per_sec
     *     @type float $sys_packets_dropped_per_sec
     *     @type float $sys_packets_dropped_pct_per_sec
     *     @type int|string $retransmit_bytes_out
     *           retransmissions
     *     @type int|string $retransmit_packets_out
     *     @type float $retransmit_bytes_out_per_sec
     *     @type float $retransmit_packets_out_per_sec
     *     @type int|string $participant_signal_connected
     *           participant joins
     *     @type float $participant_signal_connected_per_sec
     *     @type int|string $participant_rtc_connected
     *     @type float $participant_rtc_connected_per_sec
     *     @type int|string $participant_rtc_init
     *     @type float $participant_rtc_init_per_sec
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\LivekitInternal::initOnce();
        parent::__construct($data);
    }

    /**
     * when server was started
     *
     * Generated from protobuf field <code>int64 started_at = 1;</code>
     * @return int|string
     */
    public function getStartedAt()
    {
        return $this->started_at;
    }

    /**
     * when server was started
     *
     * Generated from protobuf field <code>int64 started_at = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStartedAt($var)
    {
        GPBUtil::checkInt64($var);
        $this->started_at = $var;

        return $this;
    }

    /**
     * when server last reported its status
     *
     * Generated from protobuf field <code>int64 updated_at = 2;</code>
     * @return int|string
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * when server last reported its status
     *
     * Generated from protobuf field <code>int64 updated_at = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUpdatedAt($var)
    {
        GPBUtil::checkInt64($var);
        $this->updated_at = $var;

        return $this;
    }

    /**
     * room
     *
     * Generated from protobuf field <code>int32 num_rooms = 3;</code>
     * @return int
     */
    public function getNumRooms()
    {
        return $this->num_rooms;
    }

    /**
     * room
     *
     * Generated from protobuf field <code>int32 num_rooms = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setNumRooms($var)
    {
        GPBUtil::checkInt32($var);
        $this->num_rooms = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 num_clients = 4;</code>
     * @return int
     */
    public function getNumClients()
    {
        return $this->num_clients;
    }

    /**
     * Generated from protobuf field <code>int32 num_clients = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setNumClients($var)
    {
        GPBUtil::checkInt32($var);
        $this->num_clients = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 num_tracks_in = 5;</code>
     * @return int
     */
    public function getNumTracksIn()
    {
        return $this->num_tracks_in;
    }

    /**
     * Generated from protobuf field <code>int32 num_tracks_in = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setNumTracksIn($var)
    {
        GPBUtil::checkInt32($var);
        $this->num_tracks_in = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 num_tracks_out = 6;</code>
     * @return int
     */
    public function getNumTracksOut()
    {
        return $this->num_tracks_out;
    }

    /**
     * Generated from protobuf field <code>int32 num_tracks_out = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setNumTracksOut($var)
    {
        GPBUtil::checkInt32($var);
        $this->num_tracks_out = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 num_track_publish_attempts = 36;</code>
     * @return int
     */
    public function getNumTrackPublishAttempts()
    {
        return $this->num_track_publish_attempts;
    }

    /**
     * Generated from protobuf field <code>int32 num_track_publish_attempts = 36;</code>
     * @param int $var
     * @return $this
     */
    public function setNumTrackPublishAttempts($var)
    {
        GPBUtil::checkInt32($var);
        $this->num_track_publish_attempts = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float track_publish_attempts_per_sec = 37;</code>
     * @return float
     */
    public function getTrackPublishAttemptsPerSec()
    {
        return $this->track_publish_attempts_per_sec;
    }

    /**
     * Generated from protobuf field <code>float track_publish_attempts_per_sec = 37;</code>
     * @param float $var
     * @return $this
     */
    public function setTrackPublishAttemptsPerSec($var)
    {
        GPBUtil::checkFloat($var);
        $this->track_publish_attempts_per_sec = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 num_track_publish_success = 38;</code>
     * @return int
     */
    public function getNumTrackPublishSuccess()
    {
        return $this->num_track_publish_success;
    }

    /**
     * Generated from protobuf field <code>int32 num_track_publish_success = 38;</code>
     * @param int $var
     * @return $this
     */
    public function setNumTrackPublishSuccess($var)
    {
        GPBUtil::checkInt32($var);
        $this->num_track_publish_success = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float track_publish_success_per_sec = 39;</code>
     * @return float
     */
    public function getTrackPublishSuccessPerSec()
    {
        return $this->track_publish_success_per_sec;
    }

    /**
     * Generated from protobuf field <code>float track_publish_success_per_sec = 39;</code>
     * @param float $var
     * @return $this
     */
    public function setTrackPublishSuccessPerSec($var)
    {
        GPBUtil::checkFloat($var);
        $this->track_publish_success_per_sec = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 num_track_subscribe_attempts = 40;</code>
     * @return int
     */
    public function getNumTrackSubscribeAttempts()
    {
        return $this->num_track_subscribe_attempts;
    }

    /**
     * Generated from protobuf field <code>int32 num_track_subscribe_attempts = 40;</code>
     * @param int $var
     * @return $this
     */
    public function setNumTrackSubscribeAttempts($var)
    {
        GPBUtil::checkInt32($var);
        $this->num_track_subscribe_attempts = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float track_subscribe_attempts_per_sec = 41;</code>
     * @return float
     */
    public function getTrackSubscribeAttemptsPerSec()
    {
        return $this->track_subscribe_attempts_per_sec;
    }

    /**
     * Generated from protobuf field <code>float track_subscribe_attempts_per_sec = 41;</code>
     * @param float $var
     * @return $this
     */
    public function setTrackSubscribeAttemptsPerSec($var)
    {
        GPBUtil::checkFloat($var);
        $this->track_subscribe_attempts_per_sec = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 num_track_subscribe_success = 42;</code>
     * @return int
     */
    public function getNumTrackSubscribeSuccess()
    {
        return $this->num_track_subscribe_success;
    }

    /**
     * Generated from protobuf field <code>int32 num_track_subscribe_success = 42;</code>
     * @param int $var
     * @return $this
     */
    public function setNumTrackSubscribeSuccess($var)
    {
        GPBUtil::checkInt32($var);
        $this->num_track_subscribe_success = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float track_subscribe_success_per_sec = 43;</code>
     * @return float
     */
    public function getTrackSubscribeSuccessPerSec()
    {
        return $this->track_subscribe_success_per_sec;
    }

    /**
     * Generated from protobuf field <code>float track_subscribe_success_per_sec = 43;</code>
     * @param float $var
     * @return $this
     */
    public function setTrackSubscribeSuccessPerSec($var)
    {
        GPBUtil::checkFloat($var);
        $this->track_subscribe_success_per_sec = $var;

        return $this;
    }

    /**
     * packet
     *
     * Generated from protobuf field <code>uint64 bytes_in = 7;</code>
     * @return int|string
     */
    public function getBytesIn()
    {
        return $this->bytes_in;
    }

    /**
     * packet
     *
     * Generated from protobuf field <code>uint64 bytes_in = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBytesIn($var)
    {
        GPBUtil::checkUint64($var);
        $this->bytes_in = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 bytes_out = 8;</code>
     * @return int|string
     */
    public function getBytesOut()
    {
        return $this->bytes_out;
    }

    /**
     * Generated from protobuf field <code>uint64 bytes_out = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBytesOut($var)
    {
        GPBUtil::checkUint64($var);
        $this->bytes_out = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 packets_in = 9;</code>
     * @return int|string
     */
    public function getPacketsIn()
    {
        return $this->packets_in;
    }

    /**
     * Generated from protobuf field <code>uint64 packets_in = 9;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPacketsIn($var)
    {
        GPBUtil::checkUint64($var);
        $this->packets_in = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 packets_out = 10;</code>
     * @return int|string
     */
    public function getPacketsOut()
    {
        return $this->packets_out;
    }

    /**
     * Generated from protobuf field <code>uint64 packets_out = 10;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPacketsOut($var)
    {
        GPBUtil::checkUint64($var);
        $this->packets_out = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 nack_total = 11;</code>
     * @return int|string
     */
    public function getNackTotal()
    {
        return $this->nack_total;
    }

    /**
     * Generated from protobuf field <code>uint64 nack_total = 11;</code>
     * @param int|string $var
     * @return $this
     */
    public function setNackTotal($var)
    {
        GPBUtil::checkUint64($var);
        $this->nack_total = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float bytes_in_per_sec = 12;</code>
     * @return float
     */
    public function getBytesInPerSec()
    {
        return $this->bytes_in_per_sec;
    }

    /**
     * Generated from protobuf field <code>float bytes_in_per_sec = 12;</code>
     * @param float $var
     * @return $this
     */
    public function setBytesInPerSec($var)
    {
        GPBUtil::checkFloat($var);
        $this->bytes_in_per_sec = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float bytes_out_per_sec = 13;</code>
     * @return float
     */
    public function getBytesOutPerSec()
    {
        return $this->bytes_out_per_sec;
    }

    /**
     * Generated from protobuf field <code>float bytes_out_per_sec = 13;</code>
     * @param float $var
     * @return $this
     */
    public function setBytesOutPerSec($var)
    {
        GPBUtil::checkFloat($var);
        $this->bytes_out_per_sec = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float packets_in_per_sec = 14;</code>
     * @return float
     */
    public function getPacketsInPerSec()
    {
        return $this->packets_in_per_sec;
    }

    /**
     * Generated from protobuf field <code>float packets_in_per_sec = 14;</code>
     * @param float $var
     * @return $this
     */
    public function setPacketsInPerSec($var)
    {
        GPBUtil::checkFloat($var);
        $this->packets_in_per_sec = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float packets_out_per_sec = 15;</code>
     * @return float
     */
    public function getPacketsOutPerSec()
    {
        return $this->packets_out_per_sec;
    }

    /**
     * Generated from protobuf field <code>float packets_out_per_sec = 15;</code>
     * @param float $var
     * @return $this
     */
    public function setPacketsOutPerSec($var)
    {
        GPBUtil::checkFloat($var);
        $this->packets_out_per_sec = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float nack_per_sec = 16;</code>
     * @return float
     */
    public function getNackPerSec()
    {
        return $this->nack_per_sec;
    }

    /**
     * Generated from protobuf field <code>float nack_per_sec = 16;</code>
     * @param float $var
     * @return $this
     */
    public function setNackPerSec($var)
    {
        GPBUtil::checkFloat($var);
        $this->nack_per_sec = $var;

        return $this;
    }

    /**
     * system
     *
     * Generated from protobuf field <code>uint32 num_cpus = 17;</code>
     * @return int
     */
    public function getNumCpus()
    {
        return $this->num_cpus;
    }

    /**
     * system
     *
     * Generated from protobuf field <code>uint32 num_cpus = 17;</code>
     * @param int $var
     * @return $this
     */
    public function setNumCpus($var)
    {
        GPBUtil::checkUint32($var);
        $this->num_cpus = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float load_avg_last1min = 18;</code>
     * @return float
     */
    public function getLoadAvgLast1Min()
    {
        return $this->load_avg_last1min;
    }

    /**
     * Generated from protobuf field <code>float load_avg_last1min = 18;</code>
     * @param float $var
     * @return $this
     */
    public function setLoadAvgLast1Min($var)
    {
        GPBUtil::checkFloat($var);
        $this->load_avg_last1min = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float load_avg_last5min = 19;</code>
     * @return float
     */
    public function getLoadAvgLast5Min()
    {
        return $this->load_avg_last5min;
    }

    /**
     * Generated from protobuf field <code>float load_avg_last5min = 19;</code>
     * @param float $var
     * @return $this
     */
    public function setLoadAvgLast5Min($var)
    {
        GPBUtil::checkFloat($var);
        $this->load_avg_last5min = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float load_avg_last15min = 20;</code>
     * @return float
     */
    public function getLoadAvgLast15Min()
    {
        return $this->load_avg_last15min;
    }

    /**
     * Generated from protobuf field <code>float load_avg_last15min = 20;</code>
     * @param float $var
     * @return $this
     */
    public function setLoadAvgLast15Min($var)
    {
        GPBUtil::checkFloat($var);
        $this->load_avg_last15min = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float cpu_load = 21;</code>
     * @return float
     */
    public function getCpuLoad()
    {
        return $this->cpu_load;
    }

    /**
     * Generated from protobuf field <code>float cpu_load = 21;</code>
     * @param float $var
     * @return $this
     */
    public function setCpuLoad($var)
    {
        GPBUtil::checkFloat($var);
        $this->cpu_load = $var;

        return $this;
    }

    /**
     * deprecated
     *
     * Generated from protobuf field <code>float memory_load = 33;</code>
     * @return float
     */
    public function getMemoryLoad()
    {
        return $this->memory_load;
    }

    /**
     * deprecated
     *
     * Generated from protobuf field <code>float memory_load = 33;</code>
     * @param float $var
     * @return $this
     */
    public function setMemoryLoad($var)
    {
        GPBUtil::checkFloat($var);
        $this->memory_load = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 memory_total = 34;</code>
     * @return int|string
     */
    public function getMemoryTotal()
    {
        return $this->memory_total;
    }

    /**
     * Generated from protobuf field <code>uint64 memory_total = 34;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMemoryTotal($var)
    {
        GPBUtil::checkUint64($var);
        $this->memory_total = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 memory_used = 35;</code>
     * @return int|string
     */
    public function getMemoryUsed()
    {
        return $this->memory_used;
    }

    /**
     * Generated from protobuf field <code>uint64 memory_used = 35;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMemoryUsed($var)
    {
        GPBUtil::checkUint64($var);
        $this->memory_used = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 sys_packets_out = 28;</code>
     * @return int
     */
    public function getSysPacketsOut()
    {
        return $this->sys_packets_out;
    }

    /**
     * Generated from protobuf field <code>uint32 sys_packets_out = 28;</code>
     * @param int $var
     * @return $this
     */
    public function setSysPacketsOut($var)
    {
        GPBUtil::checkUint32($var);
        $this->sys_packets_out = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 sys_packets_dropped = 29;</code>
     * @return int
     */
    public function getSysPacketsDropped()
    {
        return $this->sys_packets_dropped;
    }

    /**
     * Generated from protobuf field <code>uint32 sys_packets_dropped = 29;</code>
     * @param int $var
     * @return $this
     */
    public function setSysPacketsDropped($var)
    {
        GPBUtil::checkUint32($var);
        $this->sys_packets_dropped = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float sys_packets_out_per_sec = 30;</code>
     * @return float
     */
    public function getSysPacketsOutPerSec()
    {
        return $this->sys_packets_out_per_sec;
    }

    /**
     * Generated from protobuf field <code>float sys_packets_out_per_sec = 30;</code>
     * @param float $var
     * @return $this
     */
    public function setSysPacketsOutPerSec($var)
    {
        GPBUtil::checkFloat($var);
        $this->sys_packets_out_per_sec = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float sys_packets_dropped_per_sec = 31;</code>
     * @return float
     */
    public function getSysPacketsDroppedPerSec()
    {
        return $this->sys_packets_dropped_per_sec;
    }

    /**
     * Generated from protobuf field <code>float sys_packets_dropped_per_sec = 31;</code>
     * @param float $var
     * @return $this
     */
    public function setSysPacketsDroppedPerSec($var)
    {
        GPBUtil::checkFloat($var);
        $this->sys_packets_dropped_per_sec = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float sys_packets_dropped_pct_per_sec = 32;</code>
     * @return float
     */
    public function getSysPacketsDroppedPctPerSec()
    {
        return $this->sys_packets_dropped_pct_per_sec;
    }

    /**
     * Generated from protobuf field <code>float sys_packets_dropped_pct_per_sec = 32;</code>
     * @param float $var
     * @return $this
     */
    public function setSysPacketsDroppedPctPerSec($var)
    {
        GPBUtil::checkFloat($var);
        $this->sys_packets_dropped_pct_per_sec = $var;

        return $this;
    }

    /**
     * retransmissions
     *
     * Generated from protobuf field <code>uint64 retransmit_bytes_out = 22;</code>
     * @return int|string
     */
    public function getRetransmitBytesOut()
    {
        return $this->retransmit_bytes_out;
    }

    /**
     * retransmissions
     *
     * Generated from protobuf field <code>uint64 retransmit_bytes_out = 22;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRetransmitBytesOut($var)
    {
        GPBUtil::checkUint64($var);
        $this->retransmit_bytes_out = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 retransmit_packets_out = 23;</code>
     * @return int|string
     */
    public function getRetransmitPacketsOut()
    {
        return $this->retransmit_packets_out;
    }

    /**
     * Generated from protobuf field <code>uint64 retransmit_packets_out = 23;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRetransmitPacketsOut($var)
    {
        GPBUtil::checkUint64($var);
        $this->retransmit_packets_out = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float retransmit_bytes_out_per_sec = 24;</code>
     * @return float
     */
    public function getRetransmitBytesOutPerSec()
    {
        return $this->retransmit_bytes_out_per_sec;
    }

    /**
     * Generated from protobuf field <code>float retransmit_bytes_out_per_sec = 24;</code>
     * @param float $var
     * @return $this
     */
    public function setRetransmitBytesOutPerSec($var)
    {
        GPBUtil::checkFloat($var);
        $this->retransmit_bytes_out_per_sec = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float retransmit_packets_out_per_sec = 25;</code>
     * @return float
     */
    public function getRetransmitPacketsOutPerSec()
    {
        return $this->retransmit_packets_out_per_sec;
    }

    /**
     * Generated from protobuf field <code>float retransmit_packets_out_per_sec = 25;</code>
     * @param float $var
     * @return $this
     */
    public function setRetransmitPacketsOutPerSec($var)
    {
        GPBUtil::checkFloat($var);
        $this->retransmit_packets_out_per_sec = $var;

        return $this;
    }

    /**
     * participant joins
     *
     * Generated from protobuf field <code>uint64 participant_signal_connected = 26;</code>
     * @return int|string
     */
    public function getParticipantSignalConnected()
    {
        return $this->participant_signal_connected;
    }

    /**
     * participant joins
     *
     * Generated from protobuf field <code>uint64 participant_signal_connected = 26;</code>
     * @param int|string $var
     * @return $this
     */
    public function setParticipantSignalConnected($var)
    {
        GPBUtil::checkUint64($var);
        $this->participant_signal_connected = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float participant_signal_connected_per_sec = 27;</code>
     * @return float
     */
    public function getParticipantSignalConnectedPerSec()
    {
        return $this->participant_signal_connected_per_sec;
    }

    /**
     * Generated from protobuf field <code>float participant_signal_connected_per_sec = 27;</code>
     * @param float $var
     * @return $this
     */
    public function setParticipantSignalConnectedPerSec($var)
    {
        GPBUtil::checkFloat($var);
        $this->participant_signal_connected_per_sec = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 participant_rtc_connected = 44;</code>
     * @return int|string
     */
    public function getParticipantRtcConnected()
    {
        return $this->participant_rtc_connected;
    }

    /**
     * Generated from protobuf field <code>uint64 participant_rtc_connected = 44;</code>
     * @param int|string $var
     * @return $this
     */
    public function setParticipantRtcConnected($var)
    {
        GPBUtil::checkUint64($var);
        $this->participant_rtc_connected = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float participant_rtc_connected_per_sec = 45;</code>
     * @return float
     */
    public function getParticipantRtcConnectedPerSec()
    {
        return $this->participant_rtc_connected_per_sec;
    }

    /**
     * Generated from protobuf field <code>float participant_rtc_connected_per_sec = 45;</code>
     * @param float $var
     * @return $this
     */
    public function setParticipantRtcConnectedPerSec($var)
    {
        GPBUtil::checkFloat($var);
        $this->participant_rtc_connected_per_sec = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 participant_rtc_init = 46;</code>
     * @return int|string
     */
    public function getParticipantRtcInit()
    {
        return $this->participant_rtc_init;
    }

    /**
     * Generated from protobuf field <code>uint64 participant_rtc_init = 46;</code>
     * @param int|string $var
     * @return $this
     */
    public function setParticipantRtcInit($var)
    {
        GPBUtil::checkUint64($var);
        $this->participant_rtc_init = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float participant_rtc_init_per_sec = 47;</code>
     * @return float
     */
    public function getParticipantRtcInitPerSec()
    {
        return $this->participant_rtc_init_per_sec;
    }

    /**
     * Generated from protobuf field <code>float participant_rtc_init_per_sec = 47;</code>
     * @param float $var
     * @return $this
     */
    public function setParticipantRtcInitPerSec($var)
    {
        GPBUtil::checkFloat($var);
        $this->participant_rtc_init_per_sec = $var;

        return $this;
    }

}
