<?php

    $fname = $_POST["fname"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    echo $nome."<br>";
    echo $email."<br>";
    echo $password."<br>";

    if (isset($_POST["submit"])) {
        $fname = $_POST["fname"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        echo "O nome é: " .$fname."<br>";
        echo "O email é: " .$email."<br>";
        echo "A senha é: " .$password."<br>";
    }

?>