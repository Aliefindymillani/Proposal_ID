<div class="row">
    <div class="col-lg-12">
        <div class="p-5">
            <div class="text-center mb-2">
                <h1 class="h4 text-gray-900 mb-2"><?php echo @$title_page;?></h1>
                <img class="img" style="width: 500px; height: 150px" src="<?= base_url('assets')?>/img/undraw_posting_photo.svg" alt="">
            </div>
            <form class="user" action="<?php echo base_url().'login/process' ?>" method="POST">
                <div class="form-group">
                    <div class="mb-3 row">
                        <label class="col-2 col-form-label">Username</label>
                        <div class="col-10">
                            <input type="text" class="form-control form-control-user" name="username" placeholder="Username">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="mb-3 row">
                        <label class="col-2 col-form-label">Password</label>
                        <div class="col-10">
                            <input type="text" class="form-control form-control-user" name="password" placeholder="Password">
                        </div>
                    </div>
                </div>
                <br>
                <div class="text-center">
                    <button class="btn btn-info btn-user col-7" type="submit" name="submit">Login</button>
                </div>
            </form>
            <br>
            <p class="small" style="text-align: center">Don't have an account?<br><a style="text-decoration: none" href="<?= base_url('sign-up')?>">Sign Up</a></p>
        </div>
    </div>
</div>