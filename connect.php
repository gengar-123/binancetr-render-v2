<?php
// Render ortam değişkenlerinden veritabanı bağlantısı al
$host = getenv('DB_HOST') ?: 'mariadb';   // Servis ismi (Render'daki MariaDB servisin adı)
$dbname = getenv('DB_NAME') ?: 'appdb';   // Veritabanı ismi
$username = getenv('DB_USER') ?: 'appuser'; // Kullanıcı adı
$password = getenv('DB_PASSWORD') ?: '123Smoke.'; // Şifre

try {
    // PDO ile veritabanına bağlan
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Bağlantı hatasını göster
    die("DB connection failed: " . $e->getMessage());
}
?>
