<?php 
$query = "SELECT * FROM user";
$result= mysqli_query($koneksi, $query);
?>
<h1>List Data User</h1>
<a href="?page=tambah_user"><h3>Tambah User</h3></a>
<table border="1">
    <tr>
    <th>User ID</th>
    <th>Nama</th>
    <th>Username</th>
    <th>Password</th>
    <th>Email</th>
    <th>Level</th>
    <th>Action</th>
    </tr>
        <?php
            while($data_user = mysqli_fetch_assoc($result)){
                echo "
                <tr>
                    <td>$data_user[id]</td>
                    <td>$data_user[nama]</td>
                    <td>$data_user[username]</td>
                    <td>$data_user[password]</td>
                    <td>$data_user[email]</td>
                    <td>$data_user[level]</td>
                    <td>
                      <a href='update_user.php?updateid=$data_user[id]'> EDIT </a> ||
                      <a href='delete_user.php?deleteid=$data_user[id]'> DELETE </a>
                    </td>
                </tr>
                ";
            }
        ?>
</table>