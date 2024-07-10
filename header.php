<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./assets/css/style.css" rel="stylesheet">
    <link href="./assets/css/all.min.css" rel="stylesheet">
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!--subHeader-start-->
    <section class="container-fluid">
        <div class="row">
            <div class="col-12 bg-black d-flex p-3 justify-content-between">
                <div class="col-lg-6 d-flex align-items-center">
                    <i class="fa-solid fa-envelope text-warning"></i>
                    <p class="text-white px-2 my-0">ایمیل: asiehdavary1@gmail.com</p>
                </div>
                <div class="col-lg-6 d-flex align-items-center justify-content-end">
                    <i class="fa-solid fa-phone text-warning"></i>
                    <p class="text-white px-2 my-0">شماره تلفن: 09150000000</p>
                </div>
            </div>
        </div>
    </section>
    <!--subHeader-end-->

    <!--header-start-->
    <header class="container-fluid">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#myOffcanvas" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 p-0">
                        <li class="nav-item">
                            <a class="nav-link text-black pe-0" href="index.php">خانه</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="#">درباره ما</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="#">خدمات</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="register.php" target="_blank">تماس با ما</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="<?php echo isset($_SESSION['username']) ? 'profile.php' : 'login.php'; ?>" target="_blank">
                                <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : 'ورود'; ?>
                            </a>
                        </li>
                        <?php if (isset($_SESSION['username'])) : ?>
                            <li class="nav-item">
                                <a class="nav-link text-black" href="logout.php">خروج</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
                <a class="navbar-brand text-primary fs-3 fw-medium" href="index.php">INANCE</a>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-md-6 pt-lg-5 mt-lg-5">
                    <h1 class="mt-lg-5 pt-3 pt-lg-5 w-75-custom text-Maincustom">خدمات تعمیر و نگهداری</h1>
                    <p class="my-4">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپلورم ایپسوم متن ساختگی با تولید سادگی
                        نامفهوم از
                        صنعت چاپ ورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                        صنعت چاپ</p>
                    <a class="btn bg-custom px-4 text-white" href="#">تماس با ما</a>
                </div>
                <div class="col-md-6">
                    <img src="./assets/img/slider-img.png" class="img-fluid w-100">
                </div>
            </div>
        </div>
    </header>
    <!--header-end-->