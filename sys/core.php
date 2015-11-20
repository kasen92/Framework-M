<?php 
	require 'sys/request.php';


	class CORE{
		static function init(){
			//echo 'Core arrenca app'
			//recuperar la request
				//echo $_server['REQUEST_URI'];
				Request::retritive();
				$controller=Request::getCont();
				Coder::code($controller);
				die;
				$action=Request::getAct();
				Coder::code($action);
				$params=Request::getParams();
				Coder:codear($params);
		}
	}