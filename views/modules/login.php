<!DOCTYPE html>
<html lang="en">

<head>

  <link href="views/css2/style.css" rel="stylesheet">

</head>
<?php

      $registro = new FarmaController();
      $registro -> ingresoUsuarioController();

      if(isset($_GET["action"])){

        if($_GET["action"]=="fallo"){
          
          echo "fallo";
        }
      }

  ?>

<body>
  <div id="login-page">
    <div class="container">
      <form class="form-login" method="post">
        <h2 class="form-login-heading">Login</h2>
        <div class="login-wrap">
          <input type="text" class="form-control" name="nombreI" placeholder="Usuario" autofocus>
          <br>
          <input type="password" class="form-control" name="passI" placeholder="Contraseña">
          <label class="checkbox">
            <a data-toggle="modal" href="login.html#myModal"> No Recuerdo la Contraseña?</a>
            </span>
            </label>
          <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> Enviar</button>
          <hr>

        <!--  <div class="registration">
            No estas registrado?<br/>
            <a class="" href="?action=registro">
              Crear Cuenta
              </a>
          </div>-->
        </div>
        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Recuperar contraseña ?</h4>
              </div>
              <div class="modal-body">
                <p>Ingresa Correo electronico para Recuperar.</p>
                <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
              </div>
              <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                <button class="btn btn-theme" type="button">Submit</button>
              </div>
            </div>
          </div>
        </div>
        <!-- modal -->
      </form>
    </div>
  </div>
  
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="views/lib2/jquery/jquery.min.js"></script>
  <script src="views/lib2/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="views/lib2/jquery.backstretch.min.js"></script>
  
</body>

</html>
