<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AntChain\TSDAP\Models;

use AlibabaCloud\Tea\Model;

class AckSwiftOutboundResponse extends Model {
    protected $_name = [
        'reqMsgId' => 'req_msg_id',
        'resultCode' => 'result_code',
        'resultMsg' => 'result_msg',
        'messageId' => 'message_id',
        'duplicate' => 'duplicate',
        'ackedAt' => 'acked_at',
        'receiptStatus' => 'receipt_status',
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
        if (null !== $this->duplicate) {
            $res['duplicate'] = $this->duplicate;
        }
        if (null !== $this->ackedAt) {
            $res['acked_at'] = $this->ackedAt;
        }
        if (null !== $this->receiptStatus) {
            $res['receipt_status'] = $this->receiptStatus;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return AckSwiftOutboundResponse
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
        if(isset($map['duplicate'])){
            $model->duplicate = $map['duplicate'];
        }
        if(isset($map['acked_at'])){
            $model->ackedAt = $map['acked_at'];
        }
        if(isset($map['receipt_status'])){
            $model->receiptStatus = $map['receipt_status'];
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

    // DAP平台分配的报文消息唯一id，32位
    /**
     * @var string
     */
    public $messageId;

    // 是否重复发送消息
    /**
     * @var bool
     */
    public $duplicate;

    // DAP平台接收并处理 ACK/NACK 的时间，ISO-8601 UTC 字符串
    /**
     * @var string
     */
    public $ackedAt;

    // RECEIVED：回执已保存，包括解析或关联校验失败；CONFLICT：回执已保存，但投递已终态，不覆盖原结果。两种情况均无需重发。
    /**
     * @var string
     */
    public $receiptStatus;

}
