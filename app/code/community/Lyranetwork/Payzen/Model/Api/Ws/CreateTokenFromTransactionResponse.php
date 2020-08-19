<?php
/**
 * PayZen V2-Payment Module version 1.11.2 for Magento 1.4-1.9. Support contact : support@payzen.eu.
 *
 * @category  Payment
 * @package   Payzen
 * @author    Lyra Network (http://www.lyra-network.com/)
 * @copyright 2014-2019 Lyra Network and contributors
 * @license   
 */

namespace Lyranetwork\Payzen\Model\Api\Ws;

class CreateTokenFromTransactionResponse extends WsResponse
{
    /**
     * @var CreateTokenFromTransactionResult $createTokenFromTransactionResult
     */
    private $createTokenFromTransactionResult = null;

    /**
     * @return CreateTokenFromTransactionResult
     */
    public function getCreateTokenFromTransactionResult()
    {
        return $this->createTokenFromTransactionResult;
    }

    /**
     * @param CreateTokenFromTransactionResult $createTokenFromTransactionResult
     * @return CreateTokenFromTransactionResponse
     */
    public function setCreateTokenFromTransactionResult($createTokenFromTransactionResult)
    {
        $this->createTokenFromTransactionResult = $createTokenFromTransactionResult;
        return $this;
    }
}
