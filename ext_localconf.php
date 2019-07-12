<?php
defined('TYPO3_MODE') or die();

// Add new fields to the list of fields which should be overlaid on page records:
$TYPO3_CONF_VARS['FE']['pageOverlayFields'] .= ',tx_pagesaddfields_customtext';
