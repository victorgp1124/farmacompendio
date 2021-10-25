<?php

#INCUIR LA CONEXION

require_once "conexion.php";

class Consultas extends Conexion{


####################################################USUARIOS


	#Crear Usuario
	#-------------------------------------
	public function insertarUsuarioModel($datos,$tabla){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(correo,nombre,pass,idrol) VALUES (:correoUsu,:nombreUsu,:passUsu,:rolUsu)");

		$stmt->bindParam(":correoUsu", $datos["correoUsu"], PDO::PARAM_STR);
		$stmt->bindParam(":nombreUsu", $datos["nombreUsu"], PDO::PARAM_STR);
		$stmt->bindParam(":passUsu", $datos["passUsu"], PDO::PARAM_STR);
		$stmt->bindParam(":rolUsu", $datos["rolUsu"], PDO::PARAM_INT);

		if($stmt->execute()){

			return "success";

		}else{

			return "error";
		}
		$stmt->close();
	}


	#Consultar Usuarios
	#-------------------------------------
	public function vistaUsuarioModel(){

				
			$stmt = Conexion::conectar()->prepare("SELECT * FROM Usuarios");
					
			$stmt->execute();
			return $stmt->fetchAll(); 
			$stmt->close();
				
	}


	#ACTUALIZAR Usuario
	#-------------------------------------
	public function actualizarUsuarioModel($datosModel, $tabla){
	$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET  correo = :correo, nombre = :nombre, pass = :pass, idrol = :idrol WHERE idusuarios = :idusuarios");
		$stmt->bindParam(":correo", $datosModel["correo"], PDO::PARAM_STR);
		$stmt->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":pass", $datosModel["pass"], PDO::PARAM_STR);
		$stmt->bindParam(":idrol", $datosModel["idrol"], PDO::PARAM_INT);
		$stmt->bindParam(":idusuarios", $datosModel["idusuarios"], PDO::PARAM_INT);
		if($stmt->execute()){
			return "success";
		}
		else{
			return "error";
		}
		$stmt->close();
	}

	#Consultar Usuario por id para editar
	#-------------------------------------
	public function consultaIdUsuarioModel($id, $tabla)
	{
		$stmt = Conexion::conectar()->prepare("SELECT idusuarios,correo,nombre,pass,idrol FROM $tabla WHERE idusuarios = :idusuarios");
		$stmt->bindParam(":idusuarios", $id, PDO::PARAM_INT);
		if($stmt->execute())
		{
			return $stmt->fetch();
		} else {
			return "error";                                              
		}	
		$stmt->close();		
	}

	# Eliminar un item de cualquier tabla le paso el id del registro a borrar y la tabla
	#-------------------------------------
	public function borrarUsuarioModel($id, $tabla){
		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE idusuarios = :idusuarios");
		$stmt->bindParam(":idusuarios", $id, PDO::PARAM_INT);
		if($stmt->execute()){
			return "success";
		}
		else{
			return "error";
		}
		$stmt->close();
	}


####################################################CONVENCION	


	#Crear Convencion
	#-------------------------------------
	public function insertarConvencionModel($datos,$tabla){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(codigo,descripcion) VALUES (:nombreCon,:descripcionCon)");

		$stmt->bindParam(":nombreCon", $datos["nombreCon"], PDO::PARAM_STR);
		$stmt->bindParam(":descripcionCon", $datos["descripcionCon"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "success";

		}else{

			return "error";
		}
		$stmt->close();
	}


	#Consultar Convencion
	#-------------------------------------
	public function vistaConvencionModel(){

				
			$stmt = Conexion::conectar()->prepare("SELECT * FROM convencion");
					
			$stmt->execute();
			return $stmt->fetchAll(); 
			$stmt->close();
				
	}


	#ACTUALIZAR Convencion
	#-------------------------------------
	public function actualizarConvencionModel($datosModel, $tabla){
	$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET  codigo = :codigo, descripcion = :descripcion WHERE id = :id");
		$stmt->bindParam(":descripcion", $datosModel["descripcion"], PDO::PARAM_STR);
		$stmt->bindParam(":codigo", $datosModel["codigo"], PDO::PARAM_STR);
		$stmt->bindParam(":id", $datosModel["id"], PDO::PARAM_INT);
		if($stmt->execute()){
			return "success";
		}
		else{
			return "error";
		}
		$stmt->close();
	}

	#Consultar Convencion por id para editar
	#-------------------------------------
	public function consultaIdConvencionModel($id, $tabla)
	{
		$stmt = Conexion::conectar()->prepare("SELECT id, codigo, descripcion FROM $tabla WHERE id = :id");
		$stmt->bindParam(":id", $id, PDO::PARAM_INT);
		if($stmt->execute())
		{
			return $stmt->fetch();
		} else {
			return "error";                                              
		}	
		$stmt->close();		
	}

	# Eliminar un item de cualquier tabla le paso el id del registro a borrar y la tabla
	#-------------------------------------
	public function borrarConvencionModel($id, $tabla){
		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");
		$stmt->bindParam(":id", $id, PDO::PARAM_INT);
		if($stmt->execute()){
			return "success";
		}
		else{
			return "error";
		}
		$stmt->close();
	}


	

####################################################ESPECIALIDAD


	#Crear Especialidad
	#-------------------------------------
	public function insertarEspecialidadModel($datos,$tabla){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombres,descripcion,foto) VALUES (:nombreEs,:descripcionEs)");

		$stmt->bindParam(":nombreEs", $datos["nombreEs"], PDO::PARAM_STR);
		$stmt->bindParam(":descripcionEs", $datos["descripcionEs"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "success";

		}else{

			return "error";
		}
		$stmt->close();
	}


	#Consultar Especialidad
	#-------------------------------------
	public function vistaEspecialidadModel(){

				
			$stmt = Conexion::conectar()->prepare("SELECT * FROM especialidad");
					
			$stmt->execute();
			return $stmt->fetchAll(); 
			$stmt->close();
				
	}


	#ACTUALIZAR Especialidad
	#-------------------------------------
	public function actualizarEspecialidadModel($datosModel, $tabla){
	$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET  nombres = :nombres, descripcion = :descripcion WHERE id = :id");
		$stmt->bindParam(":descripcion", $datosModel["descripcion"], PDO::PARAM_STR);
		$stmt->bindParam(":nombres", $datosModel["nombres"], PDO::PARAM_STR);
		$stmt->bindParam(":id", $datosModel["id"], PDO::PARAM_INT);
		if($stmt->execute()){
			return "success";
		}
		else{
			return "error";
		}
		$stmt->close();
	}

	#Consultar Convencion por id para editar
	#-------------------------------------
	public function consultaIdEspecialidadModel($id, $tabla)
	{
		$stmt = Conexion::conectar()->prepare("SELECT id, nombres, descripcion FROM $tabla WHERE id = :id");
		$stmt->bindParam(":id", $id, PDO::PARAM_INT);
		if($stmt->execute())
		{
			return $stmt->fetch();
		} else {
			return "error";                                              
		}	
		$stmt->close();		
	}

	# Eliminar un item de cualquier tabla le paso el id del registro a borrar y la tabla
	#-------------------------------------
	public function borrarEspecialidadModel($id, $tabla){
		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");
		$stmt->bindParam(":id", $id, PDO::PARAM_INT);
		if($stmt->execute()){
			return "success";
		}
		else{
			return "error";
		}
		$stmt->close();
	}


####################################################MEDICAMENTOS	


	#Crear Medicamento
	#-------------------------------------
	public function insertarMedicamentoModel($datos,$tabla){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre) VALUES (:nombreMe)");

		$stmt->bindParam(":nombreMe", $datos["nombreMe"], PDO::PARAM_STR);


		if($stmt->execute()){

			return "success";

		}else{

			return "error";
		}
		$stmt->close();
	}


	#Consultar Medicamentos
	#-------------------------------------
	public function vistaMedicamentoModel(){

				
			$stmt = Conexion::conectar()->prepare("SELECT * FROM medicamento");
					
			$stmt->execute();
			return $stmt->fetchAll(); 
			$stmt->close();
				
	}


	#ACTUALIZAR Especialidad
	#-------------------------------------
	public function actualizarMedicamentoModel($datosModel, $tabla){
	$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET  nombre = :nombre WHERE id = :id");

		$stmt->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":id", $datosModel["id"], PDO::PARAM_INT);
		if($stmt->execute()){
			return "success";
		}
		else{
			return "error";
		}
		$stmt->close();
	}

	#Consultar Convencion por id para editar
	#-------------------------------------
	public function consultaIdMedicamentoModel($id, $tabla)
	{
		$stmt = Conexion::conectar()->prepare("SELECT id, nombre FROM $tabla WHERE id = :id");
		$stmt->bindParam(":id", $id, PDO::PARAM_INT);
		if($stmt->execute())
		{
			return $stmt->fetch();
		} else {
			return "error";                                              
		}	
		$stmt->close();		
	}

	# Eliminar un item de cualquier tabla le paso el id del registro a borrar y la tabla
	#-------------------------------------
	public function borrarMedicamentoModel($id, $tabla){
		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");
		$stmt->bindParam(":id", $id, PDO::PARAM_INT);
		if($stmt->execute()){
			return "success";
		}
		else{
			return "error";
		}
		$stmt->close();
	}

####################################################POSOLOGIA


	#Crear Posologia
	#-------------------------------------
	public function insertarPosologiaModel($datos,$tabla){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(id_medicamento,id_convencion,valor) VALUES (:idmed,:idcon,:descripcionPos)");

		$stmt->bindParam(":idmed", $datos["idmed"], PDO::PARAM_INT);
		$stmt->bindParam(":idcon", $datos["idcon"], PDO::PARAM_INT);
		$stmt->bindParam(":descripcionPos", $datos["descripcionPos"], PDO::PARAM_STR);


		if($stmt->execute()){

			return "success";

		}else{

			return "error";
		}
		$stmt->close();
	}


	#Consultar posologia
	#-------------------------------------
	public function vistaPosologiaModel(){

				
			$stmt = Conexion::conectar()->prepare("SELECT * FROM medicamento_convencion");
					
			$stmt->execute();
			return $stmt->fetchAll(); 
			$stmt->close();
				
	}


	#ACTUALIZAR posologia
	#-------------------------------------
	public function actualizarPosologiaModel($datosModel, $tabla){
	$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET  valor = :valor WHERE id = :id");

		$stmt->bindParam(":valor", $datosModel["valor"], PDO::PARAM_STR);
		$stmt->bindParam(":id", $datosModel["id"], PDO::PARAM_INT);
		if($stmt->execute()){
			return "success";
		}
		else{
			return "error";
		}
		$stmt->close();
	}

	#Consultar posologia por id para editar
	#-------------------------------------
	public function consultaIdPosologiaModel($id, $tabla)
	{
		$stmt = Conexion::conectar()->prepare("SELECT id,id_medicamento, id_convencion,valor FROM $tabla WHERE id = :id");
		$stmt->bindParam(":id", $id, PDO::PARAM_INT);
		if($stmt->execute())
		{
			return $stmt->fetch();
		} else {
			return "error";                                              
		}	
		$stmt->close();		
	}

	# Eliminar un item de cualquier tabla le paso el id del registro a borrar y la tabla
	#-------------------------------------
	public function borrarPosologiaModel($id, $tabla){
		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");
		$stmt->bindParam(":id", $id, PDO::PARAM_INT);
		if($stmt->execute()){
			return "success";
		}
		else{
			return "error";
		}
		$stmt->close();
	}

	


}

?>	