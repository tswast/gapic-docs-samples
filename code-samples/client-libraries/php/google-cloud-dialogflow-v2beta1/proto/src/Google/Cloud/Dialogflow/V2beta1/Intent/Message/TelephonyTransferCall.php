<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2beta1/intent.proto

namespace Google\Cloud\Dialogflow\V2beta1\Intent\Message;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Transfers the call in Telephony Gateway.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2beta1.Intent.Message.TelephonyTransferCall</code>
 */
class TelephonyTransferCall extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The phone number to transfer the call to
     * in [E.164 format](https://en.wikipedia.org/wiki/E.164).
     * We currently only allow transferring to US numbers (+1xxxyyyzzzz).
     *
     * Generated from protobuf field <code>string phone_number = 1;</code>
     */
    private $phone_number = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $phone_number
     *           Required. The phone number to transfer the call to
     *           in [E.164 format](https://en.wikipedia.org/wiki/E.164).
     *           We currently only allow transferring to US numbers (+1xxxyyyzzzz).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2Beta1\Intent::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The phone number to transfer the call to
     * in [E.164 format](https://en.wikipedia.org/wiki/E.164).
     * We currently only allow transferring to US numbers (+1xxxyyyzzzz).
     *
     * Generated from protobuf field <code>string phone_number = 1;</code>
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phone_number;
    }

    /**
     * Required. The phone number to transfer the call to
     * in [E.164 format](https://en.wikipedia.org/wiki/E.164).
     * We currently only allow transferring to US numbers (+1xxxyyyzzzz).
     *
     * Generated from protobuf field <code>string phone_number = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPhoneNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->phone_number = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TelephonyTransferCall::class, \Google\Cloud\Dialogflow\V2beta1\Intent_Message_TelephonyTransferCall::class);

