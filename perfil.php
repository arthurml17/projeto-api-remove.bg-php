<?php

session_start();

include("conexao/conexao.php");

$id = $_SESSION['id'];
$nomeusu = $_SESSION['nomeusu'];
$emailusu = $_SESSION['emailusu'];
$senhausu = $_SESSION['senhausu'];
/*<input type="hidden" id="id" name="id" value="<?php$id?>"*/
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="css/perfil.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,300,0,0" />
    </head>
    
    <body>
        <form method="POST" action="conexao/perfilProcessa.php" class="formPerfil">
            <h1>Alterar Perfil</h1>

            <div class="itemForm">
            <label><strong>Nome: </strong></label>
            <input type="text" name="nomeusu" id="nomeusu" value="<?php echo $nomeusu?>"><br><br>
            </div>

            <div class="itemForm">
            <label><strong>E-mail: </strong></label>
            <input type="email" name="emailusu" id="emailusu" value="<?php echo $emailusu?>"><br><br>
            </div>

            <div class="itemForm">
            <label><strong>Senha: </strong></label>
            <input type="password" name="senhausu" id="senhausu" value="<?php echo $senhausu?>"><br><br>
            </div>
            
            <button type="submit">ALTERAR</button>

        </form>
    </body>
</html>