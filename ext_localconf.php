<?php
defined('TYPO3_MODE') or die();

// Register icon for new content element:
$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
    \TYPO3\CMS\Core\Imaging\IconRegistry::class
);
$iconRegistry->registerIcon(
    'tx-seotableofcontents-menu-section-seo',
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    ['source' => 'EXT:seo_tableofcontents/Resources/Public/Icons/menu-section-seo.svg']
);

// Register new content element:
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
        mod.wizards.newContentElement.wizardItems.menu {
            elements {
                tx_seotableofcontents_menu_section_seo {
                    iconIdentifier = tx-seotableofcontents-menu-section-seo
                    title = LLL:EXT:seo_tableofcontents/Resources/Private/Language/locallang_tca.xlf:tx_seotableofcontents_menu_section_seo.wizard.title
                    description = LLL:EXT:seo_tableofcontents/Resources/Private/Language/locallang_tca.xlf:tx_seotableofcontents_menu_section_seo.wizard.description
                    tt_content_defValues {
                        CType = tx_seotableofcontents_menu_section_seo
                    }
                }
            }
            show := addToList(tx_seotableofcontents_menu_section_seo)
        }
');
