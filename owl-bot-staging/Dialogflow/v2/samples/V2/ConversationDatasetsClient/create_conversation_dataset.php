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

// [START dialogflow_v2_generated_ConversationDatasets_CreateConversationDataset_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\OperationResponse;
use Google\Cloud\Dialogflow\V2\ConversationDataset;
use Google\Cloud\Dialogflow\V2\ConversationDatasetsClient;
use Google\Rpc\Status;

/**
 * Creates a new conversation dataset.
 *
 * This method is a [long-running
 * operation](https://cloud.google.com/dialogflow/es/docs/how/long-running-operations).
 * The returned `Operation` type has the following method-specific fields:
 *
 * - `metadata`:
 * [CreateConversationDatasetOperationMetadata][google.cloud.dialogflow.v2.CreateConversationDatasetOperationMetadata]
 * - `response`:
 * [ConversationDataset][google.cloud.dialogflow.v2.ConversationDataset]
 *
 * @param string $parent                         The project to create conversation dataset for. Format:
 *                                               `projects/<Project ID>/locations/<Location ID>`
 * @param string $conversationDatasetDisplayName The display name of the dataset. Maximum of 64 bytes.
 */
function create_conversation_dataset_sample(
    string $parent,
    string $conversationDatasetDisplayName
): void {
    // Create a client.
    $conversationDatasetsClient = new ConversationDatasetsClient();

    // Prepare any non-scalar elements to be passed along with the request.
    $conversationDataset = (new ConversationDataset())
        ->setDisplayName($conversationDatasetDisplayName);

    // Call the API and handle any network failures.
    try {
        /** @var OperationResponse $response */
        $response = $conversationDatasetsClient->createConversationDataset($parent, $conversationDataset);
        $response->pollUntilComplete();

        if ($response->operationSucceeded()) {
            /** @var ConversationDataset $result */
            $result = $response->getResult();
            printf('Operation successful with response data: %s' . PHP_EOL, $result->serializeToJsonString());
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
    $parent = '[PARENT]';
    $conversationDatasetDisplayName = '[DISPLAY_NAME]';

    create_conversation_dataset_sample($parent, $conversationDatasetDisplayName);
}
// [END dialogflow_v2_generated_ConversationDatasets_CreateConversationDataset_sync]
