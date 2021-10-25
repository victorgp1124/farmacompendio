<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="col-md-12">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
              <a href="index.php"><img src="views/img/farmacompendio-logo.png" width="50" height="50" class="img-responsive"></a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="myNavbar">
              <ul class="nav navbar-nav">
                <li class=""><a href="index.php">Inicio</a></li>
                <li class=""><a href="?action=login">login</a></li> 
                <?php session_start(); if(isset($_SESSION['validar']) == true) {
                    echo '<li class=""><a href="?action=admin">admin</a></li> 
                          <li class=""><a href="?action=salir">cerrar</a></li> ';
                } ?>
              </ul>
            </div>
          </div>
        </div>
      </nav>