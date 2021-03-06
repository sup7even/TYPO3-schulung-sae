<?php
defined('TYPO3_MODE') || die();

if (TYPO3_MODE === 'BE') {
    /**
     * Register Backend Module
     */
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'EBT.' . $_EXTKEY,
        'tools',
        'extensionbuilder',
        '',
        array(
            'BuilderModule' => 'index,domainmodelling,dispatchRpc',
        ),
        array(
            'access' => 'user,group',
            'icon' => 'EXT:extension_builder/ext_icon.gif',
            'labels' => 'LLL:EXT:extension_builder/Resources/Private/Language/locallang_mod.xlf',
        )
    );
}
