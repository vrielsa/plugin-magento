<?php
/**
 * Copyright © Lyra Network.
 * This file is part of PayZen plugin for Magento 2. See COPYING.md for license details.
 *
 * @author    Lyra Network (https://www.lyra.com/)
 * @copyright Lyra Network
 * @license   https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */
namespace Lyranetwork\Payzen\Model;

class StandardConfigProvider extends \Lyranetwork\Payzen\Model\PayzenConfigProvider
{
    /**
     * @var string|boolean
     */
    protected $formToken = false;

    /**
     * @param \Magento\Store\Model\StoreManagerInterface $storeManager
     * @param \Magento\Framework\UrlInterface $urlBuilder
     * @param \Lyranetwork\Payzen\Helper\Data $dataHelper
     * @param string $methodCode
     */
    public function __construct(
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Magento\Framework\UrlInterface $urlBuilder,
        \Lyranetwork\Payzen\Helper\Data $dataHelper
    ) {
        parent::__construct(
            $storeManager,
            $urlBuilder,
            $dataHelper,
            \Lyranetwork\Payzen\Helper\Data::METHOD_STANDARD
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getConfig()
    {
        $config = parent::getConfig();

        $config['payment'][$this->method->getCode()]['iframeLoaderUrl'] = $this->getIframeLoaderUrl();
        $config['payment'][$this->method->getCode()]['oneClick'] = $this->method->isOneclickAvailable();

        $customer = $this->method->getCurrentCustomer();
        $maskedPan = '';
        if ($customer && $customer->getCustomAttribute('payzen_masked_pan')) {
            $maskedPan = $customer->getCustomAttribute('payzen_masked_pan')->getValue();
        }

        $config['payment'][$this->method->getCode()]['maskedPan'] = $this->renderMaskedPan($maskedPan);

        // For payment via REST API.
        $config['payment'][$this->method->getCode()]['restFormToken'] = $this->getRestFormToken();
        $config['payment'][$this->method->getCode()]['language'] = $this->method->getPaymentLanguage();

        return $config;
    }

    /**
     * Iframe loader URL getter.
     *
     * @return string
     */
    private function getIframeLoaderUrl()
    {
        $params = [
            '_secure' => true
        ];

        return $this->urlBuilder->getUrl('payzen/payment_iframe/loader', $params);
    }

    private function getRestFormToken()
    {
        if (! $this->method->isAvailable()) {
            return false;
        }

        if (! $this->method->isRestMode()) {
            return false;
        }

        if (! $this->formToken) {
            $this->formToken = $this->method->getRestApiFormToken();
        }

        return $this->formToken;
    }
}
