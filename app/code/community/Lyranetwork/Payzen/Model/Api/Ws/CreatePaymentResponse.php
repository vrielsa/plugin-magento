<?php
/**
 * PayZen V2-Payment Module version 1.10.1 for Magento 1.4-1.9. Support contact : support@payzen.eu.
 *
 * @category  Payment
 * @package   Payzen
 * @author    Lyra Network (http://www.lyra-network.com/)
 * @copyright 2014-2019 Lyra Network and contributors
 * @license   
 */

namespace Lyranetwork\Payzen\Model\Api\Ws;

class CreatePaymentResponse extends WsResponse
{
    /**
     * @var CreatePaymentResult $createPaymentResult
     */
    private $createPaymentResult = null;

    /**
     * @return CreatePaymentResult
     */
    public function getCreatePaymentResult()
    {
        return $this->createPaymentResult;
    }

    /**
     * @param CreatePaymentResult $createPaymentResult
     * @return CreatePaymentResponse
     */
    public function setCreatePaymentResult($createPaymentResult)
    {
        $this->createPaymentResult = $createPaymentResult;
        return $this;
    }
}
