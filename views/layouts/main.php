<?php

$path = str_replace("\\", "/", "http://" . $_SERVER['SERVER_NAME'] . __DIR__ . "/");
$path = str_replace($_SERVER['DOCUMENT_ROOT'], "", $path);

header("Content-type: text/html; charset=utf-8");
?>

<!doctype html:5>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" href="../public/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../public/css/main.css">
    <link rel="stylesheet" href="../public/css/menu.css">
    <link rel="stylesheet" href="../public/css/product_detail.css">
    <link rel="stylesheet" href="../public/css/normalize.css">
    <link rel="stylesheet" href="../public/css/cart.css">
    <link rel="stylesheet" href="../public/css/home.css">
    <link rel="stylesheet" href="../public/css/about.css">
    <link rel="stylesheet" href="../public/css/profile.css">
    <link rel="stylesheet" href="../public/css/order.css">

    <title>Filmware</title>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <script src="../public/js/product_detail.js"></script>
    <script src="../public/js/addcart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
</head>

<body>
    <div class=" header">

        <nav class="navbar navbar-expand-lg ">
            <a class="navbar-brand" href="/">
                <img class="logo" alt="logo" src='../public/images/logo/logo-4.png'>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/menu">Libraries</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                </ul>
                <?php

                use app\core\Application;

                if (Application::isGuest() == 1) : ?>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/login">Sign in</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/register">Register</a>
                    </li>
                </ul>
                <?php else : ?>
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item active">
                        <a class="nav-link" href="/profile">
                            <div class="header-image header-image-user">
                                <img class="header-image-icon" src="../public/images/user.png" />
                            </div>
                            Welcome <?php echo Application::$app->user->getDisplayName() ?>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/cart">
                            <div class="header-image">
                                <img class="header-image-icon" src="../public/images/cart.png" />
                            </div>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/orders">
                            <div class="header-image">
                                <img class="header-image-icon" src="../public/images/orders.png" />
                            </div>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/logout">
                            <div class="header-image">
                                <img class="header-image-icon" src="../public/images/logout.png" />
                            </div>
                        </a>
                    </li>
                </ul>
                <?php endif; ?>
            </div>
        </nav>
    </div>

    <div class="main">
        <div class="container">
            <?php if (app\core\Application::$app->session->getFlash('success')) : ?>
            <div class="alert alert-success">
                <p><?php echo app\core\Application::$app->session->getFlash('success') ?></p>
            </div>
            <?php endif; ?>
            <!-- Inject Whatever page between formatted placeholder -->
            {{content}}
        </div>
    </div>
    <div class="footer info">
        <div class="footer-container">
            <div class="footer-info">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-lg-4">
                            <div class="footer-info-logo">
                                <img class="footer-logo" src="../public/images/logo/logo-3.png" />
                            </div>
                        </div>
                        <div class="col-md-9 col-lg-8">
                            <div class="footer-info-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-5 col-lg-4">
                                            <h6>Website info</h6>
                                            <ul>
                                                <li><a color="white" href="/">Home</a></li>
                                                <li><a href="/menu">Libraries</a></li>
                                                <li><a href="/about">About us</a></li>
                                                <li><a href="/contact">Contact</a></li>
                                            </ul>
                                        </div>
                                        <!-- <div class="col-md-5 col-lg-4">
                                            <h6>Terms of Service</h6>
                                            <ul>
                                                <li><a href="#">Quy chế website</a></li>
                                                <li><a href="#">Bảo mật thông tin</a></li>

                                            </ul>
                                        </div> -->
                                        <div class="col-md-12 col-lg-4">
                                            <h6>Contact us</h6>
                                            <ul>
                                                <li>Head Office 1: 268 Lý Thường Kiệt, Phường 14, Quận 10, TP HCM,
                                                    Vietnam.
                                                </li>
                                                <li>
                                                    Head Office 2: Đường 621, Khu đô thị Đại học Quốc gia TP. HCM, Dĩ an, Bình Dương, Vietnam.
                                                </li>
                                                <li>
                                                    (+84)906 600 272
                                                </li>
                                                <li>
                                                    <a href="https://filmware.herokuapp.com">
                                                        https://filmware.herokuapp.com
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="footer">
        <div class="footer__inner">
            <h6>Copyright @ 2022 FILMWARE. All rights reversed.</h6>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

</body>

</html>