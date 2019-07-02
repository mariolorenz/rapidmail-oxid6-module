<?php

/**
 * Metadata version
 */
$sMetadataVersion = '2.0';

/**
 * Module information
 */
$aModule = [
    'id' => \Rapidmail\Oxid6Module\Helper\VersionHelper::PLUGIN_ID,
    'version' => \Rapidmail\Oxid6Module\Helper\VersionHelper::PLUGIN_VERSION,
    'title' => 'Rapidmail OXID eShop connector',
    'description' => [
        'de' => 'Automatische Synchronisierung von Newsletter-Abonnenten und Kundendaten in rapidmail',
        'en' => 'Automatic synchronization of newsletter subscribers and customer data in rapidmail'
    ],
    'thumbnail' => 'logo.png',
    'author' => 'rapidmail GmbH',
    'lang' => 'en',
    'url' => 'https://www.rapidmail.de',
    'email' => 'support@rapidmail.de',
    'controllers' => [
        'rm_customer' => \Rapidmail\Oxid6Module\Controller\CustomerController::class,
        'rm_product' => \Rapidmail\Oxid6Module\Controller\ProductController::class,
        'rm_version' => \Rapidmail\Oxid6Module\Controller\VersionController::class
    ],
    'extend' => [
        \OxidEsales\Eshop\Core\SeoDecoder::class => \Rapidmail\Oxid6Module\Core\SeoDecoder::class
    ]
];