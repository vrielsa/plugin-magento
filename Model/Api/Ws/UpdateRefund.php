<?php
/**
 * PayZen V2-Payment Module version 2.4.4 for Magento 2.x. Support contact : support@payzen.eu.
 *
 * @category  Payment
 * @package   Payzen
 * @author    Lyra Network (http://www.lyra-network.com/)
 * @copyright 2014-2019 Lyra Network and contributors
 * @license   
 */

namespace Lyranetwork\Payzen\Model\Api\Ws;

class UpdateRefund
{
    /**
     * @var CommonRequest $commonRequest
     */
    private $commonRequest = null;

    /**
     * @var QueryRequest $queryRequest
     */
    private $queryRequest = null;

    /**
     * @var PaymentRequest $paymentRequest
     */
    private $paymentRequest = null;

    /**
     * @return CommonRequest
     */
    public function getCommonRequest()
    {
        return $this->commonRequest;
    }

    /**
     * @param CommonRequest $commonRequest
     * @return UpdateRefund
     */
    public function setCommonRequest($commonRequest)
    {
        $this->commonRequest = $commonRequest;
        return $this;
    }

    /**
     * @return QueryRequest
     */
    public function getQueryRequest()
    {
        return $this->queryRequest;
    }

    /**
     * @param QueryRequest $queryRequest
     * @return UpdateRefund
     */
    public function setQueryRequest($queryRequest)
    {
        $this->queryRequest = $queryRequest;
        return $this;
    }

    /**
     * @return PaymentRequest
     */
    public function getPaymentRequest()
    {
        return $this->paymentRequest;
    }

    /**
     * @param PaymentRequest $paymentRequest
     * @return UpdateRefund
     */
    public function setPaymentRequest($paymentRequest)
    {
        $this->paymentRequest = $paymentRequest;
        return $this;
    }
}
