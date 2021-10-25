<?php
class CrudController{ 


####################################################USUARIOS	


	# Crear un usuario
    #---------------------------------
	public function insertarUsuarioController(){

		if(isset($_POST["correoUsu"])){

			$datos = array(	"correoUsu"=>$_POST["correoUsu"],
					   		"nombreUsu"=>$_POST["nombreUsu"],
					   		"passUsu"=>$_POST["passUsu"],
					   		"rolUsu"=>$_POST["rolUsu"]);
		

				$respuesta = Consultas::insertarUsuarioModel($datos, "usuarios");

				if($respuesta=="success"){

					echo '<div class="alert alert-success" style="text-align:center;"> Creado correctamente</div>'; 

				}else{

					echo '<div class="alert alert-danger" style="text-align:center;"> Error al crear</div>';
				}

		}
		
	}

	# Consultar un Usuario
    #---------------------------------
	public function vistaUsuarioController(){	


		$respuesta = Consultas::vistaUsuarioModel();

		foreach($respuesta as $row => $item){
		echo
		'<tr>
				<th>'.$item["idusuarios"].'</th>
	
				<th>'.$item["correo"].'</th>

				<th>'.$item["nombre"].'</th>

				<th>'.$item["pass"].'</th>

				<th>'.$item["idrol"].'</th>

				<td style="text-align: right;">
          <form method="POST" action="?action=usuarios">
            <input type="hidden" name="idEditar" value="'.$item["idusuarios"].'">
            <button type="submit" class="botonform"><h4><i class="fa fa-edit"></i></h4></button>
          </form></td>

          <td style="text-align: right;">
          <form method="POST" action="?action=usuarios">
            <input type="hidden" name="idBorrar" value="'.$item["idusuarios"].'">
            <button type="submit" class="botonform"><h4><i class="fa fa-trash"></i></h4></button>
          </form></td>
		</tr>';

		}

	}

	# Editar una Usuario
    #---------------------------------
    public function editarUsuarioController()
    {
    if(isset($_POST["idEditar"])){
    $id = $_POST["idEditar"];
    $respuesta = Consultas::consultaIdUsuarioModel($id, "usuarios");

    echo '<div class="card">
           <div class="card-header">Editar Usuario</div>
            <div class="card-body">
              <table>
                <thead>
                <tr >
                  <th>ID</th>
                  <th>CORREO</th>
                  <th>NOMBRE</th>
                  <th>CONTRASEÑA</th>
                  <th>IDROL</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                <tr><form method="POST">
      <td><input type="text" name="idusuarios" value="'.$respuesta["idusuarios"].'"></td>
      <td><input type="text" name="correo" value="'.$respuesta["correo"].'"></td>
      <td><input type="text" name="nombre" value="'.$respuesta["nombre"].'"></td>
      <td><input type="text" name="pass" value="'.$respuesta["pass"].'"></td>
      <td><input type="text" name="idrol" value="'.$respuesta["idrol"].'"></td>
      <td><button type="submit" class="botonbol botonesbol">Guardar Cambios</button></td>
      <input type="hidden" name="id" value="'.$respuesta["idusuarios"].'">
                  </form></tr>
                </tbody>
              </table>
          </div></div>';
      }
    }
	

	#Guardar cambios de los Usuarios
	#---------------------------------
	public function actualizarUsuarioController(){

	  	if(isset($_POST["idusuarios"])){
	      $datosController = array( 
	          "idusuarios"=>$_POST["idusuarios"],
	          "correo"=>$_POST["correo"],
	          "nombre"=>$_POST["nombre"],
	          "pass"=>$_POST["pass"],
	          "idrol"=>$_POST["idrol"]);
	   		$respuesta = Consultas::actualizarUsuarioModel($datosController, "usuarios");
	      if($respuesta == "success"){ 
	        echo '<div class="alert alert-success" style="text-align:center;"> Actualizado correctamente</div>';  
	      }else{
	        echo '<div class="alert alert-danger" style="text-align:center;">'.$id.', Error al actualizar</div>';  
	      }
	    }        
	}


	# Borrar Usuario
	#---------------------------------
	public function borrarUsuarioController() {

		if(isset($_POST["idBorrar"])){
		  $id = $_POST["idBorrar"];		
		  $respuesta = Consultas::borrarUsuarioModel($id, "usuarios");  		 
	  		if($respuesta == "success"){
	        echo '<meta http-equiv="refresh" content="0; url=?action=usuarios" />';   
	    }else{
	           echo '<div class="alert alert-danger" style="text-align:center;">Error al eliminar..</div>'; 
	    }
		}	
	}	


####################################################CONVENCION	


	# Crear una convencion
    #---------------------------------
	public function insertarConvencionController(){

		if(isset($_POST["nombreCon"])){

			$datos = array(	"nombreCon"=>$_POST["nombreCon"],
					   		"descripcionCon"=>$_POST["descripcionCon"]);
		

				$respuesta = Consultas::insertarConvencionModel($datos, "convencion");

				if($respuesta=="success"){

					echo '<div class="alert alert-success" style="text-align:center;"> Creado correctamente</div>'; 

				}else{

					echo '<div class="alert alert-danger" style="text-align:center;"> Error al crear</div>';
				}

		}
		
	}

	# Consultar una convencion
    #---------------------------------
	public function vistaConvencionController(){	


		$respuesta = Consultas::vistaConvencionModel();

		foreach($respuesta as $row => $item){
		echo
		'<tr>
				<th>'.$item["id"].'</th>
	
				<th>'.$item["codigo"].'</th>

				<th>'.$item["descripcion"].'</th>

				<td style="text-align: right;">
          <form method="POST" action="?action=convencion">
            <input type="hidden" name="idEditar" value="'.$item["id"].'">
            <button type="submit" class="botonform"><h4><i class="fa fa-edit"></i></h4></button>
          </form></td>

          <td style="text-align: right;">
          <form method="POST" action="?action=convencion">
            <input type="hidden" name="idBorrar" value="'.$item["id"].'">
            <button type="submit" class="botonform"><h4><i class="fa fa-trash"></i></h4></button>
          </form></td>
		</tr>';

		}

	}

	# Editar una convencion
    #---------------------------------
    public function editarConvencionController()
    {
    if(isset($_POST["idEditar"])){
    $id = $_POST["idEditar"];
    $respuesta = Consultas::consultaIdConvencionModel($id, "convencion");

    echo '<div class="card">
           <div class="card-header">Editar Convencion</div>
            <div class="card-body">
              <table>
                <thead>
                <tr >
                  <th>ID</th>
                  <th>CODIGO</th>
                  <th>DESCRIPCION</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                <tr><form method="POST">
      <td><input type="text" name="id" value="'.$respuesta["id"].'"></td>
      <td><input type="text" name="codigo" value="'.$respuesta["codigo"].'"></td>
      <td><input type="text" name="descripcion" value="'.$respuesta["descripcion"].'"></td>
      <td><button type="submit" class="botonbol botonesbol">Guardar Cambios</button></td>
      <input type="hidden" name="id" value="'.$respuesta["id"].'">
                  </form></tr>
                </tbody>
              </table>
          </div></div>';
      }
    }
	

	#Guardar cambios de la convencion
	#---------------------------------
	public function actualizarConvencionController(){

	  	if(isset($_POST["id"])){
	      $datosController = array( 
	          "id"=>$_POST["id"],
	          "codigo"=>$_POST["codigo"],
	          "descripcion"=>$_POST["descripcion"]);
	   		$respuesta = Consultas::actualizarConvencionModel($datosController, "convencion");
	      if($respuesta == "success"){ 
	        echo '<div class="alert alert-success" style="text-align:center;"> Actualizado correctamente</div>';  
	      }else{
	        echo '<div class="alert alert-danger" style="text-align:center;">'.$id.', Error al actualizar</div>';  
	      }
	    }        
	}


	# Borrar convencion.
	#---------------------------------
	public function borrarConvencionController() {

		if(isset($_POST["idBorrar"])){
		  $id = $_POST["idBorrar"];		
		  $respuesta = Consultas::borrarConvencionModel($id, "convencion");  		 
	  		if($respuesta == "success"){
	        echo '<meta http-equiv="refresh" content="0; url=?action=convencion" />';   
	    }else{
	           echo '<div class="alert alert-danger" style="text-align:center;">Error al eliminar..</div>'; 
	    }
		}	
	}


####################################################ESPECIALIDAD


	# Crear una Especialidad
    #---------------------------------
	public function insertarEspecialidadController(){

		if(isset($_POST["nombreEs"])){

			$foto = $_FILES['fotoEs']['tmp_name'];

			$datos = array(	"nombreEs"=>$_POST["nombreEs"],
					   		"descripcionEs"=>$_POST["descripcionEs"]);
	 	

				$respuesta = Consultas::insertarEspecialidadModel($datos, "especialidad");

				if($respuesta=="success"){

					echo '<div class="alert alert-success" style="text-align:center;"> Creado correctamente</div>'; 

				}else{

					echo '<div class="alert alert-danger" style="text-align:center;"> Error al crear</div>';
				}

		}
		
	}


	# Consultar una especialidad
    #---------------------------------
	public function vistaEspecialidadController(){	


		$respuesta = Consultas::vistaEspecialidadModel();

		foreach($respuesta as $row => $item){
		echo 
		'<tr>
				<th>'.$item["id"].'</th>
	
				<th>'.$item["nombres"].'</th>

				<th>'.$item["descripcion"].'</th>

				<th><img src="data:image/png;base64,'.base64_decode($item["foto"]).'"/></th>

		<td style="text-align: right;">
          <form method="POST" action="?action=especialidad">
            <input type="hidden" name="idEditar" value="'.$item["id"].'">
            <button type="submit" class="botonform"><h4><i class="fa fa-edit"></i></h4></button>
          </form></td>

          <td style="text-align: right;">
          <form method="POST" action="?action=especialidad">
            <input type="hidden" name="idBorrar" value="'.$item["id"].'">
            <button type="submit" class="botonform"><h4><i class="fa fa-trash"></i></h4></button>
          </form></td>
		</tr>';

		}

	}


	# Editar una especialidad
    #---------------------------------
    public function editarEspecialidadController()
    {
    if(isset($_POST["idEditar"])){
    $id = $_POST["idEditar"];
    $respuesta = Consultas::consultaIdEspecialidadModel($id, "especialidad");

    echo '<div class="card">
           <div class="card-header">Editar Especialidad</div>
            <div class="card-body">
              <table>
                <thead>
                <tr >
                  <th>ID</th>
                  <th>NOMBRES</th>
                  <th>DESCRIPCION</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                <tr><form method="POST">
      <td><input type="text" name="id" value="'.$respuesta["id"].'"></td>
      <td><input type="text" name="nombres" value="'.$respuesta["nombres"].'"></td>
      <td><input type="text" name="descripcion" value="'.$respuesta["descripcion"].'"></td>
      <td><button type="submit" class="botonbol botonesbol">Guardar Cambios</button></td>
      <input type="hidden" name="id" value="'.$respuesta["id"].'">
                  </form></tr>
                </tbody>
              </table>
          </div></div>';
      }
    }


    #Guardar cambios de la especialidad
	#---------------------------------
	public function actualizarEspecialidadController(){

	  	if(isset($_POST["id"])){
	      $datosController = array( 
	          "id"=>$_POST["id"],
	          "nombres"=>$_POST["nombres"],
	          "descripcion"=>$_POST["descripcion"]);
	   		$respuesta = Consultas::actualizarEspecialidadModel($datosController, "especialidad");
	      if($respuesta == "success"){ 
	        echo '<div class="alert alert-success" style="text-align:center;"> Actualizado correctamente</div>';  
	      }else{
	        echo '<div class="alert alert-danger" style="text-align:center;">'.$id.', Error al actualizar</div>';  
	      }
	    }        
	}


	# Borrar especialidad.
	#---------------------------------
	public function borrarEspecialidadController() {

		if(isset($_POST["idBorrar"])){
		  $id = $_POST["idBorrar"];		
		  $respuesta = Consultas::borrarEspecialidadModel($id, "especialidad");  		 
	  		if($respuesta == "success"){
	        echo '<meta http-equiv="refresh" content="0; url=?action=especialidad" />';   
	    }else{
	           echo '<div class="alert alert-danger" style="text-align:center;">Error al eliminar..</div>'; 
	    }
		}	
	}


####################################################MEDICAMENTOS	


	# Crear una Medicamento
    #---------------------------------
	public function insertarMedicamentoController(){

		if(isset($_POST["nombreMe"])){

			$datos = array(	"nombreMe"=>$_POST["nombreMe"]);
		

				$respuesta = Consultas::insertarMedicamentoModel($datos, "medicamento");

				if($respuesta=="success"){

					echo '<div class="alert alert-success" style="text-align:center;"> Creado correctamente</div>'; 

				}else{

					echo '<div class="alert alert-danger" style="text-align:center;"> Error al crear</div>';
				}

		}
		
	}
	

	# Consultar una medicamentos
    #---------------------------------
	public function vistaMedicamentosController(){	


		$respuesta = Consultas::vistaMedicamentoModel();

		foreach($respuesta as $row => $item){
		echo 
		'<tr>
				<th>'.$item["id"].'</th>

				<th>'.$item["nombre"].'</th>

		<td style="text-align: right;">
          <form method="POST" action="?action=medicamentos">
            <input type="hidden" name="idEditar" value="'.$item["id"].'">
            <button type="submit" class="botonform"><h4><i class="fa fa-edit"></i></h4></button>
          </form></td>

          <td style="text-align: right;">
          <form method="POST" action="?action=medicamentos">
            <input type="hidden" name="idBorrar" value="'.$item["id"].'">
            <button type="submit" class="botonform"><h4><i class="fa fa-trash"></i></h4></button>
          </form></td>
		</tr>';

		}

	}


	# Editar una medicamento
    #---------------------------------
    public function editarMedicamentoController()
    {
    if(isset($_POST["idEditar"])){
    $id = $_POST["idEditar"];
    $respuesta = Consultas::consultaIdMedicamentoModel($id, "medicamento");

    echo '<div class="card">
           <div class="card-header">Editar Medicamento</div>
            <div class="card-body">
              <table>
                <thead>
                <tr >
                  <th>ID</th>
                  <th>NOMBRES</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                <tr><form method="POST">
      <td><input type="text" name="id" value="'.$respuesta["id"].'"></td>
      <td><input type="text" name="nombre" value="'.$respuesta["nombre"].'"></td>
      <td><button type="submit" class="botonbol botonesbol">Guardar Cambios</button></td>
      <input type="hidden" name="id" value="'.$respuesta["id"].'">
                  </form></tr>
                </tbody>
              </table>
          </div></div>';
      }
    }


    #Guardar cambios de la medicamento
	#---------------------------------
	public function actualizarMedicamentoController(){

	  	if(isset($_POST["id"])){
	      $datosController = array( 
	          "id"=>$_POST["id"],
	          "nombre"=>$_POST["nombre"]);
	   		$respuesta = Consultas::actualizarMedicamentoModel($datosController, "medicamento");
	      if($respuesta == "success"){ 
	        echo '<div class="alert alert-success" style="text-align:center;"> Actualizado correctamente</div>';  
	      }else{
	        echo '<div class="alert alert-danger" style="text-align:center;">'.$id.', Error al actualizar</div>';  
	      }
	    }        
	}


	# Borrar medicamento.
	#---------------------------------
	public function borrarMedicamentoController() {

		if(isset($_POST["idBorrar"])){
		  $id = $_POST["idBorrar"];		
		  $respuesta = Consultas::borrarMedicamentoModel($id, "medicamento");  		 
	  		if($respuesta == "success"){
	        echo '<meta http-equiv="refresh" content="0; url=?action=medicamentos" />';   
	    }else{
	           echo '<div class="alert alert-danger" style="text-align:center;">Error al eliminar..</div>'; 
	    }
		}	
	}


####################################################POSOLOGIA	


	# Crear una Posologia
    #---------------------------------
	public function insertarPosologiaController(){

		if(isset($_POST["idmed"])){

			$datos = array(	"idmed"=>$_POST["idmed"],
					   		"idcon"=>$_POST["idcon"],
					   		"descripcionPos"=>$_POST["descripcionPos"]);
		

				$respuesta = Consultas::insertarPosologiaModel($datos, "medicamento_convencion");

				if($respuesta=="success"){

					echo '<div class="alert alert-success" style="text-align:center;"> Creado correctamente</div>'; 

				}else{

					echo '<div class="alert alert-danger" style="text-align:center;"> Error al crear</div>';
				}

		}
		
	}


	# Crear una Posologia
    #---------------------------------
	public function vistaPosologiaController(){	


		$respuesta = Consultas::vistaPosologiaModel();

		foreach($respuesta as $row => $item){
		echo 
		'<tr>
				<th>'.$item["id"].'</th>

				<th>'.$item["id_medicamento"].'</th>
	
				<th>'.$item["id_convencion"].'</th>

				<th>'.$item["valor"].'</th>

		<td style="text-align: right;">
          <form method="POST" action="?action=posologia">
            <input type="hidden" name="idEditar" value="'.$item["id"].'">
            <button type="submit" class="botonform"><h4><i class="fa fa-edit"></i></h4></button>
          </form></td>

          <td style="text-align: right;">
          <form method="POST" action="?action=posologia">
            <input type="hidden" name="idBorrar" value="'.$item["id"].'">
            <button type="submit" class="botonform"><h4><i class="fa fa-trash"></i></h4></button>
          </form></td>
		</tr>';

		}

	}


	# Editar una posologia
    #---------------------------------
    public function editarPosologiaController()
    {
    if(isset($_POST["idEditar"])){
    $id = $_POST["idEditar"];
    $respuesta = Consultas::consultaIdPosologiaModel($id, "medicamento_convencion");

    echo '<div class="card">
           <div class="card-header">Editar Posologia</div>
            <div class="card-body">
              <table>
                <thead>
                <tr >
                  <th>ID</th>
                  <th>ID_MEDICAMENTO</th>
                  <th>ID_CONVENCION</th>
                  <th>DESCRIPCION</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                <tr><form method="POST">
      <td><input type="text" name="id" value="'.$respuesta["id"].'"></td>          
      <td><input type="text" name="id_medicamento" value="'.$respuesta["id_medicamento"].'"></td>
      <td><input type="text" name="id_convencion" value="'.$respuesta["id_convencion"].'"></td>
      <td><input type="text" name="valor" value="'.$respuesta["valor"].'"></td>
      <td><button type="submit" class="botonbol botonesbol">Guardar Cambios</button></td>
      <input type="hidden" name="id" value="'.$respuesta["id"].'">
                  </form></tr>
                </tbody>
              </table>
          </div></div>';
      }
    }


    #Guardar cambios de la posologia
	#---------------------------------
	public function actualizarPosologiaController(){

	  	if(isset($_POST["id"])){
	      $datosController = array( 
	      	  "id"=>$_POST["id"],
	          "id_medicamento"=>$_POST["id_medicamento"],
	          "id_convencion"=>$_POST["id_convencion"],
	          "valor"=>$_POST["valor"]);
	   		$respuesta = Consultas::actualizarPosologiaModel($datosController, "medicamento_convencion");
	      if($respuesta == "success"){ 
	        echo '<div class="alert alert-success" style="text-align:center;"> Actualizado correctamente</div>';  
	      }else{
	        echo '<div class="alert alert-danger" style="text-align:center;">'.$id.', Error al actualizar</div>';  
	      }
	    }        
	}


	# Borrar posologia.
	#---------------------------------
	public function borrarPosologiaController() {

		if(isset($_POST["idBorrar"])){
		  $id = $_POST["idBorrar"];		
		  $respuesta = Consultas::borrarPosologiaModel($id, "medicamento_convencion");  		 
	  		if($respuesta == "success"){
	        echo '<meta http-equiv="refresh" content="0; url=?action=posologia" />';   
	    }else{
	           echo '<div class="alert alert-danger" style="text-align:center;">Error al eliminar..</div>'; 
	    }
		}	
	}

	

}
?>