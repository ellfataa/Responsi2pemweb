<?php 

if(isset($_POST['submit'])){
  $judul = $_POST['judul'];
  $isi = $_POST['isi'];

  $query = "INSERT INTO artikel (judul,isi) VALUES ('$judul','$isi')";
  $result = mysqli_query($koneksi,$query);
  if($result){
    echo 
        "<script>
        alert('Data Berhasil Ditambahkan!');
        document.location = 'index.php?page=artikel';
        </script>";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add artikel</title>
</head>
<body>
    <h1>Tambah Artikel Data</h1>
    <a href="index.php?page=artikel"><h3>Kembali</h3></a>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <table>
            <tr>
                <td>Judul Artikel</td>
                <td><input type="text" name="judul"></td>
            </tr>
            <tr>
                <td>Isi Artikel</td>
                <td><textarea name="isi" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="tambah"></td>
            </tr>
        </table>
    </form>
</body>
</html>