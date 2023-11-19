<?php 
include("koneksi.php");
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
?>
 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Demon Ward</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+English+SC&family=Poppins:wght@300;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="container">
        <div class="leftcon">
            <img src="./img/register_login/logo.png" alt="Demon Slayer" width="288" height="269"/><br>
            <h1>Selamat Datang di Website<br>Demon Ward</h1>
        </div>
        <div class="login">
            <h1 class="title">Sign in</h1>
            <h5 class="subtitle">Jika Kamu belum mempunyai akun<br>Kamu dapat <a href="register.php">Daftar!</a></h5>
            <br>
            <form action="cek_login.php" method="post">
            <div class="text-input">
                <label for="text">Username</label>
                <input type="text" name="username" placeholder="Masukkan username">
            </div>
            <div class="text-input">
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Masukkan password">
            </div>
            <button class="login-btn">Masuk</button>
            </form>
        </div>
    </div>
</body>

</html>
