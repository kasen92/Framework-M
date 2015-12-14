<?php
	/**
	*
	*	Registry: stores navigation information
	*	@author Gerard
	*
	*
	**/

	class Registry{
		private $data=array();
		// singleton instance
		static $instance;
		
		public static function getInstance(){
			//there is no instance
			if(!(self::$instance instanceof self)){
				self::$instance=new self();
				//return self::$instance;
			}else{
				return self::$instance;
			}
		}

	function __construct(){
		$this->data=array();
		$this->load_conf();
	}

	function __set($key,$value){
		if(!array_key_exists($key, $this->data)){
			//$this->data = array_merge($this->data, array($key => $value));	
			$this->data[$key]=$value;
		}
	}

	function __get($key){
		if(array_key_exists($key, $this->data)){
			return $this->data[$key];	
		}else{
			return null;
		}	
	}

	function load_conf(){
		$file=APP.'config.json';
		$jsonStr=file_get_contents($file);//volcamos el fichero a la variable string
		$arrayJson=json_decode($jsonStr);//generamos un array asociativo con los datos del string
		//recorremos el array y lo guardamos en el array data de la clase
		foreach ($arrayJson as $key => $value){
			$this->data[$key]=$value;
		}
	}

	function delete($key=null){
		if($key===null){
			unset($this->data);
		}else{
			unset($this->data[$key]);
		}
	}



	}
