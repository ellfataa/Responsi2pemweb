<?php 

session_start();
include('koneksi.php');

echo $_SESSION['username'];

?>