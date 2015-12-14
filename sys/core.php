<?php 
	require 'sys/request.php';


class Core{
	static private $controller;
	static private $action;
	static private $params;

	static function init(){
		//echo 'CORE arrenca app'
		//recuperar to request
		//echo $_SERVER['REQUEST_URI'];
		Request::retrieve();
		$controller=Request::getCont();
		$action=Request::getAct();
		$params=Request::getParams();
		
		//mostramos los datos
		/*coder::code($controller);
		coder::code($action);
		coder::codear($params);*/
		
		//router
		self::$controller=$controller;
		self::$action=$action;
		self::$params=$params;
		self::router();
	}

		static function router(){
			

			//if exists the controller
			//fer una instancia del controlador
			$controlCall=(self::$controller!="")?self::$controller:'home';//if agrupado
			$actionCall=(self::$action!="")?self::$action:'home';
			$paramsCall=(self::$params!=null)?self::$params:array('default'=>'default');

		//comprobamos si existe el fichero del controlador
		$filename=$controlCall.'.php';
		$filecontroller=APP.'controllers'.DS.$filename;
			
			if (is_readable($filecontroller)){
			$cont=new $controlCall($paramsCall);
			if (is_callable(array($cont,$actionCall))){
				call_user_func(array($cont,$actionCall));
			}else{
				//no function
				echo 'No action!';
			}
			}else{
				//No controller
				echo 'No Controller!';
				}	
		}
	}
	/* */