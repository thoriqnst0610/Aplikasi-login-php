<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman</title>
</head>
<body>
    <?php
    session_start();
    // $username = $_POST['username'];
    // $password = $_POST['password'];
    $status = $_SESSION['login'];
    if($status != true)
    {
        header('Location: index.php');
    }

    ?>
    <h1>Selamat datang <?= $_SESSION['username'] ?></h1>
    <a href="logout.php">keluar</a>
</body>
</html>