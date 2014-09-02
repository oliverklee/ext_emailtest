<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "emailtest".
 *
 * Auto generated 02-09-2014 14:56
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'E-mail tester',
	'description' => 'This extension provides a command-line tool for testing the various ways of sending e-mail.',
	'category' => 'test',
	'author' => 'Oliver Klee',
	'author_email' => 'typo3-coding@oliverklee.de',
	'shy' => '',
	'dependencies' => 'oelib',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 1,
	'lockType' => '',
	'author_company' => '',
	'version' => '1.0.0',
	'constraints' => array(
		'depends' => array(
			'php' => '5.3.0-5.5.99',
			'typo3' => '4.5.0-6.2.99',
			'oelib' => '0.7.76-',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:6:{s:9:"CHANGELOG";s:4:"3531";s:12:"ext_icon.gif";s:4:"b4bf";s:17:"ext_localconf.php";s:4:"318d";s:7:"LICENSE";s:4:"e8c1";s:9:"README.md";s:4:"ae51";s:21:"Scripts/EmailTest.php";s:4:"3232";}',
	'suggests' => array(
	),
);