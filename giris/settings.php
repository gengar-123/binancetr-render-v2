<?php
$title = "Ayarlar";
include_once 'partials/header.php';

if ($_POST) {
    $username = $ajax->input($_POST['username']);
    $password = $ajax->input($_POST['password']);

    if ($username && $password) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $newSessionToken = bin2hex(random_bytes(32));

        $update = $db->prepare("UPDATE admin SET username = ?, password = ?, session_token = ? WHERE id = 1");
        $update->execute([$username, $hashedPassword, $newSessionToken]);

        if ($update) {
            $_SESSION['session_token'] = $newSessionToken;
            $ajax->redirect('settings');
        } else {
            $ajax->redirect('settings');
        }
    }
}

?>

<div class="main-wrapper">
    <div class="card card-bg">
        <div class="card-body">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="username" class="form-label">Kullanıcı Adı</label>
                    <input type="text" class="form-control" value="<?= $ajax->admin_data()->username ?>" name="username" id="username">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Yeni Parola</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Yeni parola giriniz">
                </div> 

                <button type="submit" class="btn btn-primary">Güncelle</button>
            </form>
        </div>
    </div>
</div>






</div>

<?php include_once 'partials/footer.php'; ?>