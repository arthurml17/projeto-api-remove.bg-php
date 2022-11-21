<?php
include('conexao/conexao.php');

if(isset($_POST['email']) || isset($_POST['senha']))
{
    if(strlen($_POST['email']) > 0 and strlen($_POST['senha']) > 0)
    {
        $email = $conn->real_escape_string($_POST['email']);
        $senha = $conn->real_escape_string($_POST['senha']);

        $sqlCode = "SELECT * FROM perfil WHERE emailusu = '$email' AND senhausu = '$senha'";
        $sqlQuery = $conn->query($sqlCode) or die("Falha na execução do código sql: ". $conn->error);
        
        $quantidade = $sqlQuery->num_rows;

        if($quantidade == 1)
        {
            $usuario = $sqlQuery->fetch_assoc();

            if(!isset($_SESSION))
            {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nomeusu'] = $usuario['nomeusu'];
            $_SESSION['emailusu'] = $usuario['emailusu'];
            $_SESSION['senhausu'] = $usuario['senhausu'];

            header("Location: central.php");
        }
        else
        {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,300,0,0" />
</head>
<body>
    <div class="cartaoLoginContainer">
        <div class="cartaoLogin">
            <div class="cartaoLoginLogo">
                <img src="fotos/logoLink.png" alt="logo">
            </div>
            
            <form method="POST" action="" class="cartaoLoginForm">
                <div class="itemForm">
                    <span class="itemFormIcon material-symbols-rounded">mail</span>
                    <input type="email" placeholder="E-mail" name="email" autofocus required>
                </div>
                <div class="itemForm">
                    <span class="itemFormIcon material-symbols-rounded">lock</span>
                    <input type="password" placeholder="Digite a senha" name="senha" required>
                </div>
                <div class="outroItemForm">
                    <div class="checkbox">
                        <input type="checkbox" id="rememberMeCheckbox">
                        <label for="rememberMeCheckbox">Lembrar senha</label>
                    </div>
                </div>
                <button type="submit">ENTRAR</button>
            </form>
        </div>
    </div>
</body>
</html>
