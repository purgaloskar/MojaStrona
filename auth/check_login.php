<!-- Sprawdzanie logowania, czy hasło i login się zgadza z danymi admina -->
<?php
session_start();
require_once '../config.php';

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if (!$username || !$password) {
  header("Location: login.php?error=1");
  exit();
}

try {
  $stmt = $pdo->prepare("SELECT * FROM admin_users WHERE username = ?");
  $stmt->execute([$username]);
  $user = $stmt->fetch(PDO::FETCH_ASSOC);

  if ($user && $user['password'] === $password) {
    $_SESSION['user'] = $username;
    header("Location: ../admin.php");
    exit();
  } else {
    header("Location: login.php?error=1");
    exit();
  }
} catch (PDOException $e) {
  die("Database error: " . $e->getMessage());
}
