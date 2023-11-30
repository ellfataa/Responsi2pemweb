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
          <h1>Tsuzumi Mansion Arc</h1>
          <img src="./img/sejarah/4.png" alt="Alur cerita" width="994.4" height="559.9"/>
          <p>Arc ini membawa Tanjiro untuk menjalankan misi menyelidiki sebuah rumah dimana Kyogai, sang iblis mantan anggota Dua Belas Kizuki membuat kekacauan.
            <br><br>
            Pada arc ini secara resmi memperkenalkan Zenitsu Agatsuma dan Inosuke Hashibira yang menjalankan misi bersama Tanjiro. Zenitsu mengungkapkan pertama kali kekuatan aslinya ketika melawan iblis lidah, kalian juga dapat melihat potensi kekuatan Inosuke untuk pertama kalinya selama pertarungan melawan iblis bertanduk, selain itu pertarungan Tanjiro melawan Kyogai juga sangat epik untuk kalian saksikan.
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