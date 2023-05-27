<?php
    include './php/conexion_be.php';
    //conecxiones a la base de datos
    $consu = mysqli_query($conexion, "SELECT `id_departamento`, `Departamento`, `ccod_Depa` FROM `tb_departamentos`");
    $muni = mysqli_query($conexion, "SELECT `id_municipio`, `municipio`, `cod_muni`, `ccod_Depa` FROM `bd_municipio`");
    $reg = mysqli_query($conexion, "SELECT id_region,Region,Cod_region FROM `tb_region`");
    $due = mysqli_query($conexion, "SELECT id_dueño,Nombre FROM `tb_dueño`");
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="css/normalize.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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

    <form action="php/Regristro_dueños.php" method="POST" class="formulario__queja">
        <div class="card crdbody">
            <div class="card-header">
                <h4>Detalle de Propietario</h4>
            </div>
            <div class="card-body">
                <!-- FORMULARIO DE PRUEBAS   --->
                <div class="row crdbody">
                    <div class="form-group col-sm-3">
                        <div class="input-group">
                            <span class="input-group-text">Nombre</span>
                            <input type="text" class="form-control" id="prod" name="Nombre" required>
                        </div>
                    </div>
                    <div class="form-group col-sm-3">
                        <div class="input-group">
                            <span class="input-group-text">Dir_Dueño</span>
                            <input type="text" class="form-control" id="Dir_dueño"
                                placeholder="Direccio Fisiaca del Negocio" name="Dir_dueño" required>
                        </div>
                    </div>
                    <div class="form-group col-sm-3">
                        <div class="input-group">
                            <span class="input-group-text">Email</span>
                            <input type="email" class="form-control" placeholder="correo Electronico del negocio"
                                id=email name="Email" required>
                        </div>
                    </div>

                    <div class="form-group col-sm-3">
                        <div class="input-group">
                            <span class="input-group-text">Telefono</span>
                            <input type="number" class="form-control" id="tel" placeholder="Telefono de Negocio"
                                name="Telefono" value="" required>
                        </div>
                    </div>

                </div>
                <!--aber el row-->
                <div class="row crdbody">
                    <div class="form-group col-sm-3">
                        <div class="input-group">
                            <span class="input-group-text">Nit</span>
                            <input type="number" class="form-control" id="NIT" name="NIT" required>
                        </div>
                    </div>

                    <div class="form-group col-sm-3">
                        <div class="input-group">
                            <span class="input-group-text">DPI</span>
                            <input type="number" class="form-control" id="DPI"
                                placeholder="Direccio Fisiaca del Negocio" name="DPI" required>
                        </div>
                    </div>
                </div>

            </div><!-- ROW FIN -->

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
            <h4>Propietario
            </h4>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Dpi</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">Nit</th>
                        <th scope="col">Email</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
            $consulta = mysqli_query($conexion, "SELECT id_dueño, Nombre, Telefono_dueño, Dpi, Direccion, Nit, Email FROM `tb_dueño`;");
            while ($re = mysqli_fetch_array($consulta, MYSQLI_NUM)) {
                echo '
                    <tr>
                        <th scope="row">' . $re[0] . '</th>
                        <td>' . $re[1] . '</td>
                        <td>' . $re[2] . '</td>
                        <td>' . $re[3] . '</td>
                        <td>' . $re[4] . '</td>
                        <td>' . $re[5] . '</td>
                        <td>' . $re[6] . '</td>
                        <td>
                            <button type="button" class="btn btn-primary" onclick="editarPropietario(' . $re[0] . ', \'' . $re[1] . '\', \'' . $re[2] . '\', \'' . $re[3] . '\', \'' . $re[4] . '\', \'' . $re[5] . '\', \'' . $re[6] . '\')">
                                <i class="fa-solid fa-pen"></i>
                            </button>
                            <button type="button" class="btn btn-danger" id="btnEliminar' . $re[0] . '" onclick="eliminarCampo(' . $re[0] . ')"><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>';
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

        function eliminarCampo(idCampo) {
                      if (confirm("¿Estás seguro de que deseas eliminar este campo?")) {
                        // Realizar la solicitud AJAX para eliminar el campo
                        $.ajax({
                          type: "POST",
                          url: "php/Regristro_dueños.php", // Archivo PHP que realizará la eliminación en la base de datos
                          data: { idCampo: idCampo },
                          success: function (response) {
                            // Manejar la respuesta del servidor (por ejemplo, mostrar un mensaje de éxito y actualizar la tabla)
                            alert("Campo eliminado correctamente");
                            location.reload(); // Recargar la página para reflejar los cambios
                          },
                          error: function () {
                            alert("Error al eliminar el campo");
                          }
                        });
                      }
                    }
        </script>

    </div>
    </div>



    </div>
    <script src="https://kit.fontawesome.com/d3fd75469a.js" crossorigin="anonymous"></script>

</body>

</html>