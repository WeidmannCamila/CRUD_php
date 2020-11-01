<?php
session_start();

$conn = mysqli_connect( //parametros de la bdd, devuelve una variable de conexion por lo que hay que guardar
  'localhost',
  'root',
  '',
  'php_mysql_crud'
);

/*if (isset($conn)) {
    echo 'DB is connected';
}*/




//or die(mysqli_erro($mysqli));

?>