<?php
    session_start();
    include "../koneksi.php";
    $idkarakterupdate = $_GET['updateid'];
    if (isset($_POST['submit'])) {
        $namakarakter = $_POST["namakarakter"];
        $biodata = $_POST["biodata"];
        $cover = $_FILES["foto"]["name"];
        if ($cover != '') {
            //hapus gambar lama pda direktori yg bersangkutan
            $gambar = mysqli_fetch_array(mysqli_query($koneksi, "SELECT cover from karakter where idkarakter='$idkarakterupdate'"));
            unlink("images/$gambar[cover]");
            unlink("../img/karakter/$gambar[cover]");

            //upload gambar yang baru setelah diinput
            $uploadadm = 'images/' . $cover;
            move_uploaded_file($_FILES["foto"]["tmp_name"], $uploadadm);
            $uploadadm = '../img/karakter/' . $cover;
            copy($uploadadm, $upload);

            //update karakter dengan foto baru
            $update = "UPDATE karakter set namakarakter = '$namakarakter', cover='$cover', biodata='$biodata' where idkarakter='$idkarakterupdate'";

        } else {
            //update karakter tanpa foto baru
            $update = "UPDATE karakter set namakarakter = '$namakarakter', biodata='$biodata' where idkarakter='$idkarakterupdate'";
        }
        $result = mysqli_query($koneksi, $update);
        if($result){
            echo "<script>
                alert('Berhasil Diedit!');
                document.location = 'index.php?page=karakter';
                </script>";
        }else{
            echo "failed" .mysqli_error($koneksi); 
        }
    }
    //bagian form input updatean data
    $data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * from karakter where idkarakter='$idkarakterupdate'"));
    if ($data['idkarakter'] != "") {
?>
    <!--HTML-->
<!DOCTYPE html>
<html>
<head>
    <title>Update Karakter</title>
</head>
<body>
    <?php 
        include 'template/sidebar.php';
        include 'template/navbar.php'; 
    ?>
    <h1>Edit karakter Data</h1>
    <a href="index.php?page=list_karakter"><h3>Kembali</h3></a>
    <form action='<?php $_SERVER['PHP_SELF']; ?>' name='update' method='post' enctype='multipart/form-data'>
    <table>
            <tr>
                <td>Nama Karakter</td>
                <td>
                    <input type="text" name="namakarakter" value="<?php echo $data['namakarakter']; ?> ">
                </td>
            </tr>
            <tr>
                <td>Biodata Karakter</td>
                <td>
                    <textarea name="biodata" cols="30" rows="10"><?php echo $data['biodata']; ?></textarea>
                </td>
            </tr>
                <td>Karakter Cover</td>
                <td>
                    <img src="images/<?php echo $data['cover']; ?>" width="100" height="100"> <br>
                    <input type="file" name="foto" accept=".png, .jpg, .jpeg, .webp">
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Edit Data karakter"></td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php 
}
?>