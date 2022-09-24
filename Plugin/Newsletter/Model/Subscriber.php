<?php

/**
 * Disable Newsletter Subscription Success Email Extension by Paulo Henrique Araujo da Silva
 *
 * @category  PHAS
 * @package   PHAS_DisableNewsletterEmail
 * @author    Paulo Henrique Araujo da Silva <pauloharaujos@gmail.com>
 * @copyright Copyright (c) 2022 Paulo Henrique Araujo da Silva (https://github.com/pauloharaujos)
 * @license https://opensource.org/licenses/MIT
 */

declare(strict_types=1);

namespace PHAS\DisableNewsletterEmail\Plugin\Newsletter\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Newsletter\Model\Subscriber as MSubscriber;
use Magento\Store\Model\ScopeInterface;

class Subscriber
{
	/**
	 * @param ScopeConfigInterface $scopeConfig
	 */
	public function __construct(ScopeConfigInterface $scopeConfig)
    {
        $this->scopeConfig = $scopeConfig;
    }

	/**
	 * @param MSubscriber $subject
	 * @return null
	 */
	public function beforeSendConfirmationSuccessEmail(MSubscriber $subject)
    {
        if ($this->scopeConfig->getValue('newsletter/subscription/disable_newsletter_success',
            ScopeInterface::SCOPE_STORE)) {
            $subject->setImportMode(true);
        }
        return null;
    }
}
