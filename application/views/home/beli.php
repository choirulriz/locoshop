    <div class="container">
        <div class="p-b-10">

        </div>
        <!-- Shoping Cart -->
        <form class="bg0 p-t-75 p-b-85">
            <div class="container">
                <?= $this->session->flashdata('message'); ?>
                <div class="row">
                    <h3 class="ltext-101 cl5">
                        Pembelian
                    </h3>
                    <div class="col-lg-12 col-xl-9 m-lr-auto m-b-50">
                        <div class="m-r--38 m-lr-0-xl">
                            <div class="wrap-table-shopping-cart">
                                <table class="table-shopping-cart">
                                    <tr class="table_head">
                                        <th class="column-1">Produk</th>
                                        <th class="column-2"></th>
                                        <th class="column-3">Tanggal Transaksi</th>
                                        <th class="column-4">Harga</th>
                                        <th class="column-5">Jumlah item</th>
                                        <th class="column-6">Total</th>
                                        <th class="column-7">"aksi"</th>
                                    </tr>
                                    <?php foreach ($beli as $b) : ?>
                                        <tr class="table_row">

                                            <td class="column-1">
                                                <div class="how-itemcart1">
                                                    <img src="<?= base_url(); ?>/img/<?= $b['foto']; ?>" alt="IMG">
                                                </div>
                                            </td>
                                            <td class="column-2"><?= $b['nama']; ?></td>
                                            <td class="column-3"><?= $b['tanggalTransaksi']; ?></td>
                                            <td class="column-4"><?= $b['harga']; ?></td>
                                            <td class="column-5"><?= $b['jumlahBeli']; ?></td>
                                            <td class="column-6"><?= $b['totalHarga']; ?></td>
                                            <td class="column-7">
                                                <a href="<?= base_url(''); ?>/beli/hapusBeli/<?= $b['idBeli']; ?>"><i class="zmdi zmdi-delete zmdi-hc-2x" style="width:10px""></i></a>
                                            
                                                                        </td>
                                                                    </tr>
                                            <?php endforeach; ?>

                                        </table>
                                    </div>


                                </div>
                            </div>


                        </div>
                    </div>
            </div>
            </form>
            </div>