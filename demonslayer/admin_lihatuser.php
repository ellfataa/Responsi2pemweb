<?php 
	session_start();
	include('koneksi.php');
	$del = $_GET['del'];
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
	
	if($del!=""){
	$delete = "DELETE from user WHERE del='$del' ";
	$query=mysqli_query($conn,$delete);
	if($query){
		?>
		<script>alert('Data Berhasil Dihapus');document.location='admin_lihatuser.php';</script>
		<?php
	}
    }
	$read = mysqli_query($koneksi,"SELECT * FROM user WHERE 1");
	?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Halaman admin</title>
</head>
<body>
	
	<h1>Halaman Admin</h1>
 
	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>. Berikut adalah data tabel user:</p>
	<table border='1' align='center' cellspacing='5'>
	<tr>
		<th>Id</th>
		<th>Username</th>
		<th>Password</th>
		<th>Email</th>
		<th>Level</th>
	</tr>
	<?php
	while($data_post = mysqli_fetch_array($read)){
		echo "
		<tr>
			<td>$data_post[id]</td>
			<td>$data_post[username]</td>
			<td>$data_post[password]</td>
			<td>$data_post[email]</td>
			<td>$data_post[level]</td>
			<td><a href='update.php?upd=$data_post[id]'> Update </a> | 
				<a href='admin_lihatuser.php?del=$data_post[id]'> Delete </a>
			</td>
		</tr>
		";
	}
	?>
	
</table>
            
	<a href="logout.php">LOGOUT</a>
 
	<br/>
	<br/>

</body>
</html>