<?php
/**
 * PayZen V2-Payment Module version 1.7.1 for Magento 1.4-1.9. Support contact : support@payzen.eu.
 *
 * NOTICE OF LICENSE
 *
 * This source file is licensed under the Open Software License version 3.0
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @category  payment
 * @package   payzen
 * @author    Lyra Network (http://www.lyra-network.com/)
 * @copyright 2014-2017 Lyra Network and contributors
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace Lyra\Payzen\Model\Api\Ws;

class UpdatePaymentDetails
{
    /**
     * @var QueryRequest $queryRequest
     */
    private $queryRequest = null;

    /**
     * @var ShoppingCartRequest $shoppingCartRequest
     */
    private $shoppingCartRequest = null;

    /**
     * @return QueryRequest
     */
    public function getQueryRequest()
    {
        return $this->queryRequest;
    }

    /**
     * @param QueryRequest $queryRequest
     * @return UpdatePaymentDetails
     */
    public function setQueryRequest($queryRequest)
    {
        $this->queryRequest = $queryRequest;
        return $this;
    }

    /**
     * @return ShoppingCartRequest
     */
    public function getShoppingCartRequest()
    {
        return $this->shoppingCartRequest;
    }

    /**
     * @param ShoppingCartRequest $shoppingCartRequest
     * @return UpdatePaymentDetails
     */
    public function setShoppingCartRequest($shoppingCartRequest)
    {
        $this->shoppingCartRequest = $shoppingCartRequest;
        return $this;
    }
}
