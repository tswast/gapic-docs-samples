<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2beta1/intent.proto

namespace Google\Cloud\Dialogflow\V2beta1\Intent\TrainingPhrase;

/**
 * Represents different types of training phrases.
 *
 * Protobuf type <code>google.cloud.dialogflow.v2beta1.Intent.TrainingPhrase.Type</code>
 */
class Type
{
    /**
     * Not specified. This value should never be used.
     *
     * Generated from protobuf enum <code>TYPE_UNSPECIFIED = 0;</code>
     */
    const TYPE_UNSPECIFIED = 0;
    /**
     * Examples do not contain &#64;-prefixed entity type names, but example parts
     * can be annotated with entity types.
     *
     * Generated from protobuf enum <code>EXAMPLE = 1;</code>
     */
    const EXAMPLE = 1;
    /**
     * Templates are not annotated with entity types, but they can contain
     * &#64;-prefixed entity type names as substrings.
     *
     * Generated from protobuf enum <code>TEMPLATE = 2;</code>
     */
    const TEMPLATE = 2;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Type::class, \Google\Cloud\Dialogflow\V2beta1\Intent_TrainingPhrase_Type::class);

