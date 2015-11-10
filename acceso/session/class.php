<?php 
class sesion {
    function __construct() {
        session_start ();
    }    
    function set($valor) {
        $_SESSION ["username"] = $valor;
    }
    function setCh_Roll($valor) {
        $_SESSION ["tipo_roll"] = $valor;
    }    
    function get() {
        if ( isset( $_SESSION ["username"] )) {
            return $_SESSION ["username"];
        } else {
            return false;
        }
    }    
    function elimina_variable() {
        unset ( $_SESSION ["username"] );
    }   
    function termina_sesion() {
        
        unset($_SESSION );
        session_destroy ();
        header('Location: ../inicio/');
    }
}
?>