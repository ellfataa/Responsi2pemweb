<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../src/navbar.css">
    <link rel="stylesheet" href="../src/sidebar.css">
    <title>Admin</title>
    <style>
      .dashboard{
        border: 2px solid black;
        background-color: lightblue;
        margin:5px 0 5px 0;
        padding: 5px 5px 5px 5px;
      }
    </style>
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
            <a href="../index.php" class="navbar__links" id="home-page">Home</a>
          </li>
          <li class="navbar__item">
            <a href="../sejarah.php" class="navbar__links" id="sejarah-page">Sejarah</a>
          </li>
          <li class="navbar__item">
            <a href="../karakter.php" class="navbar__links" id="karakter-page">Karakter</a>
          </li>
          <li class="navbar__item">
            <a href="../artikel.php" class="navbar__links" id="artikel-page">Artikel</a>
          </li>
          <li class="navbar__item">
            <a href="index.php?page=admin" class="navbar__links" id="artikel-page">Admin</a>
          </li>
          </li>
          <li class="navbar__btn">
            <a href="../logout.php" class="button" id="logout">Keluar</a>
          </li>
        </ul>
      </div>
    </nav>