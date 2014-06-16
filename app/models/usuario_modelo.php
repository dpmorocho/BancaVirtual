<?php

class Usuario_modelo extends Model {

	public function __construct(){
		parent::__construct();
	}

	public function get_hash($usr){
		$data = $this->_db->select("SELECT usr_clave FROM usuario WHERE usr_nick = :usr", array(':usr' => $usr));
		return $data[0]->usr_clave;
	
	}
}