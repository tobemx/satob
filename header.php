<?php
 session_start();
$validar=$_SESSION['username'];
if (!isset ($validar)){
    ?>
        <script type="text/javascript" language="javascript">window.location="../acceso/";</script>
    <?php
}
else 
{ 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once ('functions.php'); getMeta(); getTitle(); getCss(); getJS(); ?>
    </head>
    <body>
	<div class="navbar navbar-inverse" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" href="../inicio/"><img src="../images/logo.png" alt="Londinium"></a>
		<a class="sidebar-toggle"><i class="icon-paragraph-justify2"></i></a>
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-icons">
                    <span class="sr-only">Toggle navbar</span>
                    <i class="icon-grid3"></i>
		</button>
		<button type="button" class="navbar-toggle offcanvas">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="icon-paragraph-justify2"></i>
		</button>
            </div>
            <ul class="nav navbar-nav navbar-right collapse" id="navbar-icons">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-people"></i>
			<span class="label label-default">2</span>
                    </a>
                    <div class="popup dropdown-menu dropdown-menu-right">
                        <div class="popup-header">
                            <a href="#" class="pull-left"><i class="icon-spinner7"></i></a>
                            <span>Actividades</span>
                            <a href="#" class="pull-right"><i class="icon-paragraph-justify"></i></a>
			</div>
	                <ul class="activity">
	                </ul>
                    </div>
		</li>
		<li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                    	<i class="icon-paragraph-justify2"></i>
			<span class="label label-default">6</span>
                    </a>
                    <div class="popup dropdown-menu dropdown-menu-right">
                        <div class="popup-header">
                            <a href="#" class="pull-left"><i class="icon-spinner7"></i></a>
                            <span>Mensajes</span>
                            <a href="#" class="pull-right"><i class="icon-new-tab"></i></a>
			</div>
			<ul class="popup-messages">
			</ul>
                    </div>
		</li>
		<li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle">
                        <i class="icon-grid"></i>
                    </a>
                    <div class="popup dropdown-menu dropdown-menu-right">
                        <div class="popup-header">
                            <a href="#" class="pull-left"><i class="icon-spinner7"></i></a>
                            <span>Lista de tareas</span>
                            <a href="#" class="pull-right"><i class="icon-new-tab"></i></a>
			</div>
			<table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Descripción</th>
                                    <th>Categoria</th>
                                    <th class="text-center">Avance</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><span class="status status-success item-before"></span> <a href="#">Multimedia sdet</a></td>
                                    <td><span class="text-smaller text-semibold">Desarrollo</span></td>
                                    <td class="text-center"><span class="label label-success">87%</span></td>
				</tr>
				<tr>
                                    <td><span class="status status-danger item-before"></span> <a href="#">Carteles F. Union</a></td>
                                    <td><span class="text-smaller text-semibold">Diseño</span></td>
                                    <td class="text-center"><span class="label label-danger">18%</span></td>
				</tr>
				<tr>
                                    <td><span class="status status-info item-before"></span> <a href="#">Compilacion de video</a></td>
                                    <td><span class="text-smaller text-semibold">Edicion</span></td>
                                    <td class="text-center"><span class="label label-info">52%</span></td>
				</tr>
				<tr>
                                    <td><span class="status status-success item-before"></span> <a href="#">Concurso holashoto</a></td>
                                    <td><span class="text-smaller text-semibold">Creativos</span></td>
                                    <td class="text-center"><span class="label label-success">100%</span></td>
				</tr>
				<tr>
                                    <td><span class="status status-success item-before"></span> <a href="#">Manual de multimedia dos bocas</a></td>
                                    <td><span class="text-smaller text-semibold">Desarrollo</span></td>
                                    <td class="text-center"><span class="label label-success">100%</span></td>
				</tr>
                            </tbody>
			</table>
                    </div>
                </li>
		<li class="user dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <img src="http://placehold.it/300">
			<span>Alexis Montero</span>
			<i class="caret"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right icons-right">
                        <li><a href="#"><i class="icon-user"></i> Perfil</a></li>
			<li><a href="#"><i class="icon-bubble4"></i> Mensajes</a></li>
			<li><a href="#"><i class="icon-cog"></i> Configuración</a></li>
                        <li><a href="../acceso/session/close.php"><i class="icon-exit"></i> Salir</a></li>
                    </ul>
		</li>
            </ul>
	</div>
        <div class="page-container">
            <?php getAside(); ?>
<?php 
} ?>