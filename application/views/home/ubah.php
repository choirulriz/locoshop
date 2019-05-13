<!-- Content page -->
<section class="bg0 p-t-104 p-b-116">
    <div class="container">

        <div class="row">
            <div class="col-1">
                <div class="row mb-4">
                    <h2 class="ltext-103 cl5">
                        Profil
                    </h2>
                </div>
                <div class="row">
                    <a href="<?= base_url(); ?>profile/ubah/<?= $this->session->userdata('id'); ?>">
                        <h2 class="mtext-110 cl5">
                            Ubah Profil
                        </h2>
                    </a>

                </div>
            </div>

            <div class="size-210 bor10 m-lr-auto flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
                <form>
                    <div class="flex-w w-full p-b-42">

                        <span class="fs-18 cl5 txt-center size-211">
                            <span class="lnr lnr-user"></span>
                        </span>

                        <div class="size-212 p-t-2">
                            <span class="mtext-110 cl2">
                                Nama Pengguna
                            </span>

                            <div class="mt-3">
                                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" value="<?= $profile['namaPembeli']; ?>">
                            </div>
                        </div>
                    </div>

                    <div class="flex-w w-full p-b-42">
                        <span class="fs-18 cl5 txt-center size-211">
                            <span class="lnr lnr-map-marker"></span>
                        </span>

                        <div class="size-212 p-t-2">
                            <span class="mtext-110 cl2">
                                Alamat
                            </span>

                            <div class="mt-3">
                                <input type="text" class="form-control" placeholder="Isikan Alamat Anda" aria-label="Username" aria-describedby="basic-addon1" value="<?= $profile['alamat']; ?>">
                            </div>
                        </div>
                    </div>

                    <div class="flex-w w-full p-b-42">
                        <span class="fs-18 cl5 txt-center size-211">
                            <span class="lnr lnr-phone-handset"></span>
                        </span>

                        <div class="size-212 p-t-2">
                            <span class="mtext-110 cl2">
                                No. Telp
                            </span>

                            <div class="mt-3">
                                <input type="text" class="form-control" placeholder="Isikan noTelepon Anda" aria-label="Username" aria-describedby="basic-addon1" value="<?= $profile['noTelepon']; ?>">
                            </div>
                        </div>
                    </div>

                    <div class="flex-w w-full mb-5">
                        <span class="fs-18 cl5 txt-center size-211">
                            <span class="lnr lnr-envelope"></span>
                        </span>

                        <div class="size-212 p-t-2">
                            <span class="mtext-110 cl2">
                                Email
                            </span>

                            <div class="mt-3">
                                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" value="<?= $profile['email']; ?>" readonly>
                            </div>

                        </div>
                    </div>
                    <a href="<?= base_url("auth/logout"); ?>">
                        <button type="submit" class="flex-c-m stext-101 cl0 size-121 bor1  btn-danger p-lr-15 trans-04 ">
                            Keluar
                        </button>
                    </a>

                </form>
            </div>
        </div>
    </div>
    </div>
</section>