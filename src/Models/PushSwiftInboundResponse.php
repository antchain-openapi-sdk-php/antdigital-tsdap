<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AntChain\TSDAP\Models;

use AlibabaCloud\Tea\Model;

class PushSwiftInboundResponse extends Model {
    protected $_name = [
        'reqMsgId' => 'req_msg_id',
        'resultCode' => 'result_code',
        'resultMsg' => 'result_msg',
        'messageId' => 'message_id',
        'accepted' => 'accepted',
        'duplicate' => 'duplicate',
        'receivedAt' => 'received_at',
        'messageHash' => 'message_hash',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->reqMsgId) {
            $res['req_msg_id'] = $this->reqMsgId;
        }
        if (null !== $this->resultCode) {
            $res['result_code'] = $this->resultCode;
        }
        if (null !== $this->resultMsg) {
            $res['result_msg'] = $this->resultMsg;
        }
        if (null !== $this->messageId) {
            $res['message_id'] = $this->messageId;
        }
        if (null !== $this->accepted) {
            $res['accepted'] = $this->accepted;
        }
        if (null !== $this->duplicate) {
            $res['duplicate'] = $this->duplicate;
        }
        if (null !== $this->receivedAt) {
            $res['received_at'] = $this->receivedAt;
        }
        if (null !== $this->messageHash) {
            $res['message_hash'] = $this->messageHash;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return PushSwiftInboundResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['req_msg_id'])){
            $model->reqMsgId = $map['req_msg_id'];
        }
        if(isset($map['result_code'])){
            $model->resultCode = $map['result_code'];
        }
        if(isset($map['result_msg'])){
            $model->resultMsg = $map['result_msg'];
        }
        if(isset($map['message_id'])){
            $model->messageId = $map['message_id'];
        }
        if(isset($map['accepted'])){
            $model->accepted = $map['accepted'];
        }
        if(isset($map['duplicate'])){
            $model->duplicate = $map['duplicate'];
        }
        if(isset($map['received_at'])){
            $model->receivedAt = $map['received_at'];
        }
        if(isset($map['message_hash'])){
            $model->messageHash = $map['message_hash'];
        }
        return $model;
    }
    // 请求唯一ID，用于链路跟踪和问题排查
    /**
     * @var string
     */
    public $reqMsgId;

    // 结果码，一般OK表示调用成功
    /**
     * @var string
     */
    public $resultCode;

    // 异常信息的文本描述
    /**
     * @var string
     */
    public $resultMsg;

    // DAP 生成的唯一消息ID，32位长度字符串
    /**
     * @var string
     */
    public $messageId;

    // 是否已接收并持久化
    /**
     * @var bool
     */
    public $accepted;

    // 是否为重复提交
    /**
     * @var bool
     */
    public $duplicate;

    // 消息接收时间，ISO-8601 UTC 格式
    /**
     * @var string
     */
    public $receivedAt;

    // 报文原文 SHA-256 摘要
    /**
     * @var string
     */
    public $messageHash;

}
