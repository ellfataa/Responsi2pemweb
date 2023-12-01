<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Karakter - Nezuko Kamado</title>
    <link rel="stylesheet" href="./src/karakter-story.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+English+SC&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  </head>
  <body>
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
          <img src="./img/karakter/b.png" alt="Demon Slayer" width="316.8" height="671"/>
        </div>
        <div class="main__content">
          <h1>Nezuko Kamado</h1>
          <ul type='bullet'>
            <li>Biodata<br>
              Umur: 12 tahun (14 tahun pada episode 3) <br>
              Tanggal lahir: 28 Desember <br>
              Tinggi badan: 153 cm <br>
              <br>
              Nezuko adalah salah satu karakter termuda di Demon Slayer. Dia baru berusia 12 tahun di awal cerita ketika dia berubah menjadi iblis. Beberapa episode kemudian, dia berusia 14 tahun. Tapi, secara fisik, dia tidak tumbuh besar setelah hari tragis itu. Itu adalah sesuatu yang tidak akan berubah sampai Tanjiro menemukan penawarnya. 
              <br><br>
              Perubahannya menjadi iblis secara alamiah mengubah kepribadian Nezuko. Dia menjadi lebih berani dan blak-blakan ketimbang saat dia masih menjadi manusia. Tapi, sejumlah sifat baiknya masih bertahan.</li>
              <br>
            <li>Spesialisasi<br>
              <ol type='1'>
                <li>Teknik Darah Iblis</li>
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