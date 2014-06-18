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
		$data['row'] = $this->_cuenta->obtener_info();

		$this->view->rendertemplate('headeruser', $data);
		$this->view->render('cuenta/cuenta',$data);
		$this->view->rendertemplate('footer', $data);

	}

	public function debito($id){

		if(isset($_POST['submit'])){
			$montoDebito = $_POST['valorDebito'];
			if(empty($montoDebito)){
				$error = "Debe ingresar una cantidad";
			}
			if(!isset($error)){
				$data['cuenta'] = $this->_cuenta->saldo();
				foreach ($data['cuenta'] as $row) {
					$actual = $row->cue_balance;
				}
				$total = $actual - $montoDebito;
				$where = array('cue_id' => $id);
				$postdata = array('cue_balance' => $total);
				$this->_cuenta->actualizar($postdata, $where);
				Url::redirect('cuenta');
			}
		}

		$data['title'] ='Debitar';
		$data['row'] = $this->_cuenta->obtener_cuenta($id);
		$data['cuenta'] = $this->_cuenta->saldo();
		$data['row'] = $this->_cuenta->obtener_info();

		$this->view->rendertemplate('headeruser', $data);
		$this->view->render('cuenta/debito',$data, $error);
		$this->view->rendertemplate('footer', $data);

	}

	public function pin($id){

		if(isset($_POST['submit'])){
			$passAct = $_POST['passActual'];
			$pass1 = $_POST['pass1'];
			$pass2 = $_POST['pass2'];
			if(!empty($passAct)){
				$data['usuario'] = $this->_cuenta->obtener_info();
				foreach ($data['usuario'] as $row) {
					$actual = $row->usr_clave;
				}
				if(Password::verify($passAct,$actual)){
			     //passed
			    } else {
			    	$error[]= 'La clave anterior no es correcta.';
			    }
			}
			if($pass1 != $pass2){
				$error[]= 'Las claves no coinciden';
			}

			if(!isset($error)){
				$hash = Password::make($pass1);
				$where = array('usr_id' => $id);
				$postdata = array('usr_clave' => $hash);
				$this->_cuenta->actualizarPin($postdata, $where);
				Url::redirect('cuenta');
			}
		}

		$data['title'] ='Cambiar PIN';
		$data['row'] = $this->_cuenta->obtener_info();
		$data['cuenta'] = $this->_cuenta->saldo();

		$this->view->rendertemplate('headeruser', $data);
		$this->view->render('cuenta/pin',$data, $error);
		$this->view->rendertemplate('footer', $data);

	}
}