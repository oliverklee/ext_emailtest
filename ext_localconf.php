<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

// register the command line interface script
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['GLOBAL']['cliKeys']['emailtest'] = array(
	'EXT:emailtest/Scripts/EmailTest.php', '_CLI_emailtest',
);
