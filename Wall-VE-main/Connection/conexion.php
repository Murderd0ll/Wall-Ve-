<?php
if(!isset($_SESSION)){
    session_start();
}


$server = "localhost";
$user = "root";
$pass = "";
$db = "wallve";

if (isset($_SESSION['user']) && isset($_SESSION['pass'])) {
    $user = $_SESSION['user'];
    $pass = $_SESSION['pass'];

}
$conexion = new mysqli($server, $user, $pass, $db);







?>
