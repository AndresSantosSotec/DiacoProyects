<?php
    include './php/conexion_be.php';
    //conecxiones a la base de datos
    $consu = mysqli_query($conexion, "SELECT `id_departamento`, `Departamento`, `ccod_Depa` FROM `tb_departamentos`");
    $muni = mysqli_query($conexion, "SELECT `id_municipio`, `municipio`, `cod_muni`, `ccod_Depa` FROM `bd_municipio`");
    $reg = mysqli_query($conexion, "SELECT id_region,Region,Cod_region FROM `tb_region`");
    $due = mysqli_query($conexion, "SELECT id_dueño,Nombre FROM `tb_dueño`");
    $nego = mysqli_query($conexion, "SELECT id_tip_nego,TipoNegocio FROM `tb_tip_negocio`");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family: 'Shantell Sans', cursive;&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilos.css">
    <link rel="stylesheet" href="css/normalize.css">


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


    <input id="condi" value="CreaProd" readonly hidden>

    <form action="php/registros.php" method="POST" class="formulario__queja">
        <div class="card crdbody">
            <div class="card-header">
                <h4>Detalle de Comercio</h4>
            </div>
            <div class="card-body">
                <!-- FORMULARIO DE PRUEBAS   --->
                <div class="row crdbody">
                    <div class="form-group col-sm-3">
                        <div class="input-group">
                            <span class="input-group-text">Nombre Negocio</span>
                            <input type="text" class="form-control" id="prod" name="Negocio" required>
                        </div>
                    </div>
                    <div class="form-group col-sm-3">
                        <div class="input-group">
                            <span class="input-group-text">Dir_Negocio</span>
                            <input type="text" class="form-control" id="codcre"
                                placeholder="Direccio Fisiaca del Negocio" name="Dir_Negocio" required>
                        </div>
                    </div>
                    <div class="form-group col-sm-3">
                        <div class="input-group">
                            <span class="input-group-text">Email</span>
                            <input type="email" class="form-control" id="prod"
                                placeholder="correo Electronico del negocio" name="Email" required>
                        </div>
                    </div>

                    <div class="form-group col-sm-3">
                        <div class="input-group">
                            <span class="input-group-text">Telefono</span>
                            <input type="text" class="form-control" id="codcre" placeholder="Telefono de Negocio"
                                name="Telefono" value="" required>
                        </div>
                    </div>

                </div>

                <!--aber el row-->
                <div class="row crdbody">
                    <div class="form-group col-sm-3">
                        <div class="input-group">
                            <span class="input-group-text">Region</span>
                            <select id="Mon" name="Region" class="form-select">
                                <?php while($regs = mysqli_fetch_array($reg)) { ?>
                                <option value="<?php echo $regs['id_region']; ?>"><?php echo $regs['Region']; ?>
                                </option>
                                <?php } ?>
                                <option selected>------</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group col-sm-3">
                        <div class="input-group">
                            <span class="input-group-text">Departamento</span>
                            <select name="Departamento" id="Mon" name="Departamento" class="form-select">
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
                            <select id="Mon" name="Municipio" class="form-select">
                                <?php while($munis = mysqli_fetch_array($muni)) { ?>
                                <option value="<?php echo $munis['id_municipio']; ?>"><?php echo $munis['municipio']; ?>
                                </option>
                                <?php } ?>
                                <option selected>------</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group col-sm-2">
                        <div class="input-group">
                            <span class="input-group-text">Propietario</span>
                            <select id="Mon" name="Dueño" class="form-select">
                                <?php while($Dues = mysqli_fetch_array($due)) { ?>
                                <option value="<?php echo $Dues['id_dueño']; ?>"><?php echo $Dues['Nombre']; ?>
                                </option>
                                <?php } ?>
                                <option selected>------</option>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="form-group col-sm-3">
                        <div class="input-group">
                            <span class="input-group-text">Tipo de negocio</span>
                            <select id="Mon" name="Nego" class="form-select">
                                <?php while($NE = mysqli_fetch_array($nego)) { ?>
                                <option value="<?php echo $NE['id_tip_nego']; ?>"><?php echo $NE['TipoNegocio']; ?>
                                </option>
                                <?php } ?>
                                <option selected>------</option>
                            </select>
                        </div>
                    </div> 

            </div><!-- ROW FIN -->
            

        <div class="row crdbody">
            <div class="row crdbody justify-content-center">
                <div class="col-sm-3">
                    <div class="input-group">
                        <button class="btn btn-success me-2"><i class="fas fa-paper-plane"></i> Insertar</button>
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
    </form>

    <div class="card crdbody">
        <div class="card-header">
            <h4>Tabla de Comercio</h4>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">Tipo Negocio</th>
                        <th scope="col">Dueño</th>
                        <th scope="col">Departamento</th>
                        <th scope="col">Municipio</th>
                        <th scope="col">Region</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $consulta= mysqli_query($conexion, "SELECT `id_negocio`, `Nombre`, `Correo_Negocio`, `Telefono_Negocio`, `Direccion`, `Tipo_Negocio`, `Id_dueño`,
                    `Id_departamento`, `Id_muni`, `id_region` FROM `tb_negocio`");
                    $i=0;
                    //id_negocio0`, `Nombre1`, `Correo Negocio2`, `Telefono Negocio3`, `Direccion4`, `Tipo Negocio5`, `Id_dueño6`,`Id_departamento7`, `Id_muni8`, `id_region9`
                    while ($re= mysqli_fetch_array($consulta, MYSQLI_NUM)) {
                        $i++;
                        echo'
                    <tr>
                        <th scope="row">'.$i.'</th>
                        <td>'.$re[1].'</td>
                        <td>'.$re[2].'</td>
                        <td>'.$re[3].'</td>
                        <td>'.$re[4].'</td>
                        <td>'.$re[5].'</td>
                        <td>'.$re[6].'</td>
                        <td>'.$re[7].'</td>
                        <td>'.$re[8] .'</td>
                        <td>'.$re[9] .'</td>
                        <td>
                            <button type="button" class="btn btn-primary"><i class="fa-solid fa-pen"></i></button>
                            <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>';
                    }
                    ?>

                </tbody>
            </table>


        </div>
    </div>
    </div>
    </div>
    <script src="https://kit.fontawesome.com/d3fd75469a.js" crossorigin="anonymous"></script>

</body>

</html>