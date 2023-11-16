<?php 
    include("koneksi.php");

    $read = mysqli_query($koneksi, "SELECT * FROM artikel ORDER BY idartikel ASC");
	

?>
<!DOCTYPE html>
<html>
<head>
	<title>Artikel Demon Ward</title>
</head>
<body>
	<?php 
	session_start();
 
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
	if(isset($_POST['posting'])) {
        $judul = $_POST['judul'];
        $isi = $_POST['isi'];

        $result = mysqli_query($koneksi, "INSERT INTO artikel (judul, isi) VALUES('$judul','$isi')");

        header("Location:pengunjung_lihatartikel.php");
    }
	?>
	<h1>Artikel Demon Slayer</h1>
 
	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
	<?php 
            while($data_posts = mysqli_fetch_array($read)){
				?><div style="border: 2px solid black;"><?php
                echo "<h2>".$data_posts['idartikel'].".&nbsp;";
                echo $data_posts['judul']."<br/></h2>"; 
                echo "<p>".$data_posts['isi']."</p>";
                ?></div><?php
            }
            ?>
	<br/>
	<br/>
	<h1>Tambah Post Artikel!</h1>
        <a href="pengunjung_lihatartikel.php">Batal</a>
            <form action="pengunjung_tambahartikel.php" method="POST">
                <table>
                    <tr>
                        <td>Judul</td>
                        <td><input style="width: 500px;" type="text" name="judul"></td>
                    </tr>
                    <tr>
                        <td>Konten</td>
                        <td><textarea cols="50" rows="20" name="isi"></textarea></td>
                    </tr>
                    <tr><td></td><td><input type="submit" name="posting"></td></tr>
                </table>
            </form>
	
</body>
</html>