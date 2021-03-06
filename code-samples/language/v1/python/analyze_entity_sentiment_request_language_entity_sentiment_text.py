# -*- coding: utf-8 -*-
#
# Copyright 2019 Google LLC
#
# Licensed under the Apache License, Version 2.0 (the "License");
# you may not use this file except in compliance with the License.
# You may obtain a copy of the License at
#
#     https://www.apache.org/licenses/LICENSE-2.0
#
# Unless required by applicable law or agreed to in writing, software
# distributed under the License is distributed on an "AS IS" BASIS,
# WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
# See the License for the specific language governing permissions and
# limitations under the License.

# DO NOT EDIT! This is a generated sample ("Request",  "language_entity_sentiment_text")

# To install the latest published package dependency, execute the following:
#   pip install google-cloud-language

import sys

# [START language_entity_sentiment_text]

from google.cloud import language_v1
from google.cloud.language_v1 import enums
from google.cloud.language_v1 import enums
import six


def sample_analyze_entity_sentiment(text_content):
    """Analyze Sentiment of Entities in Text"""

    # [START language_entity_sentiment_text_core]

    client = language_v1.LanguageServiceClient()

    # text_content = 'Grapes are good. Bananas are bad.'

    if isinstance(text_content, six.binary_type):
        text_content = text_content.decode('utf-8')
    type_ = enums.Document.Type.PLAIN_TEXT
    document = {'type': type_, 'content': text_content}

    response = client.analyze_entity_sentiment(document)
    for entity in response.entities:
        print('Entity name: {}'.format(entity.name))
        print('Entity sentiment score: {}'.format(entity.sentiment.score))
        for mention in entity.mentions:
            print('Mention: {}'.format(mention.text.content))
            print('Mention type: {}'.format(
                enums.EntityMention.Type(mention.type).name))
            print('Mention sentiment score: {}'.format(
                mention.sentiment.score))
            print('Mention sentiment magnitude: {}'.format(
                mention.sentiment.magnitude))

    # [END language_entity_sentiment_text_core]


# [END language_entity_sentiment_text]


def main():
    import argparse

    parser = argparse.ArgumentParser()
    parser.add_argument(
        '--text_content',
        type=str,
        default='Grapes are good. Bananas are bad.')
    args = parser.parse_args()

    sample_analyze_entity_sentiment(args.text_content)


if __name__ == '__main__':
    main()
