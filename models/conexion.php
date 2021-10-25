<?php
class Conexion
{
	
	public function conectar()
	{
	$link = new PDO("mysql:host=localhost;dbname=farmacompendio","root","");
	 $link->query("SET NAMES 'utf8'");
	 return $link;
	}
}
	//hosting
	// Base de datos: boletosq_qubitchain
	// Nombre usuario: qubitBoletos
	// Password: QubxT5pl3t0ss
?>   