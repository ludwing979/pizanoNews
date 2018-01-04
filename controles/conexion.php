<?php
if (!isset($_SESSION)){
  session_start();
}
header("Content-Type: text/html;charset=utf-8");
setlocale(LC_MONETARY, 'es_MX');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pizzanonews";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Fallo la conexion: " . mysqli_connect_error());
}
mysqli_query($conn, "SET NAMES 'utf8'");

?>