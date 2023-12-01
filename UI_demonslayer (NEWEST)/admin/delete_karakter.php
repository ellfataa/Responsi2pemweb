<?php
    include("../koneksi.php");

    if(isset($_GET['deleteid'])){
        $id = $_GET['deleteid'];

        $query = "DELETE from karakter WHERE idkarakter='$id'";
        $result = mysqli_query($koneksi,$query);
        if($result){
            echo "<script>
                alert('Karakter Berhasil Dihapus!');
                document.location = 'index.php?page=karakter';
                </script>";
        }else {
            die(mysqli_error($koneksi));
        }
    }
?>