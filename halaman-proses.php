<?php

session_start();

$username = "thoriq";
$password = "thoriq";

if($username != $_POST['username'] or $password != $_POST['password'])
{
    header('Location: index.php');
}
else{
    $login = $_SESSION['login'] = true;
    $nama = $_SESSION['username'] = $_POST['username'];
    header('Location: halaman.php');
}