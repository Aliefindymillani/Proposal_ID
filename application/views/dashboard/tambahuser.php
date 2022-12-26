<div class="col-xl-12 col-md-6">
    <div class="card">
        <div class="card-header bg-info">

        </div>
        <div class="card-body">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="p-2">
                        <form class="user" action="<?php echo base_url().'tambahuser/process'?>" method="POST">
                            <div class="form-group">
                                <div class="mb-3 row">
                                    <label for="staticEmail" class="col-2 col-form-label">Nama</label>
                                    <div class="col-10">
                                        <input type="text" class="form-control" name="name" placeholder="Nama">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="mb-3 row">
                                    <label for="staticEmail" class="col-2 col-form-label">Username</label>
                                    <div class="col-10">
                                        <input type="text" class="form-control" name="username" placeholder="Username">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="mb-3 row">
                                    <label for="staticEmail" class="col-2 col-form-label">Email</label>
                                    <div class="col-10">
                                        <input type="email" class="form-control" id="staticEmail" name="email" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="mb-3 row">
                                    <label for="staticEmail" class="col-2 col-form-label">Password</label>
                                    <div class="col-10">
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="mb-3 row">
                                    <label for="staticEmail" class="col-2 col-form-label">Role</label>
                                    <div class="col-10">
                                        <select name="akses" class="form-control">
                                            <option name="akses" value="admin">Admin</option>
                                            <option name="akses" value="user">User</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="text-center">
                                <button class="btn btn-search btn-user" type="submit" name="submit">Tambah User</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>