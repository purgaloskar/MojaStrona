<!-- Wylogowywanie i przekierowanie na strone główną -->
<?php
session_start();
session_unset();
session_destroy();
header("Location: ../index.php?logout=1");
exit();
