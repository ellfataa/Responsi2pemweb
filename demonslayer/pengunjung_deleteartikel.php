<?php
    session_start();
    include('koneksi.php');
    $id=$_GET['idartikel'];
    $stmt=mysqli_query($koneksi,"DELETE FROM artikel WHERE idartikel=$id");
    header("Location:pengunjung_lihatartikel.php");
?>