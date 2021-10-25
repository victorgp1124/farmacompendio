<?php
if(!isset($_SESSION)) { 

  session_start();
}

if(!$_SESSION["validar"]){

  header("location:index.php?action=login");

  exit();

}

?> 
 <style type="text/css">
  .banner{
  padding-top: 150px;
    padding-left: 200px;
}
</style>
<?php include "menu.php"; ?>

<section id="ban">
    <div class="container">
      <div class="banner">
        <div class="banner-logo text-center">
              <img src="views/img2/farmacompendio-logo.png" width="200" height="200" class="img-responsive">
        </div>
        <center>
        <div>
              <h1 class="black">FarmaCompendio</h1>
              <p>Infórmese en segundos de las posologías e indicaciones de cualquier medicamento. <b>Farmacompendio®</b> le ayudará a reducir el riesgo de cometer errores en la prescripción a sus pacientes, mediante la respuesta clara a más de 12.000 preguntas sobre medicamentos usados en Colombia.</p>
        </div>
        </center>
      </div>
    </div>
</section>


