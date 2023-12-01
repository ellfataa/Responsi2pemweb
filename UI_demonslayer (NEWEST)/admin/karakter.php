<?php 
$query = "SELECT * FROM karakter";
$result= mysqli_query($koneksi, $query);
?>
<h1>List Data Karakter</h1>
<a href="?page=tambah_karakter"><h3>Tambah Karakter</h3></a>
<table border="1">
    <tr>
    <th>ID Karakter</th>
    <th>Nama Karakter</th>
    <th>Cover Karakter</th>
    <th>Biodata Karakter</th>
    <th>Action</th>
    </tr>
        <?php
            while($data_karakter = mysqli_fetch_assoc($result)){
                echo "
                <tr>
                    <td>$data_karakter[idkarakter]</td>
                    <td>$data_karakter[namakarakter]</td>
                    <td><img width='100' height='100' src='images/$data_karakter[cover]'></td>
                    <td>$data_karakter[biodata]</td>
                    <td>
                      <a href='update_karakter.php?updateid=$data_karakter[idkarakter]'> EDIT </a> ||
                      <a href='delete_karakter.php?deleteid=$data_karakter[idkarakter]'> DELETE </a>
                    </td>
                </tr>
                ";
            }
        ?>
</table>