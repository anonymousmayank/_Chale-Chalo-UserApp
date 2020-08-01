<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/intent.proto

namespace Google\Cloud\Dialogflow\V2\Intent\Message;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The media content card for Actions on Google.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.Intent.Message.MediaContent</code>
 */
class MediaContent extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. What type of media is the content (ie "audio").
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Intent.Message.MediaContent.ResponseMediaType media_type = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $media_type = 0;
    /**
     * Required. List of media objects.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.Intent.Message.MediaContent.ResponseMediaObject media_objects = 2;</code>
     */
    private $media_objects;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $media_type
     *           Optional. What type of media is the content (ie "audio").
     *     @type \Google\Cloud\Dialogflow\V2\Intent\Message\MediaContent\ResponseMediaObject[]|\Google\Protobuf\Internal\RepeatedField $media_objects
     *           Required. List of media objects.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Intent::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. What type of media is the content (ie "audio").
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Intent.Message.MediaContent.ResponseMediaType media_type = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getMediaType()
    {
        return $this->media_type;
    }

    /**
     * Optional. What type of media is the content (ie "audio").
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Intent.Message.MediaContent.ResponseMediaType media_type = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setMediaType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dialogflow\V2\Intent_Message_MediaContent_ResponseMediaType::class);
        $this->media_type = $var;

        return $this;
    }

    /**
     * Required. List of media objects.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.Intent.Message.MediaContent.ResponseMediaObject media_objects = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMediaObjects()
    {
        return $this->media_objects;
    }

    /**
     * Required. List of media objects.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.Intent.Message.MediaContent.ResponseMediaObject media_objects = 2;</code>
     * @param \Google\Cloud\Dialogflow\V2\Intent\Message\MediaContent\ResponseMediaObject[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMediaObjects($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\V2\Intent\Message\MediaContent\ResponseMediaObject::class);
        $this->media_objects = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MediaContent::class, \Google\Cloud\Dialogflow\V2\Intent_Message_MediaContent::class);

