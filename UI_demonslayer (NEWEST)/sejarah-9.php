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
          <h1>The Swordsmith Village Arc</h1>
          <img src="./img/sejarah/10.webp" alt="Alur cerita" width="994.4" height="559.9"/>
          <p>Arc ini membawa Tanjiro yang pergi ke desa pembuat pedang nichirin untuk memperbaiki pedangnya yang rusak. Dalam arc ini kalian juga dapat menemukan hashira Muichiro dan Genya yang menjadi salah satu peserta seleksi yang lulus bersama Tanjiro.
            <br><br>
            Namun, di arc ini kalian akan bertemu dengan dua iblis peringkat atas sekaligus. Arc yang sedang ditayangkan pada tahun 2023 ini, kalian akan melihat Tanjiro, Nezuko, Genya, dan Mitsuri yang harus menghadapi Hantengu, Iblis Tingkat Atas yang bisa menghasilkan klon emosi. Sementara hashira kabut Muichiro harus melawan Gyokko Iblis Tingkat Atas.
            <br><br>
            Dalam arc ini kalian akan melihat bagaimana Nezuko tumbuh cukup kuat untuk bertahan hidup di bawah sinar matahari.
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