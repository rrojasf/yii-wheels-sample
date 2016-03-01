<?php

// This is the database connection configuration.
return array(
	//'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database
	
	        'connectionString' => 'mysql:host=localhost;dbname=yii-samples',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'mySQL2015',
	        'charset' => 'utf8',
	        'tablePrefix' => 't_',
	        'class' => 'CDbConnection',
	        'enableProfiling' => true,
	        'enableParamLogging' => true,         
	
);