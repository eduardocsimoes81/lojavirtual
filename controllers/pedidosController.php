<?php 
	class pedidosController extends controller{

		public function index(){

			$dados = array();

			$categorias = new Categorias();
			$dados['menu'] = $categorias->getCategorias();

			if(isset($_SESSION['lgcliente']) && !empty($_SESSION['lgcliente'])){

				$vendas = new Vendas();
				$dados['pedidos'] = $vendas->getPedidosDoUsuario($_SESSION['lgcliente']);

				$this->loadTemplate('pedidos', $dados);
			}else{
				header("Location: ".BASE_URL."login");
			}
		}

		public function ver($id_pedido){

			$dados = array(
				'pedido' => array() 
			);

			$categorias = new Categorias();
			$dados['menu'] = $categorias->getCategorias();

			$vendas = new Vendas;
			$id_usuario = $_SESSION['lgcliente'];
			$id_pedido = addslashes($id_pedido);

			if(!empty($id_pedido)){

				if($vendas->isPedidoDoUsuario($id_pedido, $id_usuario)){

					$dados['pedido'] = $vendas->getPedidoDoUsuario($id_pedido);

					$this->loadTemplate('pedidos_ver', $dados);
				}else{
					header("Location: ".BASE_URL."pedidos");
				}
			}else{
				header("Location: ".BASE_URL."pedidos");
			}
		}
	}
?>