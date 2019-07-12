<?php
defined('TYPO3_MODE') or die();

/*
 * ATTENTION!
 * You will not need this file if you used TYPO3 v9 or higher!
 * The table 'pages_language_overlay' is no longer used there.
 * Therefore, the configuration below was removed as well.
 *
 * More information is available in the TYPO3 Changelog: 'Breaking: #82445 - Pages and page translations'
 * https://docs.typo3.org/c/typo3/cms-core/master/en-us/Changelog/9.0/Breaking-82445-PagesAndPageTranslations.html
 */

// Add new fields to the list of fields which should be overlaid on page records:
$TYPO3_CONF_VARS['FE']['pageOverlayFields'] .= ',tx_pagesaddfields_customtext';
