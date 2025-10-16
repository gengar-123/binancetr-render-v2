<?php
// dikiş
require_once '../connect.php';
require_once '../AjaxClass.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $controlValue = isset($_POST['control']) ? 1 : 0;

    $query = $db->prepare("UPDATE records SET control = :control WHERE id = :id");
    $result = $query->execute(['control' => $controlValue, 'id' => $id]);

    if ($result) {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    } else {
        exit('Bir hata oluştu, güncelleme yapılamadı.');
    }
} else {
    exit('Hatalı istek.');
}
?>