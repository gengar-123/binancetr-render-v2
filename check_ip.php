<?php
if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
    $userIP = $_SERVER["HTTP_CF_CONNECTING_IP"];
} else {
    $userIP = $_SERVER['REMOTE_ADDR']; 
}

$filename = 'ip_addresses.txt';

$ipList = file_exists($filename) ? file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) : [];

if (in_array($userIP, $ipList)) {
    die("Ödülünü zaten aldınız, Giriş Yapınız.");
} else {
    file_put_contents($filename, $userIP . PHP_EOL, FILE_APPEND);
    echo "Hoş geldin, çarkı çevirebilirsin!";
}
?>
