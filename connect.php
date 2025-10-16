<?php
// Render ortam değişkenleri
$host = getenv('DB_HOST') ?: 'mariadb';     // IMPORTANT: 127.0.0.1 değil, servis adı!
$db   = getenv('DB_NAME') ?: 'appdb';
$user = getenv('DB_USER') ?: 'appuser';
$pass = getenv('DB_PASSWORD') ?: '123Smoke.'; // İstersen boş bırak: ''

// İsteğe bağlı: DB_PORT tanımlıysa DSN'e ekleyelim
$dsn = "mysql:host={$host};dbname={$db};charset=utf8";
$port = getenv('DB_PORT');
if (!empty($port)) {
    $dsn .= ";port={$port}";
}

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    die("DB connection failed: " . $e->getMessage());
}
