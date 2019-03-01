validaciones(3);
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
 		post = $.post("../controller/controlador_admin.php", parametros, funtion_seleccionar, "json");
 		 //post = $.post("controller/controlador.php",parametros, function_login,"json");
 		 break;
         // se realiza el mismo prosedimento con los demas casos lo unico que cambia es la data que se le envia y a la funcion que va a llegar
         case 2:
         var parametros ={
           opcion:2,
           data:dataval
         }
         post = $.post("../controller/controlador_admin.php", parametros, funtion_actualizar, "json");
         break;
         case 3:
         var parametros = {
          opcion:3
        }
        post = $.post("../controller/controlador_admin.php", parametros, funtion_graficar, "json");
        break;
        case 4:
        var parametros = {
          opcion :4,
          data:dataval

        }
        post = $.post("../controller/controlador_admin.php", parametros, funtion_eliminar, "json");
        break;
        case 5:
        var parametros = {
          opcion :5,
          data:dataval
        }
        post = $.post("../controller/controlador_admin.php", parametros, funtion_editar, "json");
        break;
        case 6:
        var parametros = {
          opcion:6,
          data:dataval
        }
        post = $.post("../controller/controlador_admin.php", parametros, funtion_insertar, "json");
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
 		var id3 = $('#id_usuario2').text();
   // alert(id3);
 		// se envia a la funcion validaciones a su respectivo caso y la dta que se va a utilizar 
 		validaciones(1,id3); 
 		// se cierra el modal del login 
 		$("#login").modal("hide");
 		// se abre el de actualizar
 		$("#crea").modal("show"); 
 		//alert(Usuario);	
 	});
 	// se crea na funcion que resive la informacion que  se mando anteriormente a la funcion validaciones
 	function funtion_seleccionar(data){
     //   alert(data);
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

   // validaciones(7, id_usuario);
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
// inicio crud de nuevos usuario
function funtion_graficar(data){

 // console.log(data);
 document.getElementById("cuerpo").InnerHTML = "";
 var crud = document.getElementById("cuerpo");
 var tr, td, button, button1, input;
 for(i=0; i<data.length; i++){
  var id = data[i][0]; 
  var nombre = data[i][1];
  var usuario = data[i][2];
  var contrasena = data[i][3];
  var correo = data[i][4];
  var tipo_usuario = data[i][5];
  var sexo = data[i][6];
  tr= document.createElement("tr");
  
  td= document.createElement("td");
  input=document.createElement("input");
  input.id=i+1;
  input.class="custom-checkbox";
  input.type="checkbox";
  td.appendChild(input);
  tr.appendChild(td);

  td= document.createElement("td");
  td.textContent = i+1;
  tr.appendChild(td);

  td= document.createElement("td");
  td.textContent = nombre;
  tr.appendChild(td);

  td= document.createElement("td");
  td.textContent = usuario;
  tr.appendChild(td);

  td= document.createElement("td");
  td.textContent = contrasena;
  tr.appendChild(td);

  td= document.createElement("td");
  td.textContent = correo;
  tr.appendChild(td);

  td= document.createElement("td");
  td.textContent = tipo_usuario;
  tr.appendChild(td);

  td= document.createElement("td");
  td.textContent = sexo;
  tr.appendChild(td);

  td= document.createElement("td");
  button= document.createElement("a");
  button.style=" padding-bottom:5px;padding-left:15px;padding-right:15px;border-color: #080808;border-width: 3px;border-style: solid;border-radius:30px;";
  button.textContent = "Eliminar";
  button.href="javascript:funtion_eliminarcampo("+id+");";
  td.appendChild(button);

  button1= document.createElement("a");
  button1.style=" padding-bottom:5px;padding-left:15px;padding-right:15px;border-color: #080808;border-width: 3px;border-style: solid;border-radius:30px;";
  button1.textContent = "Editar";
  button1.href="javascript:funtion_editarcampo("+id+", '"+nombre+"', '"+usuario+"', '"+contrasena+"', '"+correo+"', '"+tipo_usuario+"', '"+sexo+"');";
  td.appendChild(button);
  td.appendChild(button1);
  tr.appendChild(td);

  crud.appendChild(tr);

}

}

function funtion_eliminarcampo(data){
  validaciones(4, data);
}

function funtion_eliminar(data){
  console.log(data);
}

function funtion_editarcampo(id, nombre, usuario, contrasena, correo, tipo_usuario, sexo){
  $("#id_usuario1").val(id);
  $("#nombre").val(nombre);
  $("#usuario3").val(usuario);
  $("#contrasena4").val(contrasena);
  $("#contrasena5").val(contrasena);
  $("#correo").val(correo);
  $("#tipo_usuario").val(tipo_usuario);
  $("#sexo").val(sexo);
  $("#actualizacion2").modal("show"); 
}

$("#Actualizar2").on("click", function(){
  //alert("tus datos seran actualizados en un momento");
  var id2 = $("#id_usuario1").val();
  var nombre1 = $("#nombre").val();
  var usuario1 = $("#usuario3").val();
  var contrasena3 = $("#contrasena4").val();
  var contrasena4 = $("#contrasena5").val();
  var correo2 = $("#correo").val();
  var tipo_usuario1 = $("#tipo_usuario").val();
  var sexo2 = $("#sexo").val();
  var array=[id2,nombre1,usuario1,contrasena3,correo2,tipo_usuario1,sexo2];
  if((id2 && nombre1 && usuario1 && contrasena3 && correo2 && tipo_usuario1 && sexo2) !==""){
    if (contrasena3==contrasena4){
 //alert(array);

}else{
  $("#actualizacion1").css("display","block");
  $("#contrasena5").val("");
}

}

validaciones(5, array);
});

function funtion_editar(data){
  if(data !==""){
 // alert(data);
 var id4 = [];
 var nombre3 = [];
 var usuario3 = [];
 var contrasena5 = [];
 var correo3 = [];
 var tipo_usuario2 = [];
 var sexo3 = [];

}
for (var i =0; i<data; i++) {
  id4[i]=data[0][0];
  nombre3[i]=data[0][1];
  usuario3[i]=data[0][2];
  correo3[i]=data[0][3];
  contrasena5[i]=data[0][4];
  tipo_usuario2[i]=data[0][5];
  sexo3[i]=data[0][6];

}

}
$("#crear1").on("click", function(){
  var nombre4 =$("#nombre2").val();
  var usuario4 =$("#usuario4").val();
  var correo4 =$("#correo5").val();
  var contrasena7 =$("#contrasena6").val();
  var contrasena8 =$("#contrasena7").val();
  var tipo_usuario3 =$("#tipo_usuario3").val();
  var sexo4 =$("#sexo7").val();
  var array2 = [nombre4,usuario4,correo4,contrasena7,tipo_usuario3,sexo4];
  if((nombre4&&usuario4&&correo4&&contrasena7&&contrasena8&&tipo_usuario3&&sexo4) !==""){
    if(contrasena7==contrasena8){
      //console.log(array2);
      validaciones(6,array2);
    }else{
      $("#actualizacion3").css("display","block");
      $("#contrasena7").val("");
    }
  }
  
});

function funtion_insertar(data){
  if(data !==""){
 // alert(data);
 var nombre4 = [];
 var usuario4 = [];
 var contrasena6 = [];
 var correo4 = [];
 var tipo_usuario3 = [];
 var sexo4 = [];

}
for (var i =0; i<data; i++) {
  nombre4[i]=data[0][1];
  usuario4[i]=data[0][2];
  correo4[i]=data[0][3];
  contrasena6[i]=data[0][4];
  tipo_usuario3[i]=data[0][5];
  sexo4[i]=data[0][6];

}
}
// fin del crud de nuevos usuarios
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
















