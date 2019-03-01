//funcion de  validaciones
function validaciones(val, dataval){
//se crea un switch con susurespectivos casos
switch(val){
  case 1:
    // se envian los respectivos parametros como la opcion y la informacion
    var parametros = {
      opcion:1,
      data:dataval 
    };
    //por medio del metodo post a su respectivo controlador, con sus respectivos parametros y que me mande la info a su respectiva funcion por medio de json
    post = $.post("controller/controlador.php",parametros, function_login,"json");
    // se cierra el caso
    break;
    case 2:
    var parametros ={
      opcion:2,
      ddata:dataval
    };
    post = $.post("controller/controlador.php",parametros,function_actualizar, "json");
    break;
    /* case 3:
    var parametros ={
      opcion:3,
      ddata:dataval
    };
    post = $.post("controller/controladorlogin.php",parametros,function_login, "json");
    break;
     
     case 4:
    var parametros ={
      opcion:4,
      dddata:dataval
    };
    post = $.post("controller/controladorlogin.php",parametros,function_preguntas, "json");

    break;*/
  }
  console.log(post);
  
}
// abre modal de login
$('#abrir').on("click", function(e) {
 $("#exampleModal").modal("show");
});
//captura los datos
$('#Confirmar').on("click", function(e) {
 var Usuario = $('#Usuario').val();
 var Contraseña = $('#Contraseña').val();
 var array=[Usuario,Contraseña];
 if ((Usuario && Contraseña ) !== ""){
  e.preventDefault();
  validaciones(1,array);
}
});
// respectiva funcion del login
function function_login(data){
  if (data !=="" && data==data && data !==null) {
    // manda a su respectiva vista dependiendo el tipo de usuario
    var tipo_usuario=data;
    if(tipo_usuario=="Administrador"){
      window.location.href = "views/admin.php";
    }else if(tipo_usuario=="Usuario"){
      window.location.href = "views/usuario.php";
    }
  }else{
    // si la data no es correcta se manda esto para cambiar es estado del elemento html
    $("#mens").css("display","block");
    $('#Usuario').val("");
    $('#Contraseña').val("");
  }
  
}
// captura el valor de las et,iquetas html en variables
$('#Verificar').on("click", function() {
 var nombre1=$('#Nombre1').val();
 var usuario1=$('#Usuario1').val();
 var correo1=$('#Corre1').val();
 var contrasena1=$('#Contraseña1').val();
 var repetir_contrasena=$('#Contraseña2').val();
 var sexo=$('#sexo1').val();
 var tipo_usuario="Usuario";
 // todas las variables se guardan en un array
 var array2=[nombre1,usuario1,correo1,contrasena1,repetir_contrasena,sexo,tipo_usuario];
// alert(array2);
// se realiza la validacion para comprovar que ninguna variables este vasia
if((nombre1&&usuario1&&correo1&&contrasena1&&repetir_contrasena&&sexo) !=="" ){
  // se hace una validacion para verificar la contraseña
  if(contrasena1==repetir_contrasena){
    // se manda a la funcion validaciones el caso y la data
    validaciones(2,array2);
    // se oculta el modal de crear
    $("#crea").modal("hide");
    // se muestra un mensaje al usuario
    swal("Felicidades!", "Tu usuario ha sido creado correctamente", "success");
    // se muestra el modal de login
    $("#login").modal("show");

  }else{
// se limpian los valores de la contraseña y su verificacion
$("#Contraseña1").val("");
$("#Contraseña2").val("");
    // se manda un alert al usuario indicandole que la contraseña o su verificacion han sido incorrectas
    $("#confi").css("display","block");
  }
}
});
// funcion que resive la informacion o la confirmacion de que el proceso se ejecuto coorectamente
function function_actualizar(data){
  // validacion para comprovar si los datos no estan vacios
  if(data !==""){
    // se limpian los valores de cada uno de las etiquetas de html
    $("#Nombre1").val("");
    $("#Usuario1").val("");
    $("#Corre1").val("");
    $("#Corre1").val("");
    $("#Contraseña1").val("");
    $("#Contraseña2").val("");
    $("#sexo1").val("selecciona tu sexo");
  }
}


