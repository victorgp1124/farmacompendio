<!DOCTYPE html>

<html lang="en">

     
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Farma</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
  <script src="views/js/jquery-3.3.1.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
  <link rel="stylesheet" type="text/css" href="views/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="views/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="views/css/style.css">
  <link rel="stylesheet" type="text/css" href="views/css/jquery-ui.css">
  <!-- =======================================================
    Theme Name: Medilab
    Theme URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>

 <?php include "modules/navbar.php"; ?>

      <?php
        $mvc = new FarmaController();
        $mvc -> enlacesPaginasController();
      ?>
  
  
  <?php include "modules/footer.php"; ?>

  
  <script src="views/js/jquery.min.js"></script>
  <script src="views/js/jquery-ui.js"></script>
  <script src="views/js/jquery.easing.min.js"></script>
  <script src="views/js/bootstrap.min.js"></script>
  <script src="views/js/custom.js"></script>
  <script src="views/contactform/contactform.js"></script>
  <script src="views/js/datatables.min.js"></script>



</body>  

