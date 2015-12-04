<?php
	class Template{
		static function load($contents,$data=null){

			include APP.'tpl/head.php';	
			include APP.'tpl/'.$contents.'.php';
			include APP.'tpl/footer.php';
		}
	}

