<?php 
include 'koneksi.php';
if(isset($_POST['register'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $level = 'user';

    $query = "INSERT INTO user(nama,username,password,email,level) VALUES ('$nama','$username','$password','$email','$level')";
    $result = mysqli_query($koneksi,$query);
    if($result){
        ?><script>
        alert('Anda Berhasil Register!');
        document.location = 'login.php';
        </script>
        <?php
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Demon Ward</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+English+SC&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="./src/register.css">
</head>

<body>
    <div class="container">
        <div class="leftcon">
            <img src="./img/register_login/logo.png" alt="Demon Slayer" width="288" height="269"/><br>
            <h1>Selamat Datang di Website<br>Demon Ward</h1>
        </div>
        <div class="register">
            <h1 class="title">Sign up</h1>
            <h5 class="subtitle">Jika Kamu sudah mempunyai akun<br>Kamu dapat <a href="login.php">Masuk!</a></h5>
            <br>
        <form method="post" id="register-form">
            <div class="text-input">
                <label for="text">Nama</label>
                <input type="text" name="nama" placeholder="Masukkan nama" required>
            </div>
            <div class="text-input">
                <label for="text">Username</label>
                <input type="text" name="username" id="username" placeholder="Masukkan username" maxlength="10" required>
                <p id="username-error" style="color: red; display: none;">Username must not contain symbols or spaces</p>
            </div>
            <div class="text-input">
                <label for="text">Email</label>
                <input type="email" name="email" placeholder="Masukkan email" required>
            </div>
            <div class="text-input" id="password-container">
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Masukkan password" id="password" required>
                <i class="fa-solid fa-eye" class="eye"></i>
            </div>
            <button id="register" name="register" class="register-btn">Daftar</button>
        </form>
            </div>
        </div>
    </div>
</body>

<script>
    const passwordInput = document.querySelector("#password");
    const eye = document.querySelector(".fa-eye");
    
    eye.addEventListener("click", function() {
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            eye.style.opacity = 0.5; // Change the opacity to indicate an off state
        } else {
            passwordInput.type = "password";
            eye.style.opacity = 1; // Restore the opacity to indicate an on state
        }
    });
    
    // Username must not contain symbols and spaces
    const usernameInput = document.querySelector("#username");
    const usernameError = document.querySelector("#username-error");
    const registerForm = document.querySelector("#register-form");

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