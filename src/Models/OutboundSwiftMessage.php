<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AntChain\TSDAP\Models;

use AlibabaCloud\Tea\Model;

class OutboundSwiftMessage extends Model {
    protected $_name = [
        'messageId' => 'message_id',
        'format' => 'format',
        'messageType' => 'message_type',
        'messageHash' => 'message_hash',
        'receiverBic' => 'receiver_bic',
        'receiverDn' => 'receiver_dn',
        'claimedAt' => 'claimed_at',
        'ackDeadlineAt' => 'ack_deadline_at',
        'rawMessage' => 'raw_message',
    ];
    public function validate() {
        Model::validateRequired('messageId', $this->messageId, true);
        Model::validateRequired('format', $this->format, true);
        Model::validateRequired('messageType', $this->messageType, true);
        Model::validateRequired('messageHash', $this->messageHash, true);
        Model::validateRequired('claimedAt', $this->claimedAt, true);
        Model::validateRequired('ackDeadlineAt', $this->ackDeadlineAt, true);
        Model::validateRequired('rawMessage', $this->rawMessage, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->messageId) {
            $res['message_id'] = $this->messageId;
        }
        if (null !== $this->format) {
            $res['format'] = $this->format;
        }
        if (null !== $this->messageType) {
            $res['message_type'] = $this->messageType;
        }
        if (null !== $this->messageHash) {
            $res['message_hash'] = $this->messageHash;
        }
        if (null !== $this->receiverBic) {
            $res['receiver_bic'] = $this->receiverBic;
        }
        if (null !== $this->receiverDn) {
            $res['receiver_dn'] = $this->receiverDn;
        }
        if (null !== $this->claimedAt) {
            $res['claimed_at'] = $this->claimedAt;
        }
        if (null !== $this->ackDeadlineAt) {
            $res['ack_deadline_at'] = $this->ackDeadlineAt;
        }
        if (null !== $this->rawMessage) {
            $res['raw_message'] = $this->rawMessage;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return OutboundSwiftMessage
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['message_id'])){
            $model->messageId = $map['message_id'];
        }
        if(isset($map['format'])){
            $model->format = $map['format'];
        }
        if(isset($map['message_type'])){
            $model->messageType = $map['message_type'];
        }
        if(isset($map['message_hash'])){
            $model->messageHash = $map['message_hash'];
        }
        if(isset($map['receiver_bic'])){
            $model->receiverBic = $map['receiver_bic'];
        }
        if(isset($map['receiver_dn'])){
            $model->receiverDn = $map['receiver_dn'];
        }
        if(isset($map['claimed_at'])){
            $model->claimedAt = $map['claimed_at'];
        }
        if(isset($map['ack_deadline_at'])){
            $model->ackDeadlineAt = $map['ack_deadline_at'];
        }
        if(isset($map['raw_message'])){
            $model->rawMessage = $map['raw_message'];
        }
        return $model;
    }
    // DAP给报文消息分配的唯一ID，使用无横线 UUID，固定 32 位
    /**
     * @example 550e8400e29b41d4a716446655440000
     * @var string
     */
    public $messageId;

    // 报文格式：MT 或 MX
    /**
     * @example MT
     * @var string
     */
    public $format;

    // 报文类型，例如 MT542、pacs.009
    /**
     * @example MT542
     * @var string
     */
    public $messageType;

    // 报文原文 SHA-256 摘要
    /**
     * @example 52a44d7c6d3a2b6c8f1a9d0e7c6b5a4f3e2d1c0b9a887766554433221100abcd
     * @var string
     */
    public $messageHash;

    // 报文预期接收方BIC
    /**
     * @example DAP000xxxx
     * @var string
     */
    public $receiverBic;

    // 报文预期接收方DN
    /**
     * @example DAP000xxxx
     * @var string
     */
    public $receiverDn;

    // 本次领取时间，ISO-8601 UTC 字符串
    /**
     * @example 2026-08-03T07:25:30.123Z
     * @var string
     */
    public $claimedAt;

    // 建议在该时间前回传 ACK/NACK
    /**
     * @example 2026-08-03T07:30:30.123Z
     * @var string
     */
    public $ackDeadlineAt;

    // swift报文消息原文
    /**
     * @example {1:F01CMUOHKHHAXXX0000000000}{2:I542BANKHKHHXXXXN}{4:
:16R:GENL
:20C::SEME//DAP-SEME-20260629-000089
:23G:NEWM
:16S:GENL
-}
     * @var string
     */
    public $rawMessage;

}
