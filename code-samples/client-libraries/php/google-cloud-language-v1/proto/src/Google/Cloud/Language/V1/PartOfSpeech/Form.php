<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/language/v1/language_service.proto

namespace Google\Cloud\Language\V1\PartOfSpeech;

/**
 * Depending on the language, Form can be categorizing different forms of
 * verbs, adjectives, adverbs, etc. For example, categorizing inflected
 * endings of verbs and adjectives or distinguishing between short and long
 * forms of adjectives and participles
 *
 * Protobuf type <code>google.cloud.language.v1.PartOfSpeech.Form</code>
 */
class Form
{
    /**
     * Form is not applicable in the analyzed language or is not predicted.
     *
     * Generated from protobuf enum <code>FORM_UNKNOWN = 0;</code>
     */
    const FORM_UNKNOWN = 0;
    /**
     * Adnomial
     *
     * Generated from protobuf enum <code>ADNOMIAL = 1;</code>
     */
    const ADNOMIAL = 1;
    /**
     * Auxiliary
     *
     * Generated from protobuf enum <code>AUXILIARY = 2;</code>
     */
    const AUXILIARY = 2;
    /**
     * Complementizer
     *
     * Generated from protobuf enum <code>COMPLEMENTIZER = 3;</code>
     */
    const COMPLEMENTIZER = 3;
    /**
     * Final ending
     *
     * Generated from protobuf enum <code>FINAL_ENDING = 4;</code>
     */
    const FINAL_ENDING = 4;
    /**
     * Gerund
     *
     * Generated from protobuf enum <code>GERUND = 5;</code>
     */
    const GERUND = 5;
    /**
     * Realis
     *
     * Generated from protobuf enum <code>REALIS = 6;</code>
     */
    const REALIS = 6;
    /**
     * Irrealis
     *
     * Generated from protobuf enum <code>IRREALIS = 7;</code>
     */
    const IRREALIS = 7;
    /**
     * Short form
     *
     * Generated from protobuf enum <code>SHORT = 8;</code>
     */
    const SHORT = 8;
    /**
     * Long form
     *
     * Generated from protobuf enum <code>LONG = 9;</code>
     */
    const LONG = 9;
    /**
     * Order form
     *
     * Generated from protobuf enum <code>ORDER = 10;</code>
     */
    const ORDER = 10;
    /**
     * Specific form
     *
     * Generated from protobuf enum <code>SPECIFIC = 11;</code>
     */
    const SPECIFIC = 11;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Form::class, \Google\Cloud\Language\V1\PartOfSpeech_Form::class);

