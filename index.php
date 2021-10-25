<?php

require_once "controllers/FarmaController.php";
require_once "controllers/CrudController.php";
require_once "models/enlaces.php";
require_once "models/consultas.php";
require_once "models/url.php";
require_once "models/crud.php";



 $farma = new FarmaController();
 $farma -> pagina();


?>