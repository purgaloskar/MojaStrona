<?php
session_start();
$currentPage = 'skills';
include 'includes/header.php';
include 'includes/nav.php';
?>

<!-- Tło galaxy -->
<video autoplay loop muted playsinline class="back-vid">
  <source src="images/galaxy.mp4" type="video/mp4" />
</video>

<section class="main-section">

  <!-- Sekcja 1: Strony  -->
  <section class="section">
    <h2 data-aos="fade-down">Umiejętności Front/Back-endowe</h2>
    <div class="skills-cards">
      <div class="skill-card" data-aos="zoom-in">
        <i class='bx bxl-html5'></i>
        <h3>HTML</h3>
        <p>Zaawansowany</p>
      </div>
      <div class="skill-card" data-aos="zoom-in">
        <i class='bx bxl-css3'></i>
        <h3>CSS</h3>
        <p>Zaawansowany</p>
      </div>
      <div class="skill-card" data-aos="zoom-in">
        <i class='bx bxl-javascript'></i>
        <h3>JavaScript</h3>
        <p>Średnio-zaawansowany</p>
      </div>
      <div class="skill-card" data-aos="zoom-in">
        <i class='bx bxl-php'></i>
        <h3>PHP</h3>
        <p>Średnio-zaawansowany</p>
      </div>
      <div class="skill-card" data-aos="zoom-in">
        <i class='bx bxs-data'></i>
        <h3>SQL</h3>
        <p>Średnio-zaawansowany</p>
      </div>
      <div class="skill-card" data-aos="zoom-in">
        <i class='bx bxl-git'></i>
        <h3>Git</h3>
        <p>Średnio-zaawansowany</p>
      </div>
    </div>
  </section>

  <!-- Sekcja 2: Programowanie -->
  <section class="section">
    <h2 data-aos="fade-down">Umiejętności Programistyczne</h2>
    <div class="skills-cards">
      <div class="skill-card" data-aos="zoom-in">
        <i class='bx bxl-python'></i>
        <h3>Python</h3>
        <p>Średnio-zaawansowany</p>
      </div>
      <div class="skill-card" data-aos="zoom-in">
        <i class='bx bx-code'></i>
        <h3>C / C++</h3>
        <p>Początkujący</p>
      </div>
      <div class="skill-card" data-aos="zoom-in">
        <i class='bx bxl-java'></i>
        <h3>Java</h3>
        <p>Początkujący</p>
      </div>
    </div>
  </section>

</section>

<?php include 'includes/footer.php'; ?>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>AOS.init();</script>
<script src="js/script.js"></script>
