<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Artikel</title>
    <link rel="stylesheet" href="./src/artikel.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+English+SC&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  </head>
  <body>
    <!-- Navbar Section -->
    <?php
    include 'template/navbar1.php';
    ?>
    <?php
    if(isset($_POST['submit'])){
      $judul = $_POST['judul'];
      $isi = $_POST['isi'];
    
      $query = "INSERT INTO artikel (judul,isi) VALUES ('$judul','$isi')";
      $result = mysqli_query($koneksi,$query);
      if($result){
        echo 
            "<script>
            alert('Berhasil Menambahkan Artikel!');
            document.location = 'artikel.php';
            </script>";
      }
    }

    $query = "SELECT * FROM artikel";
    $result = mysqli_query($koneksi, $query);
    ?>

    <!-- Artikel Section -->
    <div class="articles" id="articles">
          <h1>Artikel</h1>
          <div class="breaking__news">
            <!-- <div class="breaking-news__title">Breaking News</div> -->
            <div class="breaking-news__content">Breaking News</div>
          </div>
          <?php
            while($data_article = mysqli_fetch_assoc($result)){
              echo "
          <div class='articles__card a'>
            <img src='./img/home/artikel.png' alt='artikel'/>
            <div class='articles__card__headline'>$data_article[judul]</div>
            <p>$data_article[isi]</p>
          </div>
              ";
            }
          ?>
          <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
          <div class="articles__card c">
            <img src="./img/home/artikel.png" alt="artikel"/>
          <div class="form">
            <div>
              
              <input type="text" name="judul" placeholder="Masukkan judul..." id="judul" />
            </div>
            <div>
              <textarea id="pesan" name="isi" placeholder="Ketikkan pesan..."></textarea>
            </div>
          </div>
            <div class="articles__card main__btn">
              <button type="submit" name="submit" id="submit"><span>Submit</span></button>
            </div>            
          </div>
          </form>
     </div>

    <!-- Footer Section -->
    <div class="footer__container">
      <section class="social__media">
        <div class="social__media--wrap">
          <div class="footer__logo">
            <img src="./img/register_login/logo.png" alt="Demon Slayer" width="57" height="53"/>
          </div>
          <p class="website__rights">Copyright @2023 Demon Ward</p>
        </div>
      </section>
    </div>

  <script src="index.js"></script>
  <script>
      document.getElementById('artikel-page').addEventListener('click', function() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });
  </script>
</body>
</html>