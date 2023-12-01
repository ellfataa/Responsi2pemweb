<?php 

session_start();
include('../koneksi.php');
include 'template/sidebar.php';
include 'template/navbar.php';

?>

<?php
switch ($_GET['page']){
    default:
    include 'admin.php';
        break;
    case 'user';
        include 'user.php';
        break;
    case 'karakter';
        include 'karakter.php';
        break;
    case 'artikel';
        include 'artikel.php';
        break;
    case 'tambah_artikel';
        include 'tambah_artikel.php';
        break;
    case 'tambah_karakter';
        include 'tambah_karakter.php';
        break;
    case 'tambah_user';
        include 'tambah_user.php';
        break;
}
?>

<?php 
include 'template/footer.php';
?>