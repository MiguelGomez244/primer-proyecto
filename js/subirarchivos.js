/*function validaciones(val, dataval){
  switch(val){
    case 7:
    var parametros = {
      opcion:7,
      data:dataval
    }
    post = $.post("../controller/controlador_subir.php", parametros, funtion_exitoso, "json");
    break;
  }
 // console.log(post);
}
//manejamos todas las configuraciones del libreria dropzone
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
       console.log(array);
       validaciones(7, array);
      // alert(array);
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

}*/