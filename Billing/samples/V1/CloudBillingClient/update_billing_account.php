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

// [START cloudbilling_v1_generated_CloudBilling_UpdateBillingAccount_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\Billing\V1\BillingAccount;
use Google\Cloud\Billing\V1\CloudBillingClient;

/**
 * Updates a billing account's fields.
 * Currently the only field that can be edited is `display_name`.
 * The current authenticated user must have the `billing.accounts.update`
 * IAM permission, which is typically given to the
 * [administrator](https://cloud.google.com/billing/docs/how-to/billing-access)
 * of the billing account.
 *
 * @param string $formattedName The name of the billing account resource to be updated. Please see
 *                              {@see CloudBillingClient::billingAccountName()} for help formatting this field.
 */
function update_billing_account_sample(string $formattedName): void
{
    // Create a client.
    $cloudBillingClient = new CloudBillingClient();

    // Prepare the request message.
    $account = new BillingAccount();

    // Call the API and handle any network failures.
    try {
        /** @var BillingAccount $response */
        $response = $cloudBillingClient->updateBillingAccount($formattedName, $account);
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
    $formattedName = CloudBillingClient::billingAccountName('[BILLING_ACCOUNT]');

    update_billing_account_sample($formattedName);
}
// [END cloudbilling_v1_generated_CloudBilling_UpdateBillingAccount_sync]
