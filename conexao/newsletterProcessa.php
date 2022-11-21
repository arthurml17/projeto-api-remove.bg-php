<?php

include_once("conexao.php");

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);

$result_usu = "INSERT INTO newsletter(email) VALUES ('$email')";
$resultado_usu = mysqli_query($conn ,$result_usu);