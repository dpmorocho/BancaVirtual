<?php

class Cuenta_modelo extends Model {

	public function __construct(){
		parent::__construct();
	}

	public function saldo(){
		$aux = Session::get('username');
		return $this->_db->select("SELECT DISTINCT cue_id, cue_balance, cue_tipo FROM cuenta c, usuario u WHERE c.usr_id = (SELECT usr_id FROM usuario where usr_nick = :aux)", array(':aux' => $aux));

	}

	public function actualizar($data, $where){
		$this->_db->update("cuenta",$data,$where);
	}

}