<?php
    session_start();
    include '../koneksi.php';
    $id=$_GET['updateid'];
    if(isset($_GET['updateid'])){
        $select = "SELECT * FROM user WHERE id='$id'";
        $lihat = mysqli_query($koneksi, $select);
        $data = mysqli_fetch_assoc($lihat);
    }

    if (isset($_POST['edit'])){
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $level = $_POST['level'];

        $query = " UPDATE user SET nama='$nama', username='$username', password='$password', email='$email', level='$level' WHERE id='$id'";
        $result = mysqli_query($koneksi,$query);
            if($result){
                echo "<script>
                    alert('Berhasil Diedit!');
                    document.location = 'index.php?page=user';
                    </script>";
            }else{
                echo "failed" .mysqli_error($koneksi); 
            }
        }   
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update User</title>
</head>
<body>
    <?php 
        include 'template/sidebar.php';
        include 'template/navbar.php'; 
    ?>
    <h1>Edit user Data</h1>
    <a href="index.php?page=user"><h3>Kembali</h3></a>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" size="80px" name="nama" value="<?php echo $data['nama']; ?>"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" size="80px" name="username" value="<?php echo $data['username']; ?>"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" size="80px" name="password" value="<?php echo $data['password']; ?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" size="80px" name="email" value="<?php echo $data['email']; ?>"></td>
            </tr>
            <tr>
                <td>Level</td>
                <td><select name="level" id="level" value="">
                    <?php 
                    if(isset($_GET['updateid'])){
                        if($data['level'] == "admin"){
                            echo "<option value='admin' selected> admin </option>";
                        }elseif($data['level'] == "user"){
                            echo "<option value='admin'> admin </option>";
                            echo "<option value='user' selected> user </option>";
                        }
                    }else{
                        echo "<option value='admin'> admin </option>";
                        echo "<option value='user'> user </option>";
                    }
                    ?>                    
                </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="edit" value="edit"></td>
            </tr>
        </table>
    </form>
    <?php include 'template/footer.php'; ?>
</body>
</html>