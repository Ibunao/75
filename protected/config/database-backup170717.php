<?php

// This is the database connection configuration.
return array(
	//'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database

	  // 'connectionString' => 'mysql:host=128.128.1.41;dbname=purchase',
	  // 'emulatePrepare' => true,
	  // 'username' => 'chen',
	  // 'password' => '123456',
	  // 'charset' => 'utf8',
   //    'tablePrefix' => 'meet_',   //加入前缀名称sdb_
   //    'enableProfiling'=>true,


	'connectionString' => 'mysql:host=128.128.1.66;dbname=purchase_2017_03',
	'emulatePrepare' => true,
	'username' => 'purchase',
	'password' => 'octmami2015',
	'charset' => 'utf8',
	'tablePrefix' => 'meet_',   //加入前缀名称sdb_
	'enableProfiling'=>true,


//	'connectionString' => 'mysql:host=localhost;dbname=purchase',
//	'emulatePrepare' => true,
//	'username' => 'root',
//	'password' => '',
//	'charset' => 'utf8',
//	'tablePrefix' => 'meet_',   //加入前缀名称sdb_
//	'enableProfiling'=>true,
);