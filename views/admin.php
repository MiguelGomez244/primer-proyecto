<?php 
// reanudamos la sesion 
session_start();
//realizamos esta funcion para que el navegador no muestre errores 
error_reporting(0);
// guardamos en una variable normal el contenido que tiene la variable de sesion
$usu=$_SESSION['Usuario'];
// realizamos una condicional el la cual desimos que si la variable esta basia o es nula lo redirija  a la locacion que se le indica
if($usu==null  || $usu==""){
  // redireccion
  header("Location:../inicio.php");
//echo ("Usted  no tiene autoriazacion de entrar a esta pagina");
//se utiliza esto ultimo para que termine el proceso si esta condicion se culple
  die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>Document</title>
 <link rel="stylesheet" type="text/css" href="../css/bootstrap-material-design.min.css">
 <link rel="stylesheet" type="text/css" href="../css/material-kit.min.css">
 <link rel="stylesheet" type="text/css" href="../plugins/package/dist/sweetalert2.min.css">
 <link rel="stylesheet" type="text/css" href="../plugins/datatables.min.css">
 <link rel="stylesheet" type="text/css" href="../css/estilo1.css">
   <link rel="stylesheet" href="../css/dropzone.min.css">
  <link rel="stylesheet"  href="../css/estilos2.css">
  <script src="../js/all.min.js"></script>
</head>
<body>
 <!--inicio barra de busqueda -->
 <nav class="navbar navbar-inverse navbar-expand-lg bg-dark">
  <a class="navbar-brand" href="#" data-toggle="modal" data-target="#login">Usuario</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Nuevos Usuarios <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</nav>
<!--fin barra de busqueda -->

<!-- Inicio modal usuario -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="card" >
        <div class="card-header">
          <center>
           <h3 id="cargo"><?php echo $_SESSION['Usuario'];?></h3>
          </center>
        </div>
        <div class="card-body">
         <center>
          <img src="../img/user.jpg" name="aboutme" width="240" height="240" border="0" class="img-circle">
        </center>
        <center>
         <p class="card-text" id="usuario" ><?php echo $_SESSION['nombre_usuario']; ?>
          <p class="card-text" style="display: none;" id="id_usuario2" ><?php echo $_SESSION['id_usuario']; ?>
        </center>        
        <center>
          <a href="#" class="btn btn-outline btn-round" id="actualizar" >Actualiza tus datos</a>
          <a href="../close_ssesion.php" class="btn btn-outline btn-round" id="actualizar" >Cerrar sesión</a>
        </center>
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  </div>
</div>
</div>
</div>
<!--fin modal usuario -->

<!--inicio de modal de actualizar -->
<div class="modal fade" id="crea" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card" style="width:28,5rem; height:40rem; ">
          <!-- inicio de la actualizacion de datos -->
          <div class="card-header">
            <h3 class="text-center">Actualiza tus datos</h3>
          </div>
          <div class="card-body">
            <form>
              <div class="input-group form-group">

                <input type="text" style="display: none;" class="form-control" id="id_usuario" readonly="" maxlength="10" required pattern="[0-9]{1,15}" >
              </div>
              <div class="input-group form-group">  
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-user"></i></span>
                </div>
                <input type="text" class="form-control" readonly="" id="tip_usuario" maxlength="13" required pattern="[A-Za-z0-9_-]{1,15}" placeholder="tipo_usuario">
              </div>
              <div class="input-group form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-edit"></i></span>
                </div>
                <input type="text" class="form-control" id="Nombre2" maxlength="30" required pattern="[A-Za-z]{1,30}" placeholder="Nombre:">
              </div>
              <div class="input-group form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-user-plus"></i></span>
                </div>
                <input type="text" class="form-control" id="Usuario2" maxlength="20" required pattern="[A-Za-z0-9_-]{1,20}" placeholder="Usuario:">
              </div>
              <div class="input-group form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                </div>
                <input type="email" id="Corre2"  required class="form-control" placeholder="Correo:">
              </div>
              <div class="input-group form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-key"></i></span>
                </div>
                <input type="text" id="Contraseña3" maxlength="20" required class="form-control" pattern="[A-Za-z0-9_-]{1,20}"  placeholder="Contraseña:">
              </div>    
              <div class="input-group form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-key"></i></span>
                </div>
                <input type="text" id="Contraseña4" maxlength="20" required class="form-control" pattern="[A-Za-z0-9_-]{1,20}"  placeholder="Repetir Contraseña:">
              </div>
              <div class="input-group form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-venus-mars"></i></span>
                </div>
                <select class="custom-select custom-select-sm" id="sexo2">
                  <option selected>selecciona tu sexo</option>
                  <option value="Hombre">Hombre</option>
                  <option value="Mujer">Mujer</option>
                </select>
              </div>
              <div id="actual" class="alert alert-warning" style="display: none;" role="alert">
                Verificacion de contraseña incorrecta
              </div>
              <div class="form-group">
                <p class="text-center">
                  <button class="btn btn-primary" id="Actualizar" type="submit">Actualizar datos</button>
                  <button type="button" class="btn btn-primary"" data-dismiss="modal">Close</button>
                </p>
              </div>
            </form>
            <!--fin de la actualizacion de datos-->
          </div>
        </div>
      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>
<!--fin de modal de actualizar -->
<!--Inicio del crud-->
<div class="container">
  <div class="table-wrapper">
    <div class="card">
      <div class="row">
        <div class="col-sm">
          <h2><b>Manejo  de Usuarios</b></h2>
        </div>
        <div class="col-sm-6 mt-3">
          <a href="#nuevo" class="btn btn-success" data-toggle="modal"><i class="fa fa-user-plus"></i> <span>Agregar Nuevo Usuario</span></a>        
        </div>
      </div>
    </div>
  </div>
  <table class="table table-striped table-hover" id="tabla">
    <thead class="thead-dark">
      <tr>
        <th>
          <span class="custom-checkbox">
            <input type="checkbox" id="selectAll">
            <label for="selectAll"></label>
          </span>
        </th>
        <th>id</th>
        <th>Nombre</th>
        <th>Usuario</th>
        <th>Contraseña</th>
        <th>Correo</th>
        <th>Cargo</th>
        <th>Sexo</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody id="cuerpo">
    </tbody>
  </table>

  <!-- Edit Modal HTML -->
  <div id="nuevo" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>
          <div class="modal-header">            
            <h4 class="modal-title">Nuevo Usuario</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">          
           <!-- <div class="input-group form-group">

              <input type="text" style="display: none;" class="form-control" id="id_usuario1" readonly="" maxlength="10" required pattern="[0-9]{1,15}" >
            </div> -->
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-edit"></i></span>
              </div>
              <input type="text" class="form-control" id="nombre2" maxlength="30" required  placeholder="Nombre:">
            </div>
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-user-plus"></i></span>
              </div>
              <input type="text" class="form-control" id="usuario4" maxlength="20" required pattern="[A-Za-z0-9_-]{1,20}" placeholder="Usuario:">
            </div>
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-key"></i></span>
              </div>
              <input type="text" class="form-control" id="contrasena6" maxlength="20" required pattern="[A-Za-z0-9_-]{1,20}" placeholder="Contraseña:">
            </div>
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-key"></i></span>
              </div>
              <input type="text" class="form-control" id="contrasena7" maxlength="20" required pattern="[A-Za-z0-9_-]{1,20}" placeholder="Repetir Contraseña:">
            </div>
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-envelope"></i></span>
              </div>
              <input type="email" class="form-control" id="correo5"  required  placeholder="Correo:">
            </div>   
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-user"></i></span>
              </div>
              <select class="custom-select custom-select-sm" id="tipo_usuario3">
                <option selected>selecciona tu cargo</option>
                <option value="Administrador">Administrador</option>
                <option value="Usuario">Usuario</option>
              </select>
            </div>  
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-venus-mars"></i></span>
              </div>
              <select class="custom-select custom-select-sm" id="sexo7">
                <option selected>selecciona tu sexo</option>
                <option value="Hombre">Hombre</option>
                <option value="Mujer">Mujer</option>
              </select>
            </div>         
          </div>
          <div id="actualizacion3" class="alert alert-warning" style="display: none;" role="alert">
            Verificacion de contraseña incorrecta
          </div>
          <div class="modal-footer">
            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
            <button class="btn btn-primary" id="crear1" type="submit">Crear</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!--fin modal nuevo usuario-->
  <!--inicio modal actualizar usuario-->
  <div id="actualizacion2" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>
          <div class="modal-header">            
            <h4 class="modal-title">Actualiza tus Datos</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">          
            <div class="input-group form-group">

              <input type="text" style="display: none;" class="form-control" id="id_usuario1" readonly="" maxlength="10" required pattern="[0-9]{1,15}" >
            </div>
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-edit"></i></span>
              </div>
              <input type="text" class="form-control" id="nombre" maxlength="30" required  placeholder="Nombre:">
            </div>
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-user-plus"></i></span>
              </div>
              <input type="text" class="form-control" id="usuario3" maxlength="20" required pattern="[A-Za-z0-9_-]{1,20}" placeholder="Usuario:">
            </div>
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-key"></i></span>
              </div>
              <input type="text" class="form-control" id="contrasena4" maxlength="20" required pattern="[A-Za-z0-9_-]{1,20}" placeholder="Contraseña:">
            </div>
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-key"></i></span>
              </div>
              <input type="text" class="form-control" id="contrasena5" maxlength="20" required pattern="[A-Za-z0-9_-]{1,20}" placeholder="Repetir Contraseña:">
            </div>
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-envelope"></i></span>
              </div>
              <input type="email" class="form-control" id="correo"  required  placeholder="Correo:">
            </div>   
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-user"></i></span>
              </div>
              <select class="custom-select custom-select-sm" id="tipo_usuario">
                <option selected>selecciona tu cargo</option>
                <option value="Administrador">Administrador</option>
                <option value="Usuario">Usuario</option>
              </select>
            </div>  
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-venus-mars"></i></span>
              </div>
              <select class="custom-select custom-select-sm" id="sexo">
                <option selected>selecciona tu sexo</option>
                <option value="Hombre">Hombre</option>
                <option value="Mujer">Mujer</option>
              </select>
            </div>         
          </div>
          <div id="actualizacion1" class="alert alert-warning" style="display: none;" role="alert">
            Verificacion de contraseña incorrecta
          </div>
          <div class="modal-footer">
            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
            <button class="btn btn-primary" id="Actualizar2" type="submit">Actualizar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!--fin modal actualizar usuario-->
  <!--fin del crud-->
  <!--inicio del modulo de subir archivos -->
<div class="container">
    <h1 class="text">
     Sube tus propios archivos
   </h1>
   <div class="form-container">
    <form action="../subir.php" id="formulario" class="dropzone">
      <div class="dz-message">
        <div class="icon">
          <i class="fas fa-cloud-upload-alt i"></i>
        </div>
        <h2>Suelta tus archivos</h2>
        <span class="note">No hay archivos seleccionados</span>
      </div>
      <div class="fallback">
        <input type="file" name="file" multiple>
      </div>    
    </form>

  </div>
</div>
<!--fin del modulo de subir archivos -->
  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap-material-design.min.js"></script>
  <script src="../js/moment.min.js" ></script>
  <script src="../js/bootstrap-datetimepicker.js" ></script>
  <script src="../js/nouislider.min.js" ></script>
  <script src="../plugins/package/dist/sweetalert2.all.min.js" ></script>
  <script src="../plugins/package/dist/sweetalert2.min.js" ></script>
  <script src="../plugins/datatables.min.js"></script>
  <script src="../js/dropzone.js"></script>
  <script src="../js/admin.js"></script>
  
 
  <!-- Incio codigo para controlar el plugin de paginacion y busqueda-->
  <script type="text/javascript">
    $(document).ready(function(){
      $("#tabla").dataTable({
        language: {
          search: "Buscar:",
          paginate: {
            previous:   "Anterior",
            next:       "Siguiente",
          }
        }
      });
    });
  </script>
  <!-- Fin codigo para controlar el plugin de paginacion y busqueda-->
  
</body>
</html>
