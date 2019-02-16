<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2beta1/session.proto

namespace Google\Cloud\Dialogflow\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request to detect user's intent.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2beta1.DetectIntentRequest</code>
 */
class DetectIntentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the session this query is sent to. Format:
     * `projects/<Project ID>/agent/sessions/<Session ID>`, or
     * `projects/<Project ID>/agent/environments/<Environment ID>/users/<User
     * ID>/sessions/<Session ID>`. If `Environment ID` is not specified, we assume
     * default 'draft' environment. If `User ID` is not specified, we are using
     * "-". It’s up to the API caller to choose an appropriate `Session ID` and
     * `User Id`. They can be a random numbers or some type of user and session
     * identifiers (preferably hashed). The length of the `Session ID` and
     * `User ID` must not exceed 36 characters.
     *
     * Generated from protobuf field <code>string session = 1;</code>
     */
    private $session = '';
    /**
     * Optional. The parameters of this query.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.QueryParameters query_params = 2;</code>
     */
    private $query_params = null;
    /**
     * Required. The input specification. It can be set to:
     * 1.  an audio config
     *     which instructs the speech recognizer how to process the speech audio,
     * 2.  a conversational query in the form of text, or
     * 3.  an event that specifies which intent to trigger.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.QueryInput query_input = 3;</code>
     */
    private $query_input = null;
    /**
     * Optional. Instructs the speech synthesizer how to generate the output
     * audio. If this field is not set and agent-level speech synthesizer is not
     * configured, no output audio is generated.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.OutputAudioConfig output_audio_config = 4;</code>
     */
    private $output_audio_config = null;
    /**
     * Optional. The natural language speech audio to be processed. This field
     * should be populated iff `query_input` is set to an input audio config.
     * A single request can contain up to 1 minute of speech audio data.
     *
     * Generated from protobuf field <code>bytes input_audio = 5;</code>
     */
    private $input_audio = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $session
     *           Required. The name of the session this query is sent to. Format:
     *           `projects/<Project ID>/agent/sessions/<Session ID>`, or
     *           `projects/<Project ID>/agent/environments/<Environment ID>/users/<User
     *           ID>/sessions/<Session ID>`. If `Environment ID` is not specified, we assume
     *           default 'draft' environment. If `User ID` is not specified, we are using
     *           "-". It’s up to the API caller to choose an appropriate `Session ID` and
     *           `User Id`. They can be a random numbers or some type of user and session
     *           identifiers (preferably hashed). The length of the `Session ID` and
     *           `User ID` must not exceed 36 characters.
     *     @type \Google\Cloud\Dialogflow\V2beta1\QueryParameters $query_params
     *           Optional. The parameters of this query.
     *     @type \Google\Cloud\Dialogflow\V2beta1\QueryInput $query_input
     *           Required. The input specification. It can be set to:
     *           1.  an audio config
     *               which instructs the speech recognizer how to process the speech audio,
     *           2.  a conversational query in the form of text, or
     *           3.  an event that specifies which intent to trigger.
     *     @type \Google\Cloud\Dialogflow\V2beta1\OutputAudioConfig $output_audio_config
     *           Optional. Instructs the speech synthesizer how to generate the output
     *           audio. If this field is not set and agent-level speech synthesizer is not
     *           configured, no output audio is generated.
     *     @type string $input_audio
     *           Optional. The natural language speech audio to be processed. This field
     *           should be populated iff `query_input` is set to an input audio config.
     *           A single request can contain up to 1 minute of speech audio data.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2Beta1\Session::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the session this query is sent to. Format:
     * `projects/<Project ID>/agent/sessions/<Session ID>`, or
     * `projects/<Project ID>/agent/environments/<Environment ID>/users/<User
     * ID>/sessions/<Session ID>`. If `Environment ID` is not specified, we assume
     * default 'draft' environment. If `User ID` is not specified, we are using
     * "-". It’s up to the API caller to choose an appropriate `Session ID` and
     * `User Id`. They can be a random numbers or some type of user and session
     * identifiers (preferably hashed). The length of the `Session ID` and
     * `User ID` must not exceed 36 characters.
     *
     * Generated from protobuf field <code>string session = 1;</code>
     * @return string
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * Required. The name of the session this query is sent to. Format:
     * `projects/<Project ID>/agent/sessions/<Session ID>`, or
     * `projects/<Project ID>/agent/environments/<Environment ID>/users/<User
     * ID>/sessions/<Session ID>`. If `Environment ID` is not specified, we assume
     * default 'draft' environment. If `User ID` is not specified, we are using
     * "-". It’s up to the API caller to choose an appropriate `Session ID` and
     * `User Id`. They can be a random numbers or some type of user and session
     * identifiers (preferably hashed). The length of the `Session ID` and
     * `User ID` must not exceed 36 characters.
     *
     * Generated from protobuf field <code>string session = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSession($var)
    {
        GPBUtil::checkString($var, True);
        $this->session = $var;

        return $this;
    }

    /**
     * Optional. The parameters of this query.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.QueryParameters query_params = 2;</code>
     * @return \Google\Cloud\Dialogflow\V2beta1\QueryParameters
     */
    public function getQueryParams()
    {
        return $this->query_params;
    }

    /**
     * Optional. The parameters of this query.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.QueryParameters query_params = 2;</code>
     * @param \Google\Cloud\Dialogflow\V2beta1\QueryParameters $var
     * @return $this
     */
    public function setQueryParams($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2beta1\QueryParameters::class);
        $this->query_params = $var;

        return $this;
    }

    /**
     * Required. The input specification. It can be set to:
     * 1.  an audio config
     *     which instructs the speech recognizer how to process the speech audio,
     * 2.  a conversational query in the form of text, or
     * 3.  an event that specifies which intent to trigger.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.QueryInput query_input = 3;</code>
     * @return \Google\Cloud\Dialogflow\V2beta1\QueryInput
     */
    public function getQueryInput()
    {
        return $this->query_input;
    }

    /**
     * Required. The input specification. It can be set to:
     * 1.  an audio config
     *     which instructs the speech recognizer how to process the speech audio,
     * 2.  a conversational query in the form of text, or
     * 3.  an event that specifies which intent to trigger.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.QueryInput query_input = 3;</code>
     * @param \Google\Cloud\Dialogflow\V2beta1\QueryInput $var
     * @return $this
     */
    public function setQueryInput($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2beta1\QueryInput::class);
        $this->query_input = $var;

        return $this;
    }

    /**
     * Optional. Instructs the speech synthesizer how to generate the output
     * audio. If this field is not set and agent-level speech synthesizer is not
     * configured, no output audio is generated.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.OutputAudioConfig output_audio_config = 4;</code>
     * @return \Google\Cloud\Dialogflow\V2beta1\OutputAudioConfig
     */
    public function getOutputAudioConfig()
    {
        return $this->output_audio_config;
    }

    /**
     * Optional. Instructs the speech synthesizer how to generate the output
     * audio. If this field is not set and agent-level speech synthesizer is not
     * configured, no output audio is generated.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.OutputAudioConfig output_audio_config = 4;</code>
     * @param \Google\Cloud\Dialogflow\V2beta1\OutputAudioConfig $var
     * @return $this
     */
    public function setOutputAudioConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2beta1\OutputAudioConfig::class);
        $this->output_audio_config = $var;

        return $this;
    }

    /**
     * Optional. The natural language speech audio to be processed. This field
     * should be populated iff `query_input` is set to an input audio config.
     * A single request can contain up to 1 minute of speech audio data.
     *
     * Generated from protobuf field <code>bytes input_audio = 5;</code>
     * @return string
     */
    public function getInputAudio()
    {
        return $this->input_audio;
    }

    /**
     * Optional. The natural language speech audio to be processed. This field
     * should be populated iff `query_input` is set to an input audio config.
     * A single request can contain up to 1 minute of speech audio data.
     *
     * Generated from protobuf field <code>bytes input_audio = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setInputAudio($var)
    {
        GPBUtil::checkString($var, False);
        $this->input_audio = $var;

        return $this;
    }

}

