<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2beta1/document.proto

namespace Google\Cloud\Dialogflow\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A document resource.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2beta1.Document</code>
 */
class Document extends \Google\Protobuf\Internal\Message
{
    /**
     * The document resource name.
     * The name must be empty when creating a document.
     * Format: `projects/<Project ID>/knowledgeBases/<Knowledge Base
     * ID>/documents/<Document ID>`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Required. The display name of the document. The name must be 1024 bytes or
     * less; otherwise, the creation request fails.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     */
    private $display_name = '';
    /**
     * Required. The MIME type of this document.
     *
     * Generated from protobuf field <code>string mime_type = 3;</code>
     */
    private $mime_type = '';
    /**
     * Required. The knowledge type of document content.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2beta1.Document.KnowledgeType knowledge_types = 4;</code>
     */
    private $knowledge_types;
    protected $source;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The document resource name.
     *           The name must be empty when creating a document.
     *           Format: `projects/<Project ID>/knowledgeBases/<Knowledge Base
     *           ID>/documents/<Document ID>`.
     *     @type string $display_name
     *           Required. The display name of the document. The name must be 1024 bytes or
     *           less; otherwise, the creation request fails.
     *     @type string $mime_type
     *           Required. The MIME type of this document.
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $knowledge_types
     *           Required. The knowledge type of document content.
     *     @type string $content_uri
     *           The URI where the file content is located.
     *           For documents stored in Google Cloud Storage, these URIs must have
     *           the form `gs://<bucket-name>/<object-name>`.
     *           NOTE: External URLs must correspond to public webpages, i.e., they must
     *           be indexed by Google Search. In particular, URLs for showing documents in
     *           Google Cloud Storage (i.e. the URL in your browser) are not supported.
     *           Instead use the `gs://` format URI described above.
     *     @type string $content
     *           The raw content of the document. This field is only permitted for
     *           EXTRACTIVE_QA and FAQ knowledge types.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2Beta1\Document::initOnce();
        parent::__construct($data);
    }

    /**
     * The document resource name.
     * The name must be empty when creating a document.
     * Format: `projects/<Project ID>/knowledgeBases/<Knowledge Base
     * ID>/documents/<Document ID>`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The document resource name.
     * The name must be empty when creating a document.
     * Format: `projects/<Project ID>/knowledgeBases/<Knowledge Base
     * ID>/documents/<Document ID>`.
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
     * Required. The display name of the document. The name must be 1024 bytes or
     * less; otherwise, the creation request fails.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Required. The display name of the document. The name must be 1024 bytes or
     * less; otherwise, the creation request fails.
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
     * Required. The MIME type of this document.
     *
     * Generated from protobuf field <code>string mime_type = 3;</code>
     * @return string
     */
    public function getMimeType()
    {
        return $this->mime_type;
    }

    /**
     * Required. The MIME type of this document.
     *
     * Generated from protobuf field <code>string mime_type = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setMimeType($var)
    {
        GPBUtil::checkString($var, True);
        $this->mime_type = $var;

        return $this;
    }

    /**
     * Required. The knowledge type of document content.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2beta1.Document.KnowledgeType knowledge_types = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getKnowledgeTypes()
    {
        return $this->knowledge_types;
    }

    /**
     * Required. The knowledge type of document content.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2beta1.Document.KnowledgeType knowledge_types = 4;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setKnowledgeTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\Dialogflow\V2beta1\Document\KnowledgeType::class);
        $this->knowledge_types = $arr;

        return $this;
    }

    /**
     * The URI where the file content is located.
     * For documents stored in Google Cloud Storage, these URIs must have
     * the form `gs://<bucket-name>/<object-name>`.
     * NOTE: External URLs must correspond to public webpages, i.e., they must
     * be indexed by Google Search. In particular, URLs for showing documents in
     * Google Cloud Storage (i.e. the URL in your browser) are not supported.
     * Instead use the `gs://` format URI described above.
     *
     * Generated from protobuf field <code>string content_uri = 5;</code>
     * @return string
     */
    public function getContentUri()
    {
        return $this->readOneof(5);
    }

    /**
     * The URI where the file content is located.
     * For documents stored in Google Cloud Storage, these URIs must have
     * the form `gs://<bucket-name>/<object-name>`.
     * NOTE: External URLs must correspond to public webpages, i.e., they must
     * be indexed by Google Search. In particular, URLs for showing documents in
     * Google Cloud Storage (i.e. the URL in your browser) are not supported.
     * Instead use the `gs://` format URI described above.
     *
     * Generated from protobuf field <code>string content_uri = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setContentUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * The raw content of the document. This field is only permitted for
     * EXTRACTIVE_QA and FAQ knowledge types.
     *
     * Generated from protobuf field <code>string content = 6;</code>
     * @return string
     */
    public function getContent()
    {
        return $this->readOneof(6);
    }

    /**
     * The raw content of the document. This field is only permitted for
     * EXTRACTIVE_QA and FAQ knowledge types.
     *
     * Generated from protobuf field <code>string content = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setContent($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->whichOneof("source");
    }

}

