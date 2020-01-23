<?php
/**
 * PayZen V2-Payment Module version 1.10.2 for Magento 1.4-1.9. Support contact : support@payzen.eu.
 *
 * @category  Payment
 * @package   Payzen
 * @author    Lyra Network (http://www.lyra-network.com/)
 * @copyright 2014-2019 Lyra Network and contributors
 * @license   
 */

namespace Lyranetwork\Payzen\Model\Api\Ws;

class CapturePayment
{
    /**
     * @var SettlementRequest $settlementRequest
     */
    private $settlementRequest = null;

    /**
     * @return SettlementRequest
     */
    public function getSettlementRequest()
    {
        return $this->settlementRequest;
    }

    /**
     * @param SettlementRequest $settlementRequest
     * @return CapturePayment
     */
    public function setSettlementRequest($settlementRequest)
    {
        $this->settlementRequest = $settlementRequest;
        return $this;
    }
}
