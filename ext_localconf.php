<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

// Register new content element:
ExtensionManagementUtility::addPageTSConfig('
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
