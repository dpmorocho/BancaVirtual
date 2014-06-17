<?php

Class Cuenta extends Controller {

	private $_cuenta;


	public function __construct() {
		parent::__construct();

		$this->_cuenta = $this->loadModel('cuenta_modelo');
	}

	public function cuenta(){

		$data['title'] ='Cuenta';
		$data['cuenta'] = $this->_cuenta->saldo();

		$this->view->rendertemplate('header', $data);
		$this->view->render('cuenta/cuenta',$data);
		$this->view->rendertemplate('footer', $data);

	}

	public function debito($id){

		$data['title'] ='Debitar';

		$this->view->rendertemplate('header', $data);
		$this->view->render('cuenta/debito',$data);
		$this->view->rendertemplate('footer', $data);

	}
}