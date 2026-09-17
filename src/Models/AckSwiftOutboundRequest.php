<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AntChain\TSDAP\Models;

use AlibabaCloud\Tea\Model;

class AckSwiftOutboundRequest extends Model {
    protected $_name = [
        'authToken' => 'auth_token',
        'productInstanceId' => 'product_instance_id',
        'requestId' => 'request_id',
        'ackedAt' => 'acked_at',
        'rawMessage' => 'raw_message',
        'receiptFormat' => 'receipt_format',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('ackedAt', $this->ackedAt, true);
        Model::validateRequired('rawMessage', $this->rawMessage, true);
        Model::validateRequired('receiptFormat', $this->receiptFormat, true);
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
        if (null !== $this->ackedAt) {
            $res['acked_at'] = $this->ackedAt;
        }
        if (null !== $this->rawMessage) {
            $res['raw_message'] = $this->rawMessage;
        }
        if (null !== $this->receiptFormat) {
            $res['receipt_format'] = $this->receiptFormat;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return AckSwiftOutboundRequest
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
        if(isset($map['acked_at'])){
            $model->ackedAt = $map['acked_at'];
        }
        if(isset($map['raw_message'])){
            $model->rawMessage = $map['raw_message'];
        }
        if(isset($map['receipt_format'])){
            $model->receiptFormat = $map['receipt_format'];
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

    // 本次 ACK/NACK 请求 ID，32位，调用方设置，用于审计和排查
    /**
     * @var string
     */
    public $requestId;

    // 获得确定发送结果的时间，ISO-8601 UTC 字符串
    /**
     * @var string
     */
    public $ackedAt;

    // 原始 ACK/NACK的 MT/MX 报文，必须保留原始换行、空白和字段顺序
    /**
     * @var string
     */
    public $rawMessage;

    // 填写 SAA_XML_V2 或者 MQ_MT
    /**
     * @var string
     */
    public $receiptFormat;

}
