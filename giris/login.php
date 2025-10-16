<?php
require_once '../connect.php';

if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']) {
    $ajax->redirect("panel");
}

if ($_POST) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username && $password) {
        $query = $db->prepare("SELECT * FROM admin WHERE username = ?");
        $query->execute([$username]);

        if ($query->rowCount() > 0) {
            $user = $query->fetch(PDO::FETCH_ASSOC);
            if (password_verify($password, $user['password'])) {
                $_SESSION['loggedIn'] = 1;
                $_SESSION['username'] = $user['username'];
                $_SESSION['session_token'] = $user['session_token'];  

                $ajax->redirect('/panel');
            } else {
                $ajax->redirect('login');
            }
        } else {
            $ajax->redirect('login');
        }
    } else {
        $ajax->redirect('login');
    }
}
?>


<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>Giriş Yap</title> 
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,800&amp;display=swap" rel="stylesheet">
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/plugins/font-awesome/css/all.min.css" rel="stylesheet">
    <link href="assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <link href="assets/plugins/pace/pace.css" rel="stylesheet">
    <link href="assets/css/main.min.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet"> 
</head>

<body class="pace-done login-page no-loader">
    <div class="pace pace-inactive">
        <div class="pace-progress" data-progress-text="100%" data-progress="99"
            style="transform: translate3d(100%, 0px, 0px);">
            <div class="pace-progress-inner"></div>
        </div>
        <div class="pace-activity"></div>
    </div>

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-12 col-lg-4">
                <div class="card login-box-container">
                    <div class="card-body">
                        <div class="authent-logo">
                            <a href="#">Ajax</a>
                        </div>
                        <div class="authent-text"> 
                            <p>Hesabınıza giriş yapınız.</p>
                        </div>

                        <form action="" method="post"> 
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="text" name="username" class="form-control" id="floatingInput"
                                        placeholder="Kullanıcı Adı" required>
                                    <label for="floatingInput">Kullanıcı Adı</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="password" name="password" class="form-control" id="floatingPassword"
                                        placeholder="Parola" required>
                                    <label for="floatingPassword">Parola</label>
                                </div>
                            </div> 
                            <div class="d-grid">
                                <button type="submit" class="btn btn-info m-b-xs">Giriş Yap</button> 
                            </div>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Javascripts -->
    <script src="assets/plugins/jquery/jquery-3.4.1.min.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="assets/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
    <script src="assets/plugins/pace/pace.min.js"></script>
    <script src="assets/js/main.min.js"></script>

</body>

</html>