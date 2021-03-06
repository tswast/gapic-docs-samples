<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2beta1/webhook.proto

namespace Google\Cloud\Dialogflow\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents the contents of the original request that was passed to
 * the `[Streaming]DetectIntent` call.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2beta1.OriginalDetectIntentRequest</code>
 */
class OriginalDetectIntentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The source of this request, e.g., `google`, `facebook`, `slack`. It is set
     * by Dialogflow-owned servers.
     *
     * Generated from protobuf field <code>string source = 1;</code>
     */
    private $source = '';
    /**
     * Optional. The version of the protocol used for this request.
     * This field is AoG-specific.
     *
     * Generated from protobuf field <code>string version = 2;</code>
     */
    private $version = '';
    /**
     * Optional. This field is set to the value of `QueryParameters.payload` field
     * passed in the request.
     * This field is used for the telephony gateway. It should have a
     * structure similar to this JSON message:
     * <pre>{
     *  "telephony": {
     *    "caller_id": "+18558363987"
     *  }
     * }</pre>
     * Note: The caller ID field (`caller_id`) will be in
     * [E.164 format](https://en.wikipedia.org/wiki/E.164) and is only supported
     * for Enterprise Edition and not for Standard Edition agents. When the
     * telephony gateway is used with a standard tier agent the `caller_id` field
     * above will have a value of `REDACTED_IN_STANDARD_TIER_AGENT`.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct payload = 3;</code>
     */
    private $payload = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $source
     *           The source of this request, e.g., `google`, `facebook`, `slack`. It is set
     *           by Dialogflow-owned servers.
     *     @type string $version
     *           Optional. The version of the protocol used for this request.
     *           This field is AoG-specific.
     *     @type \Google\Protobuf\Struct $payload
     *           Optional. This field is set to the value of `QueryParameters.payload` field
     *           passed in the request.
     *           This field is used for the telephony gateway. It should have a
     *           structure similar to this JSON message:
     *           <pre>{
     *            "telephony": {
     *              "caller_id": "+18558363987"
     *            }
     *           }</pre>
     *           Note: The caller ID field (`caller_id`) will be in
     *           [E.164 format](https://en.wikipedia.org/wiki/E.164) and is only supported
     *           for Enterprise Edition and not for Standard Edition agents. When the
     *           telephony gateway is used with a standard tier agent the `caller_id` field
     *           above will have a value of `REDACTED_IN_STANDARD_TIER_AGENT`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2Beta1\Webhook::initOnce();
        parent::__construct($data);
    }

    /**
     * The source of this request, e.g., `google`, `facebook`, `slack`. It is set
     * by Dialogflow-owned servers.
     *
     * Generated from protobuf field <code>string source = 1;</code>
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * The source of this request, e.g., `google`, `facebook`, `slack`. It is set
     * by Dialogflow-owned servers.
     *
     * Generated from protobuf field <code>string source = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSource($var)
    {
        GPBUtil::checkString($var, True);
        $this->source = $var;

        return $this;
    }

    /**
     * Optional. The version of the protocol used for this request.
     * This field is AoG-specific.
     *
     * Generated from protobuf field <code>string version = 2;</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Optional. The version of the protocol used for this request.
     * This field is AoG-specific.
     *
     * Generated from protobuf field <code>string version = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;

        return $this;
    }

    /**
     * Optional. This field is set to the value of `QueryParameters.payload` field
     * passed in the request.
     * This field is used for the telephony gateway. It should have a
     * structure similar to this JSON message:
     * <pre>{
     *  "telephony": {
     *    "caller_id": "+18558363987"
     *  }
     * }</pre>
     * Note: The caller ID field (`caller_id`) will be in
     * [E.164 format](https://en.wikipedia.org/wiki/E.164) and is only supported
     * for Enterprise Edition and not for Standard Edition agents. When the
     * telephony gateway is used with a standard tier agent the `caller_id` field
     * above will have a value of `REDACTED_IN_STANDARD_TIER_AGENT`.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct payload = 3;</code>
     * @return \Google\Protobuf\Struct
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * Optional. This field is set to the value of `QueryParameters.payload` field
     * passed in the request.
     * This field is used for the telephony gateway. It should have a
     * structure similar to this JSON message:
     * <pre>{
     *  "telephony": {
     *    "caller_id": "+18558363987"
     *  }
     * }</pre>
     * Note: The caller ID field (`caller_id`) will be in
     * [E.164 format](https://en.wikipedia.org/wiki/E.164) and is only supported
     * for Enterprise Edition and not for Standard Edition agents. When the
     * telephony gateway is used with a standard tier agent the `caller_id` field
     * above will have a value of `REDACTED_IN_STANDARD_TIER_AGENT`.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct payload = 3;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setPayload($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->payload = $var;

        return $this;
    }

}

