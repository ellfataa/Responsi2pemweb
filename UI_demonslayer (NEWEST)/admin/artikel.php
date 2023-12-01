<?php 
$query = "SELECT * FROM artikel";
$result= mysqli_query($koneksi, $query);
?>
<h1>List Data Artikel</h1>
<a href="?page=tambah_artikel"><h3>Tambah Artikel</h3></a>
<table border="1">
    <tr>
    <th>ID Artikel</th>
    <th>Judul Artikel</th>
    <th>Isi Artikel</th>
    <th>Action</th>
    </tr>
        <?php
            while($data_article = mysqli_fetch_assoc($result)){
                echo "
                <tr>
                    <td>$data_article[idartikel]</td>
                    <td>$data_article[judul]</td>
                    <td>$data_article[isi]</td>
                    <td>
                      <a href='update_user.php?updateid=$data_article[idartikel]'> EDIT </a> ||
                      <a href='delete_user.php?deleteid=$data_article[idartikel]'> DELETE </a>
                    </td>
                </tr>
                ";
            }
        ?>
</table>