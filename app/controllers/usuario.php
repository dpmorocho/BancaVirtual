<?php

Class Usuario extends Controller {

	public function __construct() {
		parent::__construct();
	}

	public function usuario(){

		if(Session::get('login') == false){
			url::redirect('usuario/login');
		}

		$data['title'] ='Usuarios';

		$this->view->rendertemplate('header', $data);
		$this->view->render('usuario/usuario',$data);
		$this->view->rendertemplate('footer', $data);
	}

	public function login(){

		if(Session::get('login') == true){
			url::redirect('usuario');
		}

		if(isset($_POST['submit'])){

			$usr = $_POST['username'];
			$pass = $_POST['password'];

			$usuario = $this->loadModel('usuario_modelo');

			if(Password::verify($pass, $usuario->get_hash($usr)) == false){
				die('Error en los datos');
			} else {
				Session::set('login', true);
				Session::set('username', $usr);
				Url::redirect('cuenta');
			}
		}


		$data['title'] ='Login';

		$this->view->rendertemplate('header', $data);
		$this->view->render('usuario/login',$data);
		$this->view->rendertemplate('footer', $data);
	}

	public function logout(){

		Session::destroy();
		url::redirect('usuario');
	}

}

?>