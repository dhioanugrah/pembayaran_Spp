<?php
include "config.php";


$result = mysqli_query($connect,"select*from dashboard");
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
</head>
<body>
    <div class="sosmed">
        <div class="container">
            <ul>
                <li><a href="#">anugrah</a></li>
            </ul>
        </div>
    </div>    

    <header>
        <div class="container">
            <h1><a href="index.php">Dhio Anugrah</h1>
            <ul>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="#"></a>Login</li>
            </ul>
        </div>
    </header>

    <section class="banner">
        <h2>Welcome To Website</h2>
    </section>

    <footer>
        <i class="fa fa-copyright" aria-hidden="true">2023dhio</i>
    </footer>
</body>
</html>
?>