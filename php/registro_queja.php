<?php  
include 'conexion_be.php';
$Negocio=$_POST['Negocio'];
$Dir_Negocio=$_POST['Dir_Negocio'];
$Email=$_POST['Email'];

$Departamento=$_POST['Departamento'];
$Municipio=$_POST['Municipio'];
$Region=$_POST['Region'];

$Fecha=$_POST['Fecha'];
$Propietario=$_POST['Propietario'];
$Tip_Queja=$_POST['Tip_Queja'];

$Factura=$_POST['Factura'];
$Telefono=$_POST['Telefono'];
$Nit=$_POST['Nit'];

$Detalledequeja=$_POST['Detalledequeja'];
$Sol=$_POST['Sol'];


$queja=$queja = "INSERT INTO `tb_queja`
(`NegocioQueja`, `Dirqueja`, `EmailQueja`, `Departamento`, `Municipio`, `Region`, 
`Fecha_queja`, `Propietario`, `Tip_queja`, `Factura`, `Telefono`, `NIT`, `Detalle_queja`, 
`Detalle_solucion`) VALUES ('$Negocio', '$Dir_Negocio', '$Email', '$Departamento', '$Municipio', 
'$Region', '$Fecha', '$Propietario', '$Tip_Queja', '$Factura', '$Telefono', '$Nit', 
'$Detalledequeja', '$Sol')";


$ejecutar=mysqli_query($conexion, $queja);

if ($ejecutar) {
    echo '
        <script>
        alert("La queja ha sido almacenada de manera correcta");
        window.location="../Quejas.php";
        </script>';
} else {
    echo '
        <script>
        alert("La queja no ha sido almacenada de manera correcta");
        window.location="../Quejas.php";
        </script>';
}

mysqli_close($conexion);

?>
<script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js
"></script>
<link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.min.css
" rel="stylesheet">