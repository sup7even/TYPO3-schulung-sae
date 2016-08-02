<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function ($extKey) {

        // Adds the content element to the "Type" dropdown
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
            array(
                'Text & Media (boxed)',
                'theme_textmediaboxed',
            ),
            'CType',
            $extKey
        );


        $tca = [
            'types' => [
                'theme_textmediaboxed' => $GLOBALS['TCA']['tt_content']['types']['textmedia']
            ],
        ];

        $GLOBALS['TCA']['tt_content'] = array_replace_recursive($GLOBALS['TCA']['tt_content'], $tca);

    },
    'theme'
);
