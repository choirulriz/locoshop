    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-end">
            <div class="col " style="margin-top:200px">
                <h1 class="ltext-103 cl0 mb-2">Loco Shop</h1>
                <p class=" cl0 mb-4">E-comerce yang menghadirkan brand-brand lokal Indonesia. Mari bergabung bersama kami!</p>
                <h4><a href="<?= base_url(); ?>" class="btn btn-primary py-3 px-5 rounded-pill">
                        Lihat Produk</a> </h4>
            </div>
            <div class="col-lg-4" style="margin-right:70px;margin-top:80px">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Halaman Login!</h1>
                                    </div>
                                    <?= $this->session->flashdata('message'); ?>
                                    <form class="user" method="post" action="<?= base_url('auth'); ?>">
                                        <div class="form-group">
                                            <input type="text" class="form-control rounded-pill form-control-user" id="email" name="email" placeholder="Masukkan alamat email..." value=<?= set_value('email'); ?>>
                                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>

                                        </div>
                                        <div class=" form-group">
                                            <input type="password" class="form-control rounded-pill form-control-user" id="password" name="password" placeholder="Kata Sandi">
                                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>

                                        <button type="submit" class="btn btn-primary rounded-pill" style="width:90px">
                                            Masuk
                                        </button>

                                    </form>
                                    <hr>
                                    <!-- <div class="text-center">
                                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                                </div> -->
                                    <div class="text-center">
                                        <span>Belum punya akun Locoshop? </span><a class="small" href="<?= base_url('auth/registration'); ?>"><strong>Daftar</strong></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>