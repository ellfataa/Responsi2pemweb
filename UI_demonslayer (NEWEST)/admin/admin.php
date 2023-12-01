<?php 
  
  $data_karakter = mysqli_query($koneksi,"SELECT * FROM karakter");
  $jumlah_karakter = mysqli_num_rows($data_karakter);

  $data_artikel = mysqli_query($koneksi,"SELECT * FROM artikel");
  $jumlah_artikel = mysqli_num_rows($data_artikel);

  $data_user = mysqli_query($koneksi,"SELECT * FROM user");
  $jumlah_user = mysqli_num_rows($data_user);

  ?>

<!-- Page content -->
              <div class="inner">
                <h3><?php echo $jumlah_artikel ?></h3>
                <p>Total artikel</p>
              </div>
              <a href="?page=artikel" class="small-box-footer">More info</a>
          
              <div class="inner">
                <h3><?php echo $jumlah_karakter ?></h3>
                <p>Total Karakter</p>
              </div>
              <a href="?page=karakter" class="small-box-footer">More info </a>
         
              <div class="inner">
                <h3><?php echo $jumlah_user ?></h3>
                <p>Total User</p>
              </div>
              <a href="?page=user" class="small-box-footer">More info </a>
              </div>