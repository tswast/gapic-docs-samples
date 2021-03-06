<?php
/*
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * DO NOT EDIT! This is a generated sample ("Request",  "language_sentiment_text")
 */

// [START language_sentiment_text]
require __DIR__ . '/vendor/autoload.php';

use Google\Cloud\Language\V1\LanguageServiceClient;
use Google\Cloud\Language\V1\Document;
use Google\Cloud\Language\V1\Document_Type;

function sampleAnalyzeSentiment($textContent)
{
    // [START language_sentiment_text_core]

    $languageServiceClient = new LanguageServiceClient();

    // $textContent = 'I am so happy and joyful.';
    $type = Document_Type::PLAIN_TEXT;
    $document = new Document();
    $document->setType($type);
    $document->setContent($textContent);

    try {
        $response = $languageServiceClient->analyzeSentiment($document);
        $sentiment = $response->getDocumentSentiment();
        printf('Sentiment score: %s'.PHP_EOL, $sentiment->getScore());
        printf('Magnitude: %s'.PHP_EOL, $sentiment->getMagnitude());
    } finally {
        $languageServiceClient->close();
    }

    // [END language_sentiment_text_core]
}
// [END language_sentiment_text]

$opts = [
    'text_content::',
];

$defaultOptions = [
    'text_content' => 'I am so happy and joyful.',
];

$options = getopt('', $opts);
$options += $defaultOptions;

$textContent = $options['text_content'];

sampleAnalyzeSentiment($textContent);
