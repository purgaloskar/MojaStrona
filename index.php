<?php
session_start();
require 'config.php'; /* Skrypt pod ciasteczka i zapamietaną sesje - bazy itd */
include 'includes/header.php'; /* Skrypt pod nagłówek strony i tytuł w zakładce */
include 'includes/nav.php'; /*Skrypt pod navbara, żeby każda strona miała to po prostu pobrała a nie miała w kazdej podstronie to samo  */
?>

<?php if (isset($_GET['logout'])): ?>
  <div id="logoutPopup" class="popup">Zostałeś wylogowany!</div>
<?php endif; ?>

<video autoplay loop muted playsinline class="back-vid">
  <source src="images/galaxy.mp4" type="video/mp4" />
</video>

<section class="main-section">
  <div class="hero" id="hero">
    <div class="hero-info">
      <h1 data-aos="fade-right"><span>Cześć!</span> tu Oskar</h1>
      <h2 data-aos="fade-left">Jestem Studentem Informatyki</h2>
      <p data-aos="flip-down">Witam na mojej stronie portfolio!</p>
      <div class="Buttons">
        <a href="contact.php" class="btn">Skontaktuj się!</a>
        <ul class="ul-icons">
          <li><a href="https://github.com/purgaloskar" target="_blank"><i class='bx bxl-github'></i></a></li>
          <li><a href="mailto:oski1616@o2.pl"><i class='bx bxl-gmail'></i></a></li>
        </ul>
      </div>
    </div>
    <div class="hero-img" data-aos="zoom-in-left">
      <img src="images/Foto.jpg" alt="Oskar Purgal">
    </div>
  </div>
</section>


<?php include 'includes/footer.php'; ?>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>AOS.init();</script>
<script src="js/script.js"></script>