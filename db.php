<?php

$username = 'root';
$password = '';

return array(
	'db'=>array(
		'connectionString' => 'mysql:host=localhost;dbname=ulimsportal',
		'emulatePrepare' => true,
		'username' => $username,
		'password' => $password,
		'charset' => 'utf8',
		//'tablePrefix' => '',
	),
	
	'ulimsDb'=>array(
		'connectionString'=>'mysql:host=localhost;dbname=ulimslab',
		'username' => $username,
		'password' => $password,
		'class'=>'CDbConnection',
		'charset' => 'utf8',
		//'tablePrefix' => '',
	),
	
	'referralDb'=>array(
		'connectionString'=>'mysql:host=localhost;dbname=onelabdb',
		'username' => $username,
		'password' => $password,
		'class'=>'CDbConnection',
		'charset' => 'utf8',
		//'tablePrefix' => '',
	),
	
	'cashierDb'=>array(
		'connectionString'=>'mysql:host=localhost;dbname=ulimscashiering',
		'username' => $username,
		'password' => $password,
		'class'=>'CDbConnection',
		'charset' => 'utf8',
		//'tablePrefix' => '',
	),
	
	'accountingDb'=>array(
		'connectionString'=>'mysql:host=localhost;dbname=ulimsaccounting',
		'username' => $username,
		'password' => $password,
		'class'=>'CDbConnection',
		'charset' => 'utf8',
		//'tablePrefix' => '',
	),
	
	'inventoryDb'=>array(
		'connectionString'=>'mysql:host=localhost;dbname=ulimsinventory',
		'username' => $username,
		'password' => $password,
		'class'=>'CDbConnection',
		'charset' => 'utf8',
		//'tablePrefix' => '',
	),

	'equipmentDb'=>array(
		'connectionString'=>'mysql:host=localhost;dbname=ulimsequipment',
		'username' => $username,
		'password' => $password,
		'class'=>'CDbConnection',
		'charset' => 'utf8',
		//'tablePrefix' => '',
	),
	
	'phAddressDb'=>array(
		'connectionString'=>'mysql:host=localhost;dbname=phaddress',
		'username' => $username,
		'password' => $password,
		'class'=>'CDbConnection',
		'charset' => 'utf8',
		//'tablePrefix' => '',
	),
	
	'information_schema'=>array(
		'connectionString'=>'mysql:host=localhost;dbname=information_schema',
		//'username' => 'root',
		//'password' => '',
		'username'=>$username,
		'password'=>$password,
		'class'=>'CDbConnection',
		'charset' => 'utf8'
	)
);