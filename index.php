<?php
session_start();

if(!empty($_SESSION['name']) OR !empty($_SESSION['password'])){
    header('Location: profile.php');
}


if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $password = $_POST['password'];
    $password = md5($password);

    $_SESSION['name'] = $name;
    $_SESSION['password'] = $password;
    $_SESSION['them'] = 'light';

    header('Location: profile.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="name" placeholder="Имя"><br>
        <input type="password" name="password" placeholder="Пароль"><br>
        <input type="submit" name="submit" value="Регистрация">
    </form>
</body>
</html>