<?php

Environment::configure('development',
	true, // Defaults to development
	array(
		'Settings.FULL_BASE_URL' => 'http://example.dev',

		'Email.username' => 'email@example.com',
		'Email.password' => 'password',
		'Email.test' => 'email@example.com',
		'Email.from' => 'email@example.com',

		'logQueries' => true,

		'debug' => 2,
		'Cache.disable' => true,
		'Security.salt' => 'SALT',
		'Security.cipherSeed' => 'CIPHERSEED',

		'MYSQL_DB_HOST'      => 'db',
		'MYSQL_USERNAME'     => 'cake',
		'MYSQL_PASSWORD'     => 'cake',
		'MYSQL_DB_NAME'      => 'cakedb',
		'MYSQL_TEST_DB_NAME' => 'testdb',
		'MYSQL_PREFIX'       => '',
	),
	function() {
		if (!defined('FULL_BASE_URL')) {
			define('FULL_BASE_URL', Configure::read('Settings.FULL_BASE_URL'));
		}
	}
);
