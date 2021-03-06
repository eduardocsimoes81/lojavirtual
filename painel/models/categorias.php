<?php 
	class Categorias extends model{

		public function getCategorias(){

			$array = array();

			$sql = "SELECT * FROM categorias";
			$sql = $this->db->prepare($sql);
			$sql->execute();

			if($sql->rowCount() > 0){
				$array = $sql->fetchAll();
			}

			return $array;
		}

		public function getCategoria($id_categoria){

			$array = array();

			$sql = "SELECT * FROM categorias WHERE id = :id_categoria";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(":id_categoria", $id_categoria);
			$sql->execute();

			if($sql->rowCount() > 0){
				$array = $sql->fetch();
			}

			return $array;
		}

		public function addCategorias($titulo_categoria){

			$sql = "INSERT INTO categorias SET titulo = :titulo_categoria";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(":titulo_categoria", $titulo_categoria);
			$sql->execute();				
		}

		public function editarCategorias($id_categoria, $titulo_categoria){

			$sql = "UPDATE categorias SET titulo = :titulo_categoria WHERE id = :id_categoria";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(":id_categoria", $id_categoria);
			$sql->bindValue(":titulo_categoria", $titulo_categoria);
			$sql->execute();				
		}

		public function excluirCategorias($id_categoria){

			$sql = "DELETE FROM produtos WHERE id_categoria = :id_categoria";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(":id_categoria", $id_categoria);
			$sql->execute();			

			$sql = "DELETE FROM categorias WHERE id = :id_categoria";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(":id_categoria", $id_categoria);
			$sql->execute();			
		}
	}
?>