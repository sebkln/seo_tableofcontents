<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addStaticFile(
    'seo_tableofcontents',
    'Configuration/TypoScript',
    'SEO Table of contents (Basic)'
);

ExtensionManagementUtility::addStaticFile(
    'seo_tableofcontents',
    'Configuration/TypoScript/ContentSlug',
    'SEO Table of contents (with content_slug)'
);
