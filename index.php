<?php
	//first phase
	//enviroment

	ini_set('display_errors', 'on');

	define('DS',DIRECTORY_SEPARATOR);
	define('ROOT',realpath(dirname(__FILE__)).DS);
	//to acces filesystem
	define('APP',ROOT.'app'.DS);
	define('APP_W',basename(dirname($_SERVER['SCRIPT_NAME'])));
	//it could be in another file
	
	require ('sys/core.php');
	CORE::init();


?>
