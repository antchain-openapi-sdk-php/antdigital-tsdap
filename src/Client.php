<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AntChain\TSDAP;

use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Exception\TeaError;
use \Exception;
use AlibabaCloud\Tea\Exception\TeaUnableRetryError;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Request;
use AntChain\Util\UtilClient;
use AlibabaCloud\Tea\RpcUtils\RpcUtils;

use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use AntChain\TSDAP\Models\PagequeryAntcloudInvoiceRcptDetailRequest;
use AntChain\TSDAP\Models\PagequeryAntcloudInvoiceRcptDetailResponse;
use AntChain\TSDAP\Models\PushSwiftInboundRequest;
use AntChain\TSDAP\Models\PushSwiftInboundResponse;
use AntChain\TSDAP\Models\ClaimSwiftOutboundRequest;
use AntChain\TSDAP\Models\ClaimSwiftOutboundResponse;
use AntChain\TSDAP\Models\AckSwiftOutboundRequest;
use AntChain\TSDAP\Models\AckSwiftOutboundResponse;
use AntChain\TSDAP\Models\QueryclaimedSwiftOutboundRequest;
use AntChain\TSDAP\Models\QueryclaimedSwiftOutboundResponse;

class Client {
    protected $_endpoint;

    protected $_regionId;

    protected $_accessKeyId;

    protected $_accessKeySecret;

    protected $_protocol;

    protected $_userAgent;

    protected $_readTimeout;

    protected $_connectTimeout;

    protected $_httpProxy;

    protected $_httpsProxy;

    protected $_socks5Proxy;

    protected $_socks5NetWork;

    protected $_noProxy;

    protected $_maxIdleConns;

    protected $_securityToken;

    protected $_maxIdleTimeMillis;

    protected $_keepAliveDurationMillis;

    protected $_maxRequests;

    protected $_maxRequestsPerHost;

    /**
     * Init client with Config
     * @param config config contains the necessary information to create a client
     */
    public function __construct($config){
        if (Utils::isUnset($config)) {
            throw new TeaError([
                "code" => "ParameterMissing",
                "message" => "'config' can not be unset"
            ]);
        }
        $this->_accessKeyId = $config->accessKeyId;
        $this->_accessKeySecret = $config->accessKeySecret;
        $this->_securityToken = $config->securityToken;
        $this->_endpoint = $config->endpoint;
        $this->_protocol = $config->protocol;
        $this->_userAgent = $config->userAgent;
        $this->_readTimeout = Utils::defaultNumber($config->readTimeout, 20000);
        $this->_connectTimeout = Utils::defaultNumber($config->connectTimeout, 20000);
        $this->_httpProxy = $config->httpProxy;
        $this->_httpsProxy = $config->httpsProxy;
        $this->_noProxy = $config->noProxy;
        $this->_socks5Proxy = $config->socks5Proxy;
        $this->_socks5NetWork = $config->socks5NetWork;
        $this->_maxIdleConns = Utils::defaultNumber($config->maxIdleConns, 60000);
        $this->_maxIdleTimeMillis = Utils::defaultNumber($config->maxIdleTimeMillis, 5);
        $this->_keepAliveDurationMillis = Utils::defaultNumber($config->keepAliveDurationMillis, 5000);
        $this->_maxRequests = Utils::defaultNumber($config->maxRequests, 100);
        $this->_maxRequestsPerHost = Utils::defaultNumber($config->maxRequestsPerHost, 100);
    }

    /**
     * Encapsulate the request and invoke the network
     * @param string $version
     * @param string $action api name
     * @param string $protocol http or https
     * @param string $method e.g. GET
     * @param string $pathname pathname of every api
     * @param mixed[] $request which contains request params
     * @param string[] $headers
     * @param RuntimeOptions $runtime which controls some details of call api, such as retry times
     * @return array the response
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function doRequest($version, $action, $protocol, $method, $pathname, $request, $headers, $runtime){
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            "connectTimeout" => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            "httpProxy" => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            "httpsProxy" => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            "noProxy" => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            "maxIdleConns" => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            "maxIdleTimeMillis" => $this->_maxIdleTimeMillis,
            "keepAliveDuration" => $this->_keepAliveDurationMillis,
            "maxRequests" => $this->_maxRequests,
            "maxRequestsPerHost" => $this->_maxRequestsPerHost,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL,
            // 发票申请额度配置
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $_request->protocol = Utils::defaultString($this->_protocol, $protocol);
                $_request->method = $method;
                $_request->pathname = $pathname;
                $_request->query = [
                    "method" => $action,
                    "version" => $version,
                    "sign_type" => "HmacSHA1",
                    "req_time" => UtilClient::getTimestamp(),
                    "req_msg_id" => UtilClient::getNonce(),
                    "access_key" => $this->_accessKeyId,
                    "base_sdk_version" => "TeaSDK-2.0",
                    "sdk_version" => "1.0.5",
                    "_prod_code" => "TSDAP",
                    "_prod_channel" => "default"
                ];
                if (!Utils::empty_($this->_securityToken)) {
                    $_request->query["security_token"] = $this->_securityToken;
                }
                $_request->headers = Tea::merge([
                    "host" => Utils::defaultString($this->_endpoint, "openapi.antchain.antgroup.com"),
                    "user-agent" => Utils::getUserAgent($this->_userAgent)
                ], $headers);
                $tmp = Utils::anyifyMapValue(RpcUtils::query($request));
                $_request->body = Utils::toFormString($tmp);
                $_request->headers["content-type"] = "application/x-www-form-urlencoded";
                $signedParam = Tea::merge($_request->query, RpcUtils::query($request));
                $_request->query["sign"] = UtilClient::getSignature($signedParam, $this->_accessKeySecret);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $raw = Utils::readAsString($_response->body);
                $obj = Utils::parseJSON($raw);
                $res = Utils::assertAsMap($obj);
                $resp = Utils::assertAsMap(@$res["response"]);
                if (UtilClient::hasError($raw, $this->_accessKeySecret)) {
                    throw new TeaError([
                        "message" => @$resp["result_msg"],
                        "data" => $resp,
                        "code" => @$resp["result_code"]
                    ]);
                }
                return $resp;
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * Description: 支持租户或合同号分页查询开票单据详细信息
     * Summary: 支持租户或合同号分页查询开票单据详细信息
     * @param PagequeryAntcloudInvoiceRcptDetailRequest $request
     * @return PagequeryAntcloudInvoiceRcptDetailResponse
     */
    public function pagequeryAntcloudInvoiceRcptDetail($request){
        $runtime = new RuntimeOptions([]);
        $headers = [];
        return $this->pagequeryAntcloudInvoiceRcptDetailEx($request, $headers, $runtime);
    }

    /**
     * Description: 支持租户或合同号分页查询开票单据详细信息
     * Summary: 支持租户或合同号分页查询开票单据详细信息
     * @param PagequeryAntcloudInvoiceRcptDetailRequest $request
     * @param string[] $headers
     * @param RuntimeOptions $runtime
     * @return PagequeryAntcloudInvoiceRcptDetailResponse
     */
    public function pagequeryAntcloudInvoiceRcptDetailEx($request, $headers, $runtime){
        Utils::validateModel($request);
        return PagequeryAntcloudInvoiceRcptDetailResponse::fromMap($this->doRequest("1.0", "antcloud.invoice.rcpt.detail.pagequery", "HTTPS", "POST", "/gateway.do", Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 用于提交swift入站报文
     * Summary: 用于提交swift入站报文
     * @param PushSwiftInboundRequest $request
     * @return PushSwiftInboundResponse
     */
    public function pushSwiftInbound($request){
        $runtime = new RuntimeOptions([]);
        $headers = [];
        return $this->pushSwiftInboundEx($request, $headers, $runtime);
    }

    /**
     * Description: 用于提交swift入站报文
     * Summary: 用于提交swift入站报文
     * @param PushSwiftInboundRequest $request
     * @param string[] $headers
     * @param RuntimeOptions $runtime
     * @return PushSwiftInboundResponse
     */
    public function pushSwiftInboundEx($request, $headers, $runtime){
        Utils::validateModel($request);
        return PushSwiftInboundResponse::fromMap($this->doRequest("1.0", "antdigital.tsdap.swift.inbound.push", "HTTPS", "POST", "/gateway.do", Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: SWIFT 出站报文领取
     * Summary: SWIFT 出站报文领取
     * @param ClaimSwiftOutboundRequest $request
     * @return ClaimSwiftOutboundResponse
     */
    public function claimSwiftOutbound($request){
        $runtime = new RuntimeOptions([]);
        $headers = [];
        return $this->claimSwiftOutboundEx($request, $headers, $runtime);
    }

    /**
     * Description: SWIFT 出站报文领取
     * Summary: SWIFT 出站报文领取
     * @param ClaimSwiftOutboundRequest $request
     * @param string[] $headers
     * @param RuntimeOptions $runtime
     * @return ClaimSwiftOutboundResponse
     */
    public function claimSwiftOutboundEx($request, $headers, $runtime){
        Utils::validateModel($request);
        return ClaimSwiftOutboundResponse::fromMap($this->doRequest("1.0", "antdigital.tsdap.swift.outbound.claim", "HTTPS", "POST", "/gateway.do", Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: SWIFT 出站报文 ACK/NACK 回传
     * Summary: SWIFT 出站报文 ACK/NACK 回传
     * @param AckSwiftOutboundRequest $request
     * @return AckSwiftOutboundResponse
     */
    public function ackSwiftOutbound($request){
        $runtime = new RuntimeOptions([]);
        $headers = [];
        return $this->ackSwiftOutboundEx($request, $headers, $runtime);
    }

    /**
     * Description: SWIFT 出站报文 ACK/NACK 回传
     * Summary: SWIFT 出站报文 ACK/NACK 回传
     * @param AckSwiftOutboundRequest $request
     * @param string[] $headers
     * @param RuntimeOptions $runtime
     * @return AckSwiftOutboundResponse
     */
    public function ackSwiftOutboundEx($request, $headers, $runtime){
        Utils::validateModel($request);
        return AckSwiftOutboundResponse::fromMap($this->doRequest("1.0", "antdigital.tsdap.swift.outbound.ack", "HTTPS", "POST", "/gateway.do", Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: SWIFT 已领取超时报文查询
     * Summary: SWIFT 已领取超时报文查询
     * @param QueryclaimedSwiftOutboundRequest $request
     * @return QueryclaimedSwiftOutboundResponse
     */
    public function queryclaimedSwiftOutbound($request){
        $runtime = new RuntimeOptions([]);
        $headers = [];
        return $this->queryclaimedSwiftOutboundEx($request, $headers, $runtime);
    }

    /**
     * Description: SWIFT 已领取超时报文查询
     * Summary: SWIFT 已领取超时报文查询
     * @param QueryclaimedSwiftOutboundRequest $request
     * @param string[] $headers
     * @param RuntimeOptions $runtime
     * @return QueryclaimedSwiftOutboundResponse
     */
    public function queryclaimedSwiftOutboundEx($request, $headers, $runtime){
        Utils::validateModel($request);
        return QueryclaimedSwiftOutboundResponse::fromMap($this->doRequest("1.0", "antdigital.tsdap.swift.outbound.queryclaimed", "HTTPS", "POST", "/gateway.do", Tea::merge($request), $headers, $runtime));
    }
}
