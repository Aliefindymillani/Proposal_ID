<div class="row">
    <div class="col-lg-12">
        <div class="p-5">
            <div class="text-center mb-2">
                <h1 class="h4 text-gray-900 mb-2">Sign Up</h1>
                <img class="img" style="width: 500px; height: 150px" src="<?= base_url('assets')?>/img/undraw_posting_photo.svg" alt="">
            </div>
            <form class="user" action="<?php echo base_url().'sign-up/process' ?>">
                <div class="form-group">
                    <div class="mb-3 row">
                        <label class="col-2 col-form-label">Name</label>
                        <div class="col-10">
                            <input type="text" class="form-control form-control-user" placeholder="Name">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="mb-3 row">
                        <label class="col-2 col-form-label">Username</label>
                        <div class="col-10">
                            <input type="text" class="form-control form-control-user" placeholder="Username">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-2 col-form-label">Email</label>
                        <div class="col-10">
                            <input type="text" class="form-control form-control-user" id="staticEmail" placeholder="Email">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="mb-3 row">
                        <label class="col-2 col-form-label">Password</label>
                        <div class="col-10">
                            <input type="text" class="form-control form-control-user" name="password" required="required" placeholder="Password">
                        </div>
                    </div>
                </div>
                <br>
                <div class="text-center">
                    <a href="<?= base_url('home')?>" class="btn btn-info btn-user col-7">
                        Sign Up
                    </a>
                </div>
            </form>
            <hr>
            <div class="text-center">
                <a class="small" href="<?= base_url('login')?>">Login</a>
            </div>
        </div>
    </div>
</div>