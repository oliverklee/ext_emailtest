# E-mail test extension

TYPO3 extension that provides a command-line tool for testing the various ways of sending e-mail.


## Installation and configuration

1. Copy the extension to a folder "emailtest" in typo3conf/ext/ and enable the extension.

2. Create a non-admin back-end user "_cli_emailtest" and set some password.
   Also enter a full name, e.g., "John Doe".

3. Find a working e-mail address of yours which you would like to use for testing.
   Enter this e-mail address in the back-end user e-mail field.


## Usage

On the command line, run this from your TYPO3 installation path:

    typo3/cli_dispatch.phpsh emailtest

This will send test e-mails using the following methods:

1. PHP mail function
2. t3lib_div::plainMailEncoded
3. t3lib_mail_Message (SwiftMailer)
4. Tx_Oelib_RealMailer::mail
5. Tx_Oelib_RealMailer::sendEmail
6. Tx_Oelib_RealMailer::send (SwiftMailer)
