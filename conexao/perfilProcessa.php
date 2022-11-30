<?php

session_start();

include('conexao.php');

$id = $_SESSION['id'];
$nomeusu = $_POST['nomeusu'];
$emailusu = $_POST['emailusu'];
$senhausu = $_POST['senhausu'];

$sql = "UPDATE perfil SET nomeusu='$nomeusu', emailusu = '$emailusu', senhausu = '$senhausu' WHERE id = '$id'";

$resultado_usu = mysqli_query($conn ,$sql);

header("Location: https://localhost/projetoPHP/index.php");