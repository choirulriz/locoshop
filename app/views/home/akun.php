<div class="container">
        <h1 class="text-center mt-4 mb-3">Halaman Akun</h1>
    <form action="<?=BASEURL;?>/akun/ubah" method="post">
    <div class="row">
        <div class="col">
        </div>
        <div class="col-8">
        <div class="input-group mb-3">
                <div class="input-group-prepend">
                
                    <span class="input-group-text" id="nama">Nama Lengkap</span>
                </div>
                <input type="hidden" name="id" value="<?= $data['user']['id'];?>">
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="namaPembeli" value="<?= $data['user']['namaPembeli'];?>">
                </div>
        </div>
        <div class="col">
        </div>
    </div>

    <div class="row">
        <div class="col">
        </div>
        <div class="col-8">
        <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="email">Email</span>
                </div>
                <input type="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="email" value="<?= $data['user']['email'];?>">
                </div>
        </div>
        <div class="col">
        </div>
    </div>

    <div class="row">
        <div class="col">
        </div>
        <div class="col-8">
        <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="username">Username</span>
                </div>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="username" value="<?= $data['user']['username'];?>">
                </div>
        </div>
        <div class="col">
        </div>
    </div>

    <div class="row">
        <div class="col">
        </div>
        <div class="col-8">
        <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="password">Password</span>
                </div>
                <input type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="password" value="<?= $data['user']['password'];?>">
                </div>
        </div>
        <div class="col">
        </div>
    </div>
    <div class="row">
        <div class="col">
        </div>
        <div class="col-8">
        <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="kota">Kota</span>
                </div>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="kota" value="<?= $data['user']['kota'];?>">
                </div>
        </div>
        <div class="col">
        </div>
    </div>
    <div class="row">
        <div class="col">
        </div>
        <div class="col-8">
        <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="alamat">Alamat</span>
                </div>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="alamat" value="<?= $data['user']['alamat'];?>">
                </div>
        </div>
        <div class="col">
        </div>
    </div>
    <div class="row">
        <div class="col">
        </div>
        <div class="col-8">
        <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="noTelepon">noTelepon</span>
                </div>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="noTelepon" value="<?= $data['user']['noTelepon'];?>">
                </div>
        </div>
        <div class="col">
        </div>
    </div>




    <div class="row">
        <div class="col"></div>
        <div class="col-6"></div>
        <div class="col">
            <button type="submit" name="submit" class="btn btn-primary">Ubah Data</button>
        </div>
    </div>
    </form>


</div>
