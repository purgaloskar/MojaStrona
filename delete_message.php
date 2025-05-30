<!-- Sprawdzanie użytkownika -->
<?php
session_start();
if (!isset($_SESSION['user'])) {
  header("Location: auth/login.php");
  exit();
}

require 'config.php';
// Kasowanie wiadomosci z bazy
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
  $id = (int)$_POST['id'];
  $stmt = $pdo->prepare("DELETE FROM messages WHERE id = ?");
  $stmt->execute([$id]);
}

header("Location: admin.php");
exit();
