<?php
  $hostname = "localhost";
  $username = "u8afqm51hf1iuji5";
  $password = "58rDLc5pdzCG9IRigT8D";
  $dbname = "revelacion";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Error al conectarse a la base de datos.".mysqli_connect_error();
    exit();
  }
?>