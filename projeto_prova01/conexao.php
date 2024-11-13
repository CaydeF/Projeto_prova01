<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "prova01";


$conn = new mysqli($host, $username, $password, $dbname);


if ($conn->connect_error) {
    die('Conexão falhou: ' . $conn->connect_error);
}
?>
