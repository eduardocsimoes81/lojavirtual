<?php 
	class categoriaController extends controller{

		public function __construct(){
			$admin = new Admins();

			if($admin->isLogged() == false){
				header("Location: ".BASE_URL."painel/login");
			}
		}

		public function index(){

			$dados = array();

			$this->loadTemplate('categorias', $dados);
		}

		public function addcategoria(){

			
		}
	}
 ?>