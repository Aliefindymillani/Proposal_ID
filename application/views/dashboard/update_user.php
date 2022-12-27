<div class="row">
    <div class="col-lg-12">
        <div class="p-5">
            <div class="text-center mb-2">
                <h1 class="text-gray-900 mb-2 font-weight-bold py-3"><?php echo @$title_page;?></h1>
            </div>
            <form class="user py-4" action="<?php echo base_url().'admin/update' ?>" method="POST">
                <?php foreach($data_user as $update) : ?>
                <div class="form-group">
                    <div class="mb-3 row">
                        <!-- <label class="col-2 col-form-label">Name</label> -->
                        <div class="col-12">
                            <input type="text" class="form-control form-control-user" name="name" placeholder="Name" value="<?php echo $update->name ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="mb-3 row">
                        <!-- <label class="col-2 col-form-label">Username</label> -->
                        <div class="col-12">
                            <input type="text" class="form-control form-control-user" name="username" placeholder="Username" value="<?php echo $update->username ?>" readonly>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="mb-3 row">
                        <!-- <label for="staticEmail" class="col-2 col-form-label">Email</label> -->
                        <div class="col-12">
                            <input type="text" class="form-control form-control-user" id="staticEmail" name="email" placeholder="Email" value="<?php echo $update->email ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="mb-3 row">
                        <!-- <label class="col-2 col-form-label">Password</label> -->
                        <div class="col-12">
                            <input type="hidden" class="form-control form-control-user" name="password" required="required" placeholder="Password" value="<?php echo $update->password ?>" readonly>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="mb-3 row">
                        <div class="col-12">
                            <input type="hidden" class="form-control form-control-user" name="akses" required="required" value="<?php echo $update->akses ?>" readonly>
                        </div>
                    </div>
                </div>
                <br>
                <?php endforeach; ?> 
                <div class="text-center">
                    <button class="btn btn-search btn-user col-7" type="submit" name="submit">Update</button>
                </div>
                <br>
                <div class="text-center">
                    <a href="<?php echo base_url().'admin/list-user' ?>" class="btn btn-dark btn-user col-7">Kembali</a>
                </div>
            </form>
            <br>
        </div>
    </div>
</div>