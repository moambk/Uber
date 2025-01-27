<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/session.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Cloud conversation info for easier debugging.
 * It will get populated in `StreamingDetectIntentResponse` or
 * `StreamingAnalyzeContentResponse` when the flag `enable_debugging_info` is
 * set to true in corresponding requests.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.CloudConversationDebuggingInfo</code>
 */
class CloudConversationDebuggingInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Number of input audio data chunks in streaming requests.
     *
     * Generated from protobuf field <code>int32 audio_data_chunks = 1;</code>
     */
    private $audio_data_chunks = 0;
    /**
     * Time offset of the end of speech utterance relative to the
     * beginning of the first audio chunk.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration result_end_time_offset = 2;</code>
     */
    private $result_end_time_offset = null;
    /**
     * Duration of first audio chunk.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration first_audio_duration = 3;</code>
     */
    private $first_audio_duration = null;
    /**
     * Whether client used single utterance mode.
     *
     * Generated from protobuf field <code>bool single_utterance = 5;</code>
     */
    private $single_utterance = false;
    /**
     * Time offsets of the speech partial results relative to the beginning of
     * the stream.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Duration speech_partial_results_end_times = 6;</code>
     */
    private $speech_partial_results_end_times;
    /**
     * Time offsets of the speech final results (is_final=true) relative to the
     * beginning of the stream.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Duration speech_final_results_end_times = 7;</code>
     */
    private $speech_final_results_end_times;
    /**
     * Total number of partial responses.
     *
     * Generated from protobuf field <code>int32 partial_responses = 8;</code>
     */
    private $partial_responses = 0;
    /**
     * Time offset of Speaker ID stream close time relative to the Speech stream
     * close time in milliseconds. Only meaningful for conversations involving
     * passive verification.
     *
     * Generated from protobuf field <code>int32 speaker_id_passive_latency_ms_offset = 9;</code>
     */
    private $speaker_id_passive_latency_ms_offset = 0;
    /**
     * Whether a barge-in event is triggered in this request.
     *
     * Generated from protobuf field <code>bool bargein_event_triggered = 10;</code>
     */
    private $bargein_event_triggered = false;
    /**
     * Whether speech uses single utterance mode.
     *
     * Generated from protobuf field <code>bool speech_single_utterance = 11;</code>
     */
    private $speech_single_utterance = false;
    /**
     * Time offsets of the DTMF partial results relative to the beginning of
     * the stream.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Duration dtmf_partial_results_times = 12;</code>
     */
    private $dtmf_partial_results_times;
    /**
     * Time offsets of the DTMF final results relative to the beginning of
     * the stream.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Duration dtmf_final_results_times = 13;</code>
     */
    private $dtmf_final_results_times;
    /**
     * Time offset of the end-of-single-utterance signal relative to the
     * beginning of the stream.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration single_utterance_end_time_offset = 14;</code>
     */
    private $single_utterance_end_time_offset = null;
    /**
     * No speech timeout settings for the stream.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration no_speech_timeout = 15;</code>
     */
    private $no_speech_timeout = null;
    /**
     * Speech endpointing timeout settings for the stream.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration endpointing_timeout = 19;</code>
     */
    private $endpointing_timeout = null;
    /**
     * Whether the streaming terminates with an injected text query.
     *
     * Generated from protobuf field <code>bool is_input_text = 16;</code>
     */
    private $is_input_text = false;
    /**
     * Client half close time in terms of input audio duration.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration client_half_close_time_offset = 17;</code>
     */
    private $client_half_close_time_offset = null;
    /**
     * Client half close time in terms of API streaming duration.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration client_half_close_streaming_time_offset = 18;</code>
     */
    private $client_half_close_streaming_time_offset = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $audio_data_chunks
     *           Number of input audio data chunks in streaming requests.
     *     @type \Google\Protobuf\Duration $result_end_time_offset
     *           Time offset of the end of speech utterance relative to the
     *           beginning of the first audio chunk.
     *     @type \Google\Protobuf\Duration $first_audio_duration
     *           Duration of first audio chunk.
     *     @type bool $single_utterance
     *           Whether client used single utterance mode.
     *     @type array<\Google\Protobuf\Duration>|\Google\Protobuf\Internal\RepeatedField $speech_partial_results_end_times
     *           Time offsets of the speech partial results relative to the beginning of
     *           the stream.
     *     @type array<\Google\Protobuf\Duration>|\Google\Protobuf\Internal\RepeatedField $speech_final_results_end_times
     *           Time offsets of the speech final results (is_final=true) relative to the
     *           beginning of the stream.
     *     @type int $partial_responses
     *           Total number of partial responses.
     *     @type int $speaker_id_passive_latency_ms_offset
     *           Time offset of Speaker ID stream close time relative to the Speech stream
     *           close time in milliseconds. Only meaningful for conversations involving
     *           passive verification.
     *     @type bool $bargein_event_triggered
     *           Whether a barge-in event is triggered in this request.
     *     @type bool $speech_single_utterance
     *           Whether speech uses single utterance mode.
     *     @type array<\Google\Protobuf\Duration>|\Google\Protobuf\Internal\RepeatedField $dtmf_partial_results_times
     *           Time offsets of the DTMF partial results relative to the beginning of
     *           the stream.
     *     @type array<\Google\Protobuf\Duration>|\Google\Protobuf\Internal\RepeatedField $dtmf_final_results_times
     *           Time offsets of the DTMF final results relative to the beginning of
     *           the stream.
     *     @type \Google\Protobuf\Duration $single_utterance_end_time_offset
     *           Time offset of the end-of-single-utterance signal relative to the
     *           beginning of the stream.
     *     @type \Google\Protobuf\Duration $no_speech_timeout
     *           No speech timeout settings for the stream.
     *     @type \Google\Protobuf\Duration $endpointing_timeout
     *           Speech endpointing timeout settings for the stream.
     *     @type bool $is_input_text
     *           Whether the streaming terminates with an injected text query.
     *     @type \Google\Protobuf\Duration $client_half_close_time_offset
     *           Client half close time in terms of input audio duration.
     *     @type \Google\Protobuf\Duration $client_half_close_streaming_time_offset
     *           Client half close time in terms of API streaming duration.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Session::initOnce();
        parent::__construct($data);
    }

    /**
     * Number of input audio data chunks in streaming requests.
     *
     * Generated from protobuf field <code>int32 audio_data_chunks = 1;</code>
     * @return int
     */
    public function getAudioDataChunks()
    {
        return $this->audio_data_chunks;
    }

    /**
     * Number of input audio data chunks in streaming requests.
     *
     * Generated from protobuf field <code>int32 audio_data_chunks = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setAudioDataChunks($var)
    {
        GPBUtil::checkInt32($var);
        $this->audio_data_chunks = $var;

        return $this;
    }

    /**
     * Time offset of the end of speech utterance relative to the
     * beginning of the first audio chunk.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration result_end_time_offset = 2;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getResultEndTimeOffset()
    {
        return $this->result_end_time_offset;
    }

    public function hasResultEndTimeOffset()
    {
        return isset($this->result_end_time_offset);
    }

    public function clearResultEndTimeOffset()
    {
        unset($this->result_end_time_offset);
    }

    /**
     * Time offset of the end of speech utterance relative to the
     * beginning of the first audio chunk.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration result_end_time_offset = 2;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setResultEndTimeOffset($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->result_end_time_offset = $var;

        return $this;
    }

    /**
     * Duration of first audio chunk.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration first_audio_duration = 3;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getFirstAudioDuration()
    {
        return $this->first_audio_duration;
    }

    public function hasFirstAudioDuration()
    {
        return isset($this->first_audio_duration);
    }

    public function clearFirstAudioDuration()
    {
        unset($this->first_audio_duration);
    }

    /**
     * Duration of first audio chunk.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration first_audio_duration = 3;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setFirstAudioDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->first_audio_duration = $var;

        return $this;
    }

    /**
     * Whether client used single utterance mode.
     *
     * Generated from protobuf field <code>bool single_utterance = 5;</code>
     * @return bool
     */
    public function getSingleUtterance()
    {
        return $this->single_utterance;
    }

    /**
     * Whether client used single utterance mode.
     *
     * Generated from protobuf field <code>bool single_utterance = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setSingleUtterance($var)
    {
        GPBUtil::checkBool($var);
        $this->single_utterance = $var;

        return $this;
    }

    /**
     * Time offsets of the speech partial results relative to the beginning of
     * the stream.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Duration speech_partial_results_end_times = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSpeechPartialResultsEndTimes()
    {
        return $this->speech_partial_results_end_times;
    }

    /**
     * Time offsets of the speech partial results relative to the beginning of
     * the stream.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Duration speech_partial_results_end_times = 6;</code>
     * @param array<\Google\Protobuf\Duration>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSpeechPartialResultsEndTimes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Duration::class);
        $this->speech_partial_results_end_times = $arr;

        return $this;
    }

    /**
     * Time offsets of the speech final results (is_final=true) relative to the
     * beginning of the stream.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Duration speech_final_results_end_times = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSpeechFinalResultsEndTimes()
    {
        return $this->speech_final_results_end_times;
    }

    /**
     * Time offsets of the speech final results (is_final=true) relative to the
     * beginning of the stream.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Duration speech_final_results_end_times = 7;</code>
     * @param array<\Google\Protobuf\Duration>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSpeechFinalResultsEndTimes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Duration::class);
        $this->speech_final_results_end_times = $arr;

        return $this;
    }

    /**
     * Total number of partial responses.
     *
     * Generated from protobuf field <code>int32 partial_responses = 8;</code>
     * @return int
     */
    public function getPartialResponses()
    {
        return $this->partial_responses;
    }

    /**
     * Total number of partial responses.
     *
     * Generated from protobuf field <code>int32 partial_responses = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setPartialResponses($var)
    {
        GPBUtil::checkInt32($var);
        $this->partial_responses = $var;

        return $this;
    }

    /**
     * Time offset of Speaker ID stream close time relative to the Speech stream
     * close time in milliseconds. Only meaningful for conversations involving
     * passive verification.
     *
     * Generated from protobuf field <code>int32 speaker_id_passive_latency_ms_offset = 9;</code>
     * @return int
     */
    public function getSpeakerIdPassiveLatencyMsOffset()
    {
        return $this->speaker_id_passive_latency_ms_offset;
    }

    /**
     * Time offset of Speaker ID stream close time relative to the Speech stream
     * close time in milliseconds. Only meaningful for conversations involving
     * passive verification.
     *
     * Generated from protobuf field <code>int32 speaker_id_passive_latency_ms_offset = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setSpeakerIdPassiveLatencyMsOffset($var)
    {
        GPBUtil::checkInt32($var);
        $this->speaker_id_passive_latency_ms_offset = $var;

        return $this;
    }

    /**
     * Whether a barge-in event is triggered in this request.
     *
     * Generated from protobuf field <code>bool bargein_event_triggered = 10;</code>
     * @return bool
     */
    public function getBargeinEventTriggered()
    {
        return $this->bargein_event_triggered;
    }

    /**
     * Whether a barge-in event is triggered in this request.
     *
     * Generated from protobuf field <code>bool bargein_event_triggered = 10;</code>
     * @param bool $var
     * @return $this
     */
    public function setBargeinEventTriggered($var)
    {
        GPBUtil::checkBool($var);
        $this->bargein_event_triggered = $var;

        return $this;
    }

    /**
     * Whether speech uses single utterance mode.
     *
     * Generated from protobuf field <code>bool speech_single_utterance = 11;</code>
     * @return bool
     */
    public function getSpeechSingleUtterance()
    {
        return $this->speech_single_utterance;
    }

    /**
     * Whether speech uses single utterance mode.
     *
     * Generated from protobuf field <code>bool speech_single_utterance = 11;</code>
     * @param bool $var
     * @return $this
     */
    public function setSpeechSingleUtterance($var)
    {
        GPBUtil::checkBool($var);
        $this->speech_single_utterance = $var;

        return $this;
    }

    /**
     * Time offsets of the DTMF partial results relative to the beginning of
     * the stream.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Duration dtmf_partial_results_times = 12;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDtmfPartialResultsTimes()
    {
        return $this->dtmf_partial_results_times;
    }

    /**
     * Time offsets of the DTMF partial results relative to the beginning of
     * the stream.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Duration dtmf_partial_results_times = 12;</code>
     * @param array<\Google\Protobuf\Duration>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDtmfPartialResultsTimes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Duration::class);
        $this->dtmf_partial_results_times = $arr;

        return $this;
    }

    /**
     * Time offsets of the DTMF final results relative to the beginning of
     * the stream.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Duration dtmf_final_results_times = 13;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDtmfFinalResultsTimes()
    {
        return $this->dtmf_final_results_times;
    }

    /**
     * Time offsets of the DTMF final results relative to the beginning of
     * the stream.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Duration dtmf_final_results_times = 13;</code>
     * @param array<\Google\Protobuf\Duration>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDtmfFinalResultsTimes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Duration::class);
        $this->dtmf_final_results_times = $arr;

        return $this;
    }

    /**
     * Time offset of the end-of-single-utterance signal relative to the
     * beginning of the stream.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration single_utterance_end_time_offset = 14;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getSingleUtteranceEndTimeOffset()
    {
        return $this->single_utterance_end_time_offset;
    }

    public function hasSingleUtteranceEndTimeOffset()
    {
        return isset($this->single_utterance_end_time_offset);
    }

    public function clearSingleUtteranceEndTimeOffset()
    {
        unset($this->single_utterance_end_time_offset);
    }

    /**
     * Time offset of the end-of-single-utterance signal relative to the
     * beginning of the stream.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration single_utterance_end_time_offset = 14;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setSingleUtteranceEndTimeOffset($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->single_utterance_end_time_offset = $var;

        return $this;
    }

    /**
     * No speech timeout settings for the stream.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration no_speech_timeout = 15;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getNoSpeechTimeout()
    {
        return $this->no_speech_timeout;
    }

    public function hasNoSpeechTimeout()
    {
        return isset($this->no_speech_timeout);
    }

    public function clearNoSpeechTimeout()
    {
        unset($this->no_speech_timeout);
    }

    /**
     * No speech timeout settings for the stream.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration no_speech_timeout = 15;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setNoSpeechTimeout($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->no_speech_timeout = $var;

        return $this;
    }

    /**
     * Speech endpointing timeout settings for the stream.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration endpointing_timeout = 19;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getEndpointingTimeout()
    {
        return $this->endpointing_timeout;
    }

    public function hasEndpointingTimeout()
    {
        return isset($this->endpointing_timeout);
    }

    public function clearEndpointingTimeout()
    {
        unset($this->endpointing_timeout);
    }

    /**
     * Speech endpointing timeout settings for the stream.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration endpointing_timeout = 19;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setEndpointingTimeout($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->endpointing_timeout = $var;

        return $this;
    }

    /**
     * Whether the streaming terminates with an injected text query.
     *
     * Generated from protobuf field <code>bool is_input_text = 16;</code>
     * @return bool
     */
    public function getIsInputText()
    {
        return $this->is_input_text;
    }

    /**
     * Whether the streaming terminates with an injected text query.
     *
     * Generated from protobuf field <code>bool is_input_text = 16;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsInputText($var)
    {
        GPBUtil::checkBool($var);
        $this->is_input_text = $var;

        return $this;
    }

    /**
     * Client half close time in terms of input audio duration.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration client_half_close_time_offset = 17;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getClientHalfCloseTimeOffset()
    {
        return $this->client_half_close_time_offset;
    }

    public function hasClientHalfCloseTimeOffset()
    {
        return isset($this->client_half_close_time_offset);
    }

    public function clearClientHalfCloseTimeOffset()
    {
        unset($this->client_half_close_time_offset);
    }

    /**
     * Client half close time in terms of input audio duration.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration client_half_close_time_offset = 17;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setClientHalfCloseTimeOffset($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->client_half_close_time_offset = $var;

        return $this;
    }

    /**
     * Client half close time in terms of API streaming duration.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration client_half_close_streaming_time_offset = 18;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getClientHalfCloseStreamingTimeOffset()
    {
        return $this->client_half_close_streaming_time_offset;
    }

    public function hasClientHalfCloseStreamingTimeOffset()
    {
        return isset($this->client_half_close_streaming_time_offset);
    }

    public function clearClientHalfCloseStreamingTimeOffset()
    {
        unset($this->client_half_close_streaming_time_offset);
    }

    /**
     * Client half close time in terms of API streaming duration.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration client_half_close_streaming_time_offset = 18;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setClientHalfCloseStreamingTimeOffset($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->client_half_close_streaming_time_offset = $var;

        return $this;
    }

}

