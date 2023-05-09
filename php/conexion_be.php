<?php
    $conexion=mysqli_connect("localhost","root","","login_register_db");
    
    if($conexion){
        echo'ola esta conectado';
    }
    else{
        echo'no esta';
    }



?>