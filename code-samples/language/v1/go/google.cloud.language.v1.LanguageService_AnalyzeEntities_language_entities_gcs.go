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

// [START language_entities_gcs]

func sampleAnalyzeEntities(gcsUri string) error {
	ctx := context.Background()
	c, err := language.NewClient(ctx)
	if err != nil {
		return err
	}

	// gcsUri := "gs://cloud-samples-data/language/entity.txt"
	req := &languagepb.AnalyzeEntitiesRequest{
		Document: &languagepb.Document{
			Type: languagepb.Document_PLAIN_TEXT,
			Source: &languagepb.Document_GcsContentUri{
				GcsContentUri: gcsUri,
			},
		},
	}
	resp, err := c.AnalyzeEntities(ctx, req)
	if err != nil {
		return err
	}

	for _, entity := range resp.GetEntities() {
		fmt.Printf("Entity name: %v\n", entity.GetName())
		fmt.Printf("Entity type: %v\n", entity.GetType())
		fmt.Printf("Entity salience score: %v\n", entity.GetSalience())
		for _, mention := range entity.GetMentions() {
			fmt.Printf("Mention: %v\n", mention.GetText().GetContent())
			fmt.Printf("Mention type: %v\n", mention.GetType())
		}
	}
	return nil
}

// [END language_entities_gcs]

func main() {
	gcsUri := flag.String("gcs_uri", "gs://cloud-samples-data/language/entity.txt", "")
	flag.Parse()
	if err := sampleAnalyzeEntities(*gcsUri); err != nil {
		log.Fatal(err)
	}
}
