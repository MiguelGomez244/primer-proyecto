<?php 
// mediante esta funcion iniciamos la sesion
session_start();
// mediante esta funcion destruimos la sesion
session_destroy();
// y la enviamos al inicio
header("Location:inicio.php");
 ?>