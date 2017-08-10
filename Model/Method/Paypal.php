<?php
/**
 * PayZen V2-Payment Module version 2.1.1 for Magento 2.x. Support contact : support@payzen.eu.
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
 * @copyright 2014-2016 Lyra Network and contributors
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
namespace Lyranetwork\Payzen\Model\Method;

class Paypal extends Payzen
{
    protected $_code = \Lyranetwork\Payzen\Helper\Data::METHOD_PAYPAL;
    protected $_formBlockType = \Lyranetwork\Payzen\Block\Payment\Form\Paypal::class;

    protected function setExtraFields($order)
    {
        $testMode = $this->payzenRequest->get('ctx_mode') == 'TEST';

        // override with PayPal payment cards
        $this->payzenRequest->set('payment_cards', $testMode ? 'PAYPAL_SB' : 'PAYPAL');
    }

    protected function sendPaypalFields()
    {
        return true;
    }

    /**
     * Assign data to info model instance.
     *
     * @param \Magento\Framework\DataObject $data
     * @return $this
     */
    public function assignData(\Magento\Framework\DataObject $data)
    {
        // reset payment method specific data
        $this->resetData();

        return parent::assignData($data);
    }
}
