<?php
require_once"../dataaccess/dbacces_subirarchivos.php";
if (isset($_POST['opcion']) && !empty($_POST['opcion'])){
// se crea una variable que sea igual a opcion 
	$op = $_POST['opcion'];
     // se realiza un respectivo control de ordenes con un witch dependiendo de la variable op	
     
	switch ($op) {
			case 7:
			$db_log = new  subir_archivos();
			$result = $db_log->consult_insertar($_POST['data']);
			echo json_encode($result);
			break;
	}
}


	
