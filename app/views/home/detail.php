<div class="container mt-5">
    <div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><?= $data['barang']['nama']; ?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?= $data['barang']['jenis']; ?></h6>
        <p class="card-text"><?= $data['barang']['harga']; ?></p>
        <a href="<?=BASEURL;?>/home" class="card-link">kembali</a>
        <!-- <a href="#" class="card-link">Another link</a> -->
    </div>
    </div>
</div>