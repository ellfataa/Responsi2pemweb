<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Karakter - Shinobu Kocho</title>
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
          <img src="../img/karakter/h.png" alt="Demon Slayer" width="316.8" height="671"/>
        </div>
        <div class="main__content">
          <h1>Shinobu Kocho</h1>
          <ul type='bullet'>
            <li>Biodata<br>
              Umur: 18 tahun <br>
              Tanggal lahir: 24 Februari <br>
              Tinggi badan: 151 cm <br>
              <br>
              Pada pandangan pertama, Shinobu terlihat seperti anggota Demon Slayer Corps yang paling ramah dan disukai. Dia selalu tersenyum dan sepertinya suka lelucon yang bagus. Tapi, ini hanya mekanisme pertahanan dirinya untuk menahan kebencian terhadap iblis akibat kematian kakaknya, Kanae Kocho. 
              <br><br>
              Shinobu bisa kejam, baik dengan pedang dan kata-kata. Karakter Demon Slayer ini bisa turun dari prajurit terkuat menjadi lumpur dengan sedikit kalimat pilihan. Dia juga menyeringai saat melakukannya.</li>
              <br>
            <li>Teknik Pernafasan<br>
              <ol type='1'>
                <li>Teknik Pernafasan Serangga</li>
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