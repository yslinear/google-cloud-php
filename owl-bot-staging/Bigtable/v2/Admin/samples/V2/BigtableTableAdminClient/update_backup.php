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

// [START bigtableadmin_v2_generated_BigtableTableAdmin_UpdateBackup_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\Bigtable\Admin\V2\Backup;
use Google\Cloud\Bigtable\Admin\V2\BigtableTableAdminClient;
use Google\Protobuf\FieldMask;
use Google\Protobuf\Timestamp;

/**
 * Updates a pending or completed Cloud Bigtable Backup.
 *
 * @param string $backupSourceTable Immutable. Name of the table from which this backup was created. This needs
 *                                  to be in the same instance as the backup. Values are of the form
 *                                  `projects/{project}/instances/{instance}/tables/{source_table}`.
 */
function update_backup_sample(string $backupSourceTable): void
{
    // Create a client.
    $bigtableTableAdminClient = new BigtableTableAdminClient();

    // Prepare any non-scalar elements to be passed along with the request.
    $backupExpireTime = new Timestamp();
    $backup = (new Backup())
        ->setSourceTable($backupSourceTable)
        ->setExpireTime($backupExpireTime);
    $updateMask = new FieldMask();

    // Call the API and handle any network failures.
    try {
        /** @var Backup $response */
        $response = $bigtableTableAdminClient->updateBackup($backup, $updateMask);
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
    $backupSourceTable = '[SOURCE_TABLE]';

    update_backup_sample($backupSourceTable);
}
// [END bigtableadmin_v2_generated_BigtableTableAdmin_UpdateBackup_sync]
