<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AntChain\TSDAP\Models;

use AlibabaCloud\Tea\Model;

class PagequeryAntcloudInvoiceRcptDetailRequest extends Model {
    protected $_name = [
        'authToken' => 'auth_token',
        'arNo' => 'ar_no',
        'tenantId' => 'tenant_id',
        'currentPage' => 'current_page',
        'pageSize' => 'page_size',
        'source' => 'source',
    ];
    public function validate() {
        Model::validateRequired('source', $this->source, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->authToken) {
            $res['auth_token'] = $this->authToken;
        }
        if (null !== $this->arNo) {
            $res['ar_no'] = $this->arNo;
        }
        if (null !== $this->tenantId) {
            $res['tenant_id'] = $this->tenantId;
        }
        if (null !== $this->currentPage) {
            $res['current_page'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }
        if (null !== $this->source) {
            $res['source'] = $this->source;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return PagequeryAntcloudInvoiceRcptDetailRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['auth_token'])){
            $model->authToken = $map['auth_token'];
        }
        if(isset($map['ar_no'])){
            $model->arNo = $map['ar_no'];
        }
        if(isset($map['tenant_id'])){
            $model->tenantId = $map['tenant_id'];
        }
        if(isset($map['current_page'])){
            $model->currentPage = $map['current_page'];
        }
        if(isset($map['page_size'])){
            $model->pageSize = $map['page_size'];
        }
        if(isset($map['source'])){
            $model->source = $map['source'];
        }
        return $model;
    }
    // OAuth模式下的授权token
    /**
     * @var string
     */
    public $authToken;

    // 合同号
    /**
     * @var string
     */
    public $arNo;

    // 租户ID
    /**
     * @var string
     */
    public $tenantId;

    // 当前页码，不传默认为1
    /**
     * @var int
     */
    public $currentPage;

    // 分页条数，不传默认20条
    /**
     * @var int
     */
    public $pageSize;

    // 系统来源
    /**
     * @var string
     */
    public $source;

}
