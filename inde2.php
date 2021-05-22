<?php
    $sql = "SELECT * FROM datos";
    $result = mysqli_query($conn, $sql);
    $contador = 1;
    if (mysqli_num_rows($result) > 0) {
        while ($datos = mysqli_fetch_assoc($result)) {
            echo $datos;
         }
         
        }
?>