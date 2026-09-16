<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AntChain\TSDAP\Models;

use AlibabaCloud\Tea\Model;

class QueryclaimedSwiftOutboundRequest extends Model {
    protected $_name = [
        'authToken' => 'auth_token',
        'productInstanceId' => 'product_instance_id',
        'limit' => 'limit',
        'supportedFormats' => 'supported_formats',
        'ackDeadlineBefore' => 'ack_deadline_before',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->authToken) {
            $res['auth_token'] = $this->authToken;
        }
        if (null !== $this->productInstanceId) {
            $res['product_instance_id'] = $this->productInstanceId;
        }
        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }
        if (null !== $this->supportedFormats) {
            $res['supported_formats'] = $this->supportedFormats;
        }
        if (null !== $this->ackDeadlineBefore) {
            $res['ack_deadline_before'] = $this->ackDeadlineBefore;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return QueryclaimedSwiftOutboundRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['auth_token'])){
            $model->authToken = $map['auth_token'];
        }
        if(isset($map['product_instance_id'])){
            $model->productInstanceId = $map['product_instance_id'];
        }
        if(isset($map['limit'])){
            $model->limit = $map['limit'];
        }
        if(isset($map['supported_formats'])){
            if(!empty($map['supported_formats'])){
                $model->supportedFormats = $map['supported_formats'];
            }
        }
        if(isset($map['ack_deadline_before'])){
            $model->ackDeadlineBefore = $map['ack_deadline_before'];
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

    // 单次查询数量，默认 50，最大 50
    /**
     * @var int
     */
    public $limit;

    // 支持的报文格式；为空或不传时不过滤
    /**
     * @var string[]
     */
    public $supportedFormats;

    // 只查询 ACK/NACK 建议时间早于该时间点的报文，ISO-8601 UTC 字符串
    /**
     * @var string
     */
    public $ackDeadlineBefore;

}
