<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Devius Template</title>

    <link rel="stylesheet" href="../public/css/admin/dataTables.bootstrap.css">
    <link rel="stylesheet" href="../public/css/admin/dt-sidebar.css">
    <link rel="stylesheet" href="../public/css/admin/dt-gradients.css">
    <link rel="stylesheet" href="../public/css/admin/dt-theme.css">
    <link rel="stylesheet" href="../public/css/admin/dt-styles.css">
    <link rel="stylesheet" href="../public/css/error.css">
    <link rel="stylesheet" href="../public/css/admin/profile.css">
    <link rel="stylesheet" href="../public/css/admin/dashboard.css">
    <link rel="stylesheet" href="../public/css/admin/create_user.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <script src="../public/js/admin/jquery-3.2.1.js"></script>
    <script src="../public/js/admin/bootstrap.min.js"></script>
    <script src="../public/js/admin/jquery.dataTables.js"></script>
    <script src="../public/js/admin/dataTables.bootstrap.js"></script>
    <script src="../public/js/admin/underscore.js"></script>
</head>
<?php

use app\core\Application;
use app\models\User;

$isGuest = Application::$app->isGuest();
if($isGuest) {
  Application::$app->response->redirect('/error');
}
$userID = Application::$app->session->get('user');
$userModel = User::getUserInfo($userID);
if($userModel->getRole() != 'admin') {
  Application::$app->response->redirect('/error');
}
?>
<body>
  <div id="wrapper" class="toggled">
    <div id="sidebar-wrapper" class="harmonic">
      <ul class="sidebar-nav">
        <li class="sidebar-brand">
          <a>
            Hello, <?= $userModel->getDisplayName() ?>
          </a>
        </li>
          <li>
            <a href="/admin"?>
              <i class="fas fa-home" aria-hidden="true"></i> &nbsp;Main page
            </a>
          </li>
          <li>
            <a href="/admin/products"?>
              <i class="fab fa-product-hunt" aria-hidden="true"></i> &nbsp;Product Management
            </a>
          </li>
          <li>
            <a href="/admin/categories">
              <i class="fa fa-building" aria-hidden="true"></i> &nbsp;Category Management 
            </a>
          </li>
          <li>
            <a href="/admin/users">
              <i class="fa fa-users" aria-hidden="true"></i> &nbsp;User Management
            </a>
          </li>
          <li>
            <a href="/admin/orders">
              <i class="fas fa-hand-pointer" aria-hidden="true"></i>&nbsp; Order Management
            </a>
          </li>
          <li>
            <a href="/admin/profile">
              <i class="fas fa-user-cog" aria-hidden="true"></i>&nbsp;My Account
            </a>
          </li>
      </ul>
    </div>
    <div id="page-content-wrapper">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button 
            type="button" 
            class="navbar-toggle collapsed" 
            data-toggle="collapse" 
            data-target="#bs-example-navbar-collapse-1"
            aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#menu-toggle" id="menu-toggle">
              <i class="fa fa-arrow-left" aria-hidden="true"></i>
            </a>
            <a class="navbar-brand" href="/">Filmware</a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="/logout"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;Logout</a></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
          {{content}}
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="../public/js/admin/simple-sidebar.js"></script>
  <script src="../public/js/admin/plugins.js"></script>

</body>

</html>