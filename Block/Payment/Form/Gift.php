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
namespace Lyranetwork\Payzen\Block\Payment\Form;

class Gift extends Payzen
{
    protected $_template = 'Lyranetwork_Payzen::payment/form/gift.phtml';

    public function getAvailableGcTypes()
    {
        return $this->getMethod()->getAvailableGcTypes();
    }

    public function getGcTypeImageSrc($card)
    {
        $card = 'gc/' . strtolower($card) . '.png';

        if ($this->dataHelper->isUploadFileImageExists($card)) {
            return $this->_storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA)
                . 'payzen/images/' . $card;
        } else {
            return $this->getViewFileUrl('Lyranetwork_Payzen::images/' . $card);
        }
    }
}
