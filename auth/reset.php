<!-- Resetowanie hasła  -->
<?php
require_once '../config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['Login'];
  $newPass = $_POST['Nowe hasło'];
  $confirm = $_POST['Potwierdź nowe hasło'];

  if ($newPass === $confirm && strlen($newPass) >= 6) {
    $hash = password_hash($newPass, PASSWORD_BCRYPT);
    $stmt = $pdo->prepare("UPDATE admin_users SET password = ? WHERE username = ?");
    $stmt->execute([$hash, $username]);
    $success = true;
  } else {
    $error = true;
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Reset Password</title>
  <link rel="stylesheet" href="../css/style.css">
  <style>
    body {
      background: #0d0d0d;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      color: white;
      font-family: 'Segoe UI', sans-serif;
    }
    .reset-box {
      background: rgba(255,255,255,0.05);
      padding: 40px;
      border-radius: 10px;
      width: 100%;
      max-width: 400px;
      text-align: center;
    }
    input {
      width: 100%;
      margin-top: 10px;
      padding: 10px;
      background: #1a1a1a;
      color: white;
      border: 1px solid #333;
      border-radius: 5px;
    }
    .btn {
      margin-top: 15px;
      background: #4acfee;
      color: black;
      border: none;
      padding: 12px;
      font-weight: bold;
      border-radius: 6px;
      cursor: pointer;
    }
    .msg {
      margin-top: 10px;
      color: #4acfee;
    }
    .error {
      color: #ff4d4d;
    }
  </style>
</head>
<body>
  <div class="reset-box">
    <h2>Reset hasła</h2>
    <?php if (isset($success)): ?>
      <p class="msg">Hasło zostało zmienione ✅</p>
    <?php elseif (isset($error)): ?>
      <p class="error">Hasło do siebie nie pasują lub są za krótkie ❌</p>
    <?php endif; ?>
    <form method="POST">
      <input type="text" name="username" placeholder="Twój login" required>
      <input type="password" name="new_password" placeholder="Nowe hasło" required>
      <input type="password" name="confirm_password" placeholder="Potwierdź hasło" required>
      <button type="submit" class="btn">Zmień hasło!</button>
    </form>
  </div>
</body>
</html>
