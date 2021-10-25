<?php

#INCUIR LA CONEXION

require_once "conexion.php";

class Datos extends Conexion{


#CONSULTA DE MEDICAMENTOS

	public function vistaUsuariosModel($var){	

			$stmt = Conexion::conectar()->prepare("SELECT id, nombre FROM medicamento,medicamento_especialidad WHERE id_especialidad=$var AND id_medicamento=id");

			$stmt->execute();
			return $stmt->fetchAll(); 
			$stmt->close();

	}

#CONSULTA DE RECETA DE MEDICAMENTO	


	public function vistaUsuariosModels($var2){
			
			$stmt = Conexion::conectar()->prepare("SELECT especialidad.nombres, medicamento.nombre,convencion.descripcion,medicamento_convencion.valor
				FROM especialidad

				INNER JOIN medicamento_especialidad
				ON medicamento_especialidad.id_especialidad = especialidad.id

				INNER JOIN medicamento
				ON medicamento.id = medicamento_especialidad.id_medicamento

				INNER JOIN medicamento_convencion
				ON medicamento_convencion.id_medicamento = medicamento.id

				INNER JOIN convencion
				ON convencion.id = medicamento_convencion.id_convencion
				WHERE (medicamento.id = $var2)");	

			$stmt->execute();
			return $stmt->fetchAll(); 
			$stmt->close();


	}

	public function vistabuscarModel($nombre){

			
				$stmt = Conexion::conectar()->prepare("SELECT especialidad.nombres, medicamento.nombre,convencion.descripcion,medicamento_convencion.valor
				FROM especialidad

				INNER JOIN medicamento_especialidad
				ON medicamento_especialidad.id_especialidad = especialidad.id
 
				INNER JOIN medicamento
				ON medicamento.id = medicamento_especialidad.id_medicamento

				INNER JOIN medicamento_convencion
				ON medicamento_convencion.id_medicamento = medicamento.id

				INNER JOIN convencion
				ON convencion.id = medicamento_convencion.id_convencion
				WHERE (medicamento.nombre = '".$nombre."')");
				
			$stmt->execute();


			return $stmt->fetchAll(); 
			$stmt->close();
			
	}

	public function registroUsuarioModel($datos,$tabla){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(correo,nombre,pass) VALUES (:correo,:nombre,:pass)");

		$stmt->bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":pass", $datos["pass"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "success";

		}else{

			return "error";
		}
		$stmt->close();
	}


	public function ingresoUsuarioModel($datos,$tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE nombre = :nombre ");

		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);

		$stmt->execute();
		return $stmt->fetch();
		$stmt->close();

	}	


}

?>	