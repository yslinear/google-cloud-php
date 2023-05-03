<?php
/*
 * Copyright 2022 Google LLC
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

// [START certificatemanager_v1_generated_CertificateManager_CreateCertificate_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\OperationResponse;
use Google\Cloud\CertificateManager\V1\Certificate;
use Google\Cloud\CertificateManager\V1\CertificateManagerClient;
use Google\Rpc\Status;

/**
 * Creates a new Certificate in a given project and location.
 *
 * @param string $formattedParent The parent resource of the certificate. Must be in the format
 *                                `projects/&#42;/locations/*`. Please see
 *                                {@see CertificateManagerClient::locationName()} for help formatting this field.
 * @param string $certificateId   A user-provided name of the certificate.
 */
function create_certificate_sample(string $formattedParent, string $certificateId): void
{
    // Create a client.
    $certificateManagerClient = new CertificateManagerClient();

    // Prepare the request message.
    $certificate = new Certificate();

    // Call the API and handle any network failures.
    try {
        /** @var OperationResponse $response */
        $response = $certificateManagerClient->createCertificate(
            $formattedParent,
            $certificateId,
            $certificate
        );
        $response->pollUntilComplete();

        if ($response->operationSucceeded()) {
            /** @var Certificate $result */
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
    $formattedParent = CertificateManagerClient::locationName('[PROJECT]', '[LOCATION]');
    $certificateId = '[CERTIFICATE_ID]';

    create_certificate_sample($formattedParent, $certificateId);
}
// [END certificatemanager_v1_generated_CertificateManager_CreateCertificate_sync]
