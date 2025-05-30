// ==============================
// Sekcja 1: Po załadowaniu 
// ==============================
document.addEventListener("DOMContentLoaded", () => {

  // === Animacje scrollowania 
  // Ustawia, żeby animacje działały tylko raz i przez 1s
  AOS.init({ once: true, duration: 1000 });

  // === Formularz kontaktowy 
  // Pobiera formularz i popup potwierdzający wysyłkę
  const form = document.getElementById("contactForm");
  const popup = document.getElementById("formPopup");

  // === Obsługa wysyłki formularza ===
  form.addEventListener("submit", async (e) => {
    e.preventDefault(); // Blokuje domyślne odświeżenie strony

    const formData = new FormData(form); // Zbiera dane z formularza

    try {
      // Wysyła dane do send_email.php
      const res = await fetch("send_email.php", {
        method: "POST",
        body: formData,
      });

      if (res.ok) {
        // Jeśli wysyłka zakończona sukcesem:
        form.reset(); // Czyści formularz
        popup.classList.remove("hidden"); // Pokazuje popup 
        setTimeout(() => popup.classList.add("hidden"), 4000); // Chowa go
      } else {
        throw new Error("Coś nie jest w porządku"); // Odpowiedź jak jest cos nie tak
      }
    } catch (err) {
      // === Obsługa błędów 
      const errorPopup = document.getElementById("formError");
      errorPopup.classList.remove("hidden"); // Pokazuje popup 
      setTimeout(() => errorPopup.classList.add("hidden"), 4000); // Chowa go
    }
  });

  // ==============================
  // Sekcja 2: Scroll Spy (aktywna sekcja w menu)
  // ==============================

  const sections = document.querySelectorAll("section[id]");
  const navLinks = document.querySelectorAll("nav ul li a");

  window.addEventListener("scroll", () => {
    let current = ""; // Zmienna na ID

    sections.forEach((section) => {
      const sectionTop = section.offsetTop - 200; // Offset wczesniejszego ładowania
      if (pageYOffset >= sectionTop) {
        current = section.getAttribute("id"); // Trzyma ID
      }
    });

    navLinks.forEach((link) => {
      link.classList.remove("active"); // Najpierw usuwa active ze wszystkich
      if (link.getAttribute("href") === "#" + current) {
        link.classList.add("active"); // Dodaje active do linku aktualnej sekcji
      }
    });
  });
});
// ==============================
// Sekcja 3: Popup wylogowania
// ==============================
document.addEventListener("DOMContentLoaded", function () {
  const logoutPopup = document.getElementById("logoutPopup");

  if (logoutPopup) {
    // Jeśli jest - znika po 3 sekundach
    setTimeout(() => {
      logoutPopup.style.display = "none";
    }, 3000);
  }
});
