<h1 align="center">
  <br>
	<img alt="Adobe logo" height="50px" src="https://www.adobe.com/content/dam/cc/icons/Adobe_Corporate_Horizontal_Red_HEX.svg"/>
  <br>
  Magento 2 Disable Newsletter Subscription Success Email
  <br>
  <a href="https://packagist.org/packages/pauloharaujos/magento2-disable-newsletter-email"><img src="https://img.shields.io/packagist/v/pauloharaujos/magento2-disable-newsletter-email.svg" alt="Magento 2 Disable Newsletter Success Email Stable Version"/></a>
  <a href="https://packagist.org/packages/pauloharaujos/magento2-disable-newsletter-email"><img src="https://img.shields.io/packagist/dt/pauloharaujos/magento2-disable-newsletter-email.svg" alt="Magento 2 Disable Newsletter Success Email Version"/></a>
</h1>


## How does it works?

Disable Newsletter Subscription Success Email. Usually, the people create this email on the marketing side(Klaviyo, Mailchimp), but the option to disable this email is not available by default on Magento/Adobe Commerce

## Install

### Via Composer

Install using [Composer](https://getcomposer.org).

```
composer require pauloharaujos/magento2-disable-newsletter-email
php bin/magento module:enable PHAS_DisableNewsletterEmail
php bin/magento setup:upgrade
```

## How to use

Access your Magento Admin Panel, then navigate to Stores -> Settings ->
Configuration -> Customers -> Newsletter -> Subscription Options
-> Disable Newsletter Confirmation Email Success

[Paulo Henrique Araujo da Silva](https://github.com/pauloharaujos)
