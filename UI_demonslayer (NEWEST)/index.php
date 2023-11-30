<?php 
include("koneksi.php");
session_start();
if($_SESSION['level']==""){
  header("location:index.php?pesan=gagal");

}

$read = mysqli_query($koneksi, "SELECT * FROM artikel ORDER BY idartikel ASC");
$data_posts = mysqli_fetch_array($read);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Homepage Demon Ward</title>
    <link rel="stylesheet" href="./src/main.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+English+SC&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  </head>
  <body>
    <!-- Navbar Section -->
    <nav class="navbar">
      <div class="navbar__container">
        <a id="navbar__logo">Demon Ward</a>
        <div class="navbar__toggle" id="mobile-menu">
          <span class="bar"></span> <span class="bar"></span>
          <span class="bar"></span>
        </div>
        <ul class="navbar__menu">
          <li class="navbar__item">
            <p class="navbar__links" id="home-page">Home</p>
          </li>
          <li class="navbar__item">
            <a href="sejarah.php" class="navbar__links" id="sejarah-page">Sejarah</a>
          </li>
          <li class="navbar__item">
            <a href="karakter.php" class="navbar__links" id="karakter-page">Karakter</a>
          </li>
          <li class="navbar__item">
            <a href="artikel.php" class="navbar__links" id="artikel-page">Artikel</a>
          </li>
          </li>
          <li class="navbar__btn">
            <a href="logout.php" class="button" id="logout">Keluar</a>
          </li>
          <li class="navbar__item">
            <div class="navbar__links"><?php echo $_SESSION['username']; ?></div>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero" id="home">
      <div class="hero__container">
        <h1 class="hero__heading">DW</h1>
        <p class="hero__description">
          Selamat datang di Demon Ward, pusat pengetahuan terkemuka tentang semua yang berkaitan dengan "Demon Slayer." Di sini, kami mengupas tuntas pengertian, tujuan, dan kegunaan dari dunia yang menakjubkan ini. Dari karakter hingga alur cerita, kami membuka pintu bagi Anda untuk mengeksplorasi segala aspek yang membuat "Demon Slayer" begitu memikat dan relevan. Dengan informasi mendalam dan wawasan yang kaya, Demon Ward bertujuan menjadi panduan lengkap bagi para penggemar dan penikmat kisah epik ini. Selamat menemukan rahasia dan keajaiban di balik setiap episode dari Demon Slayer bersama kami.
        </p>
      </div>
    </div>

    <!-- Sejarah Section -->
    <div class="main" id="sejarah">
      <div class="main__container sejarah">
        <div class="main__content">
          <h1>Sejarah</h1>
          <p>Demon Slayer: Kimetsu no Yaiba, adalah sebuah seri manga Jepang yang ditulis dan diilustrasikan oleh Koyoharu Gotouge. Ceritanya mengisahkan tentang Tanjiro Kamado, seorang anak laki-laki yang menjadi pembasmi iblis setelah keluarganya dibantai oleh iblis dan adik perempuannya yang bernama Nezuko diubah menjadi iblis.
            <br><br>
            Manga ini pertama kali rilis di majalah Weekly Shonen Jump pada Februari 2016.  Mengisahkan tentang Seorang pemuda bernama Tanjiro Kamado yang hidup di Jepang pada Zaman Edo.</p>
          <button class="main__btn"><a href="sejarah.php">Selengkapnya</a></button>
        </div>
          <div class="main__img--container sejarah">
              <img src="./img/register_login/logo.png" alt="Demon Slayer" width="338.8" height="316.8"/>
          </div>
        </div>
      </div>
    </div>

    <!-- Karakter Section -->
    <div class="main" id="karakter">
      <div class="main__container karakter">
        <div class="main__img--container karakter">
          <img src="./img/home/karakter.png" alt="Demon Slayer" width="592.9" height="404.8"/>
        </div>
        <div class="main__content">
          <h1>Karakter</h1>
          <p>Selamat datang di Galeri Karakter Demon Slayer! Temukan keajaiban, ketegangan, dan keunikan dari setiap tokoh dalam anime ini. Mulai dari pahlawan yang penuh semangat, para Hashira yang perkasa, hingga iblis yang menantang takdir. Jelajahi profil karakter yang mendalam, ilustrasi memukau, dan cerita yang memikat di dunia yang dipenuhi pertarungan epik dan kisah penuh inspirasi. Selamat menikmati perjalanan karakter yang tak terlupakan!</p>
          <button class="main__btn"><a href="#">Selengkapnya</a></button>
        </div>
      </div>
    </div>

    <!-- Artikel Section -->
    <div class="articles" id="articles">
          <h1>Artikel</h1>
          <div class="breaking__news">
            <div class="breaking-news__title">Breaking News</div>
            <div class="breaking-news__content">Cari berita dan info terbaru tentang Demon Slayer</div>
          </div>
        <div class="articles__wrapper">  
          <div class="articles__card">
            <img src="./img/home/artikel.png" alt="Card" width="401.5" height="238.7"/>
            <div class="articles__card__title">Berita</div>
            <div class="articles__card__headline">Judul Artikel</div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc scelerisque tortor sit amet condimentum porttitor. Integer augue urna, volutpat in sapien a, convallis commodo quam.</p>
          </div>
          <div class="articles__card">
            <img src="./img/home/artikel.png" alt="Card" width="401.5" height="238.7"/>
            <div class="articles__card__title">Berita</div>
            <div class="articles__card__headline"><?php echo $data_posts[1] ?></div>
            <p><?php echo $data_posts[2] ?></p>
          </div>
          <div class="articles__card">
            <img src="./img/home/artikel.png" alt="Card" width="401.5" height="238.7"/>
            <div class="articles__card__title">Berita</div>
            <div class="articles__card__headline"><?php echo $data_posts[1] ?></div>
            <p><?php echo $data_posts[2] ?></p>
          </div>
        </div>
        <div class="main__content">
          <button class="main__btn"><a href="#">Selengkapnya</a></button>
        </div>
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
      document.getElementById('home-page').addEventListener('click', function() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });
  </script>
</body>
</html>
