<?php
/**
 * PayZen V2-Payment Module version 2.1.4 for Magento 2.x. Support contact : support@payzen.eu.
 *
 * NOTICE OF LICENSE
 *
 * This source file is licensed under the Open Software License version 3.0
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/osl-3.0.php
 *
 * @author    Lyra Network (http://www.lyra-network.com/)
 * @copyright 2014-2018 Lyra Network and contributors
 * @license   https://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @category  payment
 * @package   payzen
 */
namespace Lyranetwork\Payzen\Model\System\Config\Source;

class MultiCardInfoMode implements \Magento\Framework\Option\ArrayInterface
{

    public function toOptionArray()
    {
        return [
            [
                'value' => '1',
                'label' => __('On payment platform')
            ],
            [
                'value' => '2',
                'label' => __('On merchant site')
            ]
        ];
    }
}