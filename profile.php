<?php 
session_start();
require_once('require/requestURL.php');

echo "Имя: ".$_SESSION['name']."<br>";
echo "Пароль: ".$_SESSION['password']."<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        *{
            padding: 0;
            margin: 0;
        }

        body{
            <?php if($_SESSION['them'] == 'dark'){
                echo "background: #161616; 
                color: #fff;
                "; 
            
            } ?>
        }

    </style>
</head>
<body >

    <?php 
        if($_SESSION['them'] == 'dark'){ 
            echo "Темная тема";
        }elseif($_SESSION['them'] == 'light'){
            echo "Светлая тема";
        }else{
            echo "error";
        }
    ?>

    <h2>Вы посетили</h2>

    <?php 
    foreach ($_SESSION['history'] as $key => $value) {
       echo $value."<br>";
    }
    ?>

    <a href="them.php">Сменить тему</a>
    <a href="logout.php">Выход</a>

    <a href="require/deleteHistory.php">Очистить историю</a>
</body>
</html>