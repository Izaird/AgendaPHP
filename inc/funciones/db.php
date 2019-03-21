<?php
//credenciales de la base de datos
define('DB_USUARIO', 'root');
define('DB_PASSWORD', 'm0th3l3td3lg4');
define('DB_HOST', 'localhost');
define('DB_NOMBRE', 'agendaphp');


$conn = new mysqli(DB_HOST,DB_USUARIO, DB_PASSWORD, DB_NOMBRE);

echo $conn ->ping();
?>