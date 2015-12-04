<?php 
	require 'sys/request.php';


	class CORE{

		static private $controller;
		static private $action;

		static private $contr_call;
		static private $action_call;

		static function init(){
			//echo 'Core arrenca app'
			//recuperar la request
				//echo $_server['REQUEST_URI'];
				//extract all the components
				Request::retrieve();
				$controller=Request::getCont();
				self::$controller=$controller;
				//Coder::code($controller);

				$action=Request::getAct();
				self::$action=$action;
				//Coder::code($action);
				$params=Request::getParams();
				//Coder:codear($params);

				self::router();
		}

		static function router(){
			

			//if exists the controller
			//fer una instancia del controlador
			$contr_call=(self::$controller!="")?self::$controller:'home';
			$action_call=(self::$controller!="")?self::$action:'home';
			$filename=self::$contr_call.'.php';
			$filecontroller=APP.'controller'.DS.ucfirst($filename);
			Coder::code($filecontroller);
			
			if(is_readable($filecontroller)){
				$cont=new self::$contr_call();
				if(is_callable(array($cont,$action_call)))
					{
					call_user_func(array($action_call));
					
					Coder::codear($cont);
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