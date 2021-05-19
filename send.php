<?php
require "php/config.php";
include "header.php";
?>

<?php
    if (isset($_POST['insertdata'])) {
        $nombre = $_POST['nombre'];
        $genero = $_POST['genero'];
        $mensaje = $_POST['mensaje'];

        $query = "INSERT INTO datos(nombre, genero, mensaje) VALUES ('$nombre', '$genero', '$mensaje')";
        $query_run = mysqli_query($conn, $query);

        if ($query_run) {
            header('Location: index.php');
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
            header('Location: 404.php');
        }
        $result = mysqli_query($conn, "SELECT * FROM datos ORDER BY id DESC LIMIT 1");
    }
    ?>