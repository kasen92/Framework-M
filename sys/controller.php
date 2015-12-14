<?php 
	class controller{	//abstract, no es poden fer instancies
			protected $params;
			protected $model;
			protected $view;

		function __construct($params){
		$this->params=$params;
		}
	}