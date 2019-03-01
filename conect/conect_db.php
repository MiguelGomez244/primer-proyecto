<?php
// creamos una clase que contendra la coneccion con la base de datos y se xtiende a mysqui
class conect_database extends mysqli
{
  // se crean variables privadas para almacenar el host, usuario, contrasena y el nombre de la base que se utilizara
	private $host = 'localhost'; 
	private $user = 'root';
  private $past = '';
  private $db_guardar_ejemplos = 'almacenamiento';
    // se crea una funcion publica de tipo constructor que va contener los parametros de la conexion con la base de datos
  public function __construct()
  {
      // se definen los parametros de la funcion contrutor
   parent::__construct($this->host,$this->user,$this->past,$this->db_guardar_ejemplos);
       // se utiliza set_charset("utf8") para el formato de decodificacion  de caracteres 
   $this->set_charset("utf8");
       // se realiza para ver si hay algun problema con la conexion y muestre el error correspondiente
   $this->connect_errno ? die('Error en la conexion:'. mysqli_connect_error()):
       //o por el contrario que si se conecto de manera indicada
   $e ="conectado:)";
       // se muestra a partir de un echo
     //echo ($e);
 }
}
// se crea una variable que instancia la clase anterior y muestre si se conecto correctamente
//$prueva = new conect_database();