<?php 
	require 'sys/request.php';


	class CORE{
		static function init(){
			//echo 'Core arrenca app'
			//recuperar la request
				//echo $_server['REQUEST_URI'];
				Request::retritive();

				$controller=Request::getCont();
				echo $controller.'<br>';
				$action=Request::getAct();
				echo $action.'<br>';
				$params=Request::getParams();
				print_r($params);
		}
	}