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

// [START compute_v1_generated_GlobalNetworkEndpointGroups_ListNetworkEndpoints_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\PagedListResponse;
use Google\Cloud\Compute\V1\GlobalNetworkEndpointGroupsClient;

/**
 * Lists the network endpoints in the specified network endpoint group.
 *
 * @param string $networkEndpointGroup The name of the network endpoint group from which you want to generate a list of included network endpoints. It should comply with RFC1035.
 * @param string $project              Project ID for this request.
 */
function list_network_endpoints_sample(string $networkEndpointGroup, string $project): void
{
    // Create a client.
    $globalNetworkEndpointGroupsClient = new GlobalNetworkEndpointGroupsClient();

    // Call the API and handle any network failures.
    try {
        /** @var PagedListResponse $response */
        $response = $globalNetworkEndpointGroupsClient->listNetworkEndpoints(
            $networkEndpointGroup,
            $project
        );

        foreach ($response as $element) {
            printf('Element data: %s' . PHP_EOL, $element->serializeToJsonString());
        }
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
    $networkEndpointGroup = '[NETWORK_ENDPOINT_GROUP]';
    $project = '[PROJECT]';

    list_network_endpoints_sample($networkEndpointGroup, $project);
}
// [END compute_v1_generated_GlobalNetworkEndpointGroups_ListNetworkEndpoints_sync]
