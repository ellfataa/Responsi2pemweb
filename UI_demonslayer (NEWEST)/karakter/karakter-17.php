<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Karakter - Obanai Iguro</title>
    <link rel="stylesheet" href="../src/karakter-story.css" />
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
        <a href="../karakter.php">Karakter</a>
        </div>
      </div>
  </div>

    <!-- Karakter Section -->
    <div class="main" id="karakter">
      <div class="main__container">
        <div class="main__img--container">
          <img src="../img/karakter/q.png" alt="Demon Slayer" width="316.8" height="671"/>
        </div>
        <div class="main__content">
          <h1>Obanai Iguro</h1>
          <ul type='bullet'>
            <li>Biodata<br>
              Umur: 21 tahun <br>
              Tanggal lahir: 15 September <br>
              Tinggi badan: 162 cm <br>
              <br>
              Obanai Iguro merupakan seorang Hashira Ular yang menggunakan kemampuan Serpent Breathing Style, sebuah teknik yang dikembangkan dari Water Breathing Style. Dirinya menggunakan senjata seperti keris untuk melancarkan serangannya.
              <br><br>
              Sebagai seorang Hashira, pastinya Obanai merupakan pendekar yang sangat terampil. Bahkan dirinya juga dapat bersaing dengan Muzan Kibutsuji karena teknik berpedangnya yang luar biasa.</li>
              <br>
            <li>Teknik Pernafasan<br>
              <ol type='1'>
                <li>Teknik Pernafasan Ular</li>
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
            <img src="../img/register_login/logo.png" alt="Demon Slayer" width="57" height="53"/>
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