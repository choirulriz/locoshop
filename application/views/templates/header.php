<!DOCTYPE html>
<html>

<head>
    <title><?= $judul; ?></title>
    <link rel="stylesheet" href="<?= base_url(); ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?= base_url(); ?>/img/icons/favicon.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/fonts/linearicons-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->

    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/css/main.css">
    <!--===============================================================================================-->



</head>

<body>
    <header>
        <!-- Header desktop -->
        <div class="container-menu-desktop">
            <!-- Topbar -->

            <div class="wrap-menu-desktop">
                <nav class="limiter-menu-desktop container">

                    <!-- Logo desktop -->
                    <a href="<?= base_url(); ?>" class="logo">
                        <img src="<?= base_url(); ?>img/icons/logoLocoshop.png" alt="IMG-LOGO">
                    </a>

                    <!-- Menu desktop -->

                    <div style="margin-left:100px">
                        <form class="form-control rounded-pill flex-w" action="<?= base_url(); ?>home/cari" method="POST">
                            <input class="plh3 " style=" width:500px" type="text" name="keyword" placeholder="Search..." autocomplete="off">
                            <button type="submit" class="flex-c-m trans-04 mr-3">
                                <i class="zmdi zmdi-search"></i>
                            </button>
                        </form>
                    </div>

                    <!-- Icon header -->
                    <div class="wrap-icon-header flex-w flex-r-m">

                        <div>
                        </div>

                        <a href="<?= base_url("beli"); ?>" class="icon-header-item cl2 hov-cl1 icon-header-noti trans-04 p-l-22 p-r-11" data-notify="<?= $this->db->get('beli')->num_rows(); ?>">
                            <i class="zmdi zmdi-shopping-cart"></i>
                        </a>
                        <div class="menu-desktop">
                            <ul class="main-menu">
                                <li class="active-menu">
                                    <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11">
                                        <i class="zmdi zmdi-account-o zmdi-hc-2x" style="width:10px"></i>
                                    </a>
                                    <ul class="sub-menu">

                                        <li><a href="<?= base_url("auth"); ?>">Masuk</a></li>
                                        <li><a href="<?= base_url("auth/registration"); ?>">Daftar</a></li>
                                        <li><a href="<?= base_url(); ?>profile/profil/<?= $this->session->userdata('id'); ?>">Profil</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>