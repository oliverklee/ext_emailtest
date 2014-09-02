<?php
/**
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

/**
 * Script for running the e-mail tests.
 *
 * @author Oliver Klee <typo3-coding@oliverklee.de>
 */

if (!defined('TYPO3_cliMode')) {
	die('You cannot run this script directly!');
}

echo 'Retrieving CLI back-end user.' .  LF;
/** @var tx_oelib_Mapper_BackEndUser $userMapper */
$userMapper = Tx_Oelib_MapperRegistry::get('tx_oelib_Mapper_BackEndUser');
$user = $userMapper->findByCliKey();
if ($user === NULL) {
	echo 'Not found. Stopping.' . LF;
	exit;
}
echo 'User found. UID: ' . $user->getUid() . LF;

$emailAddress = $user->getEmailAddress();
if ($emailAddress === '') {
	echo 'The user does not have an e-mail address. Stopping.' . LF;
	exit;
}
if ($user->getName() === '') {
	echo 'The user does not have a name address. Stopping.' . LF;
	exit;
}
if (!preg_match('/[\-_\.a-zA-Z0-9]+@localhost/', $emailAddress) && !t3lib_div::validEmail($emailAddress)) {
	echo 'The e-mail address "' . $emailAddress . '" is not valid. Stopping.' . LF;
	exit;
}

echo 'The user "' . $user->getName() . '" <' . $user->getEmailAddress() . '> seems to be okay.' . LF;

echo LF . 'Finished!' . LF;

