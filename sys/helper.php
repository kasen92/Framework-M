<?php
	
	spl_autoload_register(null,false);
	spl_autoload_register('MAutoload::SysLoad');


	class Mautoload{
		static function SysLoad($class){
			$filename=strtolower($class).'.php';
			$file=ROOT.'sys'.DS.$filename;
			if(!file_exists($filename)){
				return false;
			}
			require $file;
		}


	}
	/**
	* Coder
	* makes var_dump easy
	*@author Gerard
	**/
	class Coder{
		static function code($var){
			echo '<pre>'.$var.'</pre>';
		}
		static function codear($var){
			echo '<pre>'.var_dump($var).'</pre>';

		}



	}