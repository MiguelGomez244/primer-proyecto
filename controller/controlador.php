<?php
// se realiza el enlace con el /dataaccess/dbacces.php mediante require_once
require_once"../dataaccess/dbacces.php";
//se crea una sesion
session_start();
//se realizan las respectivas validaciones de la opcion
if (isset($_POST['opcion']) && !empty($_POST['opcion'])){
	// se crea una variable que sea igual a opcion 
	$op = $_POST['opcion'];
	// se realiza un respectivo control de ordenes con un witch dependiendo de la variable op	
	switch ($op) {
// se crea su respectivo caso dependiendo de la variable op
		case 1:
		// se crea una variable que instancie la clase db_login de /dataaccess/dbacces.php
		$db_log = new  db_login();
		// se crea una variable que sea igual a la variable que guarda la instancia de la clase anterior para utilizar una de sus funciones y le enviamos la data por _POST
		$result = $db_log->consult_login($_POST["data"]);
		//creo una variable de sesion que contenga una variable y sea igual a la variable que me trae la respectiva data de /dataaccess/dbacces.php en su respectiva posicion del array
		$_SESSION['id_usuario']=$result[0][0];
		$_SESSION['Usuario']=$result[0][2];
		// realizamos los mismo anteriormente
		$_SESSION['nombre_usuario']=$result[0][1];
        // mandamos los datos que necesitamos por medio de echo json_encode
      
		echo json_encode($_SESSION['Usuario']);
		// cerramos el caso
		break;
			case 2:
			$db_log = new  db_login();
			$result = $db_log->consult_insertar($_POST['ddata']);
			echo json_encode($result);
			break;
			/*case 3:
			$db_log = new  db_login();
			$result = $db_log->consult_user($_POST['ddata']);
			echo json_encode($result);
			break;
			/*case 4:
			$db_log = new  db_login();
			$result = $db_log->consult_preguntas($_POST['dddata']);
			$_SESSION['datos']=$result;
			//header("location: ../views/graficacion_preguntas.php");
			echo json_encode($_SESSION['datos']);
			break;*/
		}
		
	} 
