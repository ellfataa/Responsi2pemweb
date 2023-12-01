<?php
    include("../koneksi.php");

    if(isset($_GET['deleteid'])){
        $id = $_GET['deleteid'];

        $query = "DELETE from artikel WHERE idartikel='$id'";
        $result = mysqli_query($koneksi,$query);
        if($result){
            echo "<script>
                alert('Artikel Berhasil Dihapus!');
                document.location = 'index.php?page=artikel';
                </script>";
        }else {
            die(mysqli_error($koneksi));
        }
    }
?>