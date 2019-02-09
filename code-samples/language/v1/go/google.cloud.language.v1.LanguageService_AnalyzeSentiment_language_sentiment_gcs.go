// Copyright 2019 Google LLC
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     https://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

// Code generated by protoc-gen-go_gapic. DO NOT EDIT.

package main

import (
	"context"
	"flag"
	"fmt"
	"log"

	language "cloud.google.com/go/language/apiv1"
	languagepb "google.golang.org/genproto/googleapis/cloud/language/v1"
)

// [START language_sentiment_gcs]

func sampleAnalyzeSentiment(uri string) error {
	ctx := context.Background()
	c, err := language.NewClient(ctx)
	if err != nil {
		return err
	}

	// uri := "Path to text file, e.g. gs://my-bucket/textfile"
	req := &languagepb.AnalyzeSentimentRequest{
		Document: &languagepb.Document{
			Type: languagepb.Document_PLAIN_TEXT,
			Source: &languagepb.Document_GcsContentUri{
				GcsContentUri: uri,
			},
		},
	}
	resp, err := c.AnalyzeSentiment(ctx, req)
	if err != nil {
		return err
	}

	sentiment := resp.GetDocumentSentiment()
	fmt.Printf("score: %v\n", sentiment.GetScore())
	fmt.Printf("magnitude: %v\n", sentiment.GetMagnitude())
	return nil
}

// [END language_sentiment_gcs]

func main() {
	uri := flag.String("uri", "Path to text file, e.g. gs://my-bucket/textfile", "")
	flag.Parse()
	if err := sampleAnalyzeSentiment(*uri); err != nil {
		log.Fatal(err)
	}
}