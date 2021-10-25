<?php 

class Paginas{
	
	public function enlacesPaginasModel($enlaces){


		if($enlaces == "contenido"  || $enlaces == "template2" || $enlaces == "template3" || $enlaces == "template4" || $enlaces == "admin" || $enlaces == "login" || $enlaces == "registro" || $enlaces == "salir" || $enlaces == "convencion" || $enlaces == "especialidad" || $enlaces == "medicamentos" || $enlaces == "posologia" || $enlaces == "usuarios"){

			$module = "views/modules/".$enlaces.".php"; 

		}else if($enlaces == "index"){
			
			$module = "views/modules/inicio.php";

		}else if($enlaces == "ok"){
			
			$module = "views/modules/registro.php";

		}else if($enlaces == "fallo"){
			
			$module = "views/modules/login.php";

		}else{

			$module = "views/modules/inicio.php";
		}  
			return $module;
	} 

}
?>