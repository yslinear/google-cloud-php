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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/tpu/v1/cloud_tpu.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Tpu\V1\Client\BaseClient;

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
use Google\Cloud\Location\GetLocationRequest;
use Google\Cloud\Location\ListLocationsRequest;
use Google\Cloud\Location\Location;
use Google\Cloud\Tpu\V1\AcceleratorType;
use Google\Cloud\Tpu\V1\CreateNodeRequest;
use Google\Cloud\Tpu\V1\DeleteNodeRequest;
use Google\Cloud\Tpu\V1\GetAcceleratorTypeRequest;
use Google\Cloud\Tpu\V1\GetNodeRequest;
use Google\Cloud\Tpu\V1\GetTensorFlowVersionRequest;
use Google\Cloud\Tpu\V1\ListAcceleratorTypesRequest;
use Google\Cloud\Tpu\V1\ListNodesRequest;
use Google\Cloud\Tpu\V1\ListTensorFlowVersionsRequest;
use Google\Cloud\Tpu\V1\Node;
use Google\Cloud\Tpu\V1\ReimageNodeRequest;
use Google\Cloud\Tpu\V1\StartNodeRequest;
use Google\Cloud\Tpu\V1\StopNodeRequest;
use Google\Cloud\Tpu\V1\TensorFlowVersion;
use Google\LongRunning\Operation;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: Manages TPU nodes and other resources
 *
 * TPU API v1
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
 * @method PromiseInterface createNodeAsync(CreateNodeRequest $request, array $optionalArgs = [])
 * @method PromiseInterface deleteNodeAsync(DeleteNodeRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getAcceleratorTypeAsync(GetAcceleratorTypeRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getNodeAsync(GetNodeRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getTensorFlowVersionAsync(GetTensorFlowVersionRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listAcceleratorTypesAsync(ListAcceleratorTypesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listNodesAsync(ListNodesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listTensorFlowVersionsAsync(ListTensorFlowVersionsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface reimageNodeAsync(ReimageNodeRequest $request, array $optionalArgs = [])
 * @method PromiseInterface startNodeAsync(StartNodeRequest $request, array $optionalArgs = [])
 * @method PromiseInterface stopNodeAsync(StopNodeRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getLocationAsync(GetLocationRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listLocationsAsync(ListLocationsRequest $request, array $optionalArgs = [])
 */
abstract class TpuBaseClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.tpu.v1.Tpu';

    /** The default address of the service. */
    private const SERVICE_ADDRESS = 'tpu.googleapis.com';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
    ];

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../../resources/tpu_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../../resources/tpu_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../../resources/tpu_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../../resources/tpu_rest_client_config.php',
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
     * Formats a string containing the fully-qualified path to represent a
     * accelerator_type resource.
     *
     * @param string $project
     * @param string $location
     * @param string $acceleratorType
     *
     * @return string The formatted accelerator_type resource.
     */
    public static function acceleratorTypeName(string $project, string $location, string $acceleratorType): string
    {
        return self::getPathTemplate('acceleratorType')->render([
            'project' => $project,
            'location' => $location,
            'accelerator_type' => $acceleratorType,
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
     * Formats a string containing the fully-qualified path to represent a node
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $node
     *
     * @return string The formatted node resource.
     */
    public static function nodeName(string $project, string $location, string $node): string
    {
        return self::getPathTemplate('node')->render([
            'project' => $project,
            'location' => $location,
            'node' => $node,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * tensor_flow_version resource.
     *
     * @param string $project
     * @param string $location
     * @param string $tensorFlowVersion
     *
     * @return string The formatted tensor_flow_version resource.
     */
    public static function tensorFlowVersionName(string $project, string $location, string $tensorFlowVersion): string
    {
        return self::getPathTemplate('tensorFlowVersion')->render([
            'project' => $project,
            'location' => $location,
            'tensor_flow_version' => $tensorFlowVersion,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - acceleratorType: projects/{project}/locations/{location}/acceleratorTypes/{accelerator_type}
     * - location: projects/{project}/locations/{location}
     * - node: projects/{project}/locations/{location}/nodes/{node}
     * - tensorFlowVersion: projects/{project}/locations/{location}/tensorFlowVersions/{tensor_flow_version}
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
     *           as "<uri>:<port>". Default 'tpu.googleapis.com:443'.
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
     * Creates a node.
     *
     * The async variant is {@see self::createNodeAsync()} .
     *
     * @param CreateNodeRequest $request     A request to house fields associated with the call.
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
    public function createNode(CreateNodeRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('CreateNode', $request, $callOptions)->wait();
    }

    /**
     * Deletes a node.
     *
     * The async variant is {@see self::deleteNodeAsync()} .
     *
     * @param DeleteNodeRequest $request     A request to house fields associated with the call.
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
    public function deleteNode(DeleteNodeRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('DeleteNode', $request, $callOptions)->wait();
    }

    /**
     * Gets AcceleratorType.
     *
     * The async variant is {@see self::getAcceleratorTypeAsync()} .
     *
     * @param GetAcceleratorTypeRequest $request     A request to house fields associated with the call.
     * @param array                     $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return AcceleratorType
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getAcceleratorType(GetAcceleratorTypeRequest $request, array $callOptions = []): AcceleratorType
    {
        return $this->startApiCall('GetAcceleratorType', $request, $callOptions)->wait();
    }

    /**
     * Gets the details of a node.
     *
     * The async variant is {@see self::getNodeAsync()} .
     *
     * @param GetNodeRequest $request     A request to house fields associated with the call.
     * @param array          $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Node
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getNode(GetNodeRequest $request, array $callOptions = []): Node
    {
        return $this->startApiCall('GetNode', $request, $callOptions)->wait();
    }

    /**
     * Gets TensorFlow Version.
     *
     * The async variant is {@see self::getTensorFlowVersionAsync()} .
     *
     * @param GetTensorFlowVersionRequest $request     A request to house fields associated with the call.
     * @param array                       $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return TensorFlowVersion
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getTensorFlowVersion(GetTensorFlowVersionRequest $request, array $callOptions = []): TensorFlowVersion
    {
        return $this->startApiCall('GetTensorFlowVersion', $request, $callOptions)->wait();
    }

    /**
     * Lists accelerator types supported by this API.
     *
     * The async variant is {@see self::listAcceleratorTypesAsync()} .
     *
     * @param ListAcceleratorTypesRequest $request     A request to house fields associated with the call.
     * @param array                       $callOptions {
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
    public function listAcceleratorTypes(ListAcceleratorTypesRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListAcceleratorTypes', $request, $callOptions);
    }

    /**
     * Lists nodes.
     *
     * The async variant is {@see self::listNodesAsync()} .
     *
     * @param ListNodesRequest $request     A request to house fields associated with the call.
     * @param array            $callOptions {
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
    public function listNodes(ListNodesRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListNodes', $request, $callOptions);
    }

    /**
     * List TensorFlow versions supported by this API.
     *
     * The async variant is {@see self::listTensorFlowVersionsAsync()} .
     *
     * @param ListTensorFlowVersionsRequest $request     A request to house fields associated with the call.
     * @param array                         $callOptions {
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
    public function listTensorFlowVersions(ListTensorFlowVersionsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListTensorFlowVersions', $request, $callOptions);
    }

    /**
     * Reimages a node's OS.
     *
     * The async variant is {@see self::reimageNodeAsync()} .
     *
     * @param ReimageNodeRequest $request     A request to house fields associated with the call.
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
    public function reimageNode(ReimageNodeRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('ReimageNode', $request, $callOptions)->wait();
    }

    /**
     * Starts a node.
     *
     * The async variant is {@see self::startNodeAsync()} .
     *
     * @param StartNodeRequest $request     A request to house fields associated with the call.
     * @param array            $callOptions {
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
    public function startNode(StartNodeRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('StartNode', $request, $callOptions)->wait();
    }

    /**
     * Stops a node, this operation is only available with single TPU nodes.
     *
     * The async variant is {@see self::stopNodeAsync()} .
     *
     * @param StopNodeRequest $request     A request to house fields associated with the call.
     * @param array           $callOptions {
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
    public function stopNode(StopNodeRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('StopNode', $request, $callOptions)->wait();
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
