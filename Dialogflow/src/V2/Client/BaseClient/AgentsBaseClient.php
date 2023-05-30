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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/dialogflow/v2/agent.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Dialogflow\V2\Client\BaseClient;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\LongRunning\OperationsClient;
use Google\ApiCore\OperationResponse;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Dialogflow\V2\Agent;
use Google\Cloud\Dialogflow\V2\DeleteAgentRequest;
use Google\Cloud\Dialogflow\V2\ExportAgentRequest;
use Google\Cloud\Dialogflow\V2\ExportAgentResponse;
use Google\Cloud\Dialogflow\V2\GetAgentRequest;
use Google\Cloud\Dialogflow\V2\GetValidationResultRequest;
use Google\Cloud\Dialogflow\V2\ImportAgentRequest;
use Google\Cloud\Dialogflow\V2\RestoreAgentRequest;
use Google\Cloud\Dialogflow\V2\SearchAgentsRequest;
use Google\Cloud\Dialogflow\V2\SetAgentRequest;
use Google\Cloud\Dialogflow\V2\TrainAgentRequest;
use Google\Cloud\Dialogflow\V2\ValidationResult;
use Google\Cloud\Location\GetLocationRequest;
use Google\Cloud\Location\ListLocationsRequest;
use Google\Cloud\Location\Location;
use Google\LongRunning\Operation;
use Google\Protobuf\Struct;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: Service for managing [Agents][google.cloud.dialogflow.v2.Agent].
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * This class is currently experimental and may be subject to changes.
 *
 * @experimental
 *
 * @internal
 *
 * @method PromiseInterface deleteAgentAsync(DeleteAgentRequest $request, array $optionalArgs = [])
 * @method PromiseInterface exportAgentAsync(ExportAgentRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getAgentAsync(GetAgentRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getValidationResultAsync(GetValidationResultRequest $request, array $optionalArgs = [])
 * @method PromiseInterface importAgentAsync(ImportAgentRequest $request, array $optionalArgs = [])
 * @method PromiseInterface restoreAgentAsync(RestoreAgentRequest $request, array $optionalArgs = [])
 * @method PromiseInterface searchAgentsAsync(SearchAgentsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface setAgentAsync(SetAgentRequest $request, array $optionalArgs = [])
 * @method PromiseInterface trainAgentAsync(TrainAgentRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getLocationAsync(GetLocationRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listLocationsAsync(ListLocationsRequest $request, array $optionalArgs = [])
 */
abstract class AgentsBaseClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.dialogflow.v2.Agents';

    /** The default address of the service. */
    private const SERVICE_ADDRESS = 'dialogflow.googleapis.com';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
        'https://www.googleapis.com/auth/dialogflow',
    ];

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../../resources/agents_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../../resources/agents_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../../resources/agents_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../../resources/agents_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Return an OperationsClient object with the same endpoint as $this.
     *
     * @return OperationsClient
     */
    public function getOperationsClient()
    {
        return $this->operationsClient;
    }

    /**
     * Resume an existing long running operation that was previously started by a long
     * running API method. If $methodName is not provided, or does not match a long
     * running API method, then the operation can still be resumed, but the
     * OperationResponse object will not deserialize the final response.
     *
     * @param string $operationName The name of the long running operation
     * @param string $methodName    The name of the method used to start the operation
     *
     * @return OperationResponse
     */
    public function resumeOperation($operationName, $methodName = null)
    {
        $options = isset($this->descriptors[$methodName]['longRunning']) ? $this->descriptors[$methodName]['longRunning'] : [];
        $operation = new OperationResponse($operationName, $this->getOperationsClient(), $options);
        $operation->reload();
        return $operation;
    }

    /**
     * Formats a string containing the fully-qualified path to represent a agent
     * resource.
     *
     * @param string $project
     *
     * @return string The formatted agent resource.
     */
    public static function agentName(string $project): string
    {
        return self::getPathTemplate('agent')->render([
            'project' => $project,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a location
     * resource.
     *
     * @param string $project
     * @param string $location
     *
     * @return string The formatted location resource.
     */
    public static function locationName(string $project, string $location): string
    {
        return self::getPathTemplate('location')->render([
            'project' => $project,
            'location' => $location,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a project
     * resource.
     *
     * @param string $project
     *
     * @return string The formatted project resource.
     */
    public static function projectName(string $project): string
    {
        return self::getPathTemplate('project')->render([
            'project' => $project,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_agent resource.
     *
     * @param string $project
     *
     * @return string The formatted project_agent resource.
     */
    public static function projectAgentName(string $project): string
    {
        return self::getPathTemplate('projectAgent')->render([
            'project' => $project,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_agent resource.
     *
     * @param string $project
     * @param string $location
     *
     * @return string The formatted project_location_agent resource.
     */
    public static function projectLocationAgentName(string $project, string $location): string
    {
        return self::getPathTemplate('projectLocationAgent')->render([
            'project' => $project,
            'location' => $location,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - agent: projects/{project}/agent
     * - location: projects/{project}/locations/{location}
     * - project: projects/{project}
     * - projectAgent: projects/{project}/agent
     * - projectLocationAgent: projects/{project}/locations/{location}/agent
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     */
    public static function parseName(string $formattedName, string $template = null): array
    {
        return self::parseFormattedName($formattedName, $template);
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'dialogflow.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $apiEndpoint setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
        $this->operationsClient = $this->createOperationsClient($clientOptions);
    }

    /** Handles execution of the async variants for each documented method. */
    public function __call($method, $args)
    {
        if (substr($method, -5) !== 'Async') {
            trigger_error('Call to undefined method ' . __CLASS__ . "::$method()", E_USER_ERROR);
        }

        array_unshift($args, substr($method, 0, -5));
        return call_user_func_array([$this, 'startAsyncCall'], $args);
    }

    /**
     * Deletes the specified agent.
     *
     * The async variant is {@see self::deleteAgentAsync()} .
     *
     * @param DeleteAgentRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function deleteAgent(DeleteAgentRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('DeleteAgent', $request, $callOptions)->wait();
    }

    /**
     * Exports the specified agent to a ZIP file.
     *
     * This method is a [long-running
     * operation](https://cloud.google.com/dialogflow/es/docs/how/long-running-operations).
     * The returned `Operation` type has the following method-specific fields:
     *
     * - `metadata`: An empty [Struct
     * message](https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#struct)
     * - `response`:
     * [ExportAgentResponse][google.cloud.dialogflow.v2.ExportAgentResponse]
     *
     * The async variant is {@see self::exportAgentAsync()} .
     *
     * @param ExportAgentRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function exportAgent(ExportAgentRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('ExportAgent', $request, $callOptions)->wait();
    }

    /**
     * Retrieves the specified agent.
     *
     * The async variant is {@see self::getAgentAsync()} .
     *
     * @param GetAgentRequest $request     A request to house fields associated with the call.
     * @param array           $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Agent
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getAgent(GetAgentRequest $request, array $callOptions = []): Agent
    {
        return $this->startApiCall('GetAgent', $request, $callOptions)->wait();
    }

    /**
     * Gets agent validation result. Agent validation is performed during
     * training time and is updated automatically when training is completed.
     *
     * The async variant is {@see self::getValidationResultAsync()} .
     *
     * @param GetValidationResultRequest $request     A request to house fields associated with the call.
     * @param array                      $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return ValidationResult
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getValidationResult(GetValidationResultRequest $request, array $callOptions = []): ValidationResult
    {
        return $this->startApiCall('GetValidationResult', $request, $callOptions)->wait();
    }

    /**
     * Imports the specified agent from a ZIP file.
     *
     * Uploads new intents and entity types without deleting the existing ones.
     * Intents and entity types with the same name are replaced with the new
     * versions from
     * [ImportAgentRequest][google.cloud.dialogflow.v2.ImportAgentRequest]. After
     * the import, the imported draft agent will be trained automatically (unless
     * disabled in agent settings). However, once the import is done, training may
     * not be completed yet. Please call
     * [TrainAgent][google.cloud.dialogflow.v2.Agents.TrainAgent] and wait for the
     * operation it returns in order to train explicitly.
     *
     * This method is a [long-running
     * operation](https://cloud.google.com/dialogflow/es/docs/how/long-running-operations).
     * The returned `Operation` type has the following method-specific fields:
     *
     * - `metadata`: An empty [Struct
     * message](https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#struct)
     * - `response`: An [Empty
     * message](https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#empty)
     *
     * The operation only tracks when importing is complete, not when it is done
     * training.
     *
     * Note: You should always train an agent prior to sending it queries. See the
     * [training
     * documentation](https://cloud.google.com/dialogflow/es/docs/training).
     *
     * The async variant is {@see self::importAgentAsync()} .
     *
     * @param ImportAgentRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function importAgent(ImportAgentRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('ImportAgent', $request, $callOptions)->wait();
    }

    /**
     * Restores the specified agent from a ZIP file.
     *
     * Replaces the current agent version with a new one. All the intents and
     * entity types in the older version are deleted. After the restore, the
     * restored draft agent will be trained automatically (unless disabled in
     * agent settings). However, once the restore is done, training may not be
     * completed yet. Please call
     * [TrainAgent][google.cloud.dialogflow.v2.Agents.TrainAgent] and wait for the
     * operation it returns in order to train explicitly.
     *
     * This method is a [long-running
     * operation](https://cloud.google.com/dialogflow/es/docs/how/long-running-operations).
     * The returned `Operation` type has the following method-specific fields:
     *
     * - `metadata`: An empty [Struct
     * message](https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#struct)
     * - `response`: An [Empty
     * message](https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#empty)
     *
     * The operation only tracks when restoring is complete, not when it is done
     * training.
     *
     * Note: You should always train an agent prior to sending it queries. See the
     * [training
     * documentation](https://cloud.google.com/dialogflow/es/docs/training).
     *
     * The async variant is {@see self::restoreAgentAsync()} .
     *
     * @param RestoreAgentRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function restoreAgent(RestoreAgentRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('RestoreAgent', $request, $callOptions)->wait();
    }

    /**
     * Returns the list of agents.
     *
     * Since there is at most one conversational agent per project, this method is
     * useful primarily for listing all agents across projects the caller has
     * access to. One can achieve that with a wildcard project collection id "-".
     * Refer to [List
     * Sub-Collections](https://cloud.google.com/apis/design/design_patterns#list_sub-collections).
     *
     * The async variant is {@see self::searchAgentsAsync()} .
     *
     * @param SearchAgentsRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function searchAgents(SearchAgentsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('SearchAgents', $request, $callOptions);
    }

    /**
     * Creates/updates the specified agent.
     *
     * Note: You should always train an agent prior to sending it queries. See the
     * [training
     * documentation](https://cloud.google.com/dialogflow/es/docs/training).
     *
     * The async variant is {@see self::setAgentAsync()} .
     *
     * @param SetAgentRequest $request     A request to house fields associated with the call.
     * @param array           $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Agent
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function setAgent(SetAgentRequest $request, array $callOptions = []): Agent
    {
        return $this->startApiCall('SetAgent', $request, $callOptions)->wait();
    }

    /**
     * Trains the specified agent.
     *
     * This method is a [long-running
     * operation](https://cloud.google.com/dialogflow/es/docs/how/long-running-operations).
     * The returned `Operation` type has the following method-specific fields:
     *
     * - `metadata`: An empty [Struct
     * message](https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#struct)
     * - `response`: An [Empty
     * message](https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#empty)
     *
     * Note: You should always train an agent prior to sending it queries. See the
     * [training
     * documentation](https://cloud.google.com/dialogflow/es/docs/training).
     *
     * The async variant is {@see self::trainAgentAsync()} .
     *
     * @param TrainAgentRequest $request     A request to house fields associated with the call.
     * @param array             $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function trainAgent(TrainAgentRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('TrainAgent', $request, $callOptions)->wait();
    }

    /**
     * Gets information about a location.
     *
     * The async variant is {@see self::getLocationAsync()} .
     *
     * @param GetLocationRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Location
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getLocation(GetLocationRequest $request, array $callOptions = []): Location
    {
        return $this->startApiCall('GetLocation', $request, $callOptions)->wait();
    }

    /**
     * Lists information about the supported locations for this service.
     *
     * The async variant is {@see self::listLocationsAsync()} .
     *
     * @param ListLocationsRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listLocations(ListLocationsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListLocations', $request, $callOptions);
    }
}
