<?php
// se realiza el enlase con conect
require_once"../conect/conect_db.php";
// se crea una clase que contendra cada una de las funciones
class db_usua{
	// se crean dos variables privadas
	private $consult, $dataAll;
	// se crean las funciones
	function consult_seleccionar($data){
		// se crea la variable que trae los datos
		$id=strip_tags($data);
		// se crea una variable que instancia la clase de conexion con la base de datos
		$mysqli= new conect_database();
		// se crea una variable que es igual a la variable que se utilizo para instanciar anteriormente y esta es igual a la consulta que se prepara
		$query=$mysqli->prepare("select * from t_usuarios where id_usuarios='".$id."'");
		// tambien es igual a la ejecusion de la consulta
		$query->execute();
		// se utiliza una variable privada para almacenar todo el proceso mensionado anteriormente
		$this->consult=$query->get_result();
		// se realiza un ciclo con la data y la variable privada que tiene todo
		while ($data=$this->consult->fetch_row()) {
			// se almacena toda la data dentro de la otra variable privada
			$this->dataAll[]=$data;
		}
		// se retorna lo que se guardo anteriormente en la variable privada
		return $this->dataAll;
	}
	//  se crea una funcion
	function consult_actualizar($data){
		// se crea una variable que instancia la clase de conexion con la base de datos
		$mysqli= new conect_database();
		// se crea una variable que es igual a la variable que se utilizo para instanciar anteriormente y esta es igual a la consulta que se prepara
		$query=$mysqli->prepare("update t_usuarios set nombre_usuario=?, usuario=?, contrasena=?, correo=?, tipo_usuario=? ,sexo=? where id_usuarios=?");
		// se crean los respectivos parametros de la consulta
		$query->bind_param("ssssssi", $data[1],$data[2],$data[4],$data[3],$data[5],$data[6],$data[0]);
		// se guarda la variable que se utilizo anteriormente en una variable privada y se ejecuta
		$this->consult=$query->execute();
		// se retorna la variable privada
		return $this->consult;
	}
}