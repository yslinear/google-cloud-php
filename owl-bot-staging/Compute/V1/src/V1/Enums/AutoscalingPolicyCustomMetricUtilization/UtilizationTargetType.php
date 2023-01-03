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
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/compute/v1/compute.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Compute\V1\Enums\AutoscalingPolicyCustomMetricUtilization;

/**
 * UtilizationTargetType contains string constants that represent the names of each
 * value in the
 * google.cloud.compute.v1.AutoscalingPolicyCustomMetricUtilization.UtilizationTargetType
 * descriptor.
 */
class UtilizationTargetType
{
    const UNDEFINED_UTILIZATION_TARGET_TYPE = 'UNDEFINED_UTILIZATION_TARGET_TYPE';

    const DELTA_PER_MINUTE = 'DELTA_PER_MINUTE';

    const DELTA_PER_SECOND = 'DELTA_PER_SECOND';

    const GAUGE = 'GAUGE';
}
