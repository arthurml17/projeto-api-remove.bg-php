<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/central.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://css.gg/css?=|dark-mode" rel="stylesheet">
</head>
<body>
    <div class="central">
        <div class="switchDark" method="SESSION">
            <label for="switch">
                <input type="checkbox" id="switch">
                <i class="gg-dark-mode"></i>
            </label>
        </div>
        <div class="headerPhp">
            <?php
                include_once("header.php");
            ?>
        </div>
        <div class="corpoPhp"> 
            <?php
                if(empty($_SERVER['QUERY_STRING']))
                {
                    $var = "conteudo.php";
                    include_once($var);
                }
                
                else
                {
                    $pg = $_GET['pg'];
                    include_once("$pg.php");
                }
            ?>
        </div> 
        <div class="footerPhp">
            <?php
                include_once("footer.php");
            ?>
        </div>
        <div class="copyright"><strong>EasyRemove from <font color="#733ec"> Link </font> © </strong></div>  
    </div>
    <script src="java/darkMode.js"></script>
</body>
</html>