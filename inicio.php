<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap-material-design.min.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/estilo1.css">
</head>
<body >
 <!--icicio de la barra de busqueda -->
 
 <nav class="navbar navbar-expand-lg navbar-light bg-light barra_inicio" >
  <a class="nav-link" href="#login" data-toggle="modal" data-target="#login">Login</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#crea" data-toggle="modal" data-target="#crea">Registrate</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Disabled</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Acerca de
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<!--fin de la barra de inicio -->

<!--inicio del contenedor body-->
<header class="header content">
	<!--inicio video del body-->
  <div class="header_video">
    <video src="video/Typing on Keyboard of MacBook Pro.mp4" autoplay loop></video>
  </div>
  <div class="header_overlay"></div>
  <!--fin video del body-->
  
  <!-- inicio informacion de la pagina-->
  <div class="header_content">
    <h1>bienvenidos a mi web</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>
  <!-- fin informacion de la pagina-->
</header>
<!--inicio del contenedor body-->

<!--inicio del modal del login-->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!--login -->
        <div class="container">
          <div class="d-flex justify-content-center h-100">
            <div class="container-fluid mt-5">
              <center>  
                <div class="card" style="width:22rem; height:24rem; ">
                  <div class="card-header">
                    <h3 class="text-center">Login</h3>
                  </div>
                  <div class="card-body">
                    <form>
                      <fieldset>
                      <div class="input-group form-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fa fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" id="Usuario" maxlength="10" required pattern="[A-Za-z0-9_-]{1,30}" placeholder="Usuario">
                      </div>
                      <div class="input-group form-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fa fa-key"></i></span>
                        </div>
                        <input type="password" id="Contraseña" maxlength="10" required class="form-control" pattern="[A-Za-z0-9_-]{1,20}"  placeholder="Contraseña">
                      </div>
                      <div class="form-group">
                        <p class="text-center">
                          <button class="btn btn-primary" id="Confirmar" type="submit">Confirmar</button>
                        </p>
                      </div>
                      <div id="mens" class="alert alert-warning" style="display: none;" role="alert">
                      Usuario o Contraseña Incorrectos
                      </div>
                      </fieldset>
                    </form>
                  </div>
                </div>
              </center>
            </div>
          </div>
        </div>
        <!--fin login -->
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
<!--fin del modal del login-->

<!-- inicio de la modal de una nueva cuenta-->
<div class="modal fade" id="crea" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card" style="width:28,5rem; height:28rem; ">
          <!-- inicio de la nueva cuenta-->
          <div class="card-header">
            <h3 class="text-center">Crea tu propio usuario</h3>
          </div>
          <div class="card-body">
            <form>
              <div class="input-group form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-edit"></i></span>
                </div>
                <input type="text" class="form-control" id="Nombre1" maxlength="30" required pattern="[A-Za-z]{1,30}" placeholder="Nombre:">
              </div>
              <div class="input-group form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-user-plus"></i></span>
                </div>
                <input type="text" class="form-control" id="Usuario1" maxlength="20" required pattern="[A-Za-z0-9_-]{1,20}" placeholder="Usuario:">
              </div>
              <div class="input-group form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                </div>
                <input type="email" id="Corre1"  required class="form-control" placeholder="Correo:">
              </div>
              <div class="input-group form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-key"></i></span>
                </div>
                <input type="password" id="Contraseña1" maxlength="20" required class="form-control" pattern="[A-Za-z0-9_-]{1,20"  placeholder="Contraseña:">
              </div>    
              <div class="input-group form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-key"></i></span>
                </div>
                <input type="password" id="Contraseña2" maxlength="20" required class="form-control" pattern="[A-Za-z0-9_-]{1,20}"  placeholder="Repetir Contraseña:">
              </div>
              <div class="input-group form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-venus-mars"></i></span>
                </div>
                <select class="custom-select custom-select-sm" id="sexo1">
                  <option selected>selecciona tu sexo</option>
                  <option value="Hombre">Hombre</option>
                  <option value="Mujer">Mujer</option>
                </select>
              </div>
              <div id="confi" class="alert alert-warning" style="display: none;" role="alert">
                      Verificacion de contraseña incorrecta
                      </div>
              <div class="form-group">
                <p class="text-center">
                  <button class="btn btn-primary" id="Verificar" type="submit">Verificar</button>
                </p>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- fin de la modal de una nueva cuenta-->



<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap-material-design.min.js"></script>
<script src="plugins/sweetalert-master/docs/assets/sweetalert/sweetalert.min.js" ></script>
<script src="js/completo.js"></script>
</body>

</html>