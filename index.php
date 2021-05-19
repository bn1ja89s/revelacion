<?php
require "php/config.php";
include "header.php";
?>

<body>
    <nav class="navbar fixed-top navbar-expand navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="./img/2.png" alt="" width="50" height="50">
                <span class="h4 p-2">MURO DE COMENTARIOS</span>
            </a>
        </div>
    </nav>
    <button type="button" class="btn btn-wsp" data-toggle="modal" data-target="#exampleModal">
        <span>+</span>
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-heart text-danger"></i> Dejanos tu resultado <i class="fas fa-heart text-danger"></i></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="send.php" method="POST" id="insert_form">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nombre</label>
                            <input type="text" class="form-control" name="nombre" required placeholder="Escribe tu nombre aquí..">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Género</label>
                            <select class="form-control" name="genero" required>
                                <option>Selecciona una Opción</option>
                                <option>Hombre</option>
                                <option>Mujer</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Mensaje</label>
                            <textarea class="form-control" rows="3" name="mensaje" required></textarea>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <input type="submit" name="insertdata" value="Insertar" class="btn btn-success" />
                </div>
                </form>
            </div>
        </div>
    </div>


    <div class="wrapper" style="padding-top: 80px">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <?php
                    // $ver = "SELECT * FROM datos";
                    // $resultado = mysqli_query($conn, $ver);
                    $final = mysqli_query($conn, "SELECT * FROM datos ORDER BY id DESC LIMIT 1");
                    $cauxi = mysqli_fetch_object($final);
                    if ($cauxi != NULL) {
                        $dato = $cauxi->id;
                    } else {
                        $dato = 0;                       
                    }
                    ?>
                    <section class="col-lg-4">
                        <?php

                        for ($i = 1; $i <= $dato; $i = $i + 3) {
                            $derivado = mysqli_query($conn, "SELECT * FROM datos WHERE id = $i");
                            $comentario = mysqli_fetch_array($derivado);
                        ?>


                            <div class="card">
                                <div class="card-header ui-sortable-handle <?php if ($comentario['genero'] == "Hombre") echo 'hombre';
                                                                            elseif ($comentario['genero'] == "Mujer") echo 'mujer' ?>">
                                    <h3 class="card-title">
                                        <div class="spinner-grow <?php if ($comentario['genero'] == "Hombre") echo 'hombre_2';
                                                                    elseif ($comentario['genero'] == "Mujer") echo 'mujer_2' ?>" role="status$derivado">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                        <i class="fas fa-user"></i>
                                        <span class="p-2"> <b><?php echo $comentario['nombre']; ?> </b> </span>
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content p-0">
                                        <?php echo $comentario['mensaje']; ?>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </section>

                    <section class="col-lg-4">
                        <?php

                        for ($i = 2; $i <= $dato; $i = $i + 3) {
                            $derivado = mysqli_query($conn, "SELECT * FROM datos WHERE id = $i");
                            $comentario = mysqli_fetch_array($derivado);
                        ?>


                            <div class="card">
                                <div class="card-header ui-sortable-handle <?php if ($comentario['genero'] == "Hombre") echo 'hombre';
                                                                            elseif ($comentario['genero'] == "Mujer") echo 'mujer' ?>">
                                    <h3 class="card-title">
                                        <div class="spinner-grow <?php if ($comentario['genero'] == "Hombre") echo 'hombre_2';
                                                                    elseif ($comentario['genero'] == "Mujer") echo 'mujer_2' ?>" role="status$derivado">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                        <i class="fas fa-user"></i>
                                        <span class="p-2"> <b><?php echo $comentario['nombre']; ?> </b> </span>
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content p-0">
                                        <?php echo $comentario['mensaje']; ?>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </section>

                    <section class="col-lg-4">
                        <?php

                        for ($i = 3; $i <= $dato; $i = $i + 3) {
                            $derivado = mysqli_query($conn, "SELECT * FROM datos WHERE id = $i");
                            $comentario = mysqli_fetch_array($derivado);
                        ?>
                            <div class="card">
                                <div class="card-header ui-sortable-handle <?php if ($comentario['genero'] == "Hombre") echo 'hombre';
                                                                            elseif ($comentario['genero'] == "Mujer") echo 'mujer' ?>">
                                    <h3 class="card-title">
                                        <div class="spinner-grow <?php if ($comentario['genero'] == "Hombre") echo 'hombre_2';
                                                                    elseif ($comentario['genero'] == "Mujer") echo 'mujer_2' ?>" role="status$derivado">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                        <i class="fas fa-user"></i>
                                        <span class="p-2"> <b><?php echo $comentario['nombre']; ?> </b> </span>
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content p-0">
                                        <?php echo $comentario['mensaje']; ?>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </section>
                </div>
            </div>
        </section>
    </div>



    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/security.js"></script>
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>

</body>

</html>