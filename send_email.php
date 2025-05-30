<!-- Wysyłanie wiadomości -->
<?php
require 'config.php';
//Wysyłanie danych do bazy
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST["name"]);
  $email = htmlspecialchars($_POST["email"]);
  $message = htmlspecialchars($_POST["message"]);

  $stmt = $pdo->prepare("INSERT INTO messages (name, email, message, created_at) VALUES (?, ?, ?, NOW())");
  $stmt->execute([$name, $email, $message]);
//Wysłanie wiadomości na strone / maila
  $to = "oski1616@o2.pl";
  $subject = "Wiadomość z portfolio";
  $body = "From: $name <$email>\n\n$message";
  $headers = "From: $email\r\nReply-To: $email";
  mail($to, $subject, $body, $headers);

  http_response_code(200);
}
