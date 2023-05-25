<?php
session_start();
if( !isset($_SESSION['login'])) {
    header("Location:../login/index.php");
    exit;
}?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="medsos">
        <div class="container">
            <ul>
                <li><a href="#"></a></li>
            </ul>
        </div>  
    </div>

    <header>
        <div class="container">
            <nav>
                <?php if($_SESSION['jabatan'] == "0" ) { ?>
                    <h1><a href="index.php">Dhio Anugrah</a></h1>
                    <ul>
                        <li><a href="../dashboard/index.php">Dashboard</a></li>
                        <li><a href="../siswa/index.php">Siswa</a></li>
                        <li><a href="../petugas/index.php">Petugas</a></li>
                        <li><a href="../pembayaran/index.php">Pembayaran</a></li>
                        <li><a href="../login/logout.php">Logout</a></li>
                    </ul>
                <?php } else { ?>
                    <ul>
                        <li><a href="../dashboard/index.php">Dashboard</a></li>
                        <li><a href="../pembayaran/index.php">Pembayaran</a></li>
                        <li><a href="../login/logout.php">Logout</a></li>
                    </ul>
                <?php } ?>        
            </nav>
        </div>   
    </header>

        <section class="banner">
           <h2>WELCOME TO WEBSITE PEMBAYARAN</h2>
       </section>
</body>
</html>