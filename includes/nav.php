<nav>
    <h1>
        <a href="index.php" style="color: inherit; text-decoration: none;">
            <span style="color: #4acfee;">Oskar </span> Purgal
        </a>
    </h1>
    <ul>
      <li><a href="index.php" class="<?= ($currentPage == 'home') ? 'active' : '' ?>">Home</a></li>
      <li><a href="about.php" class="<?= ($currentPage == 'about') ? 'active' : '' ?>">O mnie</a></li>
      <li><a href="skills.php" class="<?= ($currentPage == 'skills') ? 'active' : '' ?>">Umiejętności</a></li>
      <li><a href="contact.php" class="<?= ($currentPage == 'contact') ? 'active' : '' ?>">Kontakt</a></li>
      <li><a href="cv/CV-Oskar_Purgal.pdf" download>CV</a></li>
      <li>
        <!-- Przełącznik dark mode -->
        <label class="dark-toggle">
          <input type="checkbox" id="darkModeToggle">
          🌙
        </label>
      </li>
      <?php if (!isset($_SESSION['user'])): ?>
        <li><a href="auth/login.php" class="nav-admin">Logowanie Admina</a></li>
      <?php else: ?>
        <li><a href="auth/logout.php" class="nav-admin">Wyloguj</a></li>
      <?php endif; ?>
    </ul>
</nav>
