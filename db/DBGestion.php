<?php 
class gestion{
	private $conn;
        private $ch_rol;
        function __construct() {
                include_once "DBManager.php";
                $nombreServidor="localhost";
                $nombreDeUsuario="root";
                $contrasenhaDeUsuario="root";
                $nombreBaseDatos="satob_db";
                $conn="";
                $conexion = new connexion();
                $conexion->setNombreServidor($nombreServidor);
                $conexion->setNombreDeUsuario($nombreDeUsuario);
                $conexion->setContrasenhaDeUsuario($contrasenhaDeUsuario);
                $conexion->setNombreBaseDatos($nombreBaseDatos);
                $conexion->conectar($conexion->getNombreServidor(),$conexion->getNombreDeUsuario(),$conexion->getContrasenhaDeUsuario());
                $conexion->conectarseABaseDeDatos($conexion->getNombreBaseDeDatos());
                $conn = $conexion->getConection();
                $this->conn=$conn;
        }
	function setQueryForResult($sql){
		$consulta = mysql_query($sql,$this->conn) or die("Error: ".mysql_error());
		return $consulta;
	}
	function setQueryNoResult($sql){
		mysql_query($sql,$this->conn) or die(mysql_error());
	}
	function x($string){
		return md5($string);
	}
	function ch_rol(){
            $ch_rol = $this->ch_rol;
		return $ch_rol;
	}
	function attf($strn,$strp){
		return "SELECT username, password, tipo_roll
                        FROM usuarios AS u, personas AS p, roll AS r
                        WHERE  u.id_persona = p.id_persona AND u.id_roll = r.id_roll AND username LIKE '$strn' AND password LIKE '$strp'";
	}
	function check($n,$p){
		$p = $this->x($p);
		$sql =  $this->attf($n, $p);
		$r =    $this->setQueryForResult($sql);
		$num =  mysql_num_rows($r);
		if( $num>0 ){
			$re = mysql_fetch_array($r);
			if($n==$re[0] && $p==$re[1]){
                                $this->ch_rol=$re[2];
				return true;
			}
		}else{
			?><script type="text/javascript" >document.getElementById("fail").style.visibility='visible';</script><?php
			return false;
		}
	}
        function cerrar(){
            mysql_close($this->conn);
        }
}
?>