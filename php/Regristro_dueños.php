<?php
include 'conexion_be.php';

// Verificar si se ha enviado una solicitud de eliminación
if (isset($_POST['idCampo'])) {
    $idCampo = $_POST['idCampo'];

    // Realizar la lógica de eliminación en la base de datos
    $eliminarCampo = "DELETE FROM `tb_dueño` WHERE `id_dueño` = '$idCampo'";
    $ejecutarEliminar = mysqli_query($conexion, $eliminarCampo);

    if ($ejecutarEliminar) {
        echo "Campo eliminado correctamente";
        exit; // Detener la ejecución del código
    } else {
        echo "Error al eliminar el campo";
        exit; // Detener la ejecución del código
    }
}


$Nombre = $_POST['Nombre'];
$Dir_dueño = $_POST['Dir_dueño'];
$Email = $_POST['Email'];
$Telefono = $_POST['Telefono'];
$NIT = $_POST['NIT'];
$DPI = $_POST['DPI'];

// Verificar si ya existe un registro con el mismo nombre de negocio
$consultaExistencia = mysqli_query($conexion, "SELECT COUNT(*) FROM `tb_dueño` WHERE `Nombre` = '$Nombre'");
$existeRegistro = mysqli_fetch_array($consultaExistencia)[0];

if ($existeRegistro) {
    // Actualizar registro existente
    $actualizarNegocio = "UPDATE `tb_dueño` SET `Direccion`='$Dir_dueño', `Email`='$Email', `Telefono_dueño`='$Telefono', 
    `Nit`='$NIT', `Dpi`='$DPI' WHERE `Nombre`='$Nombre'";
    $ejecutarActualizar = mysqli_query($conexion, $actualizarNegocio);

    if ($ejecutarActualizar) {
        echo '
            <script>
            alert("El Propietario ha sido actualizado correctamente");
            window.location="../Crud_Propietarios.php";
            </script>';
    } else {
        echo '
            <script>
            alert("Ha ocurrido un error al actualizar el Propietario");
            window.location="../Crud_Propietarios.php";
            </script>';
    }
} else {
    // Insertar nuevo registro
    $insertarNegocio = "INSERT INTO `tb_dueño`(`Nombre`, `Telefono_dueño`, `Dpi`, `Direccion`, `Nit`, `Email`) 
    VALUES ('$Nombre', '$Telefono', '$DPI', '$Dir_dueño', '$NIT', '$Email')";
    $ejecutarInsertar = mysqli_query($conexion, $insertarNegocio);

    if ($ejecutarInsertar) {
        echo '
            <script>
            alert("El Propietario ha sido almacenado correctamente");
            window.location="../Crud_Propietarios.php";
            </script>';
    } else {
        echo '
            <script>
            alert("Ha ocurrido un error al almacenar el Propietario");
            window.location="../Crud_Propietarios.php";
            </script>';
    }
}

mysqli_close($conexion);
?>
