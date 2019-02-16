<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2beta1/audio_config.proto

namespace Google\Cloud\Dialogflow\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Instructs the speech synthesizer how to generate the output audio content.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2beta1.OutputAudioConfig</code>
 */
class OutputAudioConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Audio encoding of the synthesized audio content.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.OutputAudioEncoding audio_encoding = 1;</code>
     */
    private $audio_encoding = 0;
    /**
     * Optional. The synthesis sample rate (in hertz) for this audio. If not
     * provided, then the synthesizer will use the default sample rate based on
     * the audio encoding. If this is different from the voice's natural sample
     * rate, then the synthesizer will honor this request by converting to the
     * desired sample rate (which might result in worse audio quality).
     *
     * Generated from protobuf field <code>int32 sample_rate_hertz = 2;</code>
     */
    private $sample_rate_hertz = 0;
    /**
     * Optional. Configuration of how speech should be synthesized.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.SynthesizeSpeechConfig synthesize_speech_config = 3;</code>
     */
    private $synthesize_speech_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $audio_encoding
     *           Required. Audio encoding of the synthesized audio content.
     *     @type int $sample_rate_hertz
     *           Optional. The synthesis sample rate (in hertz) for this audio. If not
     *           provided, then the synthesizer will use the default sample rate based on
     *           the audio encoding. If this is different from the voice's natural sample
     *           rate, then the synthesizer will honor this request by converting to the
     *           desired sample rate (which might result in worse audio quality).
     *     @type \Google\Cloud\Dialogflow\V2beta1\SynthesizeSpeechConfig $synthesize_speech_config
     *           Optional. Configuration of how speech should be synthesized.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2Beta1\AudioConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Audio encoding of the synthesized audio content.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.OutputAudioEncoding audio_encoding = 1;</code>
     * @return int
     */
    public function getAudioEncoding()
    {
        return $this->audio_encoding;
    }

    /**
     * Required. Audio encoding of the synthesized audio content.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.OutputAudioEncoding audio_encoding = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setAudioEncoding($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dialogflow\V2beta1\OutputAudioEncoding::class);
        $this->audio_encoding = $var;

        return $this;
    }

    /**
     * Optional. The synthesis sample rate (in hertz) for this audio. If not
     * provided, then the synthesizer will use the default sample rate based on
     * the audio encoding. If this is different from the voice's natural sample
     * rate, then the synthesizer will honor this request by converting to the
     * desired sample rate (which might result in worse audio quality).
     *
     * Generated from protobuf field <code>int32 sample_rate_hertz = 2;</code>
     * @return int
     */
    public function getSampleRateHertz()
    {
        return $this->sample_rate_hertz;
    }

    /**
     * Optional. The synthesis sample rate (in hertz) for this audio. If not
     * provided, then the synthesizer will use the default sample rate based on
     * the audio encoding. If this is different from the voice's natural sample
     * rate, then the synthesizer will honor this request by converting to the
     * desired sample rate (which might result in worse audio quality).
     *
     * Generated from protobuf field <code>int32 sample_rate_hertz = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setSampleRateHertz($var)
    {
        GPBUtil::checkInt32($var);
        $this->sample_rate_hertz = $var;

        return $this;
    }

    /**
     * Optional. Configuration of how speech should be synthesized.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.SynthesizeSpeechConfig synthesize_speech_config = 3;</code>
     * @return \Google\Cloud\Dialogflow\V2beta1\SynthesizeSpeechConfig
     */
    public function getSynthesizeSpeechConfig()
    {
        return $this->synthesize_speech_config;
    }

    /**
     * Optional. Configuration of how speech should be synthesized.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.SynthesizeSpeechConfig synthesize_speech_config = 3;</code>
     * @param \Google\Cloud\Dialogflow\V2beta1\SynthesizeSpeechConfig $var
     * @return $this
     */
    public function setSynthesizeSpeechConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2beta1\SynthesizeSpeechConfig::class);
        $this->synthesize_speech_config = $var;

        return $this;
    }

}
