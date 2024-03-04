<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: livekit_agent.proto

namespace GPBMetadata;

class LivekitAgent
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\LivekitModels::initOnce();
        $pool->internalAddGeneratedFile(
            '
�

livekit_agent.protolivekit"6
	AgentInfo

id (	
name (	
version (	"�
Job

id (	
type (2.livekit.JobType
room (2.livekit.Room2
participant (2.livekit.ParticipantInfoH �B
_participant"�
WorkerMessage2
register (2.livekit.RegisterWorkerRequestH 5
availability (2.livekit.AvailabilityResponseH -
status (2.livekit.UpdateWorkerStatusH .

job_update (2.livekit.JobStatusUpdateH B	
message"�
ServerMessage3
register (2.livekit.RegisterWorkerResponseH 4
availability (2.livekit.AvailabilityRequestH ,

assignment (2.livekit.JobAssignmentH B	
message"i
RegisterWorkerRequest
type (2.livekit.JobType
	worker_id (	
version (	
name (	"C
RegisterWorkerResponse
	worker_id (	
server_version (	"0
AvailabilityRequest
job (2.livekit.Job"9
AvailabilityResponse
job_id (	
	available ("g
JobStatusUpdate
job_id (	"
status (2.livekit.JobStatus
error (	
	user_data (	"*
JobAssignment
job (2.livekit.Job";
UpdateWorkerStatus%
status (2.livekit.WorkerStatus*(
JobType
JT_ROOM 
JT_PUBLISHER*-
WorkerStatus
WS_AVAILABLE 
WS_FULL*:
	JobStatus

JS_UNKNOWN 

JS_SUCCESS
	JS_FAILEDBFZ#github.com/livekit/protocol/livekit�LiveKit.Proto�LiveKit::Protobproto3'
        , true);

        static::$is_initialized = true;
    }
}

