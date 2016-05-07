<?php

// This is the database connection configuration.
return array(
	'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database
	
	'connectionString' => "mysql:hostname=192.168.100.170;port=3306;dbname=explorescz_db",
	'emulatePrepare' => true,
	'username' => 'root',
	'password' => '210041692',
	'charset' => 'utf8',	
);