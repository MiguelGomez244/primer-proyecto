<?php
// se realiza el respectivo enlace con /conect/conect_db.php mediante require_once
require_once"../conect/conect_db.php";

// se crea una clase que va a contener todas la s funciones necesarias
class db_login{
// se crean dos variables privadas para  realizar el respectivo proceso de manejo de la data
	private $consult,$dataAll;
// se crea una funcion para resivir la info del controlador y realizar el respectivo proceso con esta
	function consult_login($dato){
		// se crean las variables que tentran la data correspondiente en la posicion que esta cada uno de estos datos
		$cedula=strip_tags($dato[0]);
		$contrasena=strip_tags($dato[1]);
		//se crea una variable que instancia la clase que coneccion a la base de datos
		$mysqli = new conect_database();
		// se rea una variable que sea igual a la variable que instancio la clase anterior y se realiza una respectiva consulta y se le mandan los respectivos datos
		$query = $mysqli->prepare("select id_usuarios,nombre_usuario,tipo_usuario from t_usuarios where usuario='".$cedula."' and contrasena='".$contrasena."'");
		// se ejecuta lo que esta dentro de la variable anterior 
		$query->execute();	
        // se llama la una de las variables privadas que se crearon al principio y esta va a ser igual a la variable que contiene los datos de la consulta uy se obtienen los datos con get_result();
		$this->consult=$query->get_result();
       // se creaun bucle que es igual a data que sea igual al metodo inbocado en este caso la variable que contiela los datos de la consulta y se obtiene una colunma o un array (los datos)
		while ($data=$this->consult->fetch_row()) {
            // llamamos a la otra variable privada que sera un array y contendra los datos
			$this->dataAll[]=$data;

		}
        // retornamos los datos 
		return $this->dataAll;
	}
	function consult_insertar($ddata){
		
		$mysqli = new conect_database();
		$query = $mysqli->prepare("insert into t_usuarios(nombre_usuario,usuario,contrasena,correo,tipo_usuario,sexo)values(?,?,?,?,?,?)");
		$query->bind_param("ssssss", $ddata[0],$ddata[1],$ddata[3],$ddata[2],$ddata[6],$ddata[5]);
		$this->consult=$query->execute();	



		return $this->consult;
	}
	//consultar usuario
	/*function consult_user($dsdjhsjkdhsjdh){
	
    $mysqli = new Conec_login1();
	$query = $mysqli->prepare("select u.id , t_cargo.cargo, u.nombre,cedula,u.correo,u.telefono,u.direccion,u.barrio,u.localidad,u.contrasena,u.Estado,u.grupo from t_usuarios u
inner join t_cargo on t_cargo.id= u.id_cargo where cedula='".$dsdjhsjkdhsjdh."' ");
	$query->execute();	
    
    $this->consult=$query->get_result();

		while ($data=$this->consult->fetch_row()) {

        $this->dataAll[]=$data;

         }

          return $this->dataAll;
	}
    //consulta preguntas
    function consult_preguntas($ddddata){
    	//$cedula1=strip_tags($ddddata);
    	$mysqli = new Conec_login1();
    	$query = $mysqli->prepare("select encabezado, nombre_formulario,respuesta_usuario,respuesta  from t_version_formulario
inner join t_pregunta on t_pregunta.id_version_formulario=t_version_formulario.id_version_formulario
inner join t_respuesta_usuario on t_respuesta_usuario.id_pregunta=t_pregunta.id_pregunta
where t_version_formulario.estado_formulario = 'Activo'");
    	$query->execute();
 $this->consult=$query->get_result();

		while ($ddddata=$this->consult->fetch_row()) {

        $this->dataAll[]=$ddddata;

         }

          return $this->dataAll;


      }*/

  }
