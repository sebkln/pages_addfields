<?php
defined('TYPO3_MODE') or die();

/*
 * ATTENTION!
 * You will not need this file if you used TYPO3 v9 or higher!
 * The table 'pages_language_overlay' is no longer used there.
 *
 * More information is available in the TYPO3 Changelog: 'Breaking: #82445 - Pages and page translations'
 * https://docs.typo3.org/c/typo3/cms-core/master/en-us/Changelog/9.0/Breaking-82445-PagesAndPageTranslations.html
 */

// Configure new field:
$fields = [
    'tx_pagesaddfields_customtext' => [
        'label' => 'LLL:EXT:pages_addfields/Resources/Private/Language/locallang_db.xlf:pages.tx_pagesaddfields_customtext',
        'exclude' => 1,
        'config' => [
            'type' => 'input',
            'max' => 255
        ],
    ]
    // In this example, we assume that the custom checkbox is only used in the original language. So, no need to configure it here.
];

// Add new field to translated pages:
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages_language_overlay', $fields);

// Make field visible in the TCEforms:
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'pages_language_overlay', // Table name
    '--palette--;LLL:EXT:pages_addfields/Resources/Private/Language/locallang_db.xlf:pages.palette_title;tx_pagesaddfields', // Field list to add
    '', // List of specific types to add the field list to. (If empty, all type entries are affected)
    'after:nav_title' // Insert fields before (default) or after one, or replace a field
);

// Add the new palette:
$GLOBALS['TCA']['pages_language_overlay']['palettes']['tx_pagesaddfields'] = [
    'showitem' => 'tx_pagesaddfields_customtext'
];
