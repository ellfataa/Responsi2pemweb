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
    <title>Sejarah</title>
    <link rel="stylesheet" href="./src/sejarah.css" />
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
            <a href="index.php" class="navbar__links" id="home-page">Home</a>
          </li>
          <li class="navbar__item">
            <p class="navbar__links" id="sejarah-page">Sejarah</p>
          </li>
          <li class="navbar__item">
            <a href="karakter.html" class="navbar__links" id="karakter-page">Karakter</a>
          </li>
          <li class="navbar__item">
            <a href="artikel.html" class="navbar__links" id="artikel-page">Artikel</a>
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

    <!-- Sejarah Section -->
    <div class="main" id="sejarah">
      <div class="main__container">
        <div class="main__img--container sejarah">
            <img src="./img/register_login/logo.png" alt="Demon Slayer" width="338.8" height="316.8"/>
        </div>
        <div class="main__content">
          <h1>Sejarah</h1>
          <p>Demon Slayer atau Kimetsu No Yaiba dalam bahasa jepangnya merupakan anime yang diadaptasi dari manga karya Koyoharu Gotouge. Manga ini pertama kali rilis di majalah Weekly Shonen Jump pada Februari 2016.
            <br><br>
            Mengisahkan tentang Seorang pemuda bernama Tanjiro Kamado yang hidup di Jepang pada Zaman Edo. Suatu hari, saat Tanjiro sedang mencari arang dan kembali ke rumahnya, ia menemui anggota keluarganya sudah terbunuh dan hanya tersisa adiknya yang bernama Nezuko yang sudah diubah menjadi iblis. Bingung dengan apa yang telah terjadi, pertemuan dengan seorang Demon Slayer memberi kunci jawaban bagi Tanjiro. Tanjiro pun bertekad untuk mencari pembunuh keluarganya dan melindungi Nezuko serta menjadi Demon Slayer</p>
        </div>
        </div>
      </div>
    </div>

    <!-- Alur Section -->
    <div class="alur" id="alur">
      <div class="alur__container">
        <div class="alur__content">
            <h1>Alur cerita</h1>
            <p>Jelajahi kronologi yang memukau, dari ujian awal hingga pertarungan sengit melawan iblis tingkat tinggi. Temukan momen-momen klimaks, pengembangan karakter, dan kejutan-kejutan menegangkan yang menghiasi setiap arc.</p>
        </div>
        <div class="alur__svg1"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="43" viewBox="0 0 45 43" fill="none" id="svg1" onclick="plusSlides(-1)">
          <path d="M0 21.5L45 0.282379V42.7176L0 21.5Z" fill="#FEF9F9"/>
        </svg></div>
        <div class="alur__img--container fade">
          <h1>The Final Selection Arc</h1>
          <img src="./img/sejarah/1.png" alt="Alur cerita" width="994.4" height="559.9"/>
        </div>
        <div class="alur__img--container fade">
          <h1>The Kidnapper's Bog Arc</h1>
          <img src="./img/sejarah/2.jpeg" alt="Alur cerita" width="994.4" height="559.9"/>
        </div>
        <div class="alur__img--container fade">
          <h1>Asakusa Arc</h1>
          <img src="./img/sejarah/3.png" alt="Alur cerita" width="994.4" height="559.9"/>
        </div>
        <div class="alur__img--container fade">
          <h1>Tsuzumi Mansion Arc</h1>
          <img src="./img/sejarah/4.png" alt="Alur cerita" width="994.4" height="559.9"/>
        </div>
        <div class="alur__img--container fade">
          <h1>Mount Natagumo Arc</h1>
          <img src="./img/sejarah/5.png" alt="Alur cerita" width="994.4" height="559.9"/>
        </div>
        <div class="alur__img--container fade">
          <h1>The Rehabilitation Training Arc</h1>
          <img src="./img/sejarah/6.jpeg" alt="Alur cerita" width="994.4" height="559.9"/>
        </div>
        <div class="alur__img--container fade">
          <h1>Mugen Train Arc</h1>
          <img src="./img/sejarah/7.png" alt="Alur cerita" width="994.4" height="559.9"/>
        </div>
        <div class="alur__img--container fade">
          <h1>Entertainment District Arc</h1>
          <img src="./img/sejarah/8.png" alt="Alur cerita" width="994.4" height="559.9"/>
        </div>
        <div class="alur__img--container fade">
          <h1>The Swordsmith Village Arc</h1>
          <img src="./img/sejarah/9.jpeg" alt="Alur cerita" width="994.4" height="559.9"/>
        </div>
        <div class="alur__img--container fade">
          <h1>The Hashira Training Arc</h1>
          <img src="./img/sejarah/10.webp" alt="Alur cerita" width="994.4" height="559.9"/>
        </div>
        <div class="alur__img--container fade">
          <h1>The Infinity Castle Arc</h1>
          <img src="./img/sejarah/11.png" alt="Alur cerita" width="994.4" height="559.9"/>
        </div>
        <div class="alur__img--container fade">
          <h1>The Sunrise Countdown Arc</h1>
          <img src="./img/sejarah/12.png" alt="Alur cerita" width="994.4" height="559.9"/>
        </div>
        <div class="alur__svg2"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="43" viewBox="0 0 45 43" fill="none" id="svg2" onclick="plusSlides(1)">
          <path d="M45 21.5L0 0.282379V42.7176L45 21.5Z" fill="white"/>
        </svg></div>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
          <span class="dot" onclick="currentSlide(4)"></span>
          <span class="dot" onclick="currentSlide(5)"></span>
          <span class="dot" onclick="currentSlide(6)"></span>
          <span class="dot" onclick="currentSlide(7)"></span>
          <span class="dot" onclick="currentSlide(8)"></span>
          <span class="dot" onclick="currentSlide(9)"></span>
          <span class="dot" onclick="currentSlide(10)"></span>
          <span class="dot" onclick="currentSlide(11)"></span>
          <span class="dot" onclick="currentSlide(12)"></span>
        </div>
      </div>
    </div>

    <!--Footer Section -->
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
    document.getElementById('sejarah-page').addEventListener('click', function() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
    });
</script>
</body>
</html>