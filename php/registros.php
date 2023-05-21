<script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js
"></script>
<link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.min.css
" rel="stylesheet">
<?php  
include 'conexion_be.php';
$Negocio=$_POST['Negocio'];
$Dir_Negocio=$_POST['Dir_Negocio'];
$Email=$_POST['Email'];
$Telefono=$_POST['Telefono'];
$Region=$_POST['Region'];
$Departamento=$_POST['Departamento'];
$Municipio=$_POST['Municipio'];
$Dueño=$_POST['Dueño'];
$Nego=$_POST['Nego'];


$Negocio = "INSERT INTO `tb_negocio`( `Nombre`, `Correo_Negocio`, `Telefono_Negocio`, `Direccion`,
`Tipo_Negocio`, `Id_dueño`, `Id_departamento`, `Id_muni`, `id_region`)
VALUES ('$Negocio', '$Email', '$Telefono', '$Dir_Negocio', '$Nego', '$Dueño', '$Departamento', '$Municipio', '$Region')";

$ejecutar=mysqli_query($conexion, $Negocio);

if ($ejecutar) {
    echo '
        <script>
        alert("el Negocio ah sido almacenada de manera correcta");
        window.location="../Crud_comercios.php";
        </script>';
} else {
    echo '
        <script>
        alert("La Negocio no ha sido almacenada de manera correcta");
        window.location="../Crud_comercios.php";
        </script>';
}

mysqli_close($conexion);

?>
