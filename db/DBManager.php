<?php
class connexion{
	private $conexion;
	private $nombreServidor;
	private $nombreDeUsuario;
	private $contrasenhaDeUsuario;
	private $nombreBaseDatos;


	function conectar($nombreServidor, $nombreDeUsuario, $contrasenhaDeUsuario){
		$this->conexion = mysql_connect($nombreServidor, $nombreDeUsuario, $contrasenhaDeUsuario) or die("No pudo conectarse a ".$nombreServidor.": " . mysql_error());
		return $this->conexion;
	}
	
	function getConection(){
		return $this->conexion;
	}
	//Debuelve un nombre asignado de la base de datos
	function getNombreBaseDeDatos(){
		return $this->nombreBaseDatos;
	}
	
	//Configura el nombre de la base de datos
	function setNombreBaseDatos($nombreBaseDatos){
		$this->nombreBaseDatos = $nombreBaseDatos;
	}
	
	//Conectar a una base de datos definida.
	function conectarseABaseDeDatos($nombreBaseDatos){
		mysql_select_db($nombreBaseDatos,$this->conexion) or die("No pudo seleccionarse la Base de Datos. ".$nombreBaseDatos." ".mysql_error());
                mysql_query("SET NAMES 'utf8'");
	}
	
	//Debuelve un nombre asignado al servidor sql
	function getNombreServidor(){
		return $this->nombreServidor;
	}
	
	//Configura el nombre del servidor
	function setNombreServidor($nombreServidor){
		$this->nombreServidor = $nombreServidor;
	}
	
	//Debuelve un nombre de usuario
	function getNombreDeUsuario(){
		return $this->nombreDeUsuario;
	}
	
	//Configura el nombre de usuario
	function setNombreDeUsuario($nombreDeUsuario){
		$this->nombreDeUsuario = $nombreDeUsuario;
	}
	
	//Debuelve una contrase�a de usuario
	function getContrasenhaDeUsuario(){
		return $this->contrasenhaDeUsuario;
	}
	
	//Configura la contrase�a de usuario
	function setContrasenhaDeUsuario($contrasenhaDeUsuario){
		$this->contrasenhaDeUsuario = $contrasenhaDeUsuario;
	}
}
?>