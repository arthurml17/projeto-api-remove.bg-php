<?php
session_start();
$nomeusu = $_SESSION['nomeusu'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="css/conteudo.css">
    </head>
    
    <body>
          <div class="container">
              <div class="texto">
                  <h1>Opa <?php echo $nomeusu?>, seja bem vindo a nossa <font color="#0cabb1">Aplicação Web!</font></h1><br>
              </div>
              <div class="btn">
                  <a href="conexao/logout.php"><button type="submit">SAIR</button></a>
              </div>

          </div>
    </body>
</html>
