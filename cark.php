<?php
// cark.php - Render uyumlu tam sürüm (güvenli & orijinal mantık korunmuş)

// Hataları göster (debug aşamasında)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Oturum
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Veritabanı bağlantısı
require_once __DIR__ . '/connect.php';

// Gerekli sınıfı dahil et
$classFile = __DIR__ . '/classes/Sajax.php';
if (!file_exists($classFile)) {
    die('classes/Sajax.php dosyası bulunamadı!');
}
require_once $classFile;

// Sajax nesnesini oluştur
if (class_exists('Sajax')) {
    $ajax = new Sajax($pdo);
} else {
    die('Sajax sınıfı bulunamadı. Dosya adı ve class adı eşleşmiyor olabilir.');
}

// Çark kontrolü (ana işlem)
try {
    $ajax->banControl();
} catch (Throwable $e) {
    echo "<h3 style='color:red'>Hata:</h3><pre>" . $e->getMessage() . "</pre>";
}
?>
