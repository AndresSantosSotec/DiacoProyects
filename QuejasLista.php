<?php
    include './php/conexion_be.php';
    //conecxiones a la base de datos
    $consu = mysqli_query($conexion, "SELECT `id_departamento`, `Departamento`, `ccod_Depa` FROM `tb_departamentos`");
    $muni = mysqli_query($conexion, "SELECT `id_municipio`, `municipio`, `cod_muni`, `ccod_Depa` FROM `bd_municipio`");
    $reg = mysqli_query($conexion, "SELECT id_region,Region,Cod_region FROM `tb_region`");
    $tipQuejas = mysqli_query($conexion, "SELECT id_queja,Ctip_queja,ccodQueja FROM `tb_tip_queja`");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Imprimir queja</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family: 'Shantell Sans', cursive;&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilos.css">
    <link rel="stylesheet" href="css/normalize.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    </script>
    <script>
    src = "js/functions.js"

        <
        link rel = "stylesheet"
    href = "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css"
    integrity = "sha512-t42oDrKONJHtddnbgOs4UUI8x/mQ4aCUfeoBIBzxKElVi0qmx0i1WPhBcp4tU8HfC4I+fzuuWE5fH+pi0UUrPw=="
    crossorigin = "anonymous"
    referrerpolicy = "no-referrer" / >
        <
        !--Referencia al archivo JavaScript de Bootstrap-- >
        <
        script src = "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"
    integrity = "sha512-N1V4aEwOJxkRnlvDv9A6HivuF1txd5mUhHAA4ojz79I5Oh+dpvC7JrtbNVrZdYiZ58p41dKxlLxEFO3KTwX+sg=="
    crossorigin = "anonymous"
    referrerpolicy = "no-referrer" >
    </script>
</head>

<body>
    <!--Aqui es donde inicioa el nav bar-->
    <div class="card crdbody">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">DIACO</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="DiacoInicio.php">Inicio</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Ingreso de Caso y servicios
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="Quejas.php">Pantalla de queja</a></li>
                                <li><a class="dropdown-item" href="Crud_comercios.php">Comercios</a></li>
                                <li><a class="dropdown-item" href="Crud_Propietarios.php">Propietarios</a></li>
                                <li><a class="dropdown-item" href="QuejasLista.php">Lista de quejas</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!--Aqui cierra el nav bar-->

    <input id="condi" value="CreaProd" readonly hidden>

    <form action="php/Reportes_fpdf/Repo.php" method="POST" class="formulario__queja">
        <div class="card crdbody">
            <div class="card-header">
                <h4>Detalle de Queja</h4>
            </div>
            <div class="card-body">
                <!-- FORMULARIO DE PRUEBAS   --->

                <!-- Botón -->

                <!-- Modal -->


                <div class="row crdbody">
                    <div class="form-group col-sm-3">
                        <div class="input-group">
                            <span class="input-group-text">Negocio</span>
                            <input type="text" class="form-control" id="prod" name="Negocio" readonly>
                        </div>
                    </div>
                    <div class="form-group col-sm-4">
                        <div class="input-group">
                            <span class="input-group-text">Dir_Negocio</span>
                            <input type="text" class="form-control" id="codcre"
                                placeholder="Direccio Fisiaca del Negocio" name="Dir_Negocio" readonly>
                        </div>
                    </div>
                    <div class="form-group col-sm-4">
                        <div class="input-group">
                            <span class="input-group-text">Email</span>
                            <input type="email" class="form-control" id="email"
                                placeholder="correo Electronico del negocio" name="Email" readonly>
                        </div>
                    </div>
                </div>
                <div class="row crdbody">
                    <div class="form-group col-sm-3">
                        <div class="input-group">
                            <span class="input-group-text">Departamento</span>
                            <select name="Departamento" id="dep" class="form-select">
                                <?php while($datos = mysqli_fetch_array($consu)) { ?>
                                <option value="<?php echo $datos['id_departamento']; ?>">
                                    <?php echo $datos['Departamento']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group col-sm-3">
                        <div class="input-group">
                            <span class="input-group-text">Municipio</span>
                            <select id="mun" name="Municipio" class="form-select">
                                <?php while($munis = mysqli_fetch_array($muni)) { ?>
                                <option value="<?php echo $munis['id_municipio']; ?>"><?php echo $munis['municipio']; ?>
                                </option>
                                <?php } ?>
                                <option selected>------</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group col-sm-3">
                        <div class="input-group">
                            <span class="input-group-text">Region</span>
                            <select id="reg" name="Region" class="form-select">
                                <?php while($regs = mysqli_fetch_array($reg)) { ?>
                                <option value="<?php echo $regs['id_region']; ?>"><?php echo $regs['Region']; ?>
                                </option>
                                <?php } ?>
                                <option selected>------</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row crdbody">
                    <div class="form-group col-sm-3">
                        <div class="input-group">
                            <span class="input-group-text">Fecha</span>
                            <input type="date" class="form-control" id="fecha" name="Fecha" min="2023-01-01"
                                max="<?php echo date('Y-m-d'); ?>" required>
                        </div>
                    </div>

                    <div class="form-group col-sm-4">
                        <div class="input-group">
                            <span class="input-group-text">Propietario</span>
                            <input type="text" class="form-control" id="pro" name="Propietario" require>
                        </div>
                    </div>

                    <div class="form-group col-sm-3">
                        <div class="input-group">
                            <span class="input-group-text">Tip Queja</span>
                            <select id="Mon" name="Tip_Queja" class="form-select">
                                <?php while($ctipqjea = mysqli_fetch_array($tipQuejas)) { ?>
                                <option value="<?php echo $ctipqjea['id_queja']; ?>">
                                    <?php echo $ctipqjea['Ctip_queja']; ?>
                                </option>
                                <?php } ?>
                                <option selected>------</option>
                            </select>
                        </div>
                    </div>
                </div> <!-- ROW FIN -->
                <!-- ROW FIN -->

                <div class="row crdbody">
                    <div class="form-group col-sm-3">
                        <div class="input-group">
                            <span class="input-group-text">Factura</span>
                            <input type="text" class="form-control" name="Factura" id="codfatura" required>
                        </div>
                    </div>
                    <div class="form-group col-sm-4">
                        <div class="input-group">
                            <span class="input-group-text">Telefono</span>
                            <input type="text" class="form-control" id="tel" placeholder="Telefono de Negocio"
                                name="Telefono" value="" readonly>
                        </div>
                    </div>
                    <!--zxczxczxc-->
                    <div class="form-group col-sm-4">
                        <div class="input-group">
                            <span class="input-group-text">Nit</span>
                            <input type="text" class="form-control" placeholder="NIT del Negocio" name="Nit" required>
                        </div>
                    </div>
                </div> <!-- ROW FIN -->

                <div class="row crdbody justify-content-center">
                    <div class="col-sm-3">
                        <div class="input-group">
                            <button class="btn btn-success me-2"
                                onclick="window.open('php/Reportes_fpdf/repo.php', '_blank')">
                                <i class="fa-solid fa-print"></i> Imprimir Reporte
                            </button>

                            <button class="btn btn-danger" onclick="reloadPage()"><i
                                    class="fas fa-trash-alt"></i>Cancelar</button>
                            <script>
                            function reloadPage() {
                                location.reload();
                            }
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    </div>

    <div class="card crdbody">
    <div class="card-header">
        <h4>Quejas Listado</h4>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Negocio Queja</th>
                    <th scope="col">Dirección Queja</th>
                    <th scope="col">Departamento</th>
                    <th scope="col">Municipio</th>
                    <th scope="col">Fecha Queja</th>
                    <th scope="col">Tipo Queja</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Detalle Queja</th>
                    <th scope="col">Detalle Solución</th>
                    <th scope="col">Código Queja</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $consulta = mysqli_query($conexion, "SELECT id_queja,NegocioQueja,Dirqueja,EmailQueja,Departamento,Municipio,Region,Fecha_queja,Tip_queja,Factura,Telefono,NIT,Detalle_queja,Detalle_solucion,ccod_queja FROM `tb_queja`;");
                while ($re = mysqli_fetch_array($consulta, MYSQLI_NUM)) {
                    //id_queja0,NegocioQueja1,Dirqueja2,EmailQueja3,Departamento4,Municipio5,Region6,Fecha_queja7,Tip_queja8,
                    //Factura9,Telefono10,NIT11,Detalle_queja12,Detalle_solucion13,ccod_queja14 FROM
                    echo '
                    <tr>
                        <th scope="row">' . $re[0] . '</th>
                        <td>' . $re[1] . '</td>
                        <td>' . $re[2] . '</td>
                        <td>' . obtenerNombreDepartamento($re[4]) . '</td>
                        <td>' . obtenerNombreMunicipio($re[5]) . '</td>
                        <td>' . $re[7] . '</td>
                        <td>' . obtenerNombreTipoNegocio($re[8]) . '</td>
                        <td>' . $re[10] . '</td>
                        <td>' . $re[12] . '</td>
                        <td>' . $re[13] . '</td>
                        <td>' . $re[14] . '</td>
                        <td>
                            <button type="button" class="btn btn-success" onclick="editarPropietario(' . $re[0] . ', \'' . $re[1] . '\', \'' . $re[2] . '\', \'' . $re[3] . '\', \'' . $re[4] . '\', \'' . $re[5] . '\', \'' . $re[6] . '\')">
                            <i class="fa-solid fa-eye"></i>
                            </button>
                        </td>
                    </tr>';
                }
                function obtenerNombreTipoNegocio($id)
                {
                    global $conexion;
                    $consulta = mysqli_query($conexion, "SELECT `Ctip_queja` FROM `tb_tip_queja` WHERE `id_queja` = '$id'");
                    $resultado = mysqli_fetch_array($consulta);
                    return $resultado[0];
                }

                function obtenerNombreDueno($id)
                {
                    global $conexion;
                    $consulta = mysqli_query($conexion, "SELECT `Nombre` FROM `tb_dueño` WHERE `id_dueño` = '$id'");
                    $resultado = mysqli_fetch_array($consulta);
                    return $resultado[0];
                }

                function obtenerNombreDepartamento($id)
                {
                    global $conexion;
                    $consulta = mysqli_query($conexion, "SELECT `Departamento` FROM `tb_departamentos` WHERE `id_departamento` = '$id'");
                    $resultado = mysqli_fetch_array($consulta);
                    return $resultado[0];
                }

                function obtenerNombreMunicipio($id)
                {
                    global $conexion;
                    $consulta = mysqli_query($conexion, "SELECT `municipio` FROM `bd_municipio` WHERE `id_municipio` = '$id'");
                    $resultado = mysqli_fetch_array($consulta);
                    return $resultado[0];
                }

                function obtenerNombreRegion($id)
                {
                    global $conexion;
                    $consulta = mysqli_query($conexion, "SELECT `Region` FROM `tb_region` WHERE `id_region` = '$id'");
                    $resultado = mysqli_fetch_array($consulta);
                    return $resultado[0];
                }
                ?>
            </tbody>
        </table>
    </div>

    <script>
        function editarPropietario(id, nombre, telefono, dpi, direccion, nit, email) {
            document.getElementById('prod').value = nombre;
            document.getElementById('tel').value = telefono;
            document.getElementById('DPI').value = dpi;
            document.getElementById('Dir_dueño').value = direccion;
            document.getElementById('NIT').value = nit;
            document.getElementById('email').value = email;
        }
    </script>
</div>
</div>

    </div>
    </div>


    <script src="https://kit.fontawesome.com/d3fd75469a.js" crossorigin="anonymous"></script>

</body>

</html>