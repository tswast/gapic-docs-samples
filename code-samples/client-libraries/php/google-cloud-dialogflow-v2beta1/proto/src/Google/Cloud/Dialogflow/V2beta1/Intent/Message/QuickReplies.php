<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2beta1/intent.proto

namespace Google\Cloud\Dialogflow\V2beta1\Intent\Message;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The quick replies response message.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2beta1.Intent.Message.QuickReplies</code>
 */
class QuickReplies extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The title of the collection of quick replies.
     *
     * Generated from protobuf field <code>string title = 1;</code>
     */
    private $title = '';
    /**
     * Optional. The collection of quick replies.
     *
     * Generated from protobuf field <code>repeated string quick_replies = 2;</code>
     */
    private $quick_replies;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $title
     *           Optional. The title of the collection of quick replies.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $quick_replies
     *           Optional. The collection of quick replies.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2Beta1\Intent::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The title of the collection of quick replies.
     *
     * Generated from protobuf field <code>string title = 1;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Optional. The title of the collection of quick replies.
     *
     * Generated from protobuf field <code>string title = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

    /**
     * Optional. The collection of quick replies.
     *
     * Generated from protobuf field <code>repeated string quick_replies = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getQuickReplies()
    {
        return $this->quick_replies;
    }

    /**
     * Optional. The collection of quick replies.
     *
     * Generated from protobuf field <code>repeated string quick_replies = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setQuickReplies($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->quick_replies = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(QuickReplies::class, \Google\Cloud\Dialogflow\V2beta1\Intent_Message_QuickReplies::class);

