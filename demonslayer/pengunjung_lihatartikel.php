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
 
	?>
	<h1>Artikel Demon Slayer</h1>
 
	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
	<?php 
            while($data_posts = mysqli_fetch_array($read)){
				?><div style="border: 2px solid black;"><?php
                echo "<h2>".$data_posts['idartikel'].".&nbsp;";
                echo $data_posts['judul']."<br/></h2>";
				echo "<p>".$data_posts['isi']."</p>";
                echo "<a href='pengunjung_editartikel.php?idartikel=$data_posts[idartikel]'>Edit</a>
                    | <a href='pengunjung_deleteartikel.php?idartikel=$data_posts[idartikel]'>Delete</a> posted by ".$_SESSION['username'];
                ?></div><?php
            }
    ?>
	<a href="logout.php"><button>LOGOUT</button></a>
	<a href="pengunjung_tambahartikel.php"><button>Buat artikel</button></a>
	<br/>
	<br/>
 
	
</body>
</html>