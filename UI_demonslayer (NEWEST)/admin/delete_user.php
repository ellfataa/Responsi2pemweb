<?php
    include("../koneksi.php");

    if(isset($_GET['deleteid'])){
        $id = $_GET['deleteid'];

        $query = "DELETE from user WHERE id='$id'";
        $result = mysqli_query($koneksi,$query);
        if($result){
            echo "<script>
                alert('User Berhasil Dihapus!');
                document.location = 'index.php?page=user';
                </script>";
        }else {
            die(mysqli_error($koneksi));
        }
    }
?>