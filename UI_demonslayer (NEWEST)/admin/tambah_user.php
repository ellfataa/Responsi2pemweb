<?php 

if(isset($_POST['submit'])){
  $nama = $_POST['nama'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $level = $_POST['level'];

  $query = "INSERT INTO user (nama, username, password, email, level) VALUES ('$nama','$username','$password','$email','$level')";
  $result = mysqli_query($koneksi,$query);
  if($result){
    echo 
        "<script>
        alert('Data Berhasil Ditambahkan!');
        document.location = 'index.php?page=user';
        </script>";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add User</title>
</head>
<body>
    <h1>Tambah User Data</h1>
    <a href="index.php?page=user"><h3>Kembali</h3></a>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Passsword</td>
                <td><input type="text" name="password"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>Level</td>
                <td>
                    <select name="level">
                        <option value="user">user</option>
                        <option value="admin">admin</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="tambah"></td>
            </tr>
        </table>
    </form>
</body>
</html>