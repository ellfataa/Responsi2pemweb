<?php 

session_start();
include('../koneksi.php');
include 'template/navbar.php';
include 'template/sidebar.php';

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
}
?>

<?php 
include 'template/footer.php';
?>