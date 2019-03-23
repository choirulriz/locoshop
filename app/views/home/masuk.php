<div class="container">
        <h1 class="text-center mt-4 mb-3">Halaman login</h1>
    <form action="<?=BASEURL;?>/masuk/login" method="post">

    <div class="row">
        <div class="col">
        </div>
        <div class="col-8">
        <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="username">Username</span>
                </div>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="username">
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
                <input type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="password">
                </div>
        </div>
        <div class="col">
        </div>
    </div>
   
    <div class="row">
        <div class="col"></div>
        <div class="col-6"></div>
        <div class="col">
            <button type="submit" name="login" class="btn btn-primary">login</button>
        </div>
    </div>
    </form>



</div>