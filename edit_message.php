<!-- Sprawdzanie użytkownika -->
<?php
session_start();
if (!isset($_SESSION['user'])) {
  header("Location: auth/login.php");
  exit();
}

require 'config.php';

$id = $_GET['id'] ?? null;

if (!$id) {
  header("Location: admin.php");
  exit();
}
// Pobieranie danych z bazy
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $stmt = $pdo->prepare("UPDATE messages SET name = ?, email = ?, message = ? WHERE id = ?");
  $stmt->execute([$name, $email, $message, $id]);

  header("Location: admin.php");
  exit();
}

$stmt = $pdo->prepare("SELECT * FROM messages WHERE id = ?");
$stmt->execute([$id]);
$messageData = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$messageData) {
  echo "Nie znaleziono wiadomości.";
  exit();
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <title>Edytuj wiadomość</title>
  <link rel="stylesheet" href="css/style.css">
  <style>
    body {
      background: #0d0d0d;
      color: white;
      font-family: 'Segoe UI', sans-serif;
      padding: 40px;
    }
    form {
      max-width: 600px;
      margin: auto;
      display: flex;
      flex-direction: column;
      gap: 15px;
    }
    input, textarea {
      padding: 10px;
      background: #1a1a1a;
      border: 1px solid #333;
      border-radius: 5px;
      color: white;
    }
    button {
      background: #4acfee;
      color: black;
      padding: 12px;
      border: none;
      font-weight: bold;
      border-radius: 6px;
      cursor: pointer;
    }
  </style>
</head>
<body>

<h2>Edytuj wiadomość<?= $id ?></h2>
<!-- Formularz -->
<form method="POST">
  <input type="text" name="name" value="<?= htmlspecialchars($messageData['name']) ?>" required>
  <input type="email" name="email" value="<?= htmlspecialchars($messageData['email']) ?>" required>
  <textarea name="message" rows="6" required><?= htmlspecialchars($messageData['message']) ?></textarea>
  <button type="submit">Zapisz</button>
</form>

</body>
</html>
