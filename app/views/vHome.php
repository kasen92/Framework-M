<?php
	class vHome extends View{
		function __construct(){
			parent::__construct('home');
			$this-> template = template::load('home');
			
		}

		
	}