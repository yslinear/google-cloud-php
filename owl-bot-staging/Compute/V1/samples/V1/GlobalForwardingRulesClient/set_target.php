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

// [START compute_v1_generated_GlobalForwardingRules_SetTarget_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\OperationResponse;
use Google\Cloud\Compute\V1\GlobalForwardingRulesClient;
use Google\Cloud\Compute\V1\TargetReference;
use Google\Rpc\Status;

/**
 * Changes target URL for the GlobalForwardingRule resource. The new target should be of the same type as the old target.
 *
 * @param string $forwardingRule Name of the ForwardingRule resource in which target is to be set.
 * @param string $project        Project ID for this request.
 */
function set_target_sample(string $forwardingRule, string $project): void
{
    // Create a client.
    $globalForwardingRulesClient = new GlobalForwardingRulesClient();

    // Prepare any non-scalar elements to be passed along with the request.
    $targetReferenceResource = new TargetReference();

    // Call the API and handle any network failures.
    try {
        /** @var OperationResponse $response */
        $response = $globalForwardingRulesClient->setTarget(
            $forwardingRule,
            $project,
            $targetReferenceResource
        );
        $response->pollUntilComplete();

        if ($response->operationSucceeded()) {
            printf('Operation completed successfully.' . PHP_EOL);
        } else {
            /** @var Status $error */
            $error = $response->getError();
            printf('Operation failed with error data: %s' . PHP_EOL, $error->serializeToJsonString());
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
    $forwardingRule = '[FORWARDING_RULE]';
    $project = '[PROJECT]';

    set_target_sample($forwardingRule, $project);
}
// [END compute_v1_generated_GlobalForwardingRules_SetTarget_sync]
