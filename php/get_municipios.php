<?php
include 'conexion_be.php';

$ccod_Depa = $_POST['ccod_Depa']; // Obtener el ccod_Depa enviado desde el cliente

// Consultar los municipios correspondientes al departamento seleccionado
$query = "SELECT `id_municipio`, `municipio` FROM `bd_municipio` WHERE `ccod_Depa` = '$ccod_Depa'";
$resultado = mysqli_query($conexion, $query);

// Crear las opciones del select de municipios con los resultados de la consulta
while($munis = mysqli_fetch_array($resultado))
{
    echo "<option value='{$munis['id_municipio']}'>{$munis['municipio']}</option>";
}
?>
