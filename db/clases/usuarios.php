<?php 

class Usuario{
 	var $con;
 	function Usuario(){
 		$this->con=new gestion();
 	}
	function insertar($campos){
		if($this->con->conectar()==true){
			return mysql_query("INSERT INTO cliente (nombres, ciudad, sexo, telefono, fecha_nacimiento) VALUES ('".$campos[0]."', '".$campos[1]."','".$campos[2]."','".$campos[3]."','".$campos[4]."')");
		}
	}	
	function actualizar($campos,$id){
		if($this->con->conectar()==true){
			return mysql_query("UPDATE cliente SET nombres = '".$campos[0]."', ciudad = '".$campos[1]."', sexo = '".$campos[2]."', telefono = '".$campos[3]."', fecha_nacimiento = '".$campos[4]."' WHERE id = ".$id);
		}
	}	
	function mostrar_cliente($id){
		if($this->con->conectar()==true){
			return mysql_query("SELECT * FROM cliente WHERE id=".$id);
		}
	}
	function mostrar_clientes(){
		if($this->con->conectar()==true){
			return mysql_query("SELECT * FROM cliente ORDER BY id DESC");
		}
	}
	function eliminar($id){
		if($this->con->conectar()==true){
			return mysql_query("DELETE FROM cliente WHERE id=".$id);
		}
	}
}
?>
