<?php
session_start();
session_abort();

$_COOKIE['login'] = null; 
$_COOKIE['password'] = null;
header('Location: index.php');
exit;
?>