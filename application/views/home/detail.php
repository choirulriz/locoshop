<div class="container">
    <div class="row mt-5">
        <div class="col-md-5">
            <img src="<?= base_url(); ?>/img/<?= $barang['foto']; ?>" alt="" width="450px" height="450px" class="rounded">

        </div>
        <div class="col-md-7">
            <h3><?= $barang['nama']; ?></h3>
            <br>
            <strong>
                <span style="color:orange">
                    <h4>Rp <?= $barang['harga']; ?></h4>
                </span>
            </strong>
            <br>
            <a href="<?= base_url("auth"); ?>" class="btn btn-danger">Beli</a>






        </div>

    </div>

</div>