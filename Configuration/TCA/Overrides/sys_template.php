<?php
defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'seo_tableofcontents',
    'Configuration/TypoScript',
    'SEO Table of contents (Basic)'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'seo_tableofcontents',
    'Configuration/TypoScript/ContentSlug',
    'SEO Table of contents (with content_slug)'
);
