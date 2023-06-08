<?php
    //Inicia la sesion, luego la destruye para regresar a la pagina de inicio
    session_start();
    session_destroy();
    header("location: ../index.php");

?>