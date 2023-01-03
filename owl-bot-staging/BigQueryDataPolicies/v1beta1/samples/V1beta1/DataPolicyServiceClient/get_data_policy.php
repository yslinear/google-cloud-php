<?php
/*
 * Copyright 2023 Google LLC
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
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START bigquerydatapolicy_v1beta1_generated_DataPolicyService_GetDataPolicy_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\BigQuery\DataPolicies\V1beta1\DataPolicy;
use Google\Cloud\BigQuery\DataPolicies\V1beta1\DataPolicyServiceClient;

/**
 * Gets the data policy specified by its resource name.
 *
 * @param string $formattedName Resource name of the requested data policy. Format is
 *                              `projects/{project_number}/locations/{location_id}/dataPolicies/{data_policy_id}`. Please see
 *                              {@see DataPolicyServiceClient::dataPolicyName()} for help formatting this field.
 */
function get_data_policy_sample(string $formattedName): void
{
    // Create a client.
    $dataPolicyServiceClient = new DataPolicyServiceClient();

    // Call the API and handle any network failures.
    try {
        /** @var DataPolicy $response */
        $response = $dataPolicyServiceClient->getDataPolicy($formattedName);
        printf('Response data: %s' . PHP_EOL, $response->serializeToJsonString());
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $formattedName = DataPolicyServiceClient::dataPolicyName(
        '[PROJECT]',
        '[LOCATION]',
        '[DATA_POLICY]'
    );

    get_data_policy_sample($formattedName);
}
// [END bigquerydatapolicy_v1beta1_generated_DataPolicyService_GetDataPolicy_sync]
