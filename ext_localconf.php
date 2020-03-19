<?php
defined('TYPO3_MODE') or die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'LarsPeipmann.' . $_EXTKEY,
    'pi1',
    [
        'Main' => 'show',
    ],
    []
);
