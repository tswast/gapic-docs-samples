<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2beta1/knowledge_base.proto

namespace Google\Cloud\Dialogflow\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents knowledge base resource.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2beta1.KnowledgeBase</code>
 */
class KnowledgeBase extends \Google\Protobuf\Internal\Message
{
    /**
     * The knowledge base resource name.
     * The name must be empty when creating a knowledge base.
     * Format: `projects/<Project ID>/knowledgeBases/<Knowledge Base ID>`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Required. The display name of the knowledge base. The name must be 1024
     * bytes or less; otherwise, the creation request fails.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     */
    private $display_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The knowledge base resource name.
     *           The name must be empty when creating a knowledge base.
     *           Format: `projects/<Project ID>/knowledgeBases/<Knowledge Base ID>`.
     *     @type string $display_name
     *           Required. The display name of the knowledge base. The name must be 1024
     *           bytes or less; otherwise, the creation request fails.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2Beta1\KnowledgeBase::initOnce();
        parent::__construct($data);
    }

    /**
     * The knowledge base resource name.
     * The name must be empty when creating a knowledge base.
     * Format: `projects/<Project ID>/knowledgeBases/<Knowledge Base ID>`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The knowledge base resource name.
     * The name must be empty when creating a knowledge base.
     * Format: `projects/<Project ID>/knowledgeBases/<Knowledge Base ID>`.
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
     * Required. The display name of the knowledge base. The name must be 1024
     * bytes or less; otherwise, the creation request fails.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Required. The display name of the knowledge base. The name must be 1024
     * bytes or less; otherwise, the creation request fails.
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

}

