<?php 
	class homeController extends controller{

		public function __construct(){
			$admin = new Admins();

			if($admin->isLogged() == false){
				header("Location: ".BASE_URL."login");
			}
		}

		public function index(){

			$dados = array();

			$this->loadTemplate('home', $dados);
		}
	}
 ?>