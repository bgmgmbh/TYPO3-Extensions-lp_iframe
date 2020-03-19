<?php
defined('TYPO3_MODE') or die();

$extensionName = \TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase('lp_iframe');

/**
 * Add setup.txt / constants.txt to static files selection in template records
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'lp_iframe',
    'Configuration/TypoScript',
    'LP iFrame'
);

/**
 * Add Plugin
 */
$pluginName = 'pi1';
$pluginSignatureList = strtolower($extensionName) . '_' . $pluginName;

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'lp_iframe',
    $pluginName,
    'LLL:EXT:lp_iframe/Resources/Private/Language/locallang_flexform.xlf:' . $pluginName,
    'EXT:lp_iframe/ext_icon.gif'
);

$TCA['tt_content']['types']['list']['subtypes_excludelist'][$pluginSignatureList] = 'layout,select_key,pages,recursive';
$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginSignatureList] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    $pluginSignatureList, 'FILE:EXT:lp_iframe/Configuration/FlexForms/flexform_' . $pluginName . '.xml'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
    'tt_content.pi_flexform.lpiframe_pi1.list',
    'EXT:lp_iframe/Resources/Private/Language/locallang_csh_flexform.xlf'
);
