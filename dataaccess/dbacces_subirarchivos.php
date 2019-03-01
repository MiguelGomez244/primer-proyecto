<?php
require_once"../conect/conect_db.php";
class subir_archivos{
	private $consult,$dataAll;
	function consult_insertar($ddata){
		
		$mysqli = new conect_database();
		$query = $mysqli->prepare("insert into t_archivos(nombre_archivo,tipo,tamano,id_usuarios)values(?,?,?,?)");
		$query->bind_param("ssii", $ddata[0],$ddata[1],$ddata[2],$ddata[3]);
		$this->consult=$query->execute();	



		return $this->consult;
	}
}


