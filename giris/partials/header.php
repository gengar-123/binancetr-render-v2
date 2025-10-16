<?php

require_once '../connect.php';
require_once '../AjaxClass.php';

$ajax = new Ajax($db);

if (!$session) {

  $ajax->redirect("login");

}



?>

<!DOCTYPE html>

<html lang="en">



<head>

  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="description" content="Responsive Admin Dashboard Template">

  <meta name="keywords" content="admin,dashboard">

  <meta name="author" content="stacks">

  <title>Ajax - Admin</title>

  <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,800&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="assets/plugins/font-awesome/css/all.min.css" rel="stylesheet">

  <link href="assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">

  <link href="assets/plugins/pace/pace.css" rel="stylesheet">

  <link href="assets/plugins/apexcharts/apexcharts.css" rel="stylesheet">

  <link href="assets/css/main.min.css" rel="stylesheet">

  <link href="assets/css/custom.css" rel="stylesheet">

  <script src="assets/plugins/jquery/jquery-3.4.1.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>
  setInterval(function() {
    window.location.reload();
}, 120000);
</script>


</head>



<body class="page-sidebar-collapsed">

  <div class="page-container">

    <div class="page-sidebar">

      <a class="logo" href="/panel">Ajax Admin</a>

      <ul class="list-unstyled accordion-menu">



        <li>

          <a href="/panel"><i data-feather="save"></i>Kayıtlar</a>

        </li> 

        <li>

          <a href="bans"><i data-feather="slash"></i>Yasaklı Listesi</a>

        </li>

        <li>

          <a href="settings"><i data-feather="settings"></i>Ayarlar</a>

        </li>

        <li>

        <a href="carks"><i data-feather="settings" class="carks-icon"></i>Çark</a>

</li>

      </ul>

      <a href="#" id="sidebar-collapsed-toggle"><i data-feather="arrow-right"></i></a>

    </div>

    <div class="page-content">

      <div class="page-header">

        <nav class="navbar navbar-expand-lg d-flex justify-content-between">

          <div class="header-title flex-fill">

            <a href="#" id="sidebar-toggle"><i data-feather="arrow-left"></i></a>

            <h5>

              <?= $title ?>

            </h5>

          </div>

          <div id="msg_alert">

          

          </div>

          <div class="flex-fill" id="headerNav">

            <ul class="navbar-nav">

              <li class="nav-item dropdown">

                <a class="nav-link profile-dropdown" href="#" id="profileDropDown" role="button"

                  data-bs-toggle="dropdown" aria-expanded="false"><img src="assets/images/avatars/profile-image.webp"

                    alt=""></a>

                <div class="dropdown-menu dropdown-menu-end profile-drop-menu" aria-labelledby="profileDropDown">

                  <a class="dropdown-item" href="#"><i data-feather="user"></i>Ayarlar</a>

                  <a class="dropdown-item" href="logout.php"><i data-feather="log-out"></i>Çıkış Yap</a>



                </div>

              </li>

            </ul>

          </div>

        </nav>

      </div>
      <style>
        .carks-icon {
    fill: red;
}

</style>