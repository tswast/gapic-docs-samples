<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2beta1/intent.proto

namespace Google\Cloud\Dialogflow\V2beta1\Intent\TrainingPhrase;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a part of a training phrase.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2beta1.Intent.TrainingPhrase.Part</code>
 */
class Part extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The text corresponding to the example or template,
     * if there are no annotations. For
     * annotated examples, it is the text for one of the example's parts.
     *
     * Generated from protobuf field <code>string text = 1;</code>
     */
    private $text = '';
    /**
     * Optional. The entity type name prefixed with `&#64;`. This field is
     * required for the annotated part of the text and applies only to
     * examples.
     *
     * Generated from protobuf field <code>string entity_type = 2;</code>
     */
    private $entity_type = '';
    /**
     * Optional. The parameter name for the value extracted from the
     * annotated part of the example.
     *
     * Generated from protobuf field <code>string alias = 3;</code>
     */
    private $alias = '';
    /**
     * Optional. Indicates whether the text was manually annotated by the
     * developer.
     *
     * Generated from protobuf field <code>bool user_defined = 4;</code>
     */
    private $user_defined = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $text
     *           Required. The text corresponding to the example or template,
     *           if there are no annotations. For
     *           annotated examples, it is the text for one of the example's parts.
     *     @type string $entity_type
     *           Optional. The entity type name prefixed with `&#64;`. This field is
     *           required for the annotated part of the text and applies only to
     *           examples.
     *     @type string $alias
     *           Optional. The parameter name for the value extracted from the
     *           annotated part of the example.
     *     @type bool $user_defined
     *           Optional. Indicates whether the text was manually annotated by the
     *           developer.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2Beta1\Intent::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The text corresponding to the example or template,
     * if there are no annotations. For
     * annotated examples, it is the text for one of the example's parts.
     *
     * Generated from protobuf field <code>string text = 1;</code>
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Required. The text corresponding to the example or template,
     * if there are no annotations. For
     * annotated examples, it is the text for one of the example's parts.
     *
     * Generated from protobuf field <code>string text = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkString($var, True);
        $this->text = $var;

        return $this;
    }

    /**
     * Optional. The entity type name prefixed with `&#64;`. This field is
     * required for the annotated part of the text and applies only to
     * examples.
     *
     * Generated from protobuf field <code>string entity_type = 2;</code>
     * @return string
     */
    public function getEntityType()
    {
        return $this->entity_type;
    }

    /**
     * Optional. The entity type name prefixed with `&#64;`. This field is
     * required for the annotated part of the text and applies only to
     * examples.
     *
     * Generated from protobuf field <code>string entity_type = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setEntityType($var)
    {
        GPBUtil::checkString($var, True);
        $this->entity_type = $var;

        return $this;
    }

    /**
     * Optional. The parameter name for the value extracted from the
     * annotated part of the example.
     *
     * Generated from protobuf field <code>string alias = 3;</code>
     * @return string
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Optional. The parameter name for the value extracted from the
     * annotated part of the example.
     *
     * Generated from protobuf field <code>string alias = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setAlias($var)
    {
        GPBUtil::checkString($var, True);
        $this->alias = $var;

        return $this;
    }

    /**
     * Optional. Indicates whether the text was manually annotated by the
     * developer.
     *
     * Generated from protobuf field <code>bool user_defined = 4;</code>
     * @return bool
     */
    public function getUserDefined()
    {
        return $this->user_defined;
    }

    /**
     * Optional. Indicates whether the text was manually annotated by the
     * developer.
     *
     * Generated from protobuf field <code>bool user_defined = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setUserDefined($var)
    {
        GPBUtil::checkBool($var);
        $this->user_defined = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Part::class, \Google\Cloud\Dialogflow\V2beta1\Intent_TrainingPhrase_Part::class);
