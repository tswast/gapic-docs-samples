<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2beta1/knowledge_base.proto

namespace Google\Cloud\Dialogflow\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [KnowledgeBase.GetDocument][].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2beta1.GetKnowledgeBaseRequest</code>
 */
class GetKnowledgeBaseRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the knowledge base to retrieve.
     * Format `projects/<Project ID>/knowledgeBases/<Knowledge Base ID>`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the knowledge base to retrieve.
     *           Format `projects/<Project ID>/knowledgeBases/<Knowledge Base ID>`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2Beta1\KnowledgeBase::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the knowledge base to retrieve.
     * Format `projects/<Project ID>/knowledgeBases/<Knowledge Base ID>`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the knowledge base to retrieve.
     * Format `projects/<Project ID>/knowledgeBases/<Knowledge Base ID>`.
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

}

