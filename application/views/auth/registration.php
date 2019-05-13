    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-end">
            <div class="col " style="margin-top:200px">
                <h1 class="ltext-103 cl0 mb-2">Loco Shop</h1>
                <p class=" cl0 mb-4">E-comerce yang menghadirkan brand-brand lokal Indonesia. Mari bergabung bersama kami!</p>
                <h4><a href="<?= base_url(); ?>" class="btn btn-primary py-3 px-5 rounded-pill">
                        Lihat Produk</a> </h4>
            </div>
            <div class="col-lg-6" style="margin-right:70px;margin-top:80px">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Daftar Sekarang</h1>
                                    </div>
                                    <form class="user" method="post" action="<?= base_url('auth/registration'); ?>">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Nama Lengkap" value="<?= set_value('name'); ?>">
                                            <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>

                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Alamat Email" value="<?= set_value('email'); ?>">
                                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Kata Sandi">
                                                <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulangi Kata Sandi">
                                                <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Daftar
                                        </button>

                                        <hr>

                                        <div class="text-center">
                                            <span>Sudah punya akun Locoshop? </span><a class="small" href="<?= base_url('auth'); ?>"><strong>Masuk</strong></a>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>