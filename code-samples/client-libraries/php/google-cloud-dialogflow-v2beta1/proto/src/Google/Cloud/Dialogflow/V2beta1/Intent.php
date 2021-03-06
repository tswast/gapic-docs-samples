<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2beta1/intent.proto

namespace Google\Cloud\Dialogflow\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents an intent.
 * Intents convert a number of user expressions or patterns into an action. An
 * action is an extraction of a user command or sentence semantics.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2beta1.Intent</code>
 */
class Intent extends \Google\Protobuf\Internal\Message
{
    /**
     * Required for all methods except `create` (`create` populates the name
     * automatically.
     * The unique identifier of this intent.
     * Format: `projects/<Project ID>/agent/intents/<Intent ID>`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Required. The name of this intent.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     */
    private $display_name = '';
    /**
     * Required. Indicates whether webhooks are enabled for the intent.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.Intent.WebhookState webhook_state = 6;</code>
     */
    private $webhook_state = 0;
    /**
     * Optional. The priority of this intent. Higher numbers represent higher
     * priorities. Zero or negative numbers mean that the intent is disabled.
     *
     * Generated from protobuf field <code>int32 priority = 3;</code>
     */
    private $priority = 0;
    /**
     * Optional. Indicates whether this is a fallback intent.
     *
     * Generated from protobuf field <code>bool is_fallback = 4;</code>
     */
    private $is_fallback = false;
    /**
     * Optional. Indicates whether Machine Learning is enabled for the intent.
     * Note: If `ml_enabled` setting is set to false, then this intent is not
     * taken into account during inference in `ML ONLY` match mode. Also,
     * auto-markup in the UI is turned off.
     * DEPRECATED! Please use `ml_disabled` field instead.
     * NOTE: If both `ml_enabled` and `ml_disabled` are either not set or false,
     * then the default value is determined as follows:
     * - Before April 15th, 2018 the default is:
     *   ml_enabled = false / ml_disabled = true.
     * - After April 15th, 2018 the default is:
     *   ml_enabled = true / ml_disabled = false.
     *
     * Generated from protobuf field <code>bool ml_enabled = 5 [deprecated = true];</code>
     */
    private $ml_enabled = false;
    /**
     * Optional. Indicates whether Machine Learning is disabled for the intent.
     * Note: If `ml_disabled` setting is set to true, then this intent is not
     * taken into account during inference in `ML ONLY` match mode. Also,
     * auto-markup in the UI is turned off.
     *
     * Generated from protobuf field <code>bool ml_disabled = 19;</code>
     */
    private $ml_disabled = false;
    /**
     * Optional. Indicates that this intent ends an interaction. Some integrations
     * (e.g., Actions on Google or Dialogflow phone gateway) use this information
     * to close interaction with an end user. Default is false.
     *
     * Generated from protobuf field <code>bool end_interaction = 21;</code>
     */
    private $end_interaction = false;
    /**
     * Optional. The list of context names required for this intent to be
     * triggered.
     * Format: `projects/<Project ID>/agent/sessions/-/contexts/<Context ID>`.
     *
     * Generated from protobuf field <code>repeated string input_context_names = 7;</code>
     */
    private $input_context_names;
    /**
     * Optional. The collection of event names that trigger the intent.
     * If the collection of input contexts is not empty, all of the contexts must
     * be present in the active user session for an event to trigger this intent.
     *
     * Generated from protobuf field <code>repeated string events = 8;</code>
     */
    private $events;
    /**
     * Optional. The collection of examples/templates that the agent is
     * trained on.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2beta1.Intent.TrainingPhrase training_phrases = 9;</code>
     */
    private $training_phrases;
    /**
     * Optional. The name of the action associated with the intent.
     * Note: The action name must not contain whitespaces.
     *
     * Generated from protobuf field <code>string action = 10;</code>
     */
    private $action = '';
    /**
     * Optional. The collection of contexts that are activated when the intent
     * is matched. Context messages in this collection should not set the
     * parameters field. Setting the `lifespan_count` to 0 will reset the context
     * when the intent is matched.
     * Format: `projects/<Project ID>/agent/sessions/-/contexts/<Context ID>`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2beta1.Context output_contexts = 11;</code>
     */
    private $output_contexts;
    /**
     * Optional. Indicates whether to delete all contexts in the current
     * session when this intent is matched.
     *
     * Generated from protobuf field <code>bool reset_contexts = 12;</code>
     */
    private $reset_contexts = false;
    /**
     * Optional. The collection of parameters associated with the intent.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2beta1.Intent.Parameter parameters = 13;</code>
     */
    private $parameters;
    /**
     * Optional. The collection of rich messages corresponding to the
     * `Response` field in the Dialogflow console.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2beta1.Intent.Message messages = 14;</code>
     */
    private $messages;
    /**
     * Optional. The list of platforms for which the first response will be
     * taken from among the messages assigned to the DEFAULT_PLATFORM.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2beta1.Intent.Message.Platform default_response_platforms = 15;</code>
     */
    private $default_response_platforms;
    /**
     * The unique identifier of the root intent in the chain of followup intents.
     * It identifies the correct followup intents chain for this intent.
     * Format: `projects/<Project ID>/agent/intents/<Intent ID>`.
     *
     * Generated from protobuf field <code>string root_followup_intent_name = 16;</code>
     */
    private $root_followup_intent_name = '';
    /**
     * The unique identifier of the parent intent in the chain of followup
     * intents.
     * It identifies the parent followup intent.
     * Format: `projects/<Project ID>/agent/intents/<Intent ID>`.
     *
     * Generated from protobuf field <code>string parent_followup_intent_name = 17;</code>
     */
    private $parent_followup_intent_name = '';
    /**
     * Optional. Collection of information about all followup intents that have
     * name of this intent as a root_name.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2beta1.Intent.FollowupIntentInfo followup_intent_info = 18;</code>
     */
    private $followup_intent_info;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required for all methods except `create` (`create` populates the name
     *           automatically.
     *           The unique identifier of this intent.
     *           Format: `projects/<Project ID>/agent/intents/<Intent ID>`.
     *     @type string $display_name
     *           Required. The name of this intent.
     *     @type int $webhook_state
     *           Required. Indicates whether webhooks are enabled for the intent.
     *     @type int $priority
     *           Optional. The priority of this intent. Higher numbers represent higher
     *           priorities. Zero or negative numbers mean that the intent is disabled.
     *     @type bool $is_fallback
     *           Optional. Indicates whether this is a fallback intent.
     *     @type bool $ml_enabled
     *           Optional. Indicates whether Machine Learning is enabled for the intent.
     *           Note: If `ml_enabled` setting is set to false, then this intent is not
     *           taken into account during inference in `ML ONLY` match mode. Also,
     *           auto-markup in the UI is turned off.
     *           DEPRECATED! Please use `ml_disabled` field instead.
     *           NOTE: If both `ml_enabled` and `ml_disabled` are either not set or false,
     *           then the default value is determined as follows:
     *           - Before April 15th, 2018 the default is:
     *             ml_enabled = false / ml_disabled = true.
     *           - After April 15th, 2018 the default is:
     *             ml_enabled = true / ml_disabled = false.
     *     @type bool $ml_disabled
     *           Optional. Indicates whether Machine Learning is disabled for the intent.
     *           Note: If `ml_disabled` setting is set to true, then this intent is not
     *           taken into account during inference in `ML ONLY` match mode. Also,
     *           auto-markup in the UI is turned off.
     *     @type bool $end_interaction
     *           Optional. Indicates that this intent ends an interaction. Some integrations
     *           (e.g., Actions on Google or Dialogflow phone gateway) use this information
     *           to close interaction with an end user. Default is false.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $input_context_names
     *           Optional. The list of context names required for this intent to be
     *           triggered.
     *           Format: `projects/<Project ID>/agent/sessions/-/contexts/<Context ID>`.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $events
     *           Optional. The collection of event names that trigger the intent.
     *           If the collection of input contexts is not empty, all of the contexts must
     *           be present in the active user session for an event to trigger this intent.
     *     @type \Google\Cloud\Dialogflow\V2beta1\Intent\TrainingPhrase[]|\Google\Protobuf\Internal\RepeatedField $training_phrases
     *           Optional. The collection of examples/templates that the agent is
     *           trained on.
     *     @type string $action
     *           Optional. The name of the action associated with the intent.
     *           Note: The action name must not contain whitespaces.
     *     @type \Google\Cloud\Dialogflow\V2beta1\Context[]|\Google\Protobuf\Internal\RepeatedField $output_contexts
     *           Optional. The collection of contexts that are activated when the intent
     *           is matched. Context messages in this collection should not set the
     *           parameters field. Setting the `lifespan_count` to 0 will reset the context
     *           when the intent is matched.
     *           Format: `projects/<Project ID>/agent/sessions/-/contexts/<Context ID>`.
     *     @type bool $reset_contexts
     *           Optional. Indicates whether to delete all contexts in the current
     *           session when this intent is matched.
     *     @type \Google\Cloud\Dialogflow\V2beta1\Intent\Parameter[]|\Google\Protobuf\Internal\RepeatedField $parameters
     *           Optional. The collection of parameters associated with the intent.
     *     @type \Google\Cloud\Dialogflow\V2beta1\Intent\Message[]|\Google\Protobuf\Internal\RepeatedField $messages
     *           Optional. The collection of rich messages corresponding to the
     *           `Response` field in the Dialogflow console.
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $default_response_platforms
     *           Optional. The list of platforms for which the first response will be
     *           taken from among the messages assigned to the DEFAULT_PLATFORM.
     *     @type string $root_followup_intent_name
     *           The unique identifier of the root intent in the chain of followup intents.
     *           It identifies the correct followup intents chain for this intent.
     *           Format: `projects/<Project ID>/agent/intents/<Intent ID>`.
     *     @type string $parent_followup_intent_name
     *           The unique identifier of the parent intent in the chain of followup
     *           intents.
     *           It identifies the parent followup intent.
     *           Format: `projects/<Project ID>/agent/intents/<Intent ID>`.
     *     @type \Google\Cloud\Dialogflow\V2beta1\Intent\FollowupIntentInfo[]|\Google\Protobuf\Internal\RepeatedField $followup_intent_info
     *           Optional. Collection of information about all followup intents that have
     *           name of this intent as a root_name.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2Beta1\Intent::initOnce();
        parent::__construct($data);
    }

    /**
     * Required for all methods except `create` (`create` populates the name
     * automatically.
     * The unique identifier of this intent.
     * Format: `projects/<Project ID>/agent/intents/<Intent ID>`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required for all methods except `create` (`create` populates the name
     * automatically.
     * The unique identifier of this intent.
     * Format: `projects/<Project ID>/agent/intents/<Intent ID>`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * Required. The name of this intent.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Required. The name of this intent.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Required. Indicates whether webhooks are enabled for the intent.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.Intent.WebhookState webhook_state = 6;</code>
     * @return int
     */
    public function getWebhookState()
    {
        return $this->webhook_state;
    }

    /**
     * Required. Indicates whether webhooks are enabled for the intent.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.Intent.WebhookState webhook_state = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setWebhookState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dialogflow\V2beta1\Intent_WebhookState::class);
        $this->webhook_state = $var;

        return $this;
    }

    /**
     * Optional. The priority of this intent. Higher numbers represent higher
     * priorities. Zero or negative numbers mean that the intent is disabled.
     *
     * Generated from protobuf field <code>int32 priority = 3;</code>
     * @return int
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Optional. The priority of this intent. Higher numbers represent higher
     * priorities. Zero or negative numbers mean that the intent is disabled.
     *
     * Generated from protobuf field <code>int32 priority = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPriority($var)
    {
        GPBUtil::checkInt32($var);
        $this->priority = $var;

        return $this;
    }

    /**
     * Optional. Indicates whether this is a fallback intent.
     *
     * Generated from protobuf field <code>bool is_fallback = 4;</code>
     * @return bool
     */
    public function getIsFallback()
    {
        return $this->is_fallback;
    }

    /**
     * Optional. Indicates whether this is a fallback intent.
     *
     * Generated from protobuf field <code>bool is_fallback = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsFallback($var)
    {
        GPBUtil::checkBool($var);
        $this->is_fallback = $var;

        return $this;
    }

    /**
     * Optional. Indicates whether Machine Learning is enabled for the intent.
     * Note: If `ml_enabled` setting is set to false, then this intent is not
     * taken into account during inference in `ML ONLY` match mode. Also,
     * auto-markup in the UI is turned off.
     * DEPRECATED! Please use `ml_disabled` field instead.
     * NOTE: If both `ml_enabled` and `ml_disabled` are either not set or false,
     * then the default value is determined as follows:
     * - Before April 15th, 2018 the default is:
     *   ml_enabled = false / ml_disabled = true.
     * - After April 15th, 2018 the default is:
     *   ml_enabled = true / ml_disabled = false.
     *
     * Generated from protobuf field <code>bool ml_enabled = 5 [deprecated = true];</code>
     * @return bool
     */
    public function getMlEnabled()
    {
        return $this->ml_enabled;
    }

    /**
     * Optional. Indicates whether Machine Learning is enabled for the intent.
     * Note: If `ml_enabled` setting is set to false, then this intent is not
     * taken into account during inference in `ML ONLY` match mode. Also,
     * auto-markup in the UI is turned off.
     * DEPRECATED! Please use `ml_disabled` field instead.
     * NOTE: If both `ml_enabled` and `ml_disabled` are either not set or false,
     * then the default value is determined as follows:
     * - Before April 15th, 2018 the default is:
     *   ml_enabled = false / ml_disabled = true.
     * - After April 15th, 2018 the default is:
     *   ml_enabled = true / ml_disabled = false.
     *
     * Generated from protobuf field <code>bool ml_enabled = 5 [deprecated = true];</code>
     * @param bool $var
     * @return $this
     */
    public function setMlEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->ml_enabled = $var;

        return $this;
    }

    /**
     * Optional. Indicates whether Machine Learning is disabled for the intent.
     * Note: If `ml_disabled` setting is set to true, then this intent is not
     * taken into account during inference in `ML ONLY` match mode. Also,
     * auto-markup in the UI is turned off.
     *
     * Generated from protobuf field <code>bool ml_disabled = 19;</code>
     * @return bool
     */
    public function getMlDisabled()
    {
        return $this->ml_disabled;
    }

    /**
     * Optional. Indicates whether Machine Learning is disabled for the intent.
     * Note: If `ml_disabled` setting is set to true, then this intent is not
     * taken into account during inference in `ML ONLY` match mode. Also,
     * auto-markup in the UI is turned off.
     *
     * Generated from protobuf field <code>bool ml_disabled = 19;</code>
     * @param bool $var
     * @return $this
     */
    public function setMlDisabled($var)
    {
        GPBUtil::checkBool($var);
        $this->ml_disabled = $var;

        return $this;
    }

    /**
     * Optional. Indicates that this intent ends an interaction. Some integrations
     * (e.g., Actions on Google or Dialogflow phone gateway) use this information
     * to close interaction with an end user. Default is false.
     *
     * Generated from protobuf field <code>bool end_interaction = 21;</code>
     * @return bool
     */
    public function getEndInteraction()
    {
        return $this->end_interaction;
    }

    /**
     * Optional. Indicates that this intent ends an interaction. Some integrations
     * (e.g., Actions on Google or Dialogflow phone gateway) use this information
     * to close interaction with an end user. Default is false.
     *
     * Generated from protobuf field <code>bool end_interaction = 21;</code>
     * @param bool $var
     * @return $this
     */
    public function setEndInteraction($var)
    {
        GPBUtil::checkBool($var);
        $this->end_interaction = $var;

        return $this;
    }

    /**
     * Optional. The list of context names required for this intent to be
     * triggered.
     * Format: `projects/<Project ID>/agent/sessions/-/contexts/<Context ID>`.
     *
     * Generated from protobuf field <code>repeated string input_context_names = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInputContextNames()
    {
        return $this->input_context_names;
    }

    /**
     * Optional. The list of context names required for this intent to be
     * triggered.
     * Format: `projects/<Project ID>/agent/sessions/-/contexts/<Context ID>`.
     *
     * Generated from protobuf field <code>repeated string input_context_names = 7;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInputContextNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->input_context_names = $arr;

        return $this;
    }

    /**
     * Optional. The collection of event names that trigger the intent.
     * If the collection of input contexts is not empty, all of the contexts must
     * be present in the active user session for an event to trigger this intent.
     *
     * Generated from protobuf field <code>repeated string events = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * Optional. The collection of event names that trigger the intent.
     * If the collection of input contexts is not empty, all of the contexts must
     * be present in the active user session for an event to trigger this intent.
     *
     * Generated from protobuf field <code>repeated string events = 8;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEvents($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->events = $arr;

        return $this;
    }

    /**
     * Optional. The collection of examples/templates that the agent is
     * trained on.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2beta1.Intent.TrainingPhrase training_phrases = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTrainingPhrases()
    {
        return $this->training_phrases;
    }

    /**
     * Optional. The collection of examples/templates that the agent is
     * trained on.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2beta1.Intent.TrainingPhrase training_phrases = 9;</code>
     * @param \Google\Cloud\Dialogflow\V2beta1\Intent\TrainingPhrase[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTrainingPhrases($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\V2beta1\Intent\TrainingPhrase::class);
        $this->training_phrases = $arr;

        return $this;
    }

    /**
     * Optional. The name of the action associated with the intent.
     * Note: The action name must not contain whitespaces.
     *
     * Generated from protobuf field <code>string action = 10;</code>
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Optional. The name of the action associated with the intent.
     * Note: The action name must not contain whitespaces.
     *
     * Generated from protobuf field <code>string action = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setAction($var)
    {
        GPBUtil::checkString($var, True);
        $this->action = $var;

        return $this;
    }

    /**
     * Optional. The collection of contexts that are activated when the intent
     * is matched. Context messages in this collection should not set the
     * parameters field. Setting the `lifespan_count` to 0 will reset the context
     * when the intent is matched.
     * Format: `projects/<Project ID>/agent/sessions/-/contexts/<Context ID>`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2beta1.Context output_contexts = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOutputContexts()
    {
        return $this->output_contexts;
    }

    /**
     * Optional. The collection of contexts that are activated when the intent
     * is matched. Context messages in this collection should not set the
     * parameters field. Setting the `lifespan_count` to 0 will reset the context
     * when the intent is matched.
     * Format: `projects/<Project ID>/agent/sessions/-/contexts/<Context ID>`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2beta1.Context output_contexts = 11;</code>
     * @param \Google\Cloud\Dialogflow\V2beta1\Context[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOutputContexts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\V2beta1\Context::class);
        $this->output_contexts = $arr;

        return $this;
    }

    /**
     * Optional. Indicates whether to delete all contexts in the current
     * session when this intent is matched.
     *
     * Generated from protobuf field <code>bool reset_contexts = 12;</code>
     * @return bool
     */
    public function getResetContexts()
    {
        return $this->reset_contexts;
    }

    /**
     * Optional. Indicates whether to delete all contexts in the current
     * session when this intent is matched.
     *
     * Generated from protobuf field <code>bool reset_contexts = 12;</code>
     * @param bool $var
     * @return $this
     */
    public function setResetContexts($var)
    {
        GPBUtil::checkBool($var);
        $this->reset_contexts = $var;

        return $this;
    }

    /**
     * Optional. The collection of parameters associated with the intent.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2beta1.Intent.Parameter parameters = 13;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Optional. The collection of parameters associated with the intent.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2beta1.Intent.Parameter parameters = 13;</code>
     * @param \Google\Cloud\Dialogflow\V2beta1\Intent\Parameter[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setParameters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\V2beta1\Intent\Parameter::class);
        $this->parameters = $arr;

        return $this;
    }

    /**
     * Optional. The collection of rich messages corresponding to the
     * `Response` field in the Dialogflow console.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2beta1.Intent.Message messages = 14;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * Optional. The collection of rich messages corresponding to the
     * `Response` field in the Dialogflow console.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2beta1.Intent.Message messages = 14;</code>
     * @param \Google\Cloud\Dialogflow\V2beta1\Intent\Message[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMessages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\V2beta1\Intent\Message::class);
        $this->messages = $arr;

        return $this;
    }

    /**
     * Optional. The list of platforms for which the first response will be
     * taken from among the messages assigned to the DEFAULT_PLATFORM.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2beta1.Intent.Message.Platform default_response_platforms = 15;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDefaultResponsePlatforms()
    {
        return $this->default_response_platforms;
    }

    /**
     * Optional. The list of platforms for which the first response will be
     * taken from among the messages assigned to the DEFAULT_PLATFORM.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2beta1.Intent.Message.Platform default_response_platforms = 15;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDefaultResponsePlatforms($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\Dialogflow\V2beta1\Intent\Message\Platform::class);
        $this->default_response_platforms = $arr;

        return $this;
    }

    /**
     * The unique identifier of the root intent in the chain of followup intents.
     * It identifies the correct followup intents chain for this intent.
     * Format: `projects/<Project ID>/agent/intents/<Intent ID>`.
     *
     * Generated from protobuf field <code>string root_followup_intent_name = 16;</code>
     * @return string
     */
    public function getRootFollowupIntentName()
    {
        return $this->root_followup_intent_name;
    }

    /**
     * The unique identifier of the root intent in the chain of followup intents.
     * It identifies the correct followup intents chain for this intent.
     * Format: `projects/<Project ID>/agent/intents/<Intent ID>`.
     *
     * Generated from protobuf field <code>string root_followup_intent_name = 16;</code>
     * @param string $var
     * @return $this
     */
    public function setRootFollowupIntentName($var)
    {
        GPBUtil::checkString($var, True);
        $this->root_followup_intent_name = $var;

        return $this;
    }

    /**
     * The unique identifier of the parent intent in the chain of followup
     * intents.
     * It identifies the parent followup intent.
     * Format: `projects/<Project ID>/agent/intents/<Intent ID>`.
     *
     * Generated from protobuf field <code>string parent_followup_intent_name = 17;</code>
     * @return string
     */
    public function getParentFollowupIntentName()
    {
        return $this->parent_followup_intent_name;
    }

    /**
     * The unique identifier of the parent intent in the chain of followup
     * intents.
     * It identifies the parent followup intent.
     * Format: `projects/<Project ID>/agent/intents/<Intent ID>`.
     *
     * Generated from protobuf field <code>string parent_followup_intent_name = 17;</code>
     * @param string $var
     * @return $this
     */
    public function setParentFollowupIntentName($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent_followup_intent_name = $var;

        return $this;
    }

    /**
     * Optional. Collection of information about all followup intents that have
     * name of this intent as a root_name.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2beta1.Intent.FollowupIntentInfo followup_intent_info = 18;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFollowupIntentInfo()
    {
        return $this->followup_intent_info;
    }

    /**
     * Optional. Collection of information about all followup intents that have
     * name of this intent as a root_name.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2beta1.Intent.FollowupIntentInfo followup_intent_info = 18;</code>
     * @param \Google\Cloud\Dialogflow\V2beta1\Intent\FollowupIntentInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFollowupIntentInfo($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\V2beta1\Intent\FollowupIntentInfo::class);
        $this->followup_intent_info = $arr;

        return $this;
    }

}

