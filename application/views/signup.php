<div class="row">
    <div class="col-lg-12">
        <div class="p-5">
            <div class="text-center mb-2">
                <img class="img py-3" style="width: 150px; height: auto; opacity: 0.8" src="<?= base_url('assets') ?>/img/logo.png" alt="Logo Sispro">
                <h1 class="text-gray-900 mb-2 font-weight-bold py-3"><?php echo @$title_page;?></h1>
            </div>
            <form class="admin py-4" action="<?php echo base_url().'admin/signup/process' ?>" method="POST">
                <div class="form-group">
                    <div class="mb-3 row">
                        <!-- <label class="col-2 col-form-label">Name</label> -->
                        <div class="col-12">
                            <input type="text" class="form-control form-control-user" name="name" placeholder="Name">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="mb-3 row">
                        <!-- <label class="col-2 col-form-label">Username</label> -->
                        <div class="col-12">
                            <input type="text" class="form-control form-control-user" name="username" placeholder="Username">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="mb-3 row">
                        <!-- <label for="staticEmail" class="col-2 col-form-label">Email</label> -->
                        <div class="col-12">
                            <input type="text" class="form-control form-control-user" id="staticEmail" name="email" placeholder="Email">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="mb-3 row">
                        <!-- <label class="col-2 col-form-label">Password</label> -->
                        <div class="col-12">
                            <input type="text" class="form-control form-control-user" name="password" required="required" placeholder="Password">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="mb-3 row">
                        <div class="col-12">
                            <input type="hidden" class="form-control form-control-user" name="akses" required="required" value="admin" readonly>
                        </div>
                    </div>
                </div>
                <br>
                <div class="text-center">
                    <button class="btn btn-search btn-user col-7" type="submit" name="submit">Sign Up</button>
                </div>
            </form>
            <br>
            <p class="small" style="text-align: center">Already have an account?<br><a style="text-decoration: none" href="<?= base_url('login')?>">Login</a></p>
        </div>
    </div>
</div>