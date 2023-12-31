<?php 
include ("koneksi.php");
if(isset($_GET['pesan'])){
    if($_GET['pesan']=="gagal"){
        echo "<div class='alert'><script>alert('Username dan Password tidak sesuai !')</script></div>";
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
    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+English+SC&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="./src/login.css">
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
          <form action="cek_login.php" id="login-form" method="post">
            <div class="text-input">
                <label for="text">Username</label>
                <input type="text" id="username" name="username" placeholder="Masukkan username" required>
                <p id="username-error" style="color: red; display: none;">Username must not contain symbols or spaces</p>
            </div>
            <div class="text-input" id="password-container">
                    <label for="password">Password</label>
                    <input type="password" placeholder="Masukkan password" name="password" id="password" required>
                    <button type="button" id="pass-btn">
                        <ion-icon class="white-icon" name="eye"></ion-icon>
                    </button>
            </div>
            <button class="login-btn" type="submit" name="submit">Masuk</button>
          </form>
            </div>
        </div>
    </div>
</body>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>

<script>
    let btn = document.getElementById('pass-btn');
    let icon = btn.querySelector('ion-icon');
    let input = document.getElementById('password');


    btn.addEventListener('click', () => {
    input.type == 'password' ? [input.type = 'text', icon.setAttribute('name', 'eye-off')] : [input.type = 'password', icon.setAttribute('name', 'eye')];
    input.focus();
    });

    // Username must not contain symbols and spaces
    const usernameInput = document.querySelector("#username");
    const usernameError = document.querySelector("#username-error");
    const loginForm = document.querySelector("#login-form");

    let isUsernameValid = true;

    usernameInput.addEventListener("input", function() {
        const username = usernameInput.value;
        if (/[\s\W]/.test(username)) { 
            usernameError.style.display = "block";
            isUsernameValid = false;
        } else {
            usernameError.style.display = "none"; 
            isUsernameValid = true;
        }
    });

</script>

</html>
