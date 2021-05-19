<?php
$hostname = "localhost";
$username = "bn1ja";
$password = "0912";
$dbname = "revelacion";
// $hostname = "bfun2rr1krfy5cccm9a1-mysql.services.clever-cloud.com";
// $username = "u8mi6p6lisgbomtm";
// $password = "ocFDQaTvph70WkSufs9x";
// $dbname = "bfun2rr1krfy5cccm9a1";

$conn = mysqli_connect($hostname, $username, $password, $dbname);
if (!$conn) {
  echo "Error al conectarse a la base de datos." . mysqli_connect_error();
}
