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
    if(isset($_POST['update'])) {
        $id = $_POST['idartikel']; 
        $judul = $_POST['judul'];
        $isi = $_POST['isi'];

        $result = mysqli_query($koneksi, "UPDATE artikel SET judul='$judul', 
                isi='$isi' WHERE idartikel=$id");

        header("Location:pengunjung_lihatartikel.php");
    }

    $id = $_GET['idartikel'];
    $result = mysqli_query($koneksi,"SELECT * FROM artikel WHERE idartikel=$id");
    while($user_data = mysqli_fetch_array($result)) {
        $judul = $user_data  ["judul"];
        $isi = $user_data ["isi"];    
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
	<h1>Edit Postingan Artikel!</h1>
        <a href="pengunjung_lihatartikel.php">Batal</a>
        <form action="pengunjung_editartikel.php" method="POST">
                <table border="0">
                    <tr>
                        <td>judul</td>
                        <td><input style="width: 500px;" type="text" name="judul" value=<?php echo $judul;?>></td>
                    </tr>
                    <tr>
                        <td>isi</td>
                        <td><textarea name="isi" cols="50" rows="20"><?php echo $isi; ?></textarea></td>
                    </tr>
                    <tr>
                        <td><input type="hidden" name="idartikel" value=<?php echo $_GET['idartikel'];?>></td>
                        <td><input type="submit" name="update" value="Update"></td>
                    </tr>
                </table>
            </form>
	
</body>
</html>