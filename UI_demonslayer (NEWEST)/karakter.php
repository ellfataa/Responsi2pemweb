<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Karakter</title>
    <link rel="stylesheet" href="./src/karakter.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+English+SC&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  </head>
  <body>
    <!-- Navbar Section -->
    <?php 
      include 'template/navbar1.php';
    ?>

    <!-- Alur Section -->
    <div class="alur" id="alur">
      <div class="alur__container">
        <div class="alur__content">
          <h1>Karakter</h1>
            <div class="search-input">
            <form class="nosubmit">
              <input class="nosubmit" type="text" id="searchInput" placeholder="Cari karakter">
            </form>
            </div>
          <img src="./img/home/karakter.png" alt="Demon Slayer" width="592.9" height="404.8"/>
          <p>Selamat datang di Demon Ward, sumber pengetahuan untuk mendalami karakter-karakter epik dalam dunia "Demon Slayer." Di sini, kami membawa Anda dalam perjalanan menyelami keunikan setiap tokoh, dari para Pemburu Iblis yang berdedikasi hingga musuh-musuh yang mengerikan. Dengan deskripsi mendalam dan profil lengkap, kami mempersembahkan informasi komprehensif untuk memahami latar belakang, kekuatan, dan peran setiap individu dalam cerita ini. Jelajahi dan temukan nuansa yang mendalam dari karakter-karakter penuh warna dalam "Demon Slayer" bersama Demon Ward.
          </p>
      </div>
    </div>
  </div>

    <!-- Karakter Section -->
    <div class="karakter" id="karakter">
      <h1>List Karakter</h1>
      <div class="karakter__container">
          <table id="karakterTable">
            <!-- bagian cetak data dari database karakter -->
            <?php 
              $result = mysqli_query($koneksi, "SELECT * FROM karakter");
              $count = 0;

              while($data_karakter = mysqli_fetch_assoc($result)){
                if ($count % 5 == 0) {
                  echo "<tr>";
                }

                echo "<td data-name='" . strtolower($data_karakter['namakarakter']) . "'>";
                echo "<a href='karakter/karakter-$data_karakter[idkarakter].php'><img src='img/karakter/$data_karakter[cover]' alt='Demon Slayer' width='147.4' height='143'/></a>";
                echo "</td>";

                $count++;

                if ($count % 5 == 0) {
                  echo "</tr>";
                }
              }

              if ($count % 5 != 0) {
                echo "</tr>";
              }
            ?>
          </table>
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
  document.getElementById('searchInput').addEventListener('input', function () {
    const searchValue = this.value.toLowerCase();
    const karakterTable = document.getElementById('karakterTable');
    const rows = karakterTable.getElementsByTagName('td');

    for (let i = 0; i < rows.length; i++) {
      const characterName = rows[i].dataset.name.toLowerCase();
      if (characterName.includes(searchValue)) {
        rows[i].style.display = '';
      } else {
        rows[i].style.display = 'none';
      }
    }
  });

  // Tambahkan event listener untuk mengarahkan ke halaman karakter saat gambar diklik
  const karakterImages = document.querySelectorAll('#karakterTable td');
  karakterImages.forEach(image => {
    image.addEventListener('click', function () {
      const characterName = this.dataset.name;
      window.location.href = `karakter/karakter-${characterName}.php`;
    });
  });
</script>
</body>
</html>