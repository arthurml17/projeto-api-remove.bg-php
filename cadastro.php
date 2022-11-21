<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="css/cadastro.css">
    </head>

    <body>
        <form method="POST" class="formPerfil">
            <h1>Escolha a imagem</h1>

            <div class="itemForm">

                <label class="img" tabIndex="0">
                <input type="file" accept="image/*" class="inputImg" />
                <span class="picture__image"></span>
                </label>

            </div>

            <input type="submit" class="remove" value="REMOVER FUNDO" name="remove">
            <input type="submit" class="upload" value="BAIXAR IMAGEM" name="baixar">
        
        </form>
        <div class="php">
            <?php
            include('api/apiRemove.php');

            if(isset($_POST['remove'])) {
                apiRemove::onApi();
            }

            ?>
        </div>
    </body>
</html>

