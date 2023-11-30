<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sejarah</title>
    <link rel="stylesheet" href="./src/sejarah-arc.css" />
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
          <a href="sejarah.php">← Sejarah</a>
          <h1>The Infinity Castle Arc</h1>
          <img src="./img/sejarah/11.png" alt="Alur cerita" width="994.4" height="559.9"/>
          <p>arc Final Battle yang terbagi menjadi dua sub-arc yang akan menjadi akhir dari keseluruhan seri anime ini. Korps Pembunuh Iblis akhirnya harus siap menghadapi Muzan Kibutsuji, dimana Arc Infinity Castle menjadi sub-arc pertama yang akan diisi dengan pertempuran ekslosif.
            <br><br>
            Arc ini juga akan memiliki banyak pertarungan hebat seperti Shinobu melawan Douma, Tanjiro dan Giyuu melawan Akaza, dan Obanai dan Mitsuri melawan Nakime. Tetapi beberapa iblis yang paling dibenci juga akan terungkapkan kisah latar masa lalunya yang tragis.
          </p>
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