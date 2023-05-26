<?php
include 'conexion_be.php';

// Verificar si se ha enviado una solicitud de eliminación
if (isset($_POST['idCampo'])) {
    $idCampo = $_POST['idCampo'];

    // Realizar la lógica de eliminación en la base de datos
    $eliminarCampo = "DELETE FROM `tb_negocio` WHERE `id_negocio` = '$idCampo'";
    $ejecutarEliminar = mysqli_query($conexion, $eliminarCampo);

    if ($ejecutarEliminar) {
        echo "Campo eliminado correctamente";
        exit; // Detener la ejecución del código
    } else {
        echo "Error al eliminar el campo";
        exit; // Detener la ejecución del código
    }
}

$Negocio = $_POST['Negocio'];
$Dir_Negocio = $_POST['Dir_Negocio'];
$Email = $_POST['Email'];
$Telefono = $_POST['Telefono'];
$Region = $_POST['Region'];
$Departamento = $_POST['Departamento'];
$Municipio = $_POST['Municipio'];
$Dueño = $_POST['Dueño'];
$Nego = $_POST['Nego'];

// Verificar si algún campo está vacío
if (empty($Negocio) || empty($Dir_Negocio) || empty($Email) || empty($Telefono) || empty($Region) || empty($Departamento) || empty($Municipio) || empty($Dueño) || empty($Nego)) {
    echo '
        <script>
        alert("Todos los campos son obligatorios. Por favor, completa todos los campos.");
        window.location="../Crud_comercios.php";
        </script>';
    exit; // Detener la ejecución del código si hay campos vacíos
}

// Verificar si ya existe un registro con el mismo nombre de negocio
$consultaExistencia = mysqli_query($conexion, "SELECT COUNT(*) FROM `tb_negocio` WHERE `Nombre` = '$Negocio'");
$existeRegistro = mysqli_fetch_array($consultaExistencia)[0];

if ($existeRegistro) {
    // Actualizar registro existente
    $actualizarNegocio = "UPDATE `tb_negocio` SET `Correo_Negocio`='$Email', `Telefono_Negocio`='$Telefono', `Direccion`='$Dir_Negocio', `Tipo_Negocio`='$Nego', `Id_dueño`='$Dueño', `Id_departamento`='$Departamento', `Id_muni`='$Municipio', `id_region`='$Region' WHERE `Nombre`='$Negocio'";
    $ejecutarActualizar = mysqli_query($conexion, $actualizarNegocio);

    if ($ejecutarActualizar) {
        echo '
            <script>
            alert("El negocio ha sido actualizado correctamente");
            window.location="../Crud_comercios.php";
            </script>';
    } else {
        echo '
            <script>
            alert("Ha ocurrido un error al actualizar el negocio");
            window.location="../Crud_comercios.php";
            </script>';
    }
} else {
    // Insertar nuevo registro
    $insertarNegocio = "INSERT INTO `tb_negocio`(`Nombre`, `Correo_Negocio`, `Telefono_Negocio`, `Direccion`, `Tipo_Negocio`, `Id_dueño`, `Id_departamento`, `Id_muni`, `id_region`,Estado) VALUES ('$Negocio', '$Email', '$Telefono', '$Dir_Negocio', '$Nego', '$Dueño', '$Departamento', '$Municipio', '$Region','1')";
    $ejecutarInsertar = mysqli_query($conexion, $insertarNegocio);

    if ($ejecutarInsertar) {
        echo '
            <script>
            alert("El negocio ha sido almacenado correctamente");
            window.location="../Crud_comercios.php";
            </script>';
    } else {
        echo '
            <script>
            alert("Ha ocurrido un error al almacenar el negocio");
            window.location="../Crud_comercios.php";
            </script>';
    }
}

mysqli_close($conexion);

?>
