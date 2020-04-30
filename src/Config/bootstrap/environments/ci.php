<?php

Environment::configure('staging',
	array(
		'server' => array('staging.example.com')
	),
	array(
		// Site specific items
		'Settings.FULL_BASE_URL' => 'http://staging.example.com',

		'Email.username' => 'email@example.com',
		'Email.password' => 'password',
		'Email.test' => 'email@example.com',
		'Email.from' => 'email@example.com',

		'logQueries' => true,

		// App Specific functions
		'debug' => 0,

		// Securty
		'Security.level' => 'medium',
		'Security.salt' => 'SALT',
		'Security.cipherSeed' => 'CIPHERSEED',

		'MYSQL_DB_HOST'      => 'db',
		'MYSQL_USERNAME'     => 'cake',
		'MYSQL_PASSWORD'     => 'cake',
		'MYSQL_DB_NAME'      => 'testdb',
		'MYSQL_TEST_DB_NAME' => 'testdb',
		'MYSQL_PREFIX'       => '',
	),
	function() {
		date_default_timezone_set('UTC');

		Cache::config('default', array('engine' => 'File'));
		if (!defined('FULL_BASE_URL')) {
			define('FULL_BASE_URL', Configure::read('Settings.FULL_BASE_URL'));
		}
	}
);
