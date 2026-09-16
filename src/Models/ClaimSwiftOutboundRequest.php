<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AntChain\TSDAP\Models;

use AlibabaCloud\Tea\Model;

class ClaimSwiftOutboundRequest extends Model {
    protected $_name = [
        'authToken' => 'auth_token',
        'productInstanceId' => 'product_instance_id',
        'limit' => 'limit',
        'supportedFormats' => 'supported_formats',
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
        return $res;
    }
    /**
     * @param array $map
     * @return ClaimSwiftOutboundRequest
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

    // 单次领取数量，默认 50，最大 50
    /**
     * @var int
     */
    public $limit;

    // 支持筛选报文格式，可以传入MT或者MX，为空或不传时不过滤
    /**
     * @var string[]
     */
    public $supportedFormats;

}
