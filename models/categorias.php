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
	}
 ?>