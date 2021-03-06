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
 * DO NOT EDIT! This is a generated sample ("Request",  "talent_delete_company")
 */

// [START talent_delete_company]
require __DIR__ . '/vendor/autoload.php';

use Google\Cloud\Talent\V4beta1\CompanyServiceClient;

function sampleDeleteCompany($projectId, $companyId)
{
    // [START talent_delete_company_core]

    $companyServiceClient = new CompanyServiceClient();

    // $projectId = 'Your Google Cloud Project ID';
    // $companyId = 'ID of the company to delete';
    $formattedName = $companyServiceClient->companyName($projectId, $companyId);

    try {
        $companyServiceClient->deleteCompany($formattedName);
        printf('Deleted company'.PHP_EOL);
    } finally {
        $companyServiceClient->close();
    }

    // [END talent_delete_company_core]
}
// [END talent_delete_company]

$opts = [
    'projectId::',
    'companyId::',
];

$defaultOptions = [
    'projectId' => 'Your Google Cloud Project ID',
    'companyId' => 'ID of the company to delete',
];

$options = getopt('', $opts);
$options += $defaultOptions;

$projectId = $options['projectId'];
$companyId = $options['companyId'];

sampleDeleteCompany($projectId, $companyId);
