<?php
    $host = "localhost";
    $dbname = "BaseDeDatosProyecto";
    $user = "postgres";
    $pass = "123";

    $conexion= pg_connect("host='$host' dbname='$dbname' user='$user' password='$pass'");
?>