<?php
    $conexion=mysqli_connect("localhost","root","","diaco_proyecto");
    
    if($conexion){
        echo'ola esta conectado';
    }
    else{
        echo'no esta';
    }



?>