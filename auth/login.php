<!-- Sesja logowania i panel admina -->
<?php
session_start();
if (isset($_SESSION['user'])) {
  header("Location: ../admin.php");
  exit();
}
$error = isset($_GET['error']) ? true : false;
?>

<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <title>Logowanie | Panel admina</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css">
  <style>
    body {
      background: #0d0d0d;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      font-family: 'Segoe UI', sans-serif;
      color: #fff;
    }
    .login-box {
      background: rgba(255,255,255,0.05);
      padding: 40px;
      border-radius: 10px;
      text-align: center;
      max-width: 400px;
      width: 100%;
    }
    input {
      width: 100%;
      margin: 10px 0;
      padding: 12px;
      border-radius: 6px;
      border: 1px solid #444;
      background: #1a1a1a;
      color: #fff;
    }
    .btn {
      background: #4acfee;
      color: #000;
      font-weight: bold;
      padding: 12px;
      width: 100%;
      border: none;
      border-radius: 6px;
      cursor: pointer;
    }
    .error {
      color: #ff4d4d;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
  <div class="login-box">
    <h2>Zaloguj się</h2>
    <?php if ($error): ?>
      <p class="error">Nieprawidłowy login lub hasło ❌</p>
    <?php endif; ?>
    <form method="POST" action="check_login.php">
      <input type="text" name="username" placeholder="Login" required>
      <input type="password" name="password" placeholder="Hasło" required>
      <button type="submit" class="btn">Zaloguj</button>
    </form>
  </div>
</body>
</html>
