<?php
function Usu($conexion)
{
     include '../modales/db_con.php';
    $consulta = mysqli_query($conexion, "SELECT id_usu ,nombre, apellido, dpi, usu, if(estado=1,'Activo','InActivo') as Estado, 
    CONCAT(nombre,' ',apellido) as Nombre,puesto,exp_date,Email,pass,id_agencia FROM `tb_usuario` where estado !=0 ");
    $i = 1;
    //id_usu0 ,nombre1, apellido2, dpi3, usu4, Estado5,Nombre6,puesto7,exp_date8,Email9,pass10,id_agencia11
    while ($re = mysqli_fetch_array($consulta, MYSQLI_NUM)) {
        echo '<tr> 
        <td>' . $i . '</td>
        <td>' . $re[6] . '</td>
        <td>' . $re[3] . '</td>
        <td>' . $re[4] . '</td>
        <td>' . $re[7] . '</td>
        <td>' . $re[11] . '</td>
        <td>' . $re[5] . '</td>
        <td>' . $re[9] . '</td>
        <td>' . $re[8] . '</td>
        <td> <button type="button" class="btn btn-success" data-bs-dismiss="modal" onclick="mdl_cre(`#cuadro`,`pnl_usu`,`' . $re[0] . '`)" >Aceptar</button> </td> </tr> ';
        $i++;
    }
}