<?php
session_start();
if (!isset($_SESSION['user'])) {
  header("Location: auth/login.php");
  exit();
}

require 'config.php';

$stmt = $pdo->query("SELECT * FROM messages ORDER BY created_at DESC");
$messages = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <title>Panel admina</title>
  <link rel="stylesheet" href="css/style.css">
  <style>
    body {
      background: #0d0d0d;
      color: #fff;
      font-family: 'Segoe UI', sans-serif;
      padding: 30px;
    }
    h1 {
      color: #4acfee;
      text-align: center;
      margin-bottom: 20px;
    }
    .logout-btn {
      position: absolute;
      top: 20px;
      right: 30px;
      background: #ff4d4d;
      padding: 10px 20px;
      border: none;
      border-radius: 6px;
      color: white;
      font-weight: bold;
      cursor: pointer;
      text-decoration: none;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
      background: #1a1a1a;
    }
    th, td {
      padding: 12px;
      border: 1px solid #333;
      text-align: left;
    }
    th {
      background-color: #2a2a2a;
      color: #4acfee;
    }
    tr:hover {
      background-color: #222;
    }
    .delete-btn {
      background: #4acfee;
      color: black;
      padding: 6px 10px;
      border-radius: 5px;
      border: none;
      cursor: pointer;
      font-weight: bold;
      margin-right: 5px;
      text-decoration: none;
    }
    .delete-btn:hover {
      background: #28b6e7;
    }
  </style>
</head>
<body>

<a href="auth/logout.php" class="logout-btn">Wyloguj się</a>

<h1>Otrzymane wiadomości</h1>

<?php if (count($messages) === 0): ?>
  <p>Brak wiadomości do wyświetlenia.</p>
<?php else: ?>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Imię</th>
        <th>Email</th>
        <th>Wiadomość</th>
        <th>Data</th>
        <th>Akcje</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($messages as $msg): ?>
        <tr>
          <td><?= $msg['id'] ?></td>
          <td><?= htmlspecialchars($msg['name']) ?></td>
          <td><?= htmlspecialchars($msg['email']) ?></td>
          <td><?= nl2br(htmlspecialchars($msg['message'])) ?></td>
          <td><?= $msg['created_at'] ?></td>
          <td>
            <a href="edit_message.php?id=<?= $msg['id'] ?>" class="delete-btn">✏️ Edytuj</a>
            <form method="POST" action="delete_message.php" onsubmit="return confirm('Na pewno usunąć?');" style="display:inline;">
              <input type="hidden" name="id" value="<?= $msg['id'] ?>">
              <button type="submit" class="delete-btn" style="background:#ff4d4d;color:white;">🗑️ Usuń</button>
            </form>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php endif; ?>

</body>
</html>
