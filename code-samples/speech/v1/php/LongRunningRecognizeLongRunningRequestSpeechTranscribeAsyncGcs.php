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
 * DO NOT EDIT! This is a generated sample ("LongRunningRequest",  "speech_transcribe_async_gcs")
 */

// [START speech_transcribe_async_gcs]
require __DIR__ . '/vendor/autoload.php';

use Google\Cloud\Speech\V1\SpeechClient;
use Google\Cloud\Speech\V1\RecognitionAudio;
use Google\Cloud\Speech\V1\RecognitionConfig;
use Google\Cloud\Speech\V1\RecognitionConfig_AudioEncoding;

function sampleLongRunningRecognize($languageCode, $gcsUri)
{
    // [START speech_transcribe_async_gcs_core]

    $speechClient = new SpeechClient();

    // $languageCode = 'en-US';
    // $gcsUri = 'gs://cloud-samples-data/speech/brooklyn_bridge.raw';
    $sampleRateHertz = 16000;
    $encoding = RecognitionConfig_AudioEncoding::LINEAR16;
    $config = new RecognitionConfig();
    $config->setSampleRateHertz($sampleRateHertz);
    $config->setLanguageCode($languageCode);
    $config->setEncoding($encoding);
    $audio = new RecognitionAudio();
    $audio->setUri($gcsUri);

    try {
        $operationResponse = $speechClient->longRunningRecognize($config, $audio);
        $operationResponse->pollUntilComplete();
        if ($operationResponse->operationSucceeded()) {
            $response = $operationResponse->getResult();
            foreach ($response->getResults() as $result) {
                printf('Transcript: %s'.PHP_EOL, $result->getAlternatives()[0]->getTranscript());
            }
        } else {
            $error = $operationResponse->getError();
            // handleError($error)
        }
    } finally {
        $speechClient->close();
    }

    // [END speech_transcribe_async_gcs_core]
}
// [END speech_transcribe_async_gcs]

$opts = [
    'language_code::',
    'gcs_uri::',
];

$defaultOptions = [
    'language_code' => 'en-US',
    'gcs_uri' => 'gs://cloud-samples-data/speech/brooklyn_bridge.raw',
];

$options = getopt('', $opts);
$options += $defaultOptions;

$languageCode = $options['language_code'];
$gcsUri = $options['gcs_uri'];

sampleLongRunningRecognize($languageCode, $gcsUri);
