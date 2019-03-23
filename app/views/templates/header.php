<!DOCTYPE html>
<html>
<head>
	<title><?= $data['judul']; ?></title>
	<link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">	
		  <a class="navbar-brand" href="<?= BASEURL; ?>">LocoShop</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="navbar-nav">
		      <li class="nav-item active">
		        <a class="nav-link" href="<?= BASEURL; ?>">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="<?= BASEURL; ?>/pakaian">Pakaian</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="<?= BASEURL; ?>/kerajinan">Kerajinan Tangan</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="<?= BASEURL; ?>/makanan">Makanan</a>
		      </li>
					
		    </div>
					<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2 float-right ml-1" type="search" placeholder="Search" aria-label="Search">
					</form>
				<a href="<?=BASEURL;?>/pembelian" class="btn btn-outline-info float-right ml-1 ">Pembelian</a>
				<a href="<?= BASEURL;?>/akun" class="btn btn-outline-primary float-right ml-1 ">Akun</a>
				<a href="<?=BASEURL;?>/masuk" class="btn btn-outline-info float-right ml-1">Masuk</a>
				<a href="<?=BASEURL;?>/regis" class="btn btn-outline-info float-right ml-1">Daftar</a>
  </div>
</nav>

<div class="row">
  <div class="col-lg">
  <!-- //karena statis pake titik dua -->
    <?php Flasher::flash(); ?>
  </div>
</div>