<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sejarah</title>
    <link rel="stylesheet" href="../src/sejarah-arc.css" />
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
          <a href="../sejarah.php">← Sejarah</a>
          <h1>The Final Selection Arc</h1>
          <img src="../img/sejarah/1.png" alt="Alur cerita" width="994.4" height="559.9"/>
          <p>Urutan pertama pada arc Demon Slayer adalah Final Selection. Arc satu ini bercerita tentang asal usul karakter Tanjiro yang merupakan penjual arang. Ia kemudian memutuskan untuk menjadi seorang pemburu iblis setelah melihat keluarganya dibantai oleh iblis. Selain itu, arc ini juga memperkenalkan tokoh lain seperti Nezuko dan Zenitsu.
            <br><br>
            Dalam bagian ini diceritakan Tanjiro yang mendapatkan pelatihan selama beberapa tahun dari Urokodaki, kemudian Tanjiro berangkat ke Seleksi Akhir ujian masuk calon Korps Pembasmi Iblis. Di seleksi ini, mereka akan lulus jika berhasil keluar dari gunung yang dipenuhi iblis hidup-hidup selama tujuh hari. Di Arc ini juga kalian diperkenalkan sebagian besar karakter utama yaitu Tanjiro, Nezuko, Zenitsu, dan memperkenalkan konsep Hashira dengan Giyu Tomioka.
          </p>
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
    document.getElementById('sejarah-page').addEventListener('click', function() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
    });
</script>
</body>
</html>