#!/usr/bin/env python

# Copyright 2019 Google Inc. All Rights Reserved.
#
# Licensed under the Apache License, Version 2.0 (the "License");
# you may not use this file except in compliance with the License.
# You may obtain a copy of the License at
#
#      http://www.apache.org/licenses/LICENSE-2.0
#
# Unless required by applicable law or agreed to in writing, software
# distributed under the License is distributed on an "AS IS" BASIS,
# WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
# See the License for the specific language governing permissions and
# limitations under the License.

# [START speech_transcribe_async_gcs]
from google.cloud import speech
from google.cloud.speech import enums
from google.cloud.speech import types

def long_running_recognize_gcs(
        gcs_uri='gs://cloud-sample-data/speech/brooklyn.raw',
        language_code='en-US'
    ):
    """Asynchronously transcribes the audio file specified by the gcs_uri.
    Args:
        gcs_uri: Path to audio file in Google Cloud Storage
            e.g. gs://BUCKET/FILE
        language_code: The language of the supplied audio as
            a BCP-47 language tag, e.g. 'en-US'
    """

    client = speech.SpeechClient()

    audio = types.RecognitionAudio(uri=gcs_uri)
    config = types.RecognitionConfig(
        # This is a comment describing one of the fields being set
        encoding=enums.RecognitionConfig.AudioEncoding.FLAC,
        sample_rate_hertz=16000,
        language_code=language_code)

    operation = client.long_running_recognize(config, audio)

    print('Waiting for operation to complete...')
    response = operation.result(timeout=90)

    # Each result is for a consecutive portion of the audio. Iterate through
    # them to get the transcripts for the entire audio file.
    for result in response.results:
        # The first alternative is the most likely one for this portion.
        print(u'Transcript: {}'.format(result.alternatives[0].transcript))
        print('Confidence: {}'.format(result.alternatives[0].confidence))
# [END speech_transcribe_async_gcs]

# import argparse
