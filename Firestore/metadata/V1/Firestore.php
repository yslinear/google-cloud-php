<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1/firestore.proto

namespace GPBMetadata\Google\Firestore\V1;

class Firestore
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Firestore\V1\AggregationResult::initOnce();
        \GPBMetadata\Google\Firestore\V1\Common::initOnce();
        \GPBMetadata\Google\Firestore\V1\Document::initOnce();
        \GPBMetadata\Google\Firestore\V1\Query::initOnce();
        \GPBMetadata\Google\Firestore\V1\Write::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�J
#google/firestore/v1/firestore.protogoogle.firestore.v1google/api/client.protogoogle/api/field_behavior.proto,google/firestore/v1/aggregation_result.proto google/firestore/v1/common.proto"google/firestore/v1/document.protogoogle/firestore/v1/query.protogoogle/firestore/v1/write.protogoogle/protobuf/empty.protogoogle/protobuf/timestamp.protogoogle/rpc/status.proto"�
GetDocumentRequest
name (	B�A/
mask (2!.google.firestore.v1.DocumentMask
transaction (H /
	read_time (2.google.protobuf.TimestampH B
consistency_selector"�
ListDocumentsRequest
parent (	B�A
collection_id (	B�A
	page_size (B�A

page_token (	B�A
order_by (	B�A4
mask (2!.google.firestore.v1.DocumentMaskB�A
transaction (H /
	read_time
 (2.google.protobuf.TimestampH 
show_missing (B
consistency_selector"b
ListDocumentsResponse0
	documents (2.google.firestore.v1.Document
next_page_token (	"�
CreateDocumentRequest
parent (	B�A
collection_id (	B�A
document_id (	4
document (2.google.firestore.v1.DocumentB�A/
mask (2!.google.firestore.v1.DocumentMask"�
UpdateDocumentRequest4
document (2.google.firestore.v1.DocumentB�A6
update_mask (2!.google.firestore.v1.DocumentMask/
mask (2!.google.firestore.v1.DocumentMask;
current_document (2!.google.firestore.v1.Precondition"g
DeleteDocumentRequest
name (	B�A;
current_document (2!.google.firestore.v1.Precondition"�
BatchGetDocumentsRequest
database (	B�A
	documents (	/
mask (2!.google.firestore.v1.DocumentMask
transaction (H B
new_transaction (2\'.google.firestore.v1.TransactionOptionsH /
	read_time (2.google.protobuf.TimestampH B
consistency_selector"�
BatchGetDocumentsResponse.
found (2.google.firestore.v1.DocumentH 
missing (	H 
transaction (-
	read_time (2.google.protobuf.TimestampB
result"j
BeginTransactionRequest
database (	B�A8
options (2\'.google.firestore.v1.TransactionOptions"/
BeginTransactionResponse
transaction ("g
CommitRequest
database (	B�A*
writes (2.google.firestore.v1.Write
transaction ("z
CommitResponse7
write_results (2 .google.firestore.v1.WriteResult/
commit_time (2.google.protobuf.Timestamp"B
RollbackRequest
database (	B�A
transaction (B�A"�
RunQueryRequest
parent (	B�A@
structured_query (2$.google.firestore.v1.StructuredQueryH 
transaction (HB
new_transaction (2\'.google.firestore.v1.TransactionOptionsH/
	read_time (2.google.protobuf.TimestampHB

query_typeB
consistency_selector"�
RunQueryResponse
transaction (/
document (2.google.firestore.v1.Document-
	read_time (2.google.protobuf.Timestamp
skipped_results (
done (H B
continuation_selector"�
RunAggregationQueryRequest
parent (	B�AW
structured_aggregation_query (2/.google.firestore.v1.StructuredAggregationQueryH 
transaction (HB
new_transaction (2\'.google.firestore.v1.TransactionOptionsH/
	read_time (2.google.protobuf.TimestampHB

query_typeB
consistency_selector"�
RunAggregationQueryResponse6
result (2&.google.firestore.v1.AggregationResult
transaction (-
	read_time (2.google.protobuf.Timestamp"�
PartitionQueryRequest
parent (	B�A@
structured_query (2$.google.firestore.v1.StructuredQueryH 
partition_count (

page_token (	
	page_size (/
	read_time (2.google.protobuf.TimestampHB

query_typeB
consistency_selector"b
PartitionQueryResponse/

partitions (2.google.firestore.v1.Cursor
next_page_token (	"�
WriteRequest
database (	B�A
	stream_id (	*
writes (2.google.firestore.v1.Write
stream_token (=
labels (2-.google.firestore.v1.WriteRequest.LabelsEntry-
LabelsEntry
key (	
value (	:8"�
WriteResponse
	stream_id (	
stream_token (7
write_results (2 .google.firestore.v1.WriteResult/
commit_time (2.google.protobuf.Timestamp"�
ListenRequest
database (	B�A1

add_target (2.google.firestore.v1.TargetH 
remove_target (H >
labels (2..google.firestore.v1.ListenRequest.LabelsEntry-
LabelsEntry
key (	
value (	:8B
target_change"�
ListenResponse:
target_change (2!.google.firestore.v1.TargetChangeH >
document_change (2#.google.firestore.v1.DocumentChangeH >
document_delete (2#.google.firestore.v1.DocumentDeleteH >
document_remove (2#.google.firestore.v1.DocumentRemoveH 6
filter (2$.google.firestore.v1.ExistenceFilterH B
response_type"�
Target8
query (2\'.google.firestore.v1.Target.QueryTargetH @
	documents (2+.google.firestore.v1.Target.DocumentsTargetH 
resume_token (H/
	read_time (2.google.protobuf.TimestampH
	target_id (
once ($
DocumentsTarget
	documents (	m
QueryTarget
parent (	@
structured_query (2$.google.firestore.v1.StructuredQueryH B

query_typeB
target_typeB
resume_type"�
TargetChangeN
target_change_type (22.google.firestore.v1.TargetChange.TargetChangeType

target_ids (!
cause (2.google.rpc.Status
resume_token (-
	read_time (2.google.protobuf.Timestamp"N
TargetChangeType
	NO_CHANGE 
ADD

REMOVE
CURRENT	
RESET"�
ListCollectionIdsRequest
parent (	B�A
	page_size (

page_token (	/
	read_time (2.google.protobuf.TimestampH B
consistency_selector"L
ListCollectionIdsResponse
collection_ids (	
next_page_token (	"�
BatchWriteRequest
database (	B�A*
writes (2.google.firestore.v1.WriteB
labels (22.google.firestore.v1.BatchWriteRequest.LabelsEntry-
LabelsEntry
key (	
value (	:8"q
BatchWriteResponse7
write_results (2 .google.firestore.v1.WriteResult"
status (2.google.rpc.Status2�
	Firestore�
GetDocument\'.google.firestore.v1.GetDocumentRequest.google.firestore.v1.Document"8���20/v1/{name=projects/*/databases/*/documents/*/**}�
ListDocuments).google.firestore.v1.ListDocumentsRequest*.google.firestore.v1.ListDocumentsResponse"�����B/v1/{parent=projects/*/databases/*/documents/*/**}/{collection_id}Z?=/v1/{parent=projects/*/databases/*/documents}/{collection_id}�
UpdateDocument*.google.firestore.v1.UpdateDocumentRequest.google.firestore.v1.Document"b���E29/v1/{document.name=projects/*/databases/*/documents/*/**}:document�Adocument,update_mask�
DeleteDocument*.google.firestore.v1.DeleteDocumentRequest.google.protobuf.Empty"?���2*0/v1/{name=projects/*/databases/*/documents/*/**}�Aname�
BatchGetDocuments-.google.firestore.v1.BatchGetDocumentsRequest..google.firestore.v1.BatchGetDocumentsResponse"C���="8/v1/{database=projects/*/databases/*}/documents:batchGet:*0�
BeginTransaction,.google.firestore.v1.BeginTransactionRequest-.google.firestore.v1.BeginTransactionResponse"V���E"@/v1/{database=projects/*/databases/*}/documents:beginTransaction:*�Adatabase�
Commit".google.firestore.v1.CommitRequest#.google.firestore.v1.CommitResponse"S���;"6/v1/{database=projects/*/databases/*}/documents:commit:*�Adatabase,writes�
Rollback$.google.firestore.v1.RollbackRequest.google.protobuf.Empty"Z���="8/v1/{database=projects/*/databases/*}/documents:rollback:*�Adatabase,transaction�
RunQuery$.google.firestore.v1.RunQueryRequest%.google.firestore.v1.RunQueryResponse"����}"6/v1/{parent=projects/*/databases/*/documents}:runQuery:*Z@";/v1/{parent=projects/*/databases/*/documents/*/**}:runQuery:*0�
RunAggregationQuery/.google.firestore.v1.RunAggregationQueryRequest0.google.firestore.v1.RunAggregationQueryResponse"�����"A/v1/{parent=projects/*/databases/*/documents}:runAggregationQuery:*ZK"F/v1/{parent=projects/*/databases/*/documents/*/**}:runAggregationQuery:*0�
PartitionQuery*.google.firestore.v1.PartitionQueryRequest+.google.firestore.v1.PartitionQueryResponse"�����"</v1/{parent=projects/*/databases/*/documents}:partitionQuery:*ZF"A/v1/{parent=projects/*/databases/*/documents/*/**}:partitionQuery:*�
Write!.google.firestore.v1.WriteRequest".google.firestore.v1.WriteResponse"@���:"5/v1/{database=projects/*/databases/*}/documents:write:*(0�
Listen".google.firestore.v1.ListenRequest#.google.firestore.v1.ListenResponse"A���;"6/v1/{database=projects/*/databases/*}/documents:listen:*(0�
ListCollectionIds-.google.firestore.v1.ListCollectionIdsRequest..google.firestore.v1.ListCollectionIdsResponse"�����"?/v1/{parent=projects/*/databases/*/documents}:listCollectionIds:*ZI"D/v1/{parent=projects/*/databases/*/documents/*/**}:listCollectionIds:*�Aparent�

BatchWrite&.google.firestore.v1.BatchWriteRequest\'.google.firestore.v1.BatchWriteResponse"E���?":/v1/{database=projects/*/databases/*}/documents:batchWrite:*�
CreateDocument*.google.firestore.v1.CreateDocumentRequest.google.firestore.v1.Document"R���L"@/v1/{parent=projects/*/databases/*/documents/**}/{collection_id}:documentv�Afirestore.googleapis.com�AXhttps://www.googleapis.com/auth/cloud-platform,https://www.googleapis.com/auth/datastoreB�
com.google.firestore.v1BFirestoreProtoPZ;cloud.google.com/go/firestore/apiv1/firestorepb;firestorepb�Google.Cloud.Firestore.V1�Google\\Cloud\\Firestore\\V1�Google::Cloud::Firestore::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

