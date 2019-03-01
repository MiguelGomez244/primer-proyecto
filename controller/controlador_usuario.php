<?php

// se enlasa con dataaccess
require_once"../dataaccess/dbacces_usuario.php";
// se realiza la validacion de la opcion que llega en post
if(isset($_POST['opcion']) && !empty($_POST['opcion'])){
// se define una varible que sea igual a lo que llega en post
	$op=$_POST['opcion'];
	// se crea un switch con la variable anterior
	switch ($op) {
		// se crean los casos
		case 1:
		// cada caso cuenta con la instancia de la clse que esta en dbacces
		$db_administrador = new db_usua();
		// y su respectiva funcion que le pertenece
		$result = $db_administrador->consult_seleccionar($_POST["data"]);
		// y su respectivo resultado con echo json_encode
		echo json_encode($result);
		break;
		// lo mismo aplica para los otros casos lo unico que cambia es la funcion
		case 2:
		$db_administrador = new db_usua();
		$result= $db_administrador->consult_actualizar($_POST["data"]);
		echo json_encode($result);
		break;
	}	
}