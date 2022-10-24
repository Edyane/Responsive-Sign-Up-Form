<?php
    
    include "conexao.php"; 	

    $fname = $_POST["fname"];
    $email = $_POST["email"];
    $password = $_POST["password"];


$sql = "SELECT * FROM signin";

$result = mysqli_query($conn, $sql);

while ($linha = mysqli_fetch_assoc($result)) {
	echo 	$linha["id_sigin"]."  ".
		$linha["fname"]."  ".
		$linha["email"]."  ".
		$linha["password"]."  ".		
}

?>