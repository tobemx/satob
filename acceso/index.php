<?php 
include_once('session/class.php');
$sesion = new sesion();
$usuario = $sesion->get();
if( $usuario != false ){
    ?>
    <script type="text/javascript" language="javascript">window.location="../inicio/";</script>
    <?php 
} else  if( $usuario == false){
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Acceso al Sistema de Administración To Be</title>
        <meta name="description" content="SATOB Administrador">
        <meta name="author" content="To Be Publicidad">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">
        <link rel="shortcut icon" href="img/favicon.ico">
        <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-57x57-precomposed.png">
        <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-precomposed.png">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,400italic,700,700italic">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/plugins.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/themes.css">
        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body class="login">
        <a href="javascript:void(0)" class="login-btn themed-background-default">
            <span class="login-logo">
                <span class="square1 themed-border-default"></span>
                <span class="square2"></span>
                <span class="name">Tobe Co.</span>
            </span>
        </a>
        <div class="left-door"></div>
        <div class="right-door"></div>
        <div id="login-container" class="hide">
            <div class="block-tabs block-themed themed-border-night">
                <ul id="login-tabs" class="nav nav-tabs themed-background-deepsea" data-toggle="tabs">
                    <li class="active text-center">
                        <a href="#login-form-tab">
                            <i class="icon-user"></i> Login
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="login-form-tab">
                        <form action="" method="POST" id="login-form" class="form-inline">
                            <div class="control-group">
                                <div class="controls">
                                    <div class="input-prepend">
                                        <span class="add-on"><i class="icon-envelope-alt"></i></span>
                                        <input type="text" id="login-email" name="nombre" placeholder="Usuario..">
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    <div class="input-prepend">
                                        <span class="add-on"><i class="icon-asterisk"></i></span>
                                        <input type="password" id="login-password" name="p" placeholder="Password..">
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls clearfix">
                                    <div class="pull-right">
                                        <input type="submit" name="submit" class="btn btn-success remove-margin" value="Ir al Escritorio" />
                                    </div>
                                    <div class="pull-left login-extra-check">
                                        <label for="login-remember-me">
                                            <input type="checkbox" id="login-remember-me" name="login-remember-me" class="input-themed">
                                            Recordar me
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </form>
                         <div id="fail" class="fail" >Usuario o password incorrecto</div>
                    </div>                   
                    <?php 
                        if(isset($_POST['submit'])){
                            $n = $_POST['nombre'];
                            $p = $_POST['p'];
                            include('../db/DBGestion.php');
                            $gestion = new gestion();
                            $chek = $gestion->check($n,$p);
                            if($chek == true){
                            $sesion = new sesion();
                            $sesion->set($n);
                            $sesion->setCh_Roll($gestion->ch_rol());
                ?><script type="text/javascript" language="javascript">window.location="../inicio/";</script><?php
                            }
                        }
                ?>
                </div>
            </div>
        </div>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>!window.jQuery && document.write(unescape('%3Cscript src="js/vendor/jquery-1.9.1.min.js"%3E%3C/script%3E'));</script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script>
            $(function() {
                var timeout = 0;

                // If our browser support transitions (class will be added with the help of modernizr library) add a timeout of 750ms
                // Nice fallback for our animation on older browser (such as IE8-9)
                if ($('html').hasClass('csstransitions'))
                    timeout = 750;

                // On button hover or touch reveal the login form
                $('.login-btn').mouseenter(function() {
                    $('.left-door, .right-door, .login-btn').addClass('login-animate');

                    setTimeout(function() {
                        $('#login-container').fadeIn(1500);
                        $('.login-btn .name').fadeOut(250, function() {
                            $('.login-btn .square1, .login-btn .square2').fadeIn(750);
                            $('#login-email').focus();
                        });
                    }, timeout);
                });
            });
        </script>
    </body>
</html>
<?php }?>