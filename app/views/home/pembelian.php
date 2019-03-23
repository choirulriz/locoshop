<div class="container mt-3">
<div class="row">
  <div class="col-lg-6">
  <!-- //karena statis pake titik dua -->
    <?php Flasher::flash(); ?>
  </div>
</div>
			<h3>Daftar Belanja</h3>
				<ul class="list-group" >
					<?php foreach ($data['barang'] as $m): ?>
					<li class="list-group-item ">
					<?= $m['nama']; ?>
					<a href="<?=BASEURL;?>/pembelian/hapus/<?=$m['idBarang']; ?> " class="badge badge-danger float-right ml-1" onclick="return confirm('Yakin ingin menghapus data?');">hapus</a>
					</li>
					<?php endforeach; ?>
				</ul>
		</div>
	</div>
</div>
