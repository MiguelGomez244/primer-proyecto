<?php
if($_FILES){
	$ubicacion="uploads/";
	$nombrearchivo=$ubicacion.basename($_FILES["file"]["name"]);
	echo $nombrearchivo;
}
if(move_uploaded_file($_FILES["file"]["tmp_name"],$nombrearchivo)){
	echo "archivo copiado correctamente";
}else{
	echo "el archivo no fue suvido";
}