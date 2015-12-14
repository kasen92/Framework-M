<?php 
	class Session {
		

	function __construct(){
		session_start();
	}

	function crearVariable($key,$value){
		$_SESSION[$key]=$value;
	}

	function leerVariable($key){
		return $_SESSION[$key];	
	}

	function obtenerID(){
		return session_id();
	}

	function exiteVariable($key){
		$res=false;
		if(array_key_exists($key, $_SESSION)){
			$res=true;
		}
		return $res;
	}

	function destruir(){
		session_destroy();
	}
}