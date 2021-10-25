 <?php
class FarmaController{

	#LLAMADA A LA PLANTILLA

	public function pagina(){	

		include "views/template.php";

	}

	#ENLACES 
	
	public function enlacesPaginasController(){	

		if(isset($_GET['action'])){
			$enlaces = $_GET['action'];			
		}else{
			$enlaces = "index";
		}

		$respuesta = Paginas::enlacesPaginasModel($enlaces);
		include $respuesta;

	}

	#VISTA DE MEDICAMENTOS

	public function vistaUsuariosController(){	

		$var = $_GET["var"];

		$respuesta = Datos::vistaUsuariosModel($var);

		foreach($respuesta as $row => $item){
		echo'<tr>
				<td><b><a href="index.php?action=template3&var2='.$item["id"].'&var3='.$item["nombre"].'" class="enlaces">'.$item["nombre"].'</a></b></td>
			</tr>';

		}

	}

	#VISTA DE RECETA DE MEDICAMENTO

	public function vistaUsuariosControllerr(){

		$var2 = $_GET["var2"];

		$respuesta = Datos::vistaUsuariosModels($var2);

		foreach($respuesta as $row => $item){
		echo 
		'<tr>
				<th>'.$item["descripcion"].'</th>
	
				<th>'.$item["valor"].'</th>
		</tr>';

		}

	}

	#REGISTRO USUARIOS

	public function registroUsuarioController(){

		if(isset($_POST["correoR"])){

			$datos = array("correo"=>$_POST["correoR"],
					   		"nombre"=>$_POST["nombreR"],
					   		"pass"=>$_POST["passR"]);
		

				$respuesta = Datos::registroUsuarioModel($datos, "usuarios");

				if($respuesta=="success"){

					header("location:index.php?action=ok");

				}else{

					header("location:index.php?action=inicio");
				}

		}
		
	}

	#INGRESO DE USUARIO

	public function ingresoUsuarioController(){

		if(isset($_POST["nombreI"])){

			$datos = array("nombre"=>$_POST["nombreI"],
					   		"pass"=>$_POST["passI"]);
		

				$respuesta = Datos::ingresoUsuarioModel($datos, "usuarios");

				if($respuesta["nombre"]==$_POST["nombreI"] && $respuesta["pass"]==$_POST["passI"]){

					session_start();

					$_SESSION["validar"]= true;

					header("location:index.php?action=admin");

				}else{

					header("location:index.php?action=fallo");
				}

					

		}
		
	}

	public function buscarController(){

		$nom = $_POST["principle"];

		$respuesta = Datos::vistabuscarModel($nom);

		foreach($respuesta as $row => $item){
		echo 
		'<tr>
				<th>'.$item["descripcion"].'</th>
	
				<th>'.$item["valor"].'</th>
		</tr>';

		}

	}
	

}
?>