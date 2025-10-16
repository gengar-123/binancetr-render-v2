<?php
// dikiş
require_once '../connect.php';
require_once '../AjaxClass.php';

if (isset($_POST['remove']) && isset($_POST['id'])) {
    $id = $_POST['id'];

    $query = $db->prepare("DELETE FROM records WHERE id = :id");
    $result = $query->execute(['id' => $id]);

    if ($result) {
        echo "Kayıt başarıyla silindi.";
    } else {
        echo "Bir hata oluştu, kayıt silinemedi.";
    }
} else {
    echo "Hatalı istek.";
}

 header('Location: index.php');
exit;
?>