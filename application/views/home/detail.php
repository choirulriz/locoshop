<div class="container">
    <div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">


        <div class="row">
            <div class="col-md-6 col-lg-7 p-b-30">
                <div class="p-l-25 p-r-30 p-lr-0-lg">
                    <div class="wrap-slick3 flex-sb flex-w">
                        <div class="wrap-slick3-dots"></div>
                        <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>
                        <div class="wrap-pic-w pos-relative">
                            <img src="<?= base_url(); ?>/img/<?= $detail['foto']; ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="bor10 col-md-6 col-lg-5 p-3">
                <form action="" method="">
                    <div class="p-r-20 p-l-20 p-t-5 p-lr-0-lg">
                        <h4 class="ltext-109 cl2 js-name-detail p-b-14">
                            <input type="hidden" name="idBarang" value="<?=$detail['idBarang'];?>">  
                            <?= $detail['nama']; ?>
                        </h4>
                        <br>
                        <span class="mtext-109 cl1">
                            Rp <?= $detail['harga']; ?>,-
                        </span>

                        <p class="stext-102 cl3 p-t-23">
                            <?= $detail['deskripsi']; ?>
                        </p>
                        <!--  -->
                        <div class="p-t-15">
                            <span class="stext-112 cl8">
                                Pengiriman
                            </span>

                            <div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
                                <select class="js-select2" name="jasaPengiriman">
                                    <option>Pilih Jasa Pengiriman...</option>
                                    <option>JNE OKE</option>
                                    <option>JNE REG</option>
                                    <option>JNE YES</option>
                                </select>
                                <div class="dropDownSelect2"></div>
                            </div>

                            <div class="bor8 bg0 m-b-12">
                                <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="kota" placeholder="Nama Kota/ Kabupaten">
                            </div>

                            <div class="bor8 bg0 m-b-12">
                                <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="alamat" placeholder="Alamat">
                            </div>

                            <div class="input-group m-b-22">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Stok Tersedia: <?= $detail['stock']; ?> </span>
                                </div>
                                <select class="custom-select" id="inputGroupSelect03" aria-label="Example select with button addon">
                                    <option selected>Pilih Jumlah barang</option>
                                    <?php for ($i = 1; $i <= $detail['stock']; $i++) : ?>
                                        <option name="stok" value="<?= $i; ?>"><?= $i; ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>

                            <br><br>

                            <button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                                Beli Sekarang
                            </button>
                        </div>
                </form>

            </div>
        </div>
    </div>
</div>