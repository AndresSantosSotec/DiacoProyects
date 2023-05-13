<?php

    include 'conexion_be.php';


    $nombre=$_POST['nombre'];
    $correo=$_POST['correo'];
    $Usuario=$_POST['Usuario'];
    $password=$_POST['password'];

    $query="INSERT INTO `tb_usuarios`(`Nombre`, `Correo`, `Usuario`, `Contraseña`) 
            VALUES ('$nombre','$correo','$Usuario','$password')";


    $ejecutar=mysqli_query($conexion, $query);

    if($ejecutar){
        echo'
        <script>
        alert("El usuario Ah sido Almacenado de manera Correcta");
        window.location="../index.php";
        </script>';
    }
    else
    {
        echo'
        <script>
        alert("Error el usuario No se alamceno de 
        manera Correcta!!
        intentalo otra vez");
        window.location="../index.php";
        </script>';

    }

    mysqli_close($conexion);

?>