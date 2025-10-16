<?php
require_once 'connect.php';


function getGifts($db) {
    $stmt = $db->query("SELECT * FROM gifts ORDER BY id ASC");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

$gifts = getGifts($db);

header('Content-Type: application/json');
echo json_encode($gifts);
?>