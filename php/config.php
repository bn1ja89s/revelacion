<?php
$hostname = "bhfmrossnyv37gigqnej-mysql.services.clever-cloud.com";
$username = "uap9tvtxfjv6kucw";
$password = "5IWl50DORjqpZfpaz4qj";
$dbname = "bhfmrossnyv37gigqnej";


$conn = mysqli_connect($hostname, $username, $password, $dbname);
if (!$conn) {
  echo "Error al conectarse a la base de datos." . mysqli_connect_error();
}
