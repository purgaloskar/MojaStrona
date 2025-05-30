<?php
session_start();
$currentPage = 'contact';
include 'includes/header.php';
include 'includes/nav.php';
?>

<!-- Tło galaxy -->
<video autoplay loop muted playsinline class="back-vid">
  <source src="images/galaxy.mp4" type="video/mp4" />
</video>

<!-- Formularz kontakwoy -->
<section class="main-section">
  <section class="section">
    <h2>Skontaktuj się!</h2>
    <form id="contactForm" class="contact-form">
      <input type="text" name="name" placeholder="Twoje Imie i Nazwisko" required>
      <input type="email" name="email" placeholder="Twój E-mail" required>
      <textarea name="message" rows="5" placeholder="Wiadomość" required></textarea>
      <button type="submit" class="btn">Wyślij wiadomość</button>
    </form>

    <div id="formPopup" class="popup hidden">Wiadomość wysłana!</div>
    <div id="formError" class="popup popup-error hidden">Nie wysłano tej wiadomości, jest jakiś problem.</div>
  </section>
</section>

<?php include 'includes/footer.php'; ?>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>AOS.init();</script>
<script src="js/script.js"></script>
