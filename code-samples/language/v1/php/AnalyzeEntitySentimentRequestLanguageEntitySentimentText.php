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
 * DO NOT EDIT! This is a generated sample ("Request",  "language_entity_sentiment_text")
 */

// [START language_entity_sentiment_text]
require __DIR__ . '/vendor/autoload.php';

use Google\Cloud\Language\V1\LanguageServiceClient;
use Google\Cloud\Language\V1\Document;
use Google\Cloud\Language\V1\Document_Type;

function sampleAnalyzeEntitySentiment($textContent)
{
    // [START language_entity_sentiment_text_core]

    $languageServiceClient = new LanguageServiceClient();

    // $textContent = 'Grapes are good. Bananas are bad.';
    $type = Document_Type::PLAIN_TEXT;
    $document = new Document();
    $document->setType($type);
    $document->setContent($textContent);

    try {
        $response = $languageServiceClient->analyzeEntitySentiment($document);
        foreach ($response->getEntities() as $entity) {
            printf('Entity name: %s'.PHP_EOL, $entity->getName());
            printf('Entity sentiment score: %s'.PHP_EOL, $entity->getSentiment()->getScore());
            foreach ($entity->getMentions() as $mention) {
                printf('Mention: %s'.PHP_EOL, $mention->getText()->getContent());
                printf('Mention type: %s'.PHP_EOL, $mention->getType());
                printf('Mention sentiment score: %s'.PHP_EOL, $mention->getSentiment()->getScore());
                printf('Mention sentiment magnitude: %s'.PHP_EOL, $mention->getSentiment()->getMagnitude());
            }
        }
    } finally {
        $languageServiceClient->close();
    }

    // [END language_entity_sentiment_text_core]
}
// [END language_entity_sentiment_text]

$opts = [
    'text_content::',
];

$defaultOptions = [
    'text_content' => 'Grapes are good. Bananas are bad.',
];

$options = getopt('', $opts);
$options += $defaultOptions;

$textContent = $options['text_content'];

sampleAnalyzeEntitySentiment($textContent);
