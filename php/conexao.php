<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "exemplo";

$conn = mysqli_connect($host, $user, $password) or die ("error: a conexao".mysqli_error()."<br>");
mysqli_select_db($conn, $db) or die ("error: conexao com banco".mysqli_error()."<br>");


?>