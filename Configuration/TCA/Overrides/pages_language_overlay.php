<?php
defined('TYPO3_MODE') or die();

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
