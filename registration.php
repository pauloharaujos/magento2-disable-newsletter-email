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

\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'PHAS_DisableNewsletterEmail',
    __DIR__
);
