<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Karakter - Gyomei Himejima</title>
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
          <img src="./img/karakter/p.png" alt="Demon Slayer" width="316.8" height="671"/>
        </div>
        <div class="main__content">
          <h1>Gyomei Himejima</h1>
          <ul type='bullet'>
            <li>Biodata<br>
              Umur:  26 tahun <br>
              Tanggal lahir: 23 Agustus <br>
              Tinggi badan: 203 cm <br>
              <br>
              Hashira Batu, Gyomei Himejima ini merupakan karakter yang terlihat lemah tetapi ternyata sangatlah kuat. Jika Demon Slayer pada umumnya menggunakan pedang Nichirin, Gyomei malah menggunakan kapak tangan. Meskipun ia buta, Gyomei bisa mengkombinasikan kekuatannya dengan Breath of Stone. Sudah tidak diragukan lagi kalau Gyomei ini merupakan Hashira terkuat.
              <br><br>
              Bahkan Tanjiro dan Inosuke juga menganggap bahwa Gyomei adalah Hashira terkuat di antara Hashira yang ada. Kokushibou, iblis Upper Moon juga mengatakan bahwa kemampuan dan fisik yang dimiliki oleh Gyomei telah dilatih hingga mencapai puncak terkuat dan ia juga mengakui kalau Kokushibou belum pernah bertemu dengan prajurit seperti Gyomei selama 300 tahun terakhir.</li>
              <br>
            <li>Teknik Pernafasan<br>
              <ol type='1'>
                <li>Teknik Pernafasan Batu</li>
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