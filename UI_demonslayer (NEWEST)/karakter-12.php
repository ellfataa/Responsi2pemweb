<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Karakter - Sakonji Urokodachi</title>
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
          <img src="./img/karakter/l.png" alt="Demon Slayer" width="316.8" height="671"/>
        </div>
        <div class="main__content">
          <h1>Sakonji Urokodachi</h1>
          <ul type='bullet'>
            <li>Biodata<br>
              Umur:  52 tahun <br>
              Tanggal lahir: Tidak diketahui <br>
              Tinggi badan: 173 cm <br>
              <br>
              Urokodaki adalah salah satu hashira pertama yang kita kenal di serial anime Demon Slayer Kimetsu no Yaiba. Ia adalah sosok yang pernah menduduki posisi Hashira dengan teknik pernapasan air. Dia juga termasuk guru dari beberapa Pendekar Pedang seperti Giyu Tomioka, Sabito, Makomo dan Tanjiro, dan banyak murid lainnya
              <br><br>
              Tubuh Urokodaki sendiri terlihat tidak terlalu tinggi, dengan rambut yang berwarna putih seperti orang tua pada umumnya, sedangkan pada masa mudanya diketahui bahwa rambut Urokodaki sebenarnya berwarna hitam.</li>
              <br>
            <li>Teknik Pernafasan<br>
              <ol type='1'>
                <li>Teknik Pernafasan Air</li>
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