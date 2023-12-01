<?php 
  
  $data_karakter = mysqli_query($koneksi,"SELECT * FROM karakter");
  $jumlah_karakter = mysqli_num_rows($data_karakter);

  $data_artikel = mysqli_query($koneksi,"SELECT * FROM artikel");
  $jumlah_artikel = mysqli_num_rows($data_artikel);

  $data_user = mysqli_query($koneksi,"SELECT * FROM user");
  $jumlah_user = mysqli_num_rows($data_user);

  ?>

<!-- Page content -->
  <h1 style="margin-left: 5px;">Selamat Datang di Dashboard admin Website Demon Ward!</h1>

  <div class="dashboard">
    <h3>Total artikel</h3>
    <p><?php echo $jumlah_artikel ?></p>
    <a href="?page=artikel" class="small-box-footer">More info</a>
  </div>

   <div class="dashboard">
    <h3>Total Karakter</h3>
    <p><?php echo $jumlah_karakter ?></p>
    <a href="?page=karakter" class="small-box-footer">More info </a>
  </div>
      
  <div class="dashboard">
    <h3>Total User</h3>
    <p><?php echo $jumlah_user ?></p>
    <a href="?page=user" class="small-box-footer">More info </a>
  </div></br>