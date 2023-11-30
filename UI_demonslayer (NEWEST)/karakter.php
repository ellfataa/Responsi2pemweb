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
    <nav class="navbar">
      <div class="navbar__container">
        <a id="navbar__logo">Demon Ward</a>
        <div class="navbar__toggle" id="mobile-menu">
          <span class="bar"></span> <span class="bar"></span>
          <span class="bar"></span>
        </div>
        <ul class="navbar__menu">
          <li class="navbar__item">
            <a href="index.php" class="navbar__links" id="home-page">Home</a>
          </li>
          <li class="navbar__item">
            <a href="sejarah.php" class="navbar__links" id="sejarah-page">Sejarah</a>
          </li>
          <li class="navbar__item">
            <p class="navbar__links" id="karakter-page">Karakter</p>
          </li>
          <li class="navbar__item">
            <a href="artikel.php" class="navbar__links" id="artikel-page">Artikel</a>
          </li>
          </li>
          <li class="navbar__btn">
            <a href="login.php" class="button" id="logout">Keluar</a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Alur Section -->
    <div class="alur" id="alur">
      <div class="alur__container">
        <div class="alur__content">
          <h1>Karakter</h1>
            <div class="search-input">
            <form class="nosubmit">
              <input class="nosubmit" type="search" placeholder="Cari karakter">
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
          <table>
            <tr>
              <td><a href="karakter-1.php"><img src="./img/karakter/1.png" alt="Demon Slayer" width="147.4" height="143"/></a></td>
              <td><a href="karakter-2.php"><img src="./img/karakter/2.png" alt="Demon Slayer" width="147.4" height="143"/></a></td>
              <td><a href="karakter-3.php"><img src="./img/karakter/3.png" alt="Demon Slayer" width="147.4" height="143"/></a></td>
              <td><a href="karakter-4.php"><img src="./img/karakter/4.png" alt="Demon Slayer" width="147.4" height="143"/></a></td>
              <td><a href="karakter-5.php"><img src="./img/karakter/5.png" alt="Demon Slayer" width="147.4" height="143"/></a></td>
            </tr>
            <tr>
              <td><a href="karakter-6.php"><img src="./img/karakter/6.png" alt="Demon Slayer" width="147.4" height="143"/></a></td>
              <td><a href="karakter-7.php"><img src="./img/karakter/7.png" alt="Demon Slayer" width="147.4" height="143"/></a></td>
              <td><a href="karakter-8.php"><img src="./img/karakter/8.png" alt="Demon Slayer" width="147.4" height="143"/></a></td>
              <td><a href="karakter-9.php"><img src="./img/karakter/9.png" alt="Demon Slayer" width="147.4" height="143"/></a></td>
              <td><a href="karakter-10.php"><img src="./img/karakter/10.png" alt="Demon Slayer" width="147.4" height="143"/></a></td>
            </tr>
            <tr>
              <td><a href="karakter-11.php"><img src="./img/karakter/11.png" alt="Demon Slayer" width="147.4" height="143"/></a></td>
              <td><a href="karakter-12.php"><img src="./img/karakter/12.png" alt="Demon Slayer" width="147.4" height="143"/></a></td>
              <td><a href="karakter-13.php"><img src="./img/karakter/13.png" alt="Demon Slayer" width="147.4" height="143"/></a></td>
              <td><a href="karakter-14.php"><img src="./img/karakter/14.png" alt="Demon Slayer" width="147.4" height="143"/></a></td>
              <td><a href="karakter-15.php"><img src="./img/karakter/15.png" alt="Demon Slayer" width="147.4" height="143"/></a></td>
            </tr>
            <tr>
              <td><a href="karakter-16.php"><img src="./img/karakter/16.png" alt="Demon Slayer" width="147.4" height="143"/></a></td>
              <td><a href="karakter-17.php"><img src="./img/karakter/17.png" alt="Demon Slayer" width="147.4" height="143"/></a></td>
              <td><a href="karakter-18.php"><img src="./img/karakter/18.png" alt="Demon Slayer" width="147.4" height="143"/></a></td>
            </tr>
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
    document.getElementById('karakter-page').addEventListener('click', function() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
    });
</script>
</body>
</html>