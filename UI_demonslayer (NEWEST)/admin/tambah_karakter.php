<?php 

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $cover = $_FILES['foto']['name'];
    $biodata = $_POST['biodata'];
    if ($cover != '') {

        $uploadadm = 'images/' . $cover;
        move_uploaded_file($_FILES["foto"]["tmp_name"], $uploadadm);
        $upload = '../img/karakter/' . $cover;
        copy($uploadadm, $upload);
    }
    
    $query = "INSERT INTO karakter (namakarakter,cover,biodata) VALUES ('$nama','$cover','$biodata')";
    $result = mysqli_query($koneksi,$query);
    if($result){
        echo 
            "<script>
            alert('Data Berhasil Ditambahkan!');
            document.location = 'index.php?page=karakter';
            </script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Karakter</title>
</head>
<body>
    <h1>Tambah Karakter Data</h1>
    <a href="index.php?page=karakter"><h3>Kembali</h3></a>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Nama Karakter</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Biodata Karakter</td>
                <td><textarea name="biodata" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td>Cover gambar</td>
                <td><input type="file" name="foto" accept=".png, .jpg, .jpeg" ></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="tambah"></td>
            </tr>
        </table>
    </form>
</body>
</html>