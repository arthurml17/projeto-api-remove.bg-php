<?php

include_once("conexao.php");

$nomeusu = filter_input(INPUT_POST, 'nomeusu', FILTER_SANITIZE_STRING);
$emailusu = filter_input(INPUT_POST, 'emailusu', FILTER_SANITIZE_STRING);
$senhausu = filter_input(INPUT_POST, 'senhausu', FILTER_SANITIZE_STRING);

$result_usu = "INSERT perfil(nomeusu, emailusu, senhausu) VALUES ('$nomeusu','$emailusu','$senhausu')";
$resultado_usu = mysqli_query($conn ,$result_usu);
