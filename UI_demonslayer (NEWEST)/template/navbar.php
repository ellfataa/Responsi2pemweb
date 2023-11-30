<!-- Navbar Section -->
<?php 
session_start();
?>
<nav class="navbar">
      <div class="navbar__container">
        <a id="navbar__logo">Demon Ward</a>
        <div class="navbar__toggle" id="mobile-menu">
          <span class="bar"></span> <span class="bar"></span>
          <span class="bar"></span>
        </div>
        <ul class="navbar__menu">
          <li class="navbar__item">
            <p class="navbar__links" id="home-page">Home</p>
          </li>
          <li class="navbar__item">
            <a href="sejarah.php" class="navbar__links" id="sejarah-page">Sejarah</a>
          </li>
          <li class="navbar__item">
            <a href="karakter.php" class="navbar__links" id="karakter-page">Karakter</a>
          </li>
          <li class="navbar__item">
            <a href="artikel.php" class="navbar__links" id="artikel-page">Artikel</a>
          </li>
          </li>
          <li class="navbar__btn">
            <a href="logout.php" class="button" id="logout">Keluar</a>
          </li>
          <li class="navbar__item">
            <div class="navbar__links"><?php echo $_SESSION['username']; ?></div>
          </li>
        </ul>
      </div>
    </nav>