<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function ($extKey) {

        // Add theme's general PageTSConfig
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
            'theme',
            'Configuration/PageTSconfig/PageGeneral.tsc',
            'EXT:theme :: General PageTSConfig'
        );
    },
    'theme'
);
