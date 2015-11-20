<?php
	class Request{
			static private $query=array();

			static function retritive(){
				$array_query=explode('/',$_SERVER['REQUEST_URI']);
				//array_shift($array_query);
				//array_pop($array_query);
				//var_dump($array_query);

				//extract the first "/"
				array_shift($array_query);
				//if we publish in root
				if($array_query[0]==APP_W){
					array_shift($array_query);
				}
				//deleting blanks at the end
				if(end($array_query)==""){
					array_pop($array_query);
				}
			//return valeu to stati $query
				self::$query=$array_query;

				var_Dump($array_query);
			}
			static function getCont(){
				//return array_shift(self::$query);
						$res=self::$query[0];
				array_shift(self::$query);
				return $res;

			}
			static function getAct(){
				//return array_shift(self::$query);
				$res=self::$query[0];
				array_shift(self::$query);
				return $res;

			}
			static function getParams(){
				if(count(self::$query)>0){
			$res=array();
			do{
				array_push ($res,array(self::$query[0],self::$query[1]));
				array_shift(self::$query);
				array_shift(self::$query);
			}while(count(self::$query)>0);
			
			return $res;

		}else{}
	}
}

/*if(count(self::$query)>0){
	if((count(self::$query)%2)==0){
	self::$query;
	}
}
*/