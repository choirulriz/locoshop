<!DOCTYPE html>
<html>

<head>
    <title><?= $judul; ?></title>
    <link rel="stylesheet" href="<?= base_url(); ?>/css/bootstrap.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url(); ?>">LocoShop</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url(); ?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>home/pakaian">Pakaian</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>home/kerajinan">Kerajinan Tangan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>home/makanan">Makanan</a>
                    </li>

            </div>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2 float-right ml-1" type="search" placeholder="Search" aria-label="Search">
            </form>
            <a href="<?= base_url(); ?>/pembelian" class="btn btn-outline-info float-right ml-1 ">Keranjang</a>
            <a href="<?= base_url(); ?>/akun" class="btn btn-outline-primary float-right ml-1 ">Akun</a>
            <a href="<?= base_url("auth"); ?>" class="btn btn-outline-info float-right ml-1">Masuk</a>
            <a href="<?= base_url("auth/registration"); ?>" class="btn btn-outline-info float-right ml-1">Daftar</a>
        </div>
    </nav>