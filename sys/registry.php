<?php
	/**
	*
	*	Registry: stores navigation information
	*	@author Gerard
	*
	*
	**/

	class Registry{
		private $data=Array();
		// singleton instance
		static $instance;
		
		public static function getInstance(){
			//there is no instance
			if(!(self::$instance instanceof self)){
				self::$instance=new self();
				return self::$instance;
			}else{
				return self::$instance;
			}
		}

		function __construct(){
			$this->data=array();
		}
		function __construct(){
			$this->data=array();
			$this->load_conf();
		}

		//methodes __set ($key,$value)

		function __set($key,$value){
			if(!array_key_exists($key,$this->data)){
				$this->data[$key]=$value;
			}
		}

		//methodes __get ($key)

		function __get($key){
			if(array_key_exists($key,$this->data)){
				return $this->data[$key];
			}else{
				return null;
			}
		}

		//esborrar les claus: unset.
		function __unset($key=null){
			if(array_key_exists($key, $this->data)){
				//$idx=array_search($key, $this->data);
					unset($this->data[$key]);
			}
			
		}



		function load_conf(){
			$file=APP.'Config.json';
			$json_str=file_get_contents($file);
			Coder::code($json_str);
			$array_json=json_decode($json_str);

			foreach ($array as $key => $value) {
				$this->data[$key]=$value;
			}

		}



	}
