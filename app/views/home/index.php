<div class="container">
	<div class="row mt-3">
		<div class="col">
			<h1 class="text-center">Daftar Produk</h1>
		</div>
	</div>
	<br>

<div class="row">
	<?php foreach ($data['barang'] as $b): ?>
	<div class="col-md-3 mr-5 ml-4">
		<div class="card mb-4" style="width: 18rem;">
			<img src="<?= BASEURL; ?>/img/<?= $b['foto']; ?>"  class="card-img-top" alt="<?= $b['foto'];  ?>">
			<div class="card-body">
				<h5 class="card-title"><?= $b['nama']; ?></h5>
				<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
				<h5 class="card-title">Rp <?= $b['harga']; ?>,-</h5>
				<a href="<?=BASEURL;?>/home/detail/<?=$b['idBarang']; ?> " class="btn btn-danger pl-5 pr-5 float-right ml-1">Beli</a>
			</div>
		</div>
	</div>
	<?php endforeach;?>
</div>


</div>
