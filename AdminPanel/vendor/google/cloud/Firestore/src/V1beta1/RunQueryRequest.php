<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1beta1/firestore.proto

namespace Google\Cloud\Firestore\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for [Firestore.RunQuery][google.firestore.v1beta1.Firestore.RunQuery].
 *
 * Generated from protobuf message <code>google.firestore.v1beta1.RunQueryRequest</code>
 */
class RunQueryRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource name. In the format:
     * `projects/{project_id}/databases/{database_id}/documents` or
     * `projects/{project_id}/databases/{database_id}/documents/{document_path}`.
     * For example:
     * `projects/my-project/databases/my-database/documents` or
     * `projects/my-project/databases/my-database/documents/chatrooms/my-chatroom`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $parent = '';
    protected $query_type;
    protected $consistency_selector;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent resource name. In the format:
     *           `projects/{project_id}/databases/{database_id}/documents` or
     *           `projects/{project_id}/databases/{database_id}/documents/{document_path}`.
     *           For example:
     *           `projects/my-project/databases/my-database/documents` or
     *           `projects/my-project/databases/my-database/documents/chatrooms/my-chatroom`
     *     @type \Google\Cloud\Firestore\V1beta1\StructuredQuery $structured_query
     *           A structured query.
     *     @type string $transaction
     *           Reads documents in a transaction.
     *     @type \Google\Cloud\Firestore\V1beta1\TransactionOptions $new_transaction
     *           Starts a new transaction and reads the documents.
     *           Defaults to a read-only transaction.
     *           The new transaction ID will be returned as the first response in the
     *           stream.
     *     @type \Google\Protobuf\Timestamp $read_time
     *           Reads documents as they were at the given time.
     *           This may not be older than 60 seconds.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Firestore\V1Beta1\Firestore::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent resource name. In the format:
     * `projects/{project_id}/databases/{database_id}/documents` or
     * `projects/{project_id}/databases/{database_id}/documents/{document_path}`.
     * For example:
     * `projects/my-project/databases/my-database/documents` or
     * `projects/my-project/databases/my-database/documents/chatrooms/my-chatroom`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent resource name. In the format:
     * `projects/{project_id}/databases/{database_id}/documents` or
     * `projects/{project_id}/databases/{database_id}/documents/{document_path}`.
     * For example:
     * `projects/my-project/databases/my-database/documents` or
     * `projects/my-project/databases/my-database/documents/chatrooms/my-chatroom`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * A structured query.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.StructuredQuery structured_query = 2;</code>
     * @return \Google\Cloud\Firestore\V1beta1\StructuredQuery
     */
    public function getStructuredQuery()
    {
        return $this->readOneof(2);
    }

    /**
     * A structured query.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.StructuredQuery structured_query = 2;</code>
     * @param \Google\Cloud\Firestore\V1beta1\StructuredQuery $var
     * @return $this
     */
    public function setStructuredQuery($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Firestore\V1beta1\StructuredQuery::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Reads documents in a transaction.
     *
     * Generated from protobuf field <code>bytes transaction = 5;</code>
     * @return string
     */
    public function getTransaction()
    {
        return $this->readOneof(5);
    }

    /**
     * Reads documents in a transaction.
     *
     * Generated from protobuf field <code>bytes transaction = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setTransaction($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Starts a new transaction and reads the documents.
     * Defaults to a read-only transaction.
     * The new transaction ID will be returned as the first response in the
     * stream.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.TransactionOptions new_transaction = 6;</code>
     * @return \Google\Cloud\Firestore\V1beta1\TransactionOptions
     */
    public function getNewTransaction()
    {
        return $this->readOneof(6);
    }

    /**
     * Starts a new transaction and reads the documents.
     * Defaults to a read-only transaction.
     * The new transaction ID will be returned as the first response in the
     * stream.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.TransactionOptions new_transaction = 6;</code>
     * @param \Google\Cloud\Firestore\V1beta1\TransactionOptions $var
     * @return $this
     */
    public function setNewTransaction($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Firestore\V1beta1\TransactionOptions::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Reads documents as they were at the given time.
     * This may not be older than 60 seconds.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_time = 7;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getReadTime()
    {
        return $this->readOneof(7);
    }

    /**
     * Reads documents as they were at the given time.
     * This may not be older than 60 seconds.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_time = 7;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setReadTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getQueryType()
    {
        return $this->whichOneof("query_type");
    }

    /**
     * @return string
     */
    public function getConsistencySelector()
    {
        return $this->whichOneof("consistency_selector");
    }

}

