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
          <h1>The Sunrise Countdown Arc</h1>
          <img src="../img/sejarah/12.png" alt="Alur cerita" width="994.4" height="559.9"/>
          <p>Setelah pertempuran sengit selama Arc Infinity Castle, bagian ini menjadi kelanjutan dari pertarungan sengit antara iblis dan para pembasmi iblis yang harus mengalahkan Muzan dan anak buahnya sebelum matahari terbit. Para pembasmi iblis akhirnya mengalahkan Muzan, dan Nezuko berhasil sembuh. Meskipun mengalami pertempuran sengit yang mematikan, kalian dapat melihat akhir bahagia.
            <br><br>
            Arc ini sempat membuat para penggemar cukup was-was karena Tanjiro sempat berubah menjadi iblis. Beruntung, arc ini memperlihatkan ending cerita bahagia dimana Tanjiro kembali jadi manusia serta Nezuko yang juga sembuh. Selain itu, kita melihat bagian akhir dimana keturunan keluarga setiap pemburu iblis bertahan sampai di masa depan.
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