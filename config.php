<!-- Ciasteczka -->
<?php
ini_set('session.cookie_lifetime', 172800);
ini_set('session.gc_maxlifetime', 172800);
ini_set('session.cookie_secure', 1);
ini_set('session.cookie_httponly', 1);
ini_set('session.use_only_cookies', 1);

session_start();

// Połączenie do bazy
$host = 'localhost';
$db   = 'purgaloskar';
$user = 'purgaloskar';
$pass = 'TLzR2GsiZTSMWgx';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Błąd połączenia z bazą: " . $e->getMessage());
}
