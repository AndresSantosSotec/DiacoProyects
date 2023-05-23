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

    <form action="php/registro_queja.php" method="POST" class="formulario__queja">
        <div class="card crdbody">
            <div class="card-header">
                <h4>Detalle de Queja</h4>
            </div>
            <div class="card-body">
                <!-- FORMULARIO DE PRUEBAS   --->

                <!-- Botón -->
                <div class="row crdbody">
                    <div class="col-md-3">
                        <button type="button" class="btn btn-outline-primary" title="Buscar Cliente"
                            data-bs-toggle="modal" data-bs-target="#buscar_cli_gen">
                            <i class="fa-solid fa-magnifying-glass"></i> Buscar Negocio
                        </button>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="buscar_cli_gen" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-xl">
                        <!-- Utilizamos modal-xl para el tamaño máximo -->
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Buscar Negocio</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h4>Tabla de Comercio</h4>
                                <div class="table-responsive">
                                    <!-- Agregamos la clase table-responsive para hacer la tabla scrollable en caso de que haya muchos registros -->
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Correo</th>
                                                <th scope="col">Teléfono</th>
                                                <th scope="col">Dirección</th>
                                                <th scope="col">Tipo Negocio</th>
                                                <th scope="col">Dueño</th>
                                                <th scope="col">Departamento</th>
                                                <th scope="col">Municipio</th>
                                                <th scope="col">Región</th>
                                                <th scope="col">Opciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                            $consulta = mysqli_query($conexion, "SELECT `id_negocio`, `Nombre`, `Correo_Negocio`, `Telefono_Negocio`, `Direccion`,
                            `Tipo_Negocio`, `Id_dueño`, `Id_departamento`, `Id_muni`, `id_region` FROM `tb_negocio` where Estado=1");
                            $i = 0;

                            while ($re = mysqli_fetch_array($consulta, MYSQLI_NUM)) {
                                $i++;
                                $tipoNegocio = obtenerNombreTipoNegocio($re[5]);
                                $dueno = obtenerNombreDueno($re[6]);
                                $departamento = obtenerNombreDepartamento($re[7]);
                                $municipio = obtenerNombreMunicipio($re[8]);
                                $region = obtenerNombreRegion($re[9]);

                                echo '
                                    <tr>
                                        <th scope="row">' . $re[0] . '</th>
                                        <td>' . $re[1] . '</td>
                                        <td>' . $re[2] . '</td>
                                        <td>' . $re[3] . '</td>
                                        <td>' . $re[4] . '</td>
                                        <td>' . $tipoNegocio . '</td>
                                        <td>' . $dueno . '</td>
                                        <td>' . $departamento . '</td>
                                        <td>' . $municipio . '</td>
                                        <td>' . $region . '</td>
                                        <td>
                                            <button type="button" class="btn btn-success" onclick="llenarFormulario(' . $re[0] . ', \'' . $re[1] . '\', \'' . $re[2] . '\', \'' . $re[3] . '\', \'' . $re[4] . '\', \'' . $re[5] . '\', \'' . $re[6] . '\', \'' . $re[7] . '\', \'' . $re[8] . '\', \'' . $re[9] . '\')">
                                            <i class="fa-solid fa-eye"></i>
                                            </button>
                                        </td>
                                    </tr>';
                            }
                            //funciones para la recuperacion de los datos
                                function obtenerNombreTipoNegocio($id)
                                {
                                    global $conexion;
                                    $consulta = mysqli_query($conexion, "SELECT `TipoNegocio` FROM `tb_tip_negocio` WHERE `id_tip_nego` = '$id'");
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
                                            <script>
                                            function llenarFormulario(idNegocio, nombre, correo, telefono, direccion,
                                                tipoNegocio, idDueno,
                                                idDepartamento, idMunicipio, idRegion) {
                                                document.getElementById('prod').value = nombre;
                                                document.getElementById('codcre').value = direccion;
                                                document.getElementById('email').value = correo;
                                                document.getElementById('tel').value = telefono;
                                                document.getElementById('neg').value = tipoNegocio;
                                                document.getElementById('pro').value = idDueno;
                                                document.getElementById('reg').value = idRegion;
                                                document.getElementById('dep').value = idDepartamento;
                                                document.getElementById('mun').value = idMunicipio;
                                            }
                                            </script>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <!-- Puedes agregar otros botones de acción aquí si es necesario -->
                            </div>
                        </div>
                    </div>
                </div>

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
                    ,
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


    <script src="https://kit.fontawesome.com/d3fd75469a.js" crossorigin="anonymous"></script>

</body>

</html>