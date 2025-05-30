<?php
session_start();
$currentPage = 'about';
include 'includes/header.php';
include 'includes/nav.php';
?>

<!-- Tło galaxy -->
<video autoplay loop muted playsinline class="back-vid">
  <source src="images/galaxy.mp4" type="video/mp4" />
</video>

<section class="main-section">
  <!-- ✅ SEKJA O MNIE -->
  <section class="about-section">
    <div class="about-container">
      <div class="about-item reveal">
        <img src="images/Foto1.jpg" alt="Zdjęcie 1">
        <div class="about-text">
          <h2>Moje życie</h2>
          <p>Jestem 22 letnim studentem informatyki który sam nie wie czego pragnie od życia, szuka, błądzi, popełnia błędy z których potem stara się wyciągać wnioski
            Nigdy nie skreślam żadnego planu ani pomysłu, stąd też nie wiem czy informatyka to coś co chce robić do końca mojego życia, czy sprawia mi radość i chęci do pracy w tym.
          </p>
        </div>
      </div>

      <div class="about-item reveal">
        <img src="images/Foto2.jpg" alt="Zdjęcie 2">
        <div class="about-text">
          <h2>Moja historia zdrowotna</h2>
          <p>W 2018 roku zdiagnozowano u mnie problemy z płucami, zacząłem stopinowo się badać, u jednego lekarza, u drugiego, aż w końcu trafiłem na profesora Przewratila który podjął się leczenia i diagnozowania mnie bardziej,
            Wykonano mi 5 embolizacji (zabieg wejścia do płuc poprzez tętnice udową) i zatykanie przetok tętnicz-żylnych które są w ogromnej ilości.  </p>
        </div>
      </div>
      <div class="about-item reveal">
        <img src="images/Foto5.jpg" alt="Zdjęcie 5">
        <div class="about-text">
          <h2>Moja Kobitka</h2>
          <p>Moja cudowna kobietka która wspiera i jest ze mną w każdym gorszym jak i lepszym momencie mojego życia. Ciesze się że życie nas połączyło.</p>
        </div>
      </div>
    </div>
  </section>

      <div class="about-item reveal toys-layout">
          <img class="side-img" src="images/Foto3.jpg" alt="Zdjęcie lewe">
          <div class="about-text center-text">
              <h2>Moje Zabawki</h2>
              <p>Zaraz po skończeniu 18 lat pragnałem posiadać ścigacza, ale rodzice mi nie pozwolili, za to zgodzili się na auto, więc od razu po 18 roku życia i zdaniu prawa jazdy Kat B, kupiłem Audi ze zdjęcia :D, do tego marzyłem o motocyklach więc sam sobie sprezentowałem na 18 prawo jazdy Kat. A2
                W wieku 20 lat zrobiłem prawo jazdy Kat. A i od tamtej pory zacząłem jeździć motocyklami bardziej niż tylko w grach. </p>
          </div>
          <img class="side-img" src="images/Foto4.jpg" alt="Zdjęcie prawe">
      </div>
</section>

<script>

// Animacja scrollowania
function reveal() {
  var reveals = document.querySelectorAll(".reveal");
  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 150;
    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}
window.addEventListener("scroll", reveal);
window.addEventListener("load", reveal);
</script>

<?php include 'includes/footer.php'; ?>