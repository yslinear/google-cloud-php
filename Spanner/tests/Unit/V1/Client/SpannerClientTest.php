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

namespace Google\Cloud\Spanner\Tests\Unit\V1\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\ServerStream;
use Google\ApiCore\Testing\GeneratedTest;
use Google\ApiCore\Testing\MockTransport;
use Google\Cloud\Spanner\V1\BatchCreateSessionsRequest;
use Google\Cloud\Spanner\V1\BatchCreateSessionsResponse;
use Google\Cloud\Spanner\V1\BeginTransactionRequest;
use Google\Cloud\Spanner\V1\Client\SpannerClient;
use Google\Cloud\Spanner\V1\CommitRequest;
use Google\Cloud\Spanner\V1\CommitResponse;
use Google\Cloud\Spanner\V1\CreateSessionRequest;
use Google\Cloud\Spanner\V1\DeleteSessionRequest;
use Google\Cloud\Spanner\V1\ExecuteBatchDmlRequest;
use Google\Cloud\Spanner\V1\ExecuteBatchDmlResponse;
use Google\Cloud\Spanner\V1\ExecuteSqlRequest;
use Google\Cloud\Spanner\V1\GetSessionRequest;
use Google\Cloud\Spanner\V1\KeySet;
use Google\Cloud\Spanner\V1\ListSessionsRequest;
use Google\Cloud\Spanner\V1\ListSessionsResponse;
use Google\Cloud\Spanner\V1\PartialResultSet;
use Google\Cloud\Spanner\V1\PartitionQueryRequest;
use Google\Cloud\Spanner\V1\PartitionReadRequest;
use Google\Cloud\Spanner\V1\PartitionResponse;
use Google\Cloud\Spanner\V1\ReadRequest;
use Google\Cloud\Spanner\V1\ResultSet;
use Google\Cloud\Spanner\V1\RollbackRequest;
use Google\Cloud\Spanner\V1\Session;
use Google\Cloud\Spanner\V1\Transaction;
use Google\Cloud\Spanner\V1\TransactionOptions;
use Google\Cloud\Spanner\V1\TransactionSelector;
use Google\Protobuf\GPBEmpty;
use Google\Rpc\Code;
use stdClass;

/**
 * @group spanner
 *
 * @group gapic
 */
class SpannerClientTest extends GeneratedTest
{
    /** @return TransportInterface */
    private function createTransport($deserialize = null)
    {
        return new MockTransport($deserialize);
    }

    /** @return CredentialsWrapper */
    private function createCredentials()
    {
        return $this->getMockBuilder(CredentialsWrapper::class)->disableOriginalConstructor()->getMock();
    }

    /** @return SpannerClient */
    private function createClient(array $options = [])
    {
        $options += [
            'credentials' => $this->createCredentials(),
        ];
        return new SpannerClient($options);
    }

    /** @test */
    public function batchCreateSessionsTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new BatchCreateSessionsResponse();
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedDatabase = $gapicClient->databaseName('[PROJECT]', '[INSTANCE]', '[DATABASE]');
        $sessionCount = 185691686;
        $request = (new BatchCreateSessionsRequest())
            ->setDatabase($formattedDatabase)
            ->setSessionCount($sessionCount);
        $response = $gapicClient->batchCreateSessions($request);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.spanner.v1.Spanner/BatchCreateSessions', $actualFuncCall);
        $actualValue = $actualRequestObject->getDatabase();
        $this->assertProtobufEquals($formattedDatabase, $actualValue);
        $actualValue = $actualRequestObject->getSessionCount();
        $this->assertProtobufEquals($sessionCount, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function batchCreateSessionsExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedDatabase = $gapicClient->databaseName('[PROJECT]', '[INSTANCE]', '[DATABASE]');
        $sessionCount = 185691686;
        $request = (new BatchCreateSessionsRequest())
            ->setDatabase($formattedDatabase)
            ->setSessionCount($sessionCount);
        try {
            $gapicClient->batchCreateSessions($request);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function beginTransactionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $id = '27';
        $expectedResponse = new Transaction();
        $expectedResponse->setId($id);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedSession = $gapicClient->sessionName('[PROJECT]', '[INSTANCE]', '[DATABASE]', '[SESSION]');
        $options = new TransactionOptions();
        $request = (new BeginTransactionRequest())
            ->setSession($formattedSession)
            ->setOptions($options);
        $response = $gapicClient->beginTransaction($request);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.spanner.v1.Spanner/BeginTransaction', $actualFuncCall);
        $actualValue = $actualRequestObject->getSession();
        $this->assertProtobufEquals($formattedSession, $actualValue);
        $actualValue = $actualRequestObject->getOptions();
        $this->assertProtobufEquals($options, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function beginTransactionExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedSession = $gapicClient->sessionName('[PROJECT]', '[INSTANCE]', '[DATABASE]', '[SESSION]');
        $options = new TransactionOptions();
        $request = (new BeginTransactionRequest())
            ->setSession($formattedSession)
            ->setOptions($options);
        try {
            $gapicClient->beginTransaction($request);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function commitTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new CommitResponse();
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedSession = $gapicClient->sessionName('[PROJECT]', '[INSTANCE]', '[DATABASE]', '[SESSION]');
        $mutations = [];
        $request = (new CommitRequest())
            ->setSession($formattedSession)
            ->setMutations($mutations);
        $response = $gapicClient->commit($request);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.spanner.v1.Spanner/Commit', $actualFuncCall);
        $actualValue = $actualRequestObject->getSession();
        $this->assertProtobufEquals($formattedSession, $actualValue);
        $actualValue = $actualRequestObject->getMutations();
        $this->assertProtobufEquals($mutations, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function commitExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedSession = $gapicClient->sessionName('[PROJECT]', '[INSTANCE]', '[DATABASE]', '[SESSION]');
        $mutations = [];
        $request = (new CommitRequest())
            ->setSession($formattedSession)
            ->setMutations($mutations);
        try {
            $gapicClient->commit($request);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createSessionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name = 'name3373707';
        $creatorRole = 'creatorRole-1605962583';
        $expectedResponse = new Session();
        $expectedResponse->setName($name);
        $expectedResponse->setCreatorRole($creatorRole);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedDatabase = $gapicClient->databaseName('[PROJECT]', '[INSTANCE]', '[DATABASE]');
        $request = (new CreateSessionRequest())
            ->setDatabase($formattedDatabase);
        $response = $gapicClient->createSession($request);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.spanner.v1.Spanner/CreateSession', $actualFuncCall);
        $actualValue = $actualRequestObject->getDatabase();
        $this->assertProtobufEquals($formattedDatabase, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createSessionExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedDatabase = $gapicClient->databaseName('[PROJECT]', '[INSTANCE]', '[DATABASE]');
        $request = (new CreateSessionRequest())
            ->setDatabase($formattedDatabase);
        try {
            $gapicClient->createSession($request);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function deleteSessionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new GPBEmpty();
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->sessionName('[PROJECT]', '[INSTANCE]', '[DATABASE]', '[SESSION]');
        $request = (new DeleteSessionRequest())
            ->setName($formattedName);
        $gapicClient->deleteSession($request);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.spanner.v1.Spanner/DeleteSession', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function deleteSessionExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->sessionName('[PROJECT]', '[INSTANCE]', '[DATABASE]', '[SESSION]');
        $request = (new DeleteSessionRequest())
            ->setName($formattedName);
        try {
            $gapicClient->deleteSession($request);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function executeBatchDmlTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new ExecuteBatchDmlResponse();
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedSession = $gapicClient->sessionName('[PROJECT]', '[INSTANCE]', '[DATABASE]', '[SESSION]');
        $transaction = new TransactionSelector();
        $statements = [];
        $seqno = 109325920;
        $request = (new ExecuteBatchDmlRequest())
            ->setSession($formattedSession)
            ->setTransaction($transaction)
            ->setStatements($statements)
            ->setSeqno($seqno);
        $response = $gapicClient->executeBatchDml($request);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.spanner.v1.Spanner/ExecuteBatchDml', $actualFuncCall);
        $actualValue = $actualRequestObject->getSession();
        $this->assertProtobufEquals($formattedSession, $actualValue);
        $actualValue = $actualRequestObject->getTransaction();
        $this->assertProtobufEquals($transaction, $actualValue);
        $actualValue = $actualRequestObject->getStatements();
        $this->assertProtobufEquals($statements, $actualValue);
        $actualValue = $actualRequestObject->getSeqno();
        $this->assertProtobufEquals($seqno, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function executeBatchDmlExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedSession = $gapicClient->sessionName('[PROJECT]', '[INSTANCE]', '[DATABASE]', '[SESSION]');
        $transaction = new TransactionSelector();
        $statements = [];
        $seqno = 109325920;
        $request = (new ExecuteBatchDmlRequest())
            ->setSession($formattedSession)
            ->setTransaction($transaction)
            ->setStatements($statements)
            ->setSeqno($seqno);
        try {
            $gapicClient->executeBatchDml($request);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function executeSqlTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new ResultSet();
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedSession = $gapicClient->sessionName('[PROJECT]', '[INSTANCE]', '[DATABASE]', '[SESSION]');
        $sql = 'sql114126';
        $request = (new ExecuteSqlRequest())
            ->setSession($formattedSession)
            ->setSql($sql);
        $response = $gapicClient->executeSql($request);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.spanner.v1.Spanner/ExecuteSql', $actualFuncCall);
        $actualValue = $actualRequestObject->getSession();
        $this->assertProtobufEquals($formattedSession, $actualValue);
        $actualValue = $actualRequestObject->getSql();
        $this->assertProtobufEquals($sql, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function executeSqlExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedSession = $gapicClient->sessionName('[PROJECT]', '[INSTANCE]', '[DATABASE]', '[SESSION]');
        $sql = 'sql114126';
        $request = (new ExecuteSqlRequest())
            ->setSession($formattedSession)
            ->setSql($sql);
        try {
            $gapicClient->executeSql($request);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function executeStreamingSqlTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $chunkedValue = true;
        $resumeToken2 = '90';
        $expectedResponse = new PartialResultSet();
        $expectedResponse->setChunkedValue($chunkedValue);
        $expectedResponse->setResumeToken($resumeToken2);
        $transport->addResponse($expectedResponse);
        $chunkedValue2 = false;
        $resumeToken3 = '91';
        $expectedResponse2 = new PartialResultSet();
        $expectedResponse2->setChunkedValue($chunkedValue2);
        $expectedResponse2->setResumeToken($resumeToken3);
        $transport->addResponse($expectedResponse2);
        $chunkedValue3 = true;
        $resumeToken4 = '92';
        $expectedResponse3 = new PartialResultSet();
        $expectedResponse3->setChunkedValue($chunkedValue3);
        $expectedResponse3->setResumeToken($resumeToken4);
        $transport->addResponse($expectedResponse3);
        // Mock request
        $formattedSession = $gapicClient->sessionName('[PROJECT]', '[INSTANCE]', '[DATABASE]', '[SESSION]');
        $sql = 'sql114126';
        $request = (new ExecuteSqlRequest())
            ->setSession($formattedSession)
            ->setSql($sql);
        $serverStream = $gapicClient->executeStreamingSql($request);
        $this->assertInstanceOf(ServerStream::class, $serverStream);
        $responses = iterator_to_array($serverStream->readAll());
        $expectedResponses = [];
        $expectedResponses[] = $expectedResponse;
        $expectedResponses[] = $expectedResponse2;
        $expectedResponses[] = $expectedResponse3;
        $this->assertEquals($expectedResponses, $responses);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.spanner.v1.Spanner/ExecuteStreamingSql', $actualFuncCall);
        $actualValue = $actualRequestObject->getSession();
        $this->assertProtobufEquals($formattedSession, $actualValue);
        $actualValue = $actualRequestObject->getSql();
        $this->assertProtobufEquals($sql, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function executeStreamingSqlExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->setStreamingStatus($status);
        $this->assertTrue($transport->isExhausted());
        // Mock request
        $formattedSession = $gapicClient->sessionName('[PROJECT]', '[INSTANCE]', '[DATABASE]', '[SESSION]');
        $sql = 'sql114126';
        $request = (new ExecuteSqlRequest())
            ->setSession($formattedSession)
            ->setSql($sql);
        $serverStream = $gapicClient->executeStreamingSql($request);
        $results = $serverStream->readAll();
        try {
            iterator_to_array($results);
            // If the close stream method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getSessionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name2 = 'name2-1052831874';
        $creatorRole = 'creatorRole-1605962583';
        $expectedResponse = new Session();
        $expectedResponse->setName($name2);
        $expectedResponse->setCreatorRole($creatorRole);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->sessionName('[PROJECT]', '[INSTANCE]', '[DATABASE]', '[SESSION]');
        $request = (new GetSessionRequest())
            ->setName($formattedName);
        $response = $gapicClient->getSession($request);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.spanner.v1.Spanner/GetSession', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getSessionExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->sessionName('[PROJECT]', '[INSTANCE]', '[DATABASE]', '[SESSION]');
        $request = (new GetSessionRequest())
            ->setName($formattedName);
        try {
            $gapicClient->getSession($request);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listSessionsTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $nextPageToken = '';
        $sessionsElement = new Session();
        $sessions = [
            $sessionsElement,
        ];
        $expectedResponse = new ListSessionsResponse();
        $expectedResponse->setNextPageToken($nextPageToken);
        $expectedResponse->setSessions($sessions);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedDatabase = $gapicClient->databaseName('[PROJECT]', '[INSTANCE]', '[DATABASE]');
        $request = (new ListSessionsRequest())
            ->setDatabase($formattedDatabase);
        $response = $gapicClient->listSessions($request);
        $this->assertEquals($expectedResponse, $response->getPage()->getResponseObject());
        $resources = iterator_to_array($response->iterateAllElements());
        $this->assertSame(1, count($resources));
        $this->assertEquals($expectedResponse->getSessions()[0], $resources[0]);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.spanner.v1.Spanner/ListSessions', $actualFuncCall);
        $actualValue = $actualRequestObject->getDatabase();
        $this->assertProtobufEquals($formattedDatabase, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listSessionsExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedDatabase = $gapicClient->databaseName('[PROJECT]', '[INSTANCE]', '[DATABASE]');
        $request = (new ListSessionsRequest())
            ->setDatabase($formattedDatabase);
        try {
            $gapicClient->listSessions($request);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function partitionQueryTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new PartitionResponse();
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedSession = $gapicClient->sessionName('[PROJECT]', '[INSTANCE]', '[DATABASE]', '[SESSION]');
        $sql = 'sql114126';
        $request = (new PartitionQueryRequest())
            ->setSession($formattedSession)
            ->setSql($sql);
        $response = $gapicClient->partitionQuery($request);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.spanner.v1.Spanner/PartitionQuery', $actualFuncCall);
        $actualValue = $actualRequestObject->getSession();
        $this->assertProtobufEquals($formattedSession, $actualValue);
        $actualValue = $actualRequestObject->getSql();
        $this->assertProtobufEquals($sql, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function partitionQueryExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedSession = $gapicClient->sessionName('[PROJECT]', '[INSTANCE]', '[DATABASE]', '[SESSION]');
        $sql = 'sql114126';
        $request = (new PartitionQueryRequest())
            ->setSession($formattedSession)
            ->setSql($sql);
        try {
            $gapicClient->partitionQuery($request);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function partitionReadTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new PartitionResponse();
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedSession = $gapicClient->sessionName('[PROJECT]', '[INSTANCE]', '[DATABASE]', '[SESSION]');
        $table = 'table110115790';
        $keySet = new KeySet();
        $request = (new PartitionReadRequest())
            ->setSession($formattedSession)
            ->setTable($table)
            ->setKeySet($keySet);
        $response = $gapicClient->partitionRead($request);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.spanner.v1.Spanner/PartitionRead', $actualFuncCall);
        $actualValue = $actualRequestObject->getSession();
        $this->assertProtobufEquals($formattedSession, $actualValue);
        $actualValue = $actualRequestObject->getTable();
        $this->assertProtobufEquals($table, $actualValue);
        $actualValue = $actualRequestObject->getKeySet();
        $this->assertProtobufEquals($keySet, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function partitionReadExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedSession = $gapicClient->sessionName('[PROJECT]', '[INSTANCE]', '[DATABASE]', '[SESSION]');
        $table = 'table110115790';
        $keySet = new KeySet();
        $request = (new PartitionReadRequest())
            ->setSession($formattedSession)
            ->setTable($table)
            ->setKeySet($keySet);
        try {
            $gapicClient->partitionRead($request);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function readTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new ResultSet();
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedSession = $gapicClient->sessionName('[PROJECT]', '[INSTANCE]', '[DATABASE]', '[SESSION]');
        $table = 'table110115790';
        $columns = [];
        $keySet = new KeySet();
        $request = (new ReadRequest())
            ->setSession($formattedSession)
            ->setTable($table)
            ->setColumns($columns)
            ->setKeySet($keySet);
        $response = $gapicClient->read($request);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.spanner.v1.Spanner/Read', $actualFuncCall);
        $actualValue = $actualRequestObject->getSession();
        $this->assertProtobufEquals($formattedSession, $actualValue);
        $actualValue = $actualRequestObject->getTable();
        $this->assertProtobufEquals($table, $actualValue);
        $actualValue = $actualRequestObject->getColumns();
        $this->assertProtobufEquals($columns, $actualValue);
        $actualValue = $actualRequestObject->getKeySet();
        $this->assertProtobufEquals($keySet, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function readExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedSession = $gapicClient->sessionName('[PROJECT]', '[INSTANCE]', '[DATABASE]', '[SESSION]');
        $table = 'table110115790';
        $columns = [];
        $keySet = new KeySet();
        $request = (new ReadRequest())
            ->setSession($formattedSession)
            ->setTable($table)
            ->setColumns($columns)
            ->setKeySet($keySet);
        try {
            $gapicClient->read($request);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function rollbackTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new GPBEmpty();
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedSession = $gapicClient->sessionName('[PROJECT]', '[INSTANCE]', '[DATABASE]', '[SESSION]');
        $transactionId = '28';
        $request = (new RollbackRequest())
            ->setSession($formattedSession)
            ->setTransactionId($transactionId);
        $gapicClient->rollback($request);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.spanner.v1.Spanner/Rollback', $actualFuncCall);
        $actualValue = $actualRequestObject->getSession();
        $this->assertProtobufEquals($formattedSession, $actualValue);
        $actualValue = $actualRequestObject->getTransactionId();
        $this->assertProtobufEquals($transactionId, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function rollbackExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedSession = $gapicClient->sessionName('[PROJECT]', '[INSTANCE]', '[DATABASE]', '[SESSION]');
        $transactionId = '28';
        $request = (new RollbackRequest())
            ->setSession($formattedSession)
            ->setTransactionId($transactionId);
        try {
            $gapicClient->rollback($request);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function streamingReadTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $chunkedValue = true;
        $resumeToken2 = '90';
        $expectedResponse = new PartialResultSet();
        $expectedResponse->setChunkedValue($chunkedValue);
        $expectedResponse->setResumeToken($resumeToken2);
        $transport->addResponse($expectedResponse);
        $chunkedValue2 = false;
        $resumeToken3 = '91';
        $expectedResponse2 = new PartialResultSet();
        $expectedResponse2->setChunkedValue($chunkedValue2);
        $expectedResponse2->setResumeToken($resumeToken3);
        $transport->addResponse($expectedResponse2);
        $chunkedValue3 = true;
        $resumeToken4 = '92';
        $expectedResponse3 = new PartialResultSet();
        $expectedResponse3->setChunkedValue($chunkedValue3);
        $expectedResponse3->setResumeToken($resumeToken4);
        $transport->addResponse($expectedResponse3);
        // Mock request
        $formattedSession = $gapicClient->sessionName('[PROJECT]', '[INSTANCE]', '[DATABASE]', '[SESSION]');
        $table = 'table110115790';
        $columns = [];
        $keySet = new KeySet();
        $request = (new ReadRequest())
            ->setSession($formattedSession)
            ->setTable($table)
            ->setColumns($columns)
            ->setKeySet($keySet);
        $serverStream = $gapicClient->streamingRead($request);
        $this->assertInstanceOf(ServerStream::class, $serverStream);
        $responses = iterator_to_array($serverStream->readAll());
        $expectedResponses = [];
        $expectedResponses[] = $expectedResponse;
        $expectedResponses[] = $expectedResponse2;
        $expectedResponses[] = $expectedResponse3;
        $this->assertEquals($expectedResponses, $responses);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.spanner.v1.Spanner/StreamingRead', $actualFuncCall);
        $actualValue = $actualRequestObject->getSession();
        $this->assertProtobufEquals($formattedSession, $actualValue);
        $actualValue = $actualRequestObject->getTable();
        $this->assertProtobufEquals($table, $actualValue);
        $actualValue = $actualRequestObject->getColumns();
        $this->assertProtobufEquals($columns, $actualValue);
        $actualValue = $actualRequestObject->getKeySet();
        $this->assertProtobufEquals($keySet, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function streamingReadExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->setStreamingStatus($status);
        $this->assertTrue($transport->isExhausted());
        // Mock request
        $formattedSession = $gapicClient->sessionName('[PROJECT]', '[INSTANCE]', '[DATABASE]', '[SESSION]');
        $table = 'table110115790';
        $columns = [];
        $keySet = new KeySet();
        $request = (new ReadRequest())
            ->setSession($formattedSession)
            ->setTable($table)
            ->setColumns($columns)
            ->setKeySet($keySet);
        $serverStream = $gapicClient->streamingRead($request);
        $results = $serverStream->readAll();
        try {
            iterator_to_array($results);
            // If the close stream method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function batchCreateSessionsAsyncTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new BatchCreateSessionsResponse();
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedDatabase = $gapicClient->databaseName('[PROJECT]', '[INSTANCE]', '[DATABASE]');
        $sessionCount = 185691686;
        $request = (new BatchCreateSessionsRequest())
            ->setDatabase($formattedDatabase)
            ->setSessionCount($sessionCount);
        $response = $gapicClient->batchCreateSessionsAsync($request)->wait();
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.spanner.v1.Spanner/BatchCreateSessions', $actualFuncCall);
        $actualValue = $actualRequestObject->getDatabase();
        $this->assertProtobufEquals($formattedDatabase, $actualValue);
        $actualValue = $actualRequestObject->getSessionCount();
        $this->assertProtobufEquals($sessionCount, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }
}
