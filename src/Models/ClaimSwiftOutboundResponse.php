<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AntChain\TSDAP\Models;

use AlibabaCloud\Tea\Model;

use AntChain\TSDAP\Models\OutboundSwiftMessage;

class ClaimSwiftOutboundResponse extends Model {
    protected $_name = [
        'reqMsgId' => 'req_msg_id',
        'resultCode' => 'result_code',
        'resultMsg' => 'result_msg',
        'messageCount' => 'message_count',
        'messages' => 'messages',
        'remainingPreparedCount' => 'remaining_prepared_count',
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
        if (null !== $this->messageCount) {
            $res['message_count'] = $this->messageCount;
        }
        if (null !== $this->messages) {
            $res['messages'] = [];
            if(null !== $this->messages && is_array($this->messages)){
                $n = 0;
                foreach($this->messages as $item){
                    $res['messages'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->remainingPreparedCount) {
            $res['remaining_prepared_count'] = $this->remainingPreparedCount;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ClaimSwiftOutboundResponse
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
        if(isset($map['message_count'])){
            $model->messageCount = $map['message_count'];
        }
        if(isset($map['messages'])){
            if(!empty($map['messages'])){
                $model->messages = [];
                $n = 0;
                foreach($map['messages'] as $item) {
                    $model->messages[$n++] = null !== $item ? OutboundSwiftMessage::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['remaining_prepared_count'])){
            $model->remainingPreparedCount = $map['remaining_prepared_count'];
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

    // 本次查询到的报文数量
    /**
     * @var int
     */
    public $messageCount;

    // 已领取报文列表
    /**
     * @var OutboundSwiftMessage[]
     */
    public $messages;

    // 当前调用方和过滤条件下仍可领取的剩余报文数量
    /**
     * @var int
     */
    public $remainingPreparedCount;

}
