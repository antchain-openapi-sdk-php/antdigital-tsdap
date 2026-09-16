<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AntChain\TSDAP\Models;

use AlibabaCloud\Tea\Model;

class PushSwiftInboundRequest extends Model {
    protected $_name = [
        'authToken' => 'auth_token',
        'productInstanceId' => 'product_instance_id',
        'requestId' => 'request_id',
        'format' => 'format',
        'rawMessage' => 'raw_message',
        'senderBic' => 'sender_bic',
        'senderDn' => 'sender_dn',
        'receiverBic' => 'receiver_bic',
        'receiverDn' => 'receiver_dn',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('format', $this->format, true);
        Model::validateRequired('rawMessage', $this->rawMessage, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->authToken) {
            $res['auth_token'] = $this->authToken;
        }
        if (null !== $this->productInstanceId) {
            $res['product_instance_id'] = $this->productInstanceId;
        }
        if (null !== $this->requestId) {
            $res['request_id'] = $this->requestId;
        }
        if (null !== $this->format) {
            $res['format'] = $this->format;
        }
        if (null !== $this->rawMessage) {
            $res['raw_message'] = $this->rawMessage;
        }
        if (null !== $this->senderBic) {
            $res['sender_bic'] = $this->senderBic;
        }
        if (null !== $this->senderDn) {
            $res['sender_dn'] = $this->senderDn;
        }
        if (null !== $this->receiverBic) {
            $res['receiver_bic'] = $this->receiverBic;
        }
        if (null !== $this->receiverDn) {
            $res['receiver_dn'] = $this->receiverDn;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return PushSwiftInboundRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['auth_token'])){
            $model->authToken = $map['auth_token'];
        }
        if(isset($map['product_instance_id'])){
            $model->productInstanceId = $map['product_instance_id'];
        }
        if(isset($map['request_id'])){
            $model->requestId = $map['request_id'];
        }
        if(isset($map['format'])){
            $model->format = $map['format'];
        }
        if(isset($map['raw_message'])){
            $model->rawMessage = $map['raw_message'];
        }
        if(isset($map['sender_bic'])){
            $model->senderBic = $map['sender_bic'];
        }
        if(isset($map['sender_dn'])){
            $model->senderDn = $map['sender_dn'];
        }
        if(isset($map['receiver_bic'])){
            $model->receiverBic = $map['receiver_bic'];
        }
        if(isset($map['receiver_dn'])){
            $model->receiverDn = $map['receiver_dn'];
        }
        return $model;
    }
    // OAuth模式下的授权token
    /**
     * @var string
     */
    public $authToken;

    /**
     * @var string
     */
    public $productInstanceId;

    // 发送方生成的唯一请求标识，32位长度字符串
    /**
     * @var string
     */
    public $requestId;

    // 报文格式：MT 或 MX
    /**
     * @var string
     */
    public $format;

    // 原始 MT/MX 报文，必须保留原始换行、空白和字段顺序
    /**
     * @var string
     */
    public $rawMessage;

    // 发送方BIC
    /**
     * @var string
     */
    public $senderBic;

    // 发送方DN
    /**
     * @var string
     */
    public $senderDn;

    // 接收方BIC
    /**
     * @var string
     */
    public $receiverBic;

    // 接收方DN
    /**
     * @var string
     */
    public $receiverDn;

}
