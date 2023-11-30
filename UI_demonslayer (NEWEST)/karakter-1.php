<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Karakter - Tanjiro Kamado</title>
    <link rel="stylesheet" href="./src/karakter-story.css" />
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
            <a href="sejarah.php" class="navbar__links" id="sejarah-page">Sejarah</a>
          </li>
          <li class="navbar__item">
            <p class="navbar__links" id="karakter-page">Karakter</p>
          </li>
          <li class="navbar__item">
            <a href="artikel.php" class="navbar__links" id="artikel-page">Artikel</a>
          </li>
          </li>
          <li class="navbar__btn">
            <a href="login.php" class="button" id="logout">Keluar</a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Alur Section -->
  <div class="alur" id="alur">
    <div class="alur__container">
      <div class="alur__content">
        <a href="karakter.php">Karakter</a>
          <div class="search-input">
          <form class="nosubmit">
            <input class="nosubmit" type="search" placeholder="Cari karakter">
          </form>
          </div>
        </div>
      </div>
  </div>

    <!-- Karakter Section -->
    <div class="main" id="karakter">
      <div class="main__container">
        <div class="main__img--container">
          <img src="./img/karakter/a.png" alt="Demon Slayer" width="316.8" height="671"/>
        </div>
        <div class="main__content">
          <h1>Tanjiro Kamado</h1>
          <ul type='bullet'>
            <li>Biodata<br>
              Umur: 13 tahun (15 tahun pada episode 3)<br>
              Tanggal lahir: 14 Juli <br>
              Tinggi badan: 165 cm <br>
              <br>
              Hidup Tanjiro berubah menjadi mimpi buruk ketika seorang iblis membantai seluruh keluarganya dan mengubah adiknya, Nezuko, ke sisi gelap. Terdorong amarah dan kasih sayangnya kepada saudara-saudaranya, Tanjiro bergabung Demon Slayer Corps untuk memberantas iblis. Dia juga berharap bisa mengembalikan Nezuko menjadi manusia lagi. 
              <br><br>
              Tanjiro dikenal sebagai seorang yang hangat dan baik. Tapi, dia bertekad membuat keputusan sulit. Dia tidak bisa membayangkan kalau iblis harus diampuni atau membunuh akan membuatnya jadi tidak lebih baik dari musuhnya. Makanya, Tanjiro selalu menyelesaikan tugasnya.</li>
              <br>
            <li>Teknik Pernafasan <br>
              <ol type='1'>
                <li>Teknik Pernafasan Air</li>
                <li>Teknik Pernafasan Matahari</li>
                </ol>
              </li>
            </ul>
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
    document.getElementById('karakter-page').addEventListener('click', function() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
    });
</script>
</body>
</html>