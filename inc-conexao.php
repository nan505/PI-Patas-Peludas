<?php

$conn = mysqli_connect("localhost", "root", "", "db_patinhapeludas");

if(!$conn){
    die("<h3>Erro</h3>" . mysqli_connect_error() );
}

mysqli_set_charset($conn, "utf8mb4");

?>
