<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Session</title>
</head>
<body>

    <?php

    session_start();
    if(isset($_SESSION['login']))
    {
    if($_SESSION['login'] == true)
    {
        header('Location: halaman.php');
    }
    }

    ?>

    <h1>selamat datang di aplikasi Login</h1>
    <div class="kirim">
        <form action="halaman-proses.php" method="post">
        <label>username:
            <input type="text" name="username">
        </label>
        <br>
        <label>password:
            <input type="password" name="password">
        </label>
        <br>
        <br>
        <input type="submit" value="login" name="kirim">
        </form>
    </div>
</body>
</html>