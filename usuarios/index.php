<?php include_once ('../functions.php'); getHeader();
include_once('../db/DBGestion.php'); $gestion = new gestion();
$limite = 5;
$inicio=0;
$sql="SELECT   * 
      FROM     usuarios as u, personas as p, roll as r 
      WHERE    u.id_persona=p.id_persona and u.id_roll=r.id_roll";
$result=$gestion->setQueryForResult($sql." 
                LIMIT $inicio , $limite");
$rowTodo = mysql_fetch_array($result);
?>
<div class="page-content" id="contenedor">
    <div class="page-header">
        <div class="page-title">
            <h3>Usuarios<small>Modulo de administración de usuarios (listar. agregar, modificar, eliminar).</small></h3>
	</div>
    </div>
    <div class="tabbable page-tabs">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#inside" data-toggle="tab"><i class="icon-checkbox-partial"></i> Panel de usuario</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active fade in" id="inside">
		<div class="panel panel-default">
                    <div class="panel-heading"><h6 class="panel-title"><i class="icon-table"></i> Listado de usuarios registrados</h6></div>
                    <div class="datatable">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
				    <th>Nombre</th>
                                    <th>Usuario</th>
                                    <th>Roll Asignado</th>
                                    <th>Fecha de registro</th>
                                    <th>Editar</th>
                                    <th>Eliminar</th>
				</tr>
                            </thead>
                            <?php 
                            if ($rowTodo[0]!=""){
                                $nombre= $rowTodo[11];
                                $paterno= $rowTodo[12];
                                $materno= $rowTodo[13];
                                $nombre_completo =$nombre." ".$paterno." ".$materno;
                                do{ ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $rowTodo[0]; ?></td>
				    <td><?php echo $nombre_completo; ?></td>
                                    <td><?php echo $rowTodo[3]; ?></td>
                                    <td><?php echo $rowTodo[18]; ?></td>
                                    <td><?php echo $rowTodo[8]; ?></td>
                                    <td><input type="button" value="editar" id="editar" name="editar" onClick="irApagina(this.id,'editP','<?php echo $rowTodo[0];?>','actualizar');" /></td>
                                    <td><input type="checkbox" onclick="evalDrop(this.id)" name="check<?php echo $rowTodo [0];?>" id="check<?php echo $rowTodo [0];?>" /></td>
                                </tr>
                                <?php }while($rowTodo = mysql_fetch_array($result));
                                    mysql_free_result($result);
                                    } else {
                                ?>
                                <tr>
                                    <td colspan="7">
                                        <p class='result_fail'>
                                            <?php echo "No se encontro ningun registro"; ?>
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                                <?php } ?>
			</table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php getFooter(); ?>