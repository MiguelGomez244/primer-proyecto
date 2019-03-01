<?php

// se enlasa con dataaccess
require_once"../dataaccess/dbacces_admin.php";
// se realiza la validacion de la opcion que llega en post
if(isset($_POST['opcion']) && !empty($_POST['opcion'])){
// se define una varible que sea igual a lo que llega en post
	$op=$_POST['opcion'];
	// se crea un switch con la variable anterior
	switch ($op) {
		// se crean los casos
		case 1:
		// cada caso cuenta con la instancia de la clse que esta en dbacces
		$db_administrador = new db_admin();
		// y su respectiva funcion que le pertenece
		$result = $db_administrador->consult_seleccionar($_POST["data"]);
		// y su respectivo resultado con echo json_encode
		echo json_encode($result);
		break;
		// lo mismo aplica para los otros casos lo unico que cambia es la funcion
		case 2:
		$db_administrador = new db_admin();
		$result= $db_administrador->consult_actualizar($_POST["data"]);
		echo json_encode($result);
		break;
		case 3:
		$db_administrador = new db_admin();
		$result= $db_administrador->consult_graficar();
		echo json_encode($result);
		break;
		case 4:
		$db_administrador = new db_admin();
		$result= $db_administrador->consult_eliminar($_POST["data"]);
		echo json_encode($result);
		break;
		case 5:
		$db_administrador = new db_admin();
		$result= $db_administrador->consult_editar($_POST["data"]);
		echo json_encode($result);
		break;
		case 6:
		$db_administrador = new db_admin();
		$result = $db_administrador->consult_nuevo($_POST["data"]);
		echo json_encode($result);
		break;
		case 7:
		$db_administrador = new db_admin();
		$result = $db_administrador->consult_seleccionartodo($_POST["data"]);
		echo json_encode($result);
		break;

	}	
}
