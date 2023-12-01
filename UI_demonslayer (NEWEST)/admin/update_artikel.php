<?php
    session_start();
    include '../koneksi.php';
    $id=$_GET['updateid'];
    if(isset($_GET['updateid'])){
        $select = "SELECT * FROM artikel WHERE idartikel='$id'";
        $lihat = mysqli_query($koneksi, $select);
        $data = mysqli_fetch_assoc($lihat);
    }

    if (isset($_POST['edit'])){
        $judul = $_POST['judul'];
        $isi = $_POST['isi'];

        $query = " UPDATE artikel SET judul='$judul', isi='$isi' WHERE idartikel='$id'";
        $result = mysqli_query($koneksi,$query);
            if($result){
                echo "<script>
                    alert('Berhasil Diedit!');
                    document.location = 'index.php?page=artikel';
                    </script>";
            }else{
                echo "failed" .mysqli_error($koneksi); 
            }
        }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Artikel</title>
</head>
<body>
    <?php 
        include 'template/sidebar.php';
        include 'template/navbar.php'; 
    ?>
    <h1>Edit Artikel Data</h1>
    <a href="index.php?page=artikel"><h3>Kembali</h3></a>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <table>
            <tr>
                <td>Judul</td>
                <td><input type="text" size="80px" name="judul" value="<?php echo $data['judul']; ?>"></td>
            </tr>
            <tr>
                <td>Isi</td>
                <td><textarea name="isi" cols="74" rows="20"><?php echo $data['isi']; ?></textarea></td>
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