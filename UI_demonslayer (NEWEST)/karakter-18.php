<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Karakter - Sanemi Shinazugawa</title>
    <link rel="stylesheet" href="./src/karakter-story.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+English+SC&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  </head>
  <body>
    <!-- Navbar Section -->
    <?php 
      include 'template/navbar.php';
    ?>

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
          <img src="./img/karakter/r.png" alt="Demon Slayer" width="316.8" height="671"/>
        </div>
        <div class="main__content">
          <h1>Sanemi Shinazugawa</h1>
          <ul type='bullet'>
            <li>Biodata<br>
              Umur: 21 tahun <br>
              Tanggal lahir: 19 November <br>
              Tinggi badan: 179 cm <br>
              <br>
              Sanemi Shinazugawa merupakan Hashira Angin yang sudah menguasai gaya pernafasan Breath of Wind. Bahkan iblis Upper Moon One yang telah hidup selama ratusan tahun juga terkesan dengan kekuatan yang dimiliki oleh Sanemi. Pastinya kekuatan yang dimiliki Sanemi ini sudah tidak bisa diragukan lagi.
              <br><br>
              Sanemi Shinazugawa merupakan karakter yang terlihat seperti berandalan karena cepat marah. Bahkan ketika pertama kali bertemu dengan Nezuko, Sanemi mencoba untuk melukai Nezuko. Meskipun terlihat seperti seorang berandalan, ternyata Sanemi ini merupakan salah satu Hashira terkuat!</li>
              <br>
            <li>Teknik Pernafasan<br>
              <ol type='1'>
                <li>Teknik Pernafasan Angin</li>
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