<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

// Add 'SEO Table of contents' to the CType dropdown:
ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'LLL:EXT:seo_tableofcontents/Resources/Private/Language/locallang_tca.xlf:tx_seotableofcontents_menu_section_seo',
        'tx_seotableofcontents_menu_section_seo',
        'tx-seotableofcontents-menu-section-seo',
    ],
    'menu_section_pages',
    'after'
);

// Configure the default backend fields for the content element:
$GLOBALS['TCA']['tt_content']['types']['tx_seotableofcontents_menu_section_seo'] = [
    'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            --palette--;;headers,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
            --palette--;;frames,
            --palette--;;appearanceLinks,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,
            --palette--;;menu_accessibility,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
            --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;;access,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
            categories,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
            rowDescription,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
    ',
];

// Add custom icon for WEB>LIST:
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['tx_seotableofcontents_menu_section_seo'] = 'tx-seotableofcontents-menu-section-seo';
