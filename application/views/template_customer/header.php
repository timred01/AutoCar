<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="<?= base_url() ?>assets/assets_shop/img/logo.ico" type="image/x-icon" />

    <title><?= $title ?> | AutoCar</title>

    <!--=== Bootstrap CSS ===-->
    <link href="<?= base_url() ?>assets/assets_shop/css/bootstrap.min.css" rel="stylesheet">
    <!--=== Vegas Min CSS ===-->
    <link href="<?= base_url() ?>assets/assets_shop/css/plugins/vegas.min.css" rel="stylesheet">
    <!--=== Slicknav CSS ===-->
    <link href="<?= base_url() ?>assets/assets_shop/css/plugins/slicknav.min.css" rel="stylesheet">
    <!--=== Magnific Popup CSS ===-->
    <link href="<?= base_url() ?>assets/assets_shop/css/plugins/magnific-popup.css" rel="stylesheet">
    <!--=== Owl Carousel CSS ===-->
    <link href="<?= base_url() ?>assets/assets_shop/css/plugins/owl.carousel.min.css" rel="stylesheet">
    <!--=== Gijgo CSS ===-->
    <link href="<?= base_url() ?>assets/assets_shop/css/plugins/gijgo.css" rel="stylesheet">
    <!--=== FontAwesome CSS ===-->
    <link href="<?= base_url() ?>assets/assets_shop/css/font-awesome.css" rel="stylesheet">
    <!--=== Theme Reset CSS ===-->
    <link href="<?= base_url() ?>assets/assets_shop/css/reset.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="<?= base_url() ?>assets/assets_shop/css/style.css" rel="stylesheet">
    <!--=== Responsive CSS ===-->
    <link href="<?= base_url() ?>assets/assets_shop/css/responsive.css" rel="stylesheet">

    <!-- Font Awesome -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"> -->

    <!-- Font Monsterrat -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <!-- Font Quicksand -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">

    <!-- Stisla CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/assets_stisla/assets/css/style.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/assets_stisla/assets/css/components.css') ?>" rel="stylesheet">
</head>

<body class="loader-active">

    <!--== Preloader Area Start ==-->
    <div class="preloader">
        <div class="preloader-spinner">
            <div class="loader-content">
                <img src="<?= base_url() ?>assets/assets_shop/img/preloader.gif" alt="JSOFT">
            </div>
        </div>
    </div>
    <!--== Preloader Area End ==-->

    <!--== Header Area Start ==-->
    <header id="header-area" class="fixed-top">
        <!--== Header Top Start ==-->
        <div id="header-top" class="d-none d-xl-block">
            <div class="container">
                <div class="row">
                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-left">
                        <i class="fa fa-envelope"></i> pesan@autocar.com
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-2 text-center">
                        <i class="fa fa-whatsapp"></i> (0881) 123456789
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-clock-o"></i> Setiap Hari, 09.00 - 17.00
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-2 text-center">
                        <i class="fa fa-map-marker"></i> 13630, Kota Jakarta
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Social Icons Start ==-->
                    <div class="col-lg-2 text-right">
                        <div class="header-social-icons">
                            <a href="javascript:;"><i class="fa fa-facebook"></i></a>
                            <a href="javascript:;"><i class="fa fa-linkedin"></i></a>
                            <a href="javascript:;"><i class="fa fa-instagram"></i></a>
                            <a href="javascript:;"><i class="fa fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--== Header Top End ==-->

        <!-- Header Bottom Start -->
        <div id="header-bottom">
            <div class="container">
                <div class="row">
                    <!--== Logo Start ==-->
                    <div class="col-lg-4">
                        <a href="<?= base_url('customer/dashboard') ?>" class="logo">
                            <img src="<?= base_url('assets/assets_stisla') ?>/assets/img/logo.png" width="70"
                                alt="JSOFT" data-toggle="tooltip" data-placement="top" title="TESING">
                        </a>
                    </div>
                    <!--== Logo End ==-->

                    <!--== Main Menu Start ==-->
                    <div class="col-lg-8 d-none d-xl-block">
                        <nav class="mainmenu alignright">
                            <ul>
                                <li><a href="<?= base_url('customer/dashboard') ?>">BERANDA</a></li>
                                <li><a href="<?= base_url('customer/dashboard/list_mobil') ?>">LIST MOBIL</a></li>
                                <li><a href="javascript:;">HALAMAN LAIN</a>
                                    <ul>
                                        <li><a href="<?= base_url('customer/rental/kotak_pesan') ?>"><i
                                                    class="fa fa-envelope"></i> KOTAK PESAN</a></li>
                                        <li><a href="<?= base_url('customer/rental/faqs') ?>"><i
                                                    class="fa fa-question"></i> FAQ</a></li>
                                        <li><a href="<?= base_url('customer/rental/tentang_kami') ?>"><i
                                                    class="fa fa-info"></i> TENTANG KAMI</a></li>
                                    </ul>
                                </li>
                                <?php if (($_SESSION['level']) == 1) { ?>
                                <li>
                                    <a href="javascript:;"><i class="fa fa-user"></i> WELCOME |
                                        <?= $_SESSION['nama']; ?></a>
                                    <ul>
                                        <li><a href="<?= base_url('admin/dashboard') ?>"><i
                                                    class="fa-solid fa-house-user"></i>
                                                ADMIN DASHBOARD</a></li>
                                        <li><a href="<?= base_url('customer/rental/riwayat_sewa') ?>"><i
                                                    class="fa fa-tag"></i> RIWAYAT SEWA</a></li>
                                        <li><a href="<?= base_url('auth/ganti_password') ?>"><i
                                                    class="fa fa-unlock"></i> GANTI PASSWORD</a></li>
                                        <li><a href="<?= base_url('auth/logout') ?>"><i class="fa fa-sign-out"></i> LOG
                                                OUT</a></li>
                                    </ul>
                                </li>
                                <?php } elseif (($_SESSION['level']) == 2) { ?>
                                <li>
                                    <a href="javascript:;"><i class="fa fa-user"></i> WELCOME |
                                        <?= $_SESSION['nama']; ?></a>
                                    <ul>
                                        <li><a href="<?= base_url('customer/rental/riwayat_sewa') ?>"><i
                                                    class="fa fa-tag"></i> RIWAYAT SEWA</a></li>
                                        <li><a href="<?= base_url('auth/ganti_password') ?>"><i
                                                    class="fa fa-unlock"></i> GANTI PASSWORD</a></li>
                                        <li><a href="<?= base_url('auth/logout') ?>"><i class="fa fa-sign-out"></i> LOG
                                                OUT</a></li>
                                    </ul>
                                </li>
                                <?php } else { ?>
                                <li><a href="<?= base_url('auth/login') ?>"><i class="fa fa-sign-in"></i> LOGIN</a>
                                </li>
                                <?php } ?>
                            </ul>
                        </nav>
                    </div>
                    <!--== Main Menu End ==-->
                </div>
            </div>
        </div>
        <!--== Header Bottom End ==-->
    </header>
    <!--== Header Area End ==-->