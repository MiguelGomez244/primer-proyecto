// funcion validaciones con sus respectivas parametros
function validaciones(val, dataval){
 	// realizamos una ciclo switch para mandar informacion a su respectivo caso
 	switch(val){
 		// cada caso contiene su respectivo numero, parametros el cual contiene una opcion y la respectiva data
 		case 1:
 		var parametros ={
 			opcion:1,
 			data:dataval
 		}
 		// se define una faviable llamada post la cual se encargar de contener al metodo post el cual tiene dentro de si una seri de parametros como la ruta del controlador lo que se le va a mandar, a la funcion que va aretonar y por que medio en este caso json
 		post = $.post("../controller/controlador_usuario.php", parametros, funtion_seleccionar, "json");
 		 //post = $.post("controller/controlador.php",parametros, function_login,"json");
 		 break;
         // se realiza el mismo prosedimento con los demas casos lo unico que cambia es la data que se le envia y a la funcion que va a llegar
         case 2:
         var parametros ={
           opcion:2,
           data:dataval
         }
         post = $.post("../controller/controlador_usuario.php", parametros, funtion_actualizar, "json");
         break;
         case 7:
    var parametros = {
      opcion:7,
      data:dataval
    }
    post = $.post("../controller/controlador_subir.php", parametros, funtion_exitoso, "json");
    break;
       }
       console.log(post);
     }
// se realiza una funcion de tipo click para que ejecute una serie de ordenes cuando se oprima el respectivo boton
$('#actualizar').on("click", function() {
 		// se captura la informacion dentro de una variable 
 		var id4 = $('#id_usuario2').text();
 		// se envia a la funcion validaciones a su respectivo caso y la dta que se va a utilizar
 		validaciones(1,id4); 
 		// se cierra el modal del login 
 		$("#login").modal("hide");
 		// se abre el de actualizar
 		$("#crea").modal("show"); 
 		//alert(Usuario);	
 	});
 	// se crea na funcion que resive la informacion que  se mando anteriormente a la funcion validaciones
 	function funtion_seleccionar(data){
 		//alert("si llega");
 		// se crean las variables de la data que llega cada uan en su respectiva posicion en la que llegan los daotos
 		var id_usuario=data[0][0];	
 		var nombre=data[0][1];
 		var usuario=data[0][2];
 		var correo=data[0][4];
 		var contrasena=data[0][3];
 		var tipo_usuario=data[0][5];
 		var sexo=data[0][6];
 		//alert(tipo_usuario);
 		// cada una de estas variables se introducen el los respectivos contenedores de cada una de las etiquetas html se definen por medio del id
 		$("#id_usuario").val(id_usuario);
 		$("#Nombre2").val(nombre);
 		$("#Usuario2").val(usuario);
 		$("#Corre2").val(correo);
 		$("#Contraseña3").val(contrasena);
 		$("#Contraseña4").val(contrasena);
 		$("#tip_usuario").val(tipo_usuario);
 		$("#sexo2").val(sexo);
 	}
 	// se realiza una funcion de tipo click para que ejecute una serie de ordenes cuando se oprima el respectivo boton
 	$("#Actualizar").on("click",function(){
 		// se capturan en variables el valor de cada una de las etiquetas de html
 		var id =$("#id_usuario").val();
 		var nombre_usuario =$("#Nombre2").val();
 		var usuario1 =$("#Usuario2").val();
 		var correo1 =$("#Corre2").val();
 		var contrasena1 =$("#Contraseña3").val();
 		var contrasena2 =$("#Contraseña4").val();
 		var tipo_usuario1 =$("#tip_usuario").val();
 		var sexo1 =$("#sexo2").val();
 		// se crea un array que contiene cada una de la variables anteriormente utilizadas 
 		var array1=[id,nombre_usuario,usuario1,correo1,contrasena1,tipo_usuario1,sexo1];
 		// se realiza la validacion  de cada una de estas variables para saber si no estan vacias si no es asi se realiza otra validacion
 		if((id&&nombre_usuario&&usuario1&&correo1&&contrasena1&&tipo_usuario1&&sexo1) !==""){
 			// se realiza la segunda validacion  que si la contraseña y la verificacion de esta son iguales relaize otra cosa si no haga otra
 			if(contrasena1==contrasena2){
 				//alert("actualizando espere un momento");
 				//alert(array1);
 				// si son guales oculte el mensaje dlas contraseñas son incorectas 
 				$("#actual").css("display","none");
 				// ademas esconda el modal de actualizar
 				$("#crea").modal("hide");
 				// luego de ello se abre una notificacion que le dira al usuario que cerrara la sesion despues de que la cuenta regresiva termine 
        let timerInterval
        Swal.fire({
	// mensaje de la notificacion
  title: 'se cerrara automaticamente la secisón!',
  //  mensaje mas cuenta regresiva
  html:
  'cerrando en <strong></strong> segundos.<br/><br/>',
    // tiempo en milisegundos para cerrar la sesion
    timer: 10000,
  // funcion que sencarga de la funciones que se necesitan para el proceso de cuenta regresiva
  onBeforeOpen: () => {
    const content = Swal.getContent()
    const $ = content.querySelector.bind(content)

    
    
    
    Swal.showLoading()
 // no se para que sirve tener encuenta creo que era para manipular los antiguos botones
   /* function toggleButtons () {
      stop.disabled = !Swal.isTimerRunning()
      resume.disabled = Swal.isTimerRunning()
    }*/


// funcion que se encarga de manipular el intervalo del tiempo
timerInterval = setInterval(() => {
  Swal.getContent().querySelector('strong')
  .textContent = (Swal.getTimerLeft() / 1000)
  .toFixed(0)
}, 100)
},
// funcion que se encarga de cerrar la sesion si el
onClose: () => {
  clearInterval(timerInterval),
  document.location.href='../close_ssesion.php';
}
})
        
      }else{
 				//alert("datos incorrectos");
 				$("#actual").css("display","block");
 				$("#Contraseña4").val("");
 			}
 		}
 		
 		validaciones(2,array1);
 	});
 	function funtion_actualizar(data){
 		
 		if(data !==""){
 		//	alert("hola mundo");	
    var id= [];
    var nombre=[];
    var usuario=[];
    var correo=[];
    var contrasena=[];
    var tipo_usuario=[];
    var sexo=[];
  }
  for (var i =0; i<data; i++) {
    id[i]=data[0][0];
    nombre[i]=data[0][1];
    usuario[i]=data[0][2];
    correo[i]=data[0][3];
    contrasena[i]=data[0][4];
    tipo_usuario[i]=data[0][5];
    sexo[i]=data[0][6];
    
  }
}

// inicio de plugin de subir archivos
 Dropzone.options.formulario ={
  // tamaño maximo del archivo que se puede subir al servidor 
    maxFilesize: 2,
    // nombre del archivo
    paramName:"file",
    // formato que se permite para subir archivos
    acceptedFiles:".zip",
    // remueve los archivos  solo de la vista
    addRemoveLinks: true,
    //  funcion que permite manejar la cargar del archivo dependiendo de lo anterior
    init: function() {
      this.on("success", function(file) { 
        Swal.fire({
          position: 'top-end',
          type: 'success',
          title: 'Tus archivos han sido suvidos correctamente'+file.name+file.type+file.size,
          showConfirmButton: false,
          timer: 2000
        });
        // captura de cada uno de los datos para mandarlos a la base de datos
        var id_usuario =$("#id_usuario2").text();
             var nombre = file.name;
       var tipo = file.type;
       var peso = file.size;
       var array =[nombre,tipo,peso,id_usuario];
       //alert(array);
       validaciones(7,array);
       
         });
    },
    // funcion que manda un mensaje si no se cumplio con los parametros anteriores
    error: function(file)
      {
       Swal.fire({
          position: 'top-end',
          type: 'error',
          title: 'Tus archivos no han podido ser suvidos'+file.name+file.type+file.size,
          showConfirmButton: false,
          timer: 2000
        })
     
      },
  };
  // funcion que resive la respuesta del envio de data anteriormente
function funtion_exitoso(data){
 //alert(data);
}
// fin de pligind de subir archivos





