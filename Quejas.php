<?php
include './php/conexion_be.php';
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
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family: 'Shantell Sans', cursive;&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilos.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/Styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    </script>
    <script>
    src = "js/functions.js"
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-qRkZ0y1sdo/VrXlTv5J0tN5eCO/1Eao/V/5qkj6rJ6gh9/M5vLcRJ3bdvLQcI23iUvj7hL4V6JsdvV7W+c55JQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css"
        integrity="sha512-t42oDrKONJHtddnbgOs4UUI8x/mQ4aCUfeoBIBzxKElVi0qmx0i1WPhBcp4tU8HfC4I+fzuuWE5fH+pi0UUrPw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Referencia al archivo JavaScript de Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"
        integrity="sha512-N1V4aEwOJxkRnlvDv9A6HivuF1txd5mUhHAA4ojz79I5Oh+dpvC7JrtbNVrZdYiZ58p41dKxlLxEFO3KTwX+sg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <!--Aqui es donde inicioa el nav bar-->
    <div class="card crdbody">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="listado_de_quejas.html">Inicio</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="Historico_de_casos.html">Impresion de caso</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#"></a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Ingreso de Caso
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Pantalla de queja simplificada</a></li>
                                <li><a class="dropdown-item" href="#">Pantalla de queja Avanzada</a></li>

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
                <div class="row crdbody">
                    <div class="col-md-3">
                        <button type="button" class="btn btn-outline-primary" title="Buscar Cliente"
                            data-bs-toggle="modal" data-bs-target="#buscar_cli_gen">
                            <i class="fa-solid fa-magnifying-glass"></i> Buscar Negocio
                        </button>
                    </div>
                </div>
                <div class="row crdbody">
                    <div class="form-group col-sm-3">
                        <div class="input-group">
                            <span class="input-group-text">Negocio</span>
                            <input type="text" class="form-control" id="prod" name="Negocio" required>
                        </div>
                    </div>
                    <div class="form-group col-sm-4">
                        <div class="input-group">
                            <span class="input-group-text">Dir_Negocio</span>
                            <input type="text" class="form-control" id="codcre"
                                placeholder="Direccio Fisiaca del Negocio" name="Dir_Negocio" required>
                        </div>
                    </div>
                    <div class="form-group col-sm-4">
                        <div class="input-group">
                            <span class="input-group-text">Email</span>
                            <input type="email" class="form-control" id="prod"
                                placeholder="correo Electronico del negocio" name="Email" required>
                        </div>
                    </div>
                </div>
                <div class="row crdbody">
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
                            <input type="text" class="form-control" id="codpord" name="Propietario" required>
                        </div>
                    </div>
                    <div class="form-group col-sm-3">
                        <div class="input-group">
                            <span class="input-group-text">Tip Queja</span>
                            <select id="Mon" name="Tip_Queja" class="form-select">
                                <?php while($ctipqjea = mysqli_fetch_array($tipQuejas)) { ?>
                                <option value="<?php echo $ctipqjea['id_queja']; ?>"><?php echo $ctipqjea['Ctip_queja']; ?>
                                </option>
                                <?php } ?>
                                <option selected>------</option>
                            </select>
                        </div>
                    </div>
                </div> <!-- ROW FIN -->

                <div class="row crdbody">
                    <div class="form-group col-sm-3">
                        <div class="input-group">
                            <span class="input-group-text">Factura</span>
                            <input type="text" class="form-control"  name="Factura" id="codfatura" required>
                        </div>
                    </div>
                    <div class="form-group col-sm-4">
                        <div class="input-group">
                            <span class="input-group-text">Telefono</span>
                            <input type="text" class="form-control" id="codcre"
                             placeholder="Telefono de Negocio" name="Telefono" value="" required>
                        </div>
                    </div>
                    <!--zxczxczxc-->
                    <div class="form-group col-sm-4">
                        <div class="input-group">
                            <span class="input-group-text">Nit</span>
                            <input type="text" class="form-control" 
                            placeholder="NIT del Negocio" name="Nit" required>
                        </div>
                    </div>
                </div> <!-- ROW FIN -->

                <div class="row crdbody justify-content-center">
                    <div class="form-floating col-sm-12">
                        <textarea class="form-control" name="Detalledequeja" placeholder="Leave a comment here" id="floatingTextarea2"
                            style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Detalle de queja</label>
                    </div>
                </div>

                <div class="row crdbody justify-content-center">
                    <div class="form-floating col-sm-12">
                        <textarea class="form-control" name="Sol" placeholder="Leave a comment here" id="floatingTextarea2"
                            style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Detalle de Solucion</label>
                    </div>
                </div>

                <div class="row crdbody justify-content-center">
                    <div class="col-sm-3">
                        <div class="input-group">
                            <button class="btn btn-success me-2"><i class="fas fa-paper-plane"></i> Enviar
                                Queja</button>
                            <button class="btn btn-danger"><i class="fas fa-trash-alt"></i> Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    </div>

    <div class="card crdbody">
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Contactanos</h2>
                    <p>¿Cómo Encontrarnos? <span>Facil y Rapido</span></p>
                </div>

                <div class="mb-3">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15442.828948241015!2d-90.5161404!3d14.6157463!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8589a33606f47951%3A0x32f97460c776f137!2sDirecci%C3%B3n%20de%20Atenci%C3%B3n%20y%20Asistencia%20al%20Consumidor%20-DIACO-!5e0!3m2!1ses-419!2sgt!4v1684270156145!5m2!1ses-419!2sgt"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div><!-- End Google Maps -->

                <div class="row gy-4">

                    <div class="col-md-6">
                        <div class="info-item d-flex align-items-center">
                            <i class="icon bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email </h3>
                                <p>Diaco@gmail.com</p>
                            </div>
                        </div>
                    </div><!-- End Info Item -->

                </div>

                <form action="forms/contact.php" method="post" role="form" class="php-email-form p-3 p-md-4">
                    <div class="row crdbody">
                        <div class="col-xl-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                required>
                        </div>
                        <div class="col-xl-6 form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                                required>
                        </div>
                    </div>
                    <div class="row crdbody">
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                required>
                        </div>
                    </div>

                    <div class="row crdbody">
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                required></textarea>
                        </div>
                    </div>

                    <button type="button" class="btn btn-success">Enviar</button>
                </form>
                <!--End Contact Form -->

            </div>
        </section><!-- End Contact Section -->
    </div>
    <script src="https://kit.fontawesome.com/d3fd75469a.js" crossorigin="anonymous"></script>

</body>

</html>