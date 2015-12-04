<?php
	// first phase 
	// environment
	// developer mode 
	ini_set('display_errors','on');

	error_reporting(E_ALL);
	// it could be in another file
	
	include 'config.php';
	require 'sys/helper.php';
	
	//session proof
	Session::init();
	


	//reading configuration
	$conf=Registry::getInstance();	

	$conf->welcome='Hola';		//__set
	$msg=$conf->welcome; 		//__get
	unset($conf->welcome);

	
	$conf -> delete(); 

	$conf->time;
	Core::init();

	//Crear class registry per tenir accés.
	// a través de singleton
	//a la configuraci´ño de l'aplicació
	//al fitxer config.json de app.
	

