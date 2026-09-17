<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AntChain\TSDAP\Models;

use AlibabaCloud\Tea\Model;

class AckSwiftOutboundResponse extends Model {
    protected $_name = [
        'reqMsgId' => 'req_msg_id',
        'resultCode' => 'result_code',
        'resultMsg' => 'result_msg',
        'duplicate' => 'duplicate',
        'ackedAt' => 'acked_at',
        'accepted' => 'accepted',
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
        if (null !== $this->duplicate) {
            $res['duplicate'] = $this->duplicate;
        }
        if (null !== $this->ackedAt) {
            $res['acked_at'] = $this->ackedAt;
        }
        if (null !== $this->accepted) {
            $res['accepted'] = $this->accepted;
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
        if(isset($map['duplicate'])){
            $model->duplicate = $map['duplicate'];
        }
        if(isset($map['acked_at'])){
            $model->ackedAt = $map['acked_at'];
        }
        if(isset($map['accepted'])){
            $model->accepted = $map['accepted'];
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

    // 收到回执并已成功持久化，返回true
    /**
     * @var bool
     */
    public $accepted;

}
