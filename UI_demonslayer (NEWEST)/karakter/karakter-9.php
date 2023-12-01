<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Karakter - Rengoku Kyojuro</title>
    <link rel="stylesheet" href="./src/karakter-story.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+English+SC&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  </head>
  <body>
    <!-- Navbar Section -->
    <?php 
      include '../template/navbar.php';
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
          <img src="./img/karakter/i.png" alt="Demon Slayer" width="316.8" height="671"/>
        </div>
        <div class="main__content">
          <h1>Rengoku Kyojuro</h1>
          <ul type='bullet'>
            <li>Biodata<br>
              Umur: 20 tahun <br>
              Tanggal lahir: 10 Mei <br>
              Tinggi badan: 177 cm <br>
              <br>
              Menjadi pusat Demon Slayer: Kimetsu no Yaiba the Movie: Mugen Train, Kyojuro meledak ke adegan itu seperti bola api. Energik, menawan dan bersifat baik, Kyojuro punya kejujuran yang kurang dipunyai sebagian besar karakter di anime itu, selain Tanjiro. Optimisme Kyojuro bukanlah topeng untuk menutupi gejolak jiwanya atau cara untuk memikat orang masuk ke rasa aman yang salah. Dia adalah tipe orang yang mencari sisi positif bahkan di situasi yang buruk.</li>
              <br>
            <li>Teknik Pernafasan<br>
              <ol type='1'>
                <li>Teknik Pernafasan Api</li>
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