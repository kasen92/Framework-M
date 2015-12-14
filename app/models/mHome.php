<?php 

	class mHome {
        private $data=array();
        public function __construct() {
            $this->data=array('logo'=>'logoHome.png','titol'=>'HOME');
       	}

        public function getData(){
            return $this->data;
        }
    }

?>